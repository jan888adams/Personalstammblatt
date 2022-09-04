<?php declare(strict_types=1);

namespace Personalstammblatt\Type;

use Personalstammblatt\Entity\BankAccount;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class BankAccountType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('bankName', TextType::class, [
                'label' => 'Bank'
            ])
            ->add('iban', TextType::class, [
                'label' => 'IBAN'
            ])
            ->add('bic', TextType::class, [
                'label' => 'BIC'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => BankAccount::class
        ]);
    }
}