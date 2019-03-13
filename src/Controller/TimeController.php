<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TimeController extends AbstractController
{
    /**
     * @Route("/time", name="time")
     */
    public function index()
    {
        return $this->render('time/index.html.twig');
    }
}
