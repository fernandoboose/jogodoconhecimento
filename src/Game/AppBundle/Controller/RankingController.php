<?php
// src/Game/AppBundle/Controller/RankingController.php
namespace Game\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Game\AppBundle\Form\PlayerRegister;
use Game\AppBundle\Entity\Player;
use Symfony\Component\HttpFoundation\Request;

class RankingController extends Controller {

	/**
     * @Route("/ranking", name="listRanking")
     */
    public function listRankingAction($gameId=null, Request $request) {
    	$session = $request->getSession();
        $session->clear();
    	$em = $this->getDoctrine()->getManager();
		$gamePlayers = $em->getRepository('Game\AppBundle\Entity\GamePlayer')->findBy(array(), array('points' => 'DESC'), 30);

        return $this->render('ranking/list.html.twig', array(
        	'gamePlayers' => $gamePlayers,
		));
    }
        /**
         * @Route("/ranking/{gameId}", name="listRankingByGame")
        */
        public function listGameRankingAction($gameId) {
        	$em = $this->getDoctrine()->getManager();
        	$gamePlayers = $em->getRepository('Game\AppBundle\Entity\GamePlayer')->findBy(array('game' => $gameId), array('points' => 'DESC'));

        	return $this->render('ranking/listGame.html.twig', array(
        		'gamePlayers' => $gamePlayers,
        		'gameId' => $gameId
    		));
        }	
}
?>