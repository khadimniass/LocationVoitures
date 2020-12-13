<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index(CategoryRepository $categoryRepository,PaginatorInterface $paginator, Request $request): Response
    {
        $cate=$categoryRepository->findBy([],['created_at'=>'DESC']);
        $categories= $paginator->paginate(
            $cate,
            $request->query->getInt('page', 1), /*page number*/
            3 /*limit per page*/
        );

        return $this->render('pages/index.html.twig',compact('categories'));
    }
    /**
     * @Route("/categories/create", name="app_categories_create", methods={"GET","POST"})
     */
    public function create(Request $request,EntityManagerInterface $em):Response
    {
        $category=new Category();
        $form=$this->createForm(CategoryType::class,$category);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em->persist($category);
            $em->flush();

            $this->addFlash('success','location creer avec succes');

            return $this->redirectToRoute('app_home');

        }
        return $this->render('pages/create.html.twig',[
            'category'=>$category,
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/categories/{id<[0-9]+>}", name="app_categories_show")
     */
    public function show(Category $category): Response
    {


        return $this->render('pages/show.html.twig',compact('category'));
    }
}