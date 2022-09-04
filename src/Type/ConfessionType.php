<?php declare(strict_types=1);

namespace Personalstammblatt\Type;

use Personalstammblatt\Entity\Confession;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

final class ConfessionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('confession', TextType::class, [
                'label' => 'Konfession'
            ])
            ->add('spouseKonfession', TextType::class, [
                'label' => 'Konfession Ehepartner'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Confession::class
        ]);
    }
}