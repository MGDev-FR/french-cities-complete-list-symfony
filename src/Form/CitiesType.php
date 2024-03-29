<?php

namespace App\Form;

use App\Entity\Cities;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CitiesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ville_departement')
            ->add('ville_slug')
            ->add('ville_nom')
            ->add('ville_nom_simple')
            ->add('ville_nom_reel')
            ->add('ville_nom_soundex')
            ->add('ville_nom_metaphone')
            ->add('ville_code_postal')
            ->add('ville_commune')
            ->add('ville_canton')
            ->add('ville_amdi')
            ->add('ville_population_2010')
            ->add('ville_population_1999')
            ->add('ville_population_2012')
            ->add('ville_densite_2010')
            ->add('ville_surface')
            ->add('ville_longitude_deg')
            ->add('ville_latitude_deg')
            ->add('ville_longitude_grd')
            ->add('ville_latitude_grd')
            ->add('ville_longitude_dms')
            ->add('ville_latitude_dms')
            ->add('ville_zmin')
            ->add('ville_zmax')
            ->add('ville_code_commune')
            ->add('ville_arrondissement')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Cities::class,
        ]);
    }
}
