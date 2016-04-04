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
     * @Route("/comecarjogo", name="start")
     */
    public function startAction() {
    	return $this->render('game/start.html.twig', array());
    }

    /**
   * @Route( "/criaform", name="create_form" )
   * @Template()
   */
    public function registerAction(Request $request) {
        $playerform = new PlayerRegister();
        $form = $this->createForm(PlayerRegister::class, $playerform);
        
        if ( $request->isMethod( 'POST' ) ) {
            $form->handleRequest($request);
            if ( $form->isValid( ) ) {
                $data = $form->getData();
                $response['success'] = true;
            } else{
                $response['success'] = false;
            }         
            return new JsonResponse( $response );
        }

        return $this->render(
            'game/playersForm.html.twig',
            array('form' => $form->createView())
        );
    }
}
?>