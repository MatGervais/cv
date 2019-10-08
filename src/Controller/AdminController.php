<?php

namespace App\Controller;

use App\Entity\Heading;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/content", name="admin_content")
     */
    public function content()
    {

        $heading = $this->getDoctrine()->getRepository(Heading::class)->findAll();

        return $this->render('admin/content.html.twig', ['headings'=> $heading]);
    }
    
    /**
     * @Route("/admin/appearance", name="admin_appearance")
     */
    public function appearance()
    {
        return $this->render('admin/appearance.html.twig');
    }

    public function edit(){
        
    }
}
