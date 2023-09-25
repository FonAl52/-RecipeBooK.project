<?php

namespace App\Controller;

use App\Entity\Ingredient;
use App\Form\IngredientType;
use App\Repository\IngredientRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class IngredientController extends AbstractController
{
    /**
     * This controller display all ingredients
     *
     * @param IngredientRepository $repository
     * @param PaginatorInterface $paginator
     * @param Request $request
     * @return Response
     */
    #[Route('/ingredient', name: 'ingredient.index', methods: ['GET'])]
    public function index(
        IngredientRepository $repository,
        PaginatorInterface $paginator,
        Request $request
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $ingredients = $paginator->paginate(
            $repository->findBy(['user' => $this->getUser()]),
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('pages/ingredient/index.html.twig', [
            'ingredients' => $ingredients
        ]);
    }

    /**
     * This controller show a form which create an ingredient
     *
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[Route('/ingredient/creation', 'ingredient.new')]
    public function new(
        Request $request,
        EntityManagerInterface $manager
    ): Response {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $ingredient = new Ingredient();
        $form = $this->createForm(IngredientType::class, $ingredient);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $ingredient = $form->getData();
            $ingredient->setUser($this->getUser());

            $manager->persist($ingredient);
            $manager->flush();

            $this->addFlash(
                'success',
                'Votre ingrédient a été créé avec succès !'
            );

            return $this->redirectToRoute('ingredient.index');
        }

        return $this->render('pages/ingredient/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * This controller allow us to edit an ingredient
     *
     * @param Ingredient $ingredient
     * @param Request $request
     * @param EntityManagerInterface $manager
     * @return Response
     */
    #[Route('/ingredient/edition/{id}', 'ingredient.edit', methods: ['GET', 'POST'])]
    public function edit(
        Ingredient $ingredient,
        Request $request,
        EntityManagerInterface $manager
    ): Response {
        $isUserAllowed = $this->getUser() == $ingredient->getUser();

        if ($isUserAllowed) {
            $this->denyAccessUnlessGranted('ROLE_USER');
            $form = $this->createForm(IngredientType::class, $ingredient);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $ingredient = $form->getData();

                $manager->persist($ingredient);
                $manager->flush();

                $this->addFlash(
                    'success',
                    'Votre ingrédient a été modifié avec succès !'
                );

                return $this->redirectToRoute('ingredient.index');
            }

            return $this->render('pages/ingredient/edit.html.twig', [
                'form' => $form->createView()
            ]);
        }

        return $this->redirectToRoute('security.login');
    }

    /**
     * This controller allows us to delete an ingredient
     *
     * @param EntityManagerInterface $manager
     * @param Ingredient $ingredient
     * @return Response
     */
    #[Route('/ingredient/suppression/{id}', 'ingredient.delete', methods: ['GET'])]
    public function delete(
        EntityManagerInterface $manager,
        Ingredient $ingredient
    ): Response {
        $isUserAllowed = $this->getUser() == $ingredient->getUser();

        if ($isUserAllowed) {
            $this->denyAccessUnlessGranted('ROLE_USER');
            $manager->remove($ingredient);
            $manager->flush();

            $this->addFlash(
                'success',
                'Votre ingrédient a été supprimé avec succès !'
            );

            return $this->redirectToRoute('ingredient.index');
        }

        return $this->redirectToRoute('security.login');
    }
}
