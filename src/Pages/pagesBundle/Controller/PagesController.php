<?php

namespace Pages\pagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PagesController extends Controller
{
    
    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository("PagesBundle:Pages")->findAll();
        
        return $this->render('PagesBundle:Default:pages/modulesUsed/menu.html.twig', array('Pages' => $pages));
    }
    public function pagesAction($id)
    {
         $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository("PagesBundle:Pages")->find($id);
        
        if(!$page) throw $this->createNotFoundException('La page n\'existe pas ! ');


        return $this->render('PagesBundle:default:Pages/layout/pages.html.twig', array('page' => $page));
    }
}
