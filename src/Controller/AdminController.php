<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="app_admin")
     */
    public function index(CategoryRepository $categoryRepository): Response
    {
        $categories=$categoryRepository->findAll();
        return $this->render('admin/index.html.twig', compact('categories'));
    }

    /**
     * @Route("/admin/{id<[0-9]+>}/edit", name="app_admin_edit",methods={"GET","POST"})
     */
    public function edit(Request $request,Category $category, EntityManagerInterface $em): Response
    {
        $form=$this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em->flush();
            $this->addFlash('success','publication modifiée avec success.');
            return $this->redirectToRoute('app_home');
        }

        return $this->render('admin/edit.html.twig',[
            'category'=>$category,
            'form'=>$form->createView()
        ]);
    }


    /**
     * @Route("/admin/{id<[0-9]+>}/delete", name="app_admin_delete", methods={"GET","POST","DELETE"})
     */
    public function delete(Request $request, EntityManagerInterface $em, Category $category): Response
    {
        if ($this->isCsrfTokenValid('category_deletion_'.$category->getId(),$request->request->get('csrf_token')))
        {
            $em->remove($category);
            $em->flush();
            $this->addFlash('info','location supprimée avec succes ...');
        }
        return $this->redirectToRoute('app_home');

    }
}
