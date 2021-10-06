<?php

namespace App\Controller;

use App\Entity\MainEntity;
use App\Form\MainEntityType;
use App\Repository\MainEntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/main/entity')]
class MainEntityController extends AbstractController
{
    #[Route('/', name: 'main_entity_index', methods: ['GET'])]
    public function index(MainEntityRepository $mainEntityRepository): Response
    {
        return $this->render('main_entity/index.html.twig', [
            'main_entities' => $mainEntityRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'main_entity_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $mainEntity = new MainEntity();
        $form = $this->createForm(MainEntityType::class, $mainEntity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($mainEntity);
            $entityManager->flush();

            return $this->redirectToRoute('main_entity_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('main_entity/new.html.twig', [
            'main_entity' => $mainEntity,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'main_entity_show', methods: ['GET'])]
    public function show(MainEntity $mainEntity): Response
    {
        return $this->render('main_entity/show.html.twig', [
            'main_entity' => $mainEntity,
        ]);
    }

    #[Route('/{id}/edit', name: 'main_entity_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, MainEntity $mainEntity): Response
    {
        $form = $this->createForm(MainEntityType::class, $mainEntity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('main_entity_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('main_entity/edit.html.twig', [
            'main_entity' => $mainEntity,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'main_entity_delete', methods: ['POST'])]
    public function delete(Request $request, MainEntity $mainEntity): Response
    {
        if ($this->isCsrfTokenValid('delete'.$mainEntity->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($mainEntity);
            $entityManager->flush();
        }

        return $this->redirectToRoute('main_entity_index', [], Response::HTTP_SEE_OTHER);
    }
}
