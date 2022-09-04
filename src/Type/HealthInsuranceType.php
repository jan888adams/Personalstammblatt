<?php declare(strict_types=1);

namespace Personalstammblatt\Type;

use Personalstammblatt\Entity\Address;
use Personalstammblatt\Entity\HealthInsurance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class HealthInsuranceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('insurance', TextType::class, [
                'label' => 'Krankenkasse'
            ])
            ->add('insuranceNumber', TextType::class, [
                'label' => 'Krankenkassennummer'
            ])
            ->add('insuranceType', TextType::class, [
                'label' => 'Krankenkasse'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => HealthInsurance::class
        ]);
    }

}