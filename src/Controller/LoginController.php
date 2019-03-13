<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Debug\Debug;

Debug::enable();


class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index()
    {
        return $this->render('login/index.html.twig');
    }


    /**
     * 
     * @Route("/logout", name="logout")
     * 
     */

    public function logoutAction(){
        throw new \RunTimeException('This should not be called directly');
    }
}
