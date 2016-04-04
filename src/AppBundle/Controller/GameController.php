<?php
// src/AppBundle/Controller/GameController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class GameController extends Controller {
    /**
     * @Route("/comecarjogo", name="start")
     */
    public function startAction() {
    	return $this->render('game/start.html.twig', array());
    }

    public function registerPlayers($playerNames) {

    }
}
?>