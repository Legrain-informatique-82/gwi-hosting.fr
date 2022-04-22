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


class AddZipCodeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class, array('label'  => 'Code postal : ', 'max_length'=>30)); // On ajoute le champ titre dans un input text
    $builder->add('save', SubmitType::class,array('label'=>'Sauvegarder le code postal'));
    }

    public function getName()
    {
        return 'addZipCode';
    }

    public function configureOptions(OptionsResolver $resolver)
    {

        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Api\ZipCodeApi',
        ));
    }
}