<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin_content", name="admin_content")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig');
    }


    public function edit(){
        
    }
}
