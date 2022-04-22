<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 08/06/15
 * Time: 09:12
 */
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class AddCityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, array('label'  => 'Nom de la ville : ')); // On ajoute le champ titre dans un input text
    $builder->add('save', SubmitType::class,array('label'=>'Sauvegarder la ville'));
    }

    public function getName()
    {
        return 'addCity';
    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Api\CityApi',
        ));
    }
}