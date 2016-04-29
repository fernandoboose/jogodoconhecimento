<?php
// src/Game/AppBundle/Controller/GameController.php
namespace Game\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Game\AppBundle\Form\PlayerRegister;
use Game\AppBundle\Entity\Player;
use Symfony\Component\HttpFoundation\Request;

class GameController extends Controller {

    /**
     * @Route("/", name="index")
     */
    public function indexAction() {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/comecarjogo", name="start")
     */
    public function startAction() {
    	return $this->render('game/start.html.twig', array());
    }

    /**
   * @Route("/criaform/", name="create_form")
   * @Route( "/criaform/{count}", defaults={"count" = 1},  name="create_form_count" )
   * @Template()
   */
    public function registerAction(Request $request, $count=1) {
        // $playerform = new Player();
        // $form = $this->createForm(PlayerRegister::class, $playerform, array('count' => $count));
        
        // if ( $request->isMethod( 'POST' ) ) {
        //     $form->handleRequest($request);
        //     if ( $form->isValid( ) ) {
        //         $data = $form->getData();
        //         $em = $this->getDoctrine()->getManager();
        //         $em->persist($playerform);
        //         $em->flush();
        //         $response['success'] = true;
        //     } else{
        //         $response['success'] = false;
        //     }         
        //     return new JsonResponse( $response );
        // }

        return $this->render(
            'game/playersForm.html.twig',
            array(
                'form' => $form->createView(),
                'count' => $count,
            )
        );
    }
}
?>