<?php declare(strict_types=1);

namespace Personalstammblatt\Controller;

use Personalstammblatt\Entity\Person;
use Personalstammblatt\Type\PersonType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class PersonController extends AbstractController
{
    public function indexAction(): Response
    {
        $person = new Person();
        $form = $this->createForm(PersonType::class, $person);

        return $this->renderForm('index.html.twig', [
            'form' => $form
        ]);
    }
}