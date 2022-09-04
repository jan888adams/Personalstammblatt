<?php declare(strict_types=1);

namespace Personalstammblatt\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class TaxInformationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('taxNumber', TextType::class, [
                'label' => 'Steuernummer'
            ])
            ->add('taxOffice', TextType::class, [
                'label' => 'Finanzamt'
            ])
            ->add('taxClass', TextType::class, [
                'label' => 'Steuertarif'
            ])
            ->add('childAllowance', MoneyType::class, [
                'label' => 'Kinderfreibetrag'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TaxInformationType::class
        ]);
    }
}