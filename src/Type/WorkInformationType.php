<?php declare(strict_types=1);

namespace Personalstammblatt\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class WorkInformationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('startDate', DateType::class, [
            'label' => 'Eintrittsdatum'
        ])
            ->add('contractType', TextType::class, [
                'label' => 'Vertragsart'
            ])
            ->add('employmentType', TextType::class, [
                'label' => 'Beschäftigungsart'
            ])
            ->add('monthlyIncome', MoneyType::class, [
                'label' => 'Monatliches Einkommen (EUR)'
            ])
            ->add('salary', MoneyType::class, [
                'label' => 'Gehalt in der Stunde (EUR)'
            ])
            ->add('monthlyWorkTime', NumberType::class, [
                'label' => 'Monatliche Arbeitszeit (Stunden)'
            ])
            ->add('weeklyWorkTime', NumberType::class, [
                'label' => 'Wöchentliche Arbeitszeit (Stunden)'
            ])
            ->add('vacationDays', NumberType::class, [
                'label' => 'Urlaubstage'
            ])
            ->add('hasCapitalAccumulationBenefits', TextType::class, [
                'label' => 'Kapitalanlagevorteile'
            ])
            ->add('hasEmployeePension', ChoiceType::class, [
                'label' => 'Betriebsrente',
                'choices' => [
                    'ja' => true,
                    'nein' => false
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => WorkInformationType::class
        ]);
    }
}