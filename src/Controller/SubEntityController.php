<?php

namespace App\Controller;

use App\Entity\SubEntity;
use App\Form\SubEntityType;
use App\Repository\SubEntityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/sub/entity')]
class SubEntityController extends AbstractController
{
    #[Route('/', name: 'sub_entity_index', methods: ['GET'])]
    public function index(SubEntityRepository $subEntityRepository): Response
    {
        return $this->render('sub_entity/index.html.twig', [
            'sub_entities' => $subEntityRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'sub_entity_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $subEntity = new SubEntity();
        $form = $this->createForm(SubEntityType::class, $subEntity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($subEntity);
            $entityManager->flush();

            return $this->redirectToRoute('sub_entity_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sub_entity/new.html.twig', [
            'sub_entity' => $subEntity,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'sub_entity_show', methods: ['GET'])]
    public function show(SubEntity $subEntity): Response
    {
        $this->denyAccessUnlessGranted('SUB_ENTITY_VIEW', $subEntity);
        return $this->render('sub_entity/show.html.twig', [
            'sub_entity' => $subEntity,
        ]);
    }

    #[Route('/{id}/edit', name: 'sub_entity_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, SubEntity $subEntity): Response
    {
        $this->denyAccessUnlessGranted('SUB_ENTITY_EDIT', $subEntity);
        $form = $this->createForm(SubEntityType::class, $subEntity);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('sub_entity_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('sub_entity/edit.html.twig', [
            'sub_entity' => $subEntity,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'sub_entity_delete', methods: ['POST'])]
    public function delete(Request $request, SubEntity $subEntity): Response
    {
        $this->denyAccessUnlessGranted('SUB_ENTITY_DELETE', $subEntity);
        if ($this->isCsrfTokenValid('delete'.$subEntity->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($subEntity);
            $entityManager->flush();
        }

        return $this->redirectToRoute('sub_entity_index', [], Response::HTTP_SEE_OTHER);
    }
}
