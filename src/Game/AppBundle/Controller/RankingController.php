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
    public function listRankingAction() {
        return $this->render('ranking/list.html.twig');
    }
}
?>