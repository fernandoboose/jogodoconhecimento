<?php
// src/Game/AppBundle/form/PlayerRegister.php
namespace Game\AppBundle\Form;
 
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
 
class PlayerRegister extends AbstractType {

	public function buildForm( FormBuilderInterface $builder,
	                                        array $options ) {
		$builder->add( 'nickname', TextType::class );
	}

	public function configureOptions(OptionsResolver $resolver) {
		$resolver->setDefaults(array(
			'data_class' => 'Game\AppBundle\Entity\Player',
			'count' => 1
		));
	}
}
?>