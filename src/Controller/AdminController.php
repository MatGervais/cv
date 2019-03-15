<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/content", name="admin_content")
     */
    public function content()
    {
        return $this->render('admin/content.html.twig');
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
