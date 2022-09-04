<?php declare(strict_types=1);

namespace Personalstammblatt\Type;

use Personalstammblatt\Entity\Person;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class PersonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Vorname'
            ])
            ->add('surname', TextType::class, [
                'label' => 'Nachname'
            ])
            ->add('telephone', TextType::class, [
                'label' => 'Telefonnummer'
            ])
            ->add('birthday', TextType::class, [
                'label' => 'Geburtstag'
            ])
            ->add('Birthplace', TextType::class, [
                'label' => 'Geburtsort'
            ])
            ->add('birthName', TextType::class, [
                'label' => 'Geburtsname'
            ])
            ->add('birthplace', TextType::class, [
                'label' => 'Geburtsort'
            ])
            ->add('gender', ChoiceType::class, [
                'label' => 'Geschlecht',
                'choices' => [
                    'männlich' => 'männlich',
                    'weiblich' => 'weiblich'
                ],
            ])
            ->add('hasWorkPermission', ChoiceType::class, [
                'label' => 'Arbeitsgenehmigung',
                'choices' => [
                    'ja' => true,
                    'nein' => false
                ],
            ])
            ->add('nationality', TextType::class, [
                'label' => 'Nationalität'
            ])
            ->add('civilStatus', ChoiceType::class, [
                'label' => 'Familienstand',
                'choices' => [
                    'ledig' => 'ledig',
                    'verheiratet' => 'verheiratet',
                    'geschieden' => 'geschieden',
                    'verwitwet' => 'verwitwet',
                    'getrennt lebend' => 'getrennt lebend'
                ],
            ])
            ->add('hasChildren', ChoiceType::class, [
                'label' => 'Kinder',
                'choices' => [
                    'ja' => true,
                    'nein' => false
                ],
            ])

            ->add('hasDisability', ChoiceType::class, [
                'label' => 'Für mich wurde ein Behinderungsausweis ausgestellt (Kopie des Ausweises notwendig!',
                'choices' => [
                    'ja' => true,
                    'nein' => false
                ],
            ])
            ->add('Address', AddressType::class, [
                'label' => 'Adresse'
            ])
            ->add('BankAccount', BankAccountType::class, [
                'label' => 'Bankverbindung'
            ])
            ->add('TaxInformation', TaxInformationType::class, [
                'label' => 'Steuerliche Angaben'
            ])
            ->add('HealthInsurance', HealthInsuranceType::class, [
                'label' => 'Krankenkasse'
            ])
            ->add('Confession', ConfessionType::class, [
                'label' => 'Konfession'
            ])
            ->add('WorkInformation', WorkInformationType::class, [
                'label' => 'Beschäftigung'
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Speichern'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Person::class
        ]);
    }
}