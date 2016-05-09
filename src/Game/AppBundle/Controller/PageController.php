<?php
// src/Game/AppBundle/Controller/PageController.php
namespace Game\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Game\AppBundle\Form\PlayerRegister;
use Game\AppBundle\Entity\Player;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class PageController extends Controller {

	/**
     * @Route("/contato", name="contact")
     */
public function contactAction(Request $request)
{
    $defaultData = array('message' => 'Escreva sua mensagem aqui');
    $form = $this->createFormBuilder($defaultData)
        ->add('name', TextType::class, array(
        	  'label' => 'Nome',
        	   'attr' => array('class' => 'form-control')))
        ->add('email', EmailType::class, array(
        	  'label' => 'E-mail',
        	   'attr' => array('class' => 'form-control')))
        ->add('message', TextareaType::class, array(
        	  'label' => 'Mensagem',
        	  'attr' => array('class' => 'form-control')))
        ->add('send', SubmitType::class, array(
        	  'label' => 'Enviar',
        	  'attr' => array('class' => 'btn btn-primary')))
        ->getForm();

    $form->handleRequest($request);

    if ($form->isValid()) {
        $data = $form->getData();
    }

    return $this->render('default/contact.html.twig', array('form' => $form->createView()));
}

    /**
     * @Route("/como-jogar", name="how-to-play")
     */
    public function howToPlayAction() {
        return $this->render('default/howtoplay.html.twig');
    }
}
?>