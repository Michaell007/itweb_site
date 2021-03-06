<?php

namespace App\Controller;

use App\Repository\CompagnieRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\NotNull;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index(Request $request, \Swift_Mailer $mailer, CompagnieRepository $compagnieRepo): Response
    {
        $infos = $compagnieRepo->findOneBy(['id' => 1]);

        $form = $this->createFormBuilder()
            ->add('name', TextType::class, [
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                    new NotNull(),
                ],
            ])
            ->add('email', EmailType::class, [
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                    new NotNull(),
                ],
            ])
            ->add('objet', TextType::class, [
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                    new NotNull(),
                ],
            ])
            ->add('message', TextareaType::class, [
                'required' => true,
                'constraints' => [
                    new NotBlank(),
                    new NotNull(),
                ],
            ])
            ->add('send', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();

            $message = (new \Swift_Message('Message envoy?? depuis la page contact ITwebson'))
                ->setFrom('itwebsonsender@gmail.com')
                ->setTo('contact@itwebson.net')
                ->setBody(
                    $this->renderView(
                        'emails/contact.html.twig',
                        ['data' => $data]
                    ),
                    'text/html'
                )
            ;
            $mailer->send($message);

            $this->addFlash('success','Merci de nous contacter, votre message a bien ??t?? envoye.');
            return $this->redirectToRoute('contact', [
                'form' => $form->createView(),
            ]);
        }

        return $this->render('front-end/contact/contact.html.twig', [
            'infos' => $infos,
            'form' => $form->createView(),
        ]);
    }
}
