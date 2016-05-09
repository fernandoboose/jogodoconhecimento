<?php
// src/Game/AppBundle/Controller/QuestionController.php
namespace Game\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Game\AppBundle\Form\PlayerRegister;
use Game\AppBundle\Entity\Player;
use Game\AppBundle\Entity\Question;
use Game\AppBundle\Entity\QuestionOption;
use Game\AppBundle\Entity\GameQuestion;
use Game\AppBundle\Entity\Game;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Form;


class QuestionController extends Controller {

	/**
     * @Route("/carregapergunta", name="showQuestion")
     * Renders a random question (who hasn't been used yet) on the screen
     */
    public function showQuestion(Request $request) {
    	$session = $request->getSession();
    	$gameId = $session->get('gameId');
    	$em = $this->getDoctrine()->getManager();

    	if(!$gameId) {
    		return $this->redirectToRoute('index');
    	}

    	$game = $em->getRepository('Game\AppBundle\Entity\Game')->find($gameId);

        $randomQuestion = $this->getRandomDoctrineItem($em, 'Game\AppBundle\Entity\Question');
        $options = $em->getRepository('Game\AppBundle\Entity\QuestionOption')->findByQuestion($randomQuestion);

        return $this->render('questions/show.html.twig', array(
        	'question' => $randomQuestion,
        	'options' => $options));
    }

	/**
     * @Route("/validaresposta", name="validadeAnswer")
     * Validates the answer choosed by the user, and returns an boolean whether is right or wrong.
     */
    public function isCorrect(Request $request) {
    	$session = $request->getSession();
    	$gameId = $session->get('gameId');
    	$em = $this->getDoctrine()->getManager();

    	$data = array('answer');

    	$form = $this->createFormBuilder($data)
    		->add('answer', HiddenType::class)->getForm();

    	if(!$gameId) {
    		return $this->redirectToRoute('index');
    	}

        if ( $request->isMethod( 'POST' ) ) {
            $answerId = $request->request->get('answerId');
            $option = $em->getRepository('Game\AppBundle\Entity\QuestionOption')->findOneById($answerId);

            $activePlayer = $session->get('activePlayer');
            $gamePlayer = $em->getRepository('Game\AppBundle\Entity\GamePlayer')->findOneBy(array('game' => $gameId,
                'player' => $activePlayer));

            if($option->isCorrectAnswer() == 1) {
                $gamePlayer->increaseOnePoint();
                $em->persist($gamePlayer);
                $em->flush();

            	$response['success'] = true;

            } else {
                $gamePlayers = $em->getRepository('Game\AppBundle\Entity\GamePlayer')->findBy(array('game' => $gameId,));
                $totalPlayers = count($gamePlayers);

                foreach($gamePlayers as $key=>$gamePlayer) {
                    if($gamePlayer->getTurnFlg() == 1) {
                        $activePlayerIndex = $key + 1;
                        $gamePlayer->setTurnFlg(0);

                        if($activePlayerIndex == $totalPlayers) {
                            $gamePlayers[0]->setTurnFlg(1);
                        } else {
                            $gamePlayers[$activePlayerIndex]->setTurnFlg(1);
                        }
                        $em->persist($gamePlayer);
                        $em->flush();
                        break;
                    }
                }
            	$response['success'] = false;
            }

            return new JsonResponse( $response );
        }
    }

    function getRandomDoctrineItem(EntityManager $em, $class){
	    static $counters = [];
	    $questions = $em->getRepository($class);

	    if (!isset($counters[$class])) {
	        $counters[$class] = $questions->createQueryBuilder('u')
             ->select('COUNT(u)')
             ->getQuery()
             ->getSingleScalarResult();
	    }

	    return $em
	        ->createQuery('SELECT c FROM ' . $class .' c ORDER BY c.id ASC')
	        ->setMaxResults(1)
	        ->setFirstResult(mt_rand(0, $counters[$class] - 1))
	        ->getSingleResult();
	}
}
?>