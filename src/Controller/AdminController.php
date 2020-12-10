<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/adm", name="app_admin")
     */
    public function index(CategoryRepository $categoryRepository): Response
    {
        $category=$categoryRepository->findAll();
        return $this->render('admin/index.html.twig', compact('category'));
    }

    /**
     * @Route("/adm/{id<[0-9]+>}/edit", name="app_admin_edit")
     */
    public function edit($id,Request $request,CategoryRepository $categoryRepository): Response
    {
        $category=$categoryRepository->find($id);
        $form=$this->createForm(CategoryType::class,$category);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){

        }

        return $this->render('admin/edit.html.twig', compact('category'));
    }
}
