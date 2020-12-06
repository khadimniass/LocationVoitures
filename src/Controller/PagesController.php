<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(CategoryRepository $categoryRepository): Response
    {
        $categories=$categoryRepository->findBy([],['created_at'=>'DESC']);

        return $this->render('pages/index.html.twig',compact('categories'));
    }

    /**
     * @Route("/categories/{id<[0-9]+>}", name="app_categories_show")
     */
    public function show(Category $category): Response
    {


        return $this->render('pages/show.html.twig',compact('category'));
    }
}