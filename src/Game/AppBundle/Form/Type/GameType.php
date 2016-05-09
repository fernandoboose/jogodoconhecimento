<?php
// src/Game/AppBundle/Form/Type/GameType.php
namespace Game\AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

use Game\AppBundle\Form\Type\PlayerType;
use Game\AppBundle\Entity\Game;

class GameType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('players', CollectionType::class, array(
            'entry_type' => PlayerType::class,
            'allow_add' => true,
            'by_reference' => false,
            'label' => false
        ));
    }

    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Game\AppBundle\Entity\Game',
        ));
    }
}
?>