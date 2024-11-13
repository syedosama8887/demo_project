<?php
// src/Controller/AdminController.php

namespace App\Controller;

use App\Repository\FormRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin', name: 'app_admin')]
    public function index(FormRepository $formRepository): Response
    {
        // Fetch all records from the 'form' table
        $forms = $formRepository->findAll();

        // Pass the fetched data to the template
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
            'forms' => $forms,  // This is where you're passing the fetched data
        ]);
    }
}
