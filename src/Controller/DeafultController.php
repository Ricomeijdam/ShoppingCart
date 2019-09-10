<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ContactType;

class DeafultController extends AbstractController
{
    /**
     * @Route("/", name="deafult")
     */
    public function index()
    {
        return $this->render('deafult/index.html.twig', [
            'controller_name' => 'DeafultController',
        ]);
    }
}
