<?php

namespace App\Controller;

use App\Entity\Medications;
use App\Form\MedicationsType;
use App\Repository\MedicationsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/medications')]
class MedicationsController extends AbstractController
{
    #[Route('/', name: 'app_medications_index', methods: ['GET'])]
    public function index(MedicationsRepository $medicationsRepository): Response
    {
        return $this->render('medications/index.html.twig', [
            'medications' => $medicationsRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_medications_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $medication = new Medications();
        $form = $this->createForm(MedicationsType::class, $medication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($medication);
            $entityManager->flush();

            return $this->redirectToRoute('app_medications_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('medications/new.html.twig', [
            'medication' => $medication,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_medications_show', methods: ['GET'])]
    public function show(Medications $medication): Response
    {
        return $this->render('medications/show.html.twig', [
            'medication' => $medication,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_medications_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Medications $medication, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(MedicationsType::class, $medication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_medications_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('medications/edit.html.twig', [
            'medication' => $medication,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_medications_delete', methods: ['POST'])]
    public function delete(Request $request, Medications $medication, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$medication->getId(), $request->request->get('_token'))) {
            $entityManager->remove($medication);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_medications_index', [], Response::HTTP_SEE_OTHER);
    }
}
