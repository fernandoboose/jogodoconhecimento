<?php
// src/Game/AppBundle/Form/Type/PlayerType.php
namespace Game\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class PlayerType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('nickname', TextType::class, array(
            'label' => 'Nome',
            'attr' => array('class' => 'form-control')
            ));
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Game\AppBundle\Entity\Player',
        ));
    }
}
?>