<?php declare(strict_types=1);

namespace Personalstammblatt\Type;

use Personalstammblatt\Entity\Address;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class AddressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('street', TextType::class, [
                'label' => 'Straße'
            ])
            ->add('houseNumber', TextType::class, [
                'label' => 'Hausnummer'
            ])
            ->add('plz', TextType::class, [
                'label' => 'PLZ'
            ])
            ->add('city', TextType::class, [
                'label' => 'Stadt'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Address::class
        ]);
    }
}