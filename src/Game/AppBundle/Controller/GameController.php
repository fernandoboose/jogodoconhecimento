<?php
// src/Game/AppBundle/Controller/GameController.php
namespace Game\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Game\AppBundle\Form\PlayerRegister;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Game\AppBundle\Entity\Game;
use Game\AppBundle\Entity\Player;
use Game\AppBundle\Entity\GamePlayer;
use Game\AppBundle\Form\Type\GameType;
use Game\AppBundle\Form\Type\PlayerType;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Session\Session;

class GameController extends Controller {

    /**
     * @Route("/", name="index")
     */
    public function indexAction(Request $request) {
        $session = $request->getSession();
        $session->clear();
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/comecarjogo", name="startgame")
     */
    public function startAction(Request $request) {
        $game = new Game();

        $form = $this->createForm(GameType::class, $game)
        ->add('save', SubmitType::class, array('label' => 'Continuar', 
                                                'attr' => array(
                                                    'class' => 'btn btn-primary btn-lg',
                                                    'disabled' => 'disabled',
                                                    )));

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $session = $request->getSession();
            $em = $this->getDoctrine()->getManager();

            $i = 0;
            foreach($form->getData()->getPlayers() as $player) {
                $gamePlayer = new GamePlayer();
                $gamePlayer->setGame($game);
                $gamePlayer->setPlayer($player);
                $gamePlayer->setPoints(0);
                if($i == 0) $gamePlayer->setTurnFlg(1);
                else $gamePlayer->setTurnFlg(0);
                $i++;
                $em->persist($gamePlayer);
            }
            $em->persist($form->getData());
            $em->flush();
            $session->set('gameId', $game->getId());
            return $this->redirectToRoute('control');
        }
    	return $this->render('game/start.html.twig', array('form' => $form->createView()));
    }

    /**
     * @Route("/controle", name="control")
     */
    public function controlAction(Request $request) {
        $session = $request->getSession();
        $gameId = $session->get('gameId');
        $em = $this->getDoctrine()->getManager();

        if(!$gameId) return $this->redirectToRoute('index');

        $game = $em->getRepository('Game\AppBundle\Entity\Game')->find($gameId);
        $gamePlayers = $em->getRepository('Game\AppBundle\Entity\GamePlayer')->findByGame($gameId, array('points' => 'DESC'));

        $activePlayer = '';
        foreach($gamePlayers as $gamePlayer) {
            if($gamePlayer->getTurnFlg()) {
                $activePlayer = $gamePlayer->getPlayer();
            }
        }

        $session->set('activePlayer', $activePlayer);
        
        return $this->render('game/main.html.twig', array(
            'game' => $game,
            'activePlayer' => $activePlayer,
            'gamePlayers' => $gamePlayers
            ));
    }

    /**
     * @Route("/mostrarankingpartida", name="showgameRanking")
     */
    public function showGameRankingAction(Request $request) {
        $session = $request->getSession();
        $gameId = $session->get('gameId');
        $em = $this->getDoctrine()->getManager();

        if(!$gameId) return $this->redirectToRoute('index');

        $game = $em->getRepository('Game\AppBundle\Entity\Game')->find($gameId);
        $gamePlayers = $em->getRepository('Game\AppBundle\Entity\GamePlayer')->findByGame($gameId, array('points' => 'DESC'));
    
        return $this->render('ranking/showGame.html.twig', array(
            'gamePlayers' => $gamePlayers
            ));

    }
}
?>