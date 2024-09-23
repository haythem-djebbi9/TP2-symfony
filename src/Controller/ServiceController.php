<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
   
    #[Route("/service/{name}", name: 'show_service')]
    public function showService(string $name): Response
    {
        // Rendre le template et passer le paramètre "name"
        return $this->render('service/index.html.twig', [
            'name' => $name
        ]);
    }

    // /**
    //  * @Route("/go-to-index", name="go_to_index")
    //  */
    // public function goToIndex(): Response
    // {
    //     // Rediriger vers la route "home_index"
    //     return $this->redirectToRoute('home_index');
    // }
}