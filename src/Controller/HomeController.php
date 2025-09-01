<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // echo "Hello Wolrd !";
        $prenom = "Guillaume";
        $nom = "Pecquet";
        $age = 44;
        $sexe = "Masculin";
        $description = "Vous êtes developpeur web en formation";
        
        $tableau_associatif = [
            'ciel' => 'gris',
            'terre' => 'verte',
        ];
        $tableau_associatif ['mer'] = 'bleu';

        $tableau_couleur = ['rouge', 'vert', 'bleu'];

        // dd($nom, $age, $sexe, $description); test de variable
        return $this->render('home/index.html.twig', [
            'stagiaire_name' => $prenom,
            'stagiaire_nom' => $nom,
            'stagiaire_age' => $age,
            'stagiaire_sexe' => $sexe,
            'stagiaire_description' => $description,
            'hobby' => $tableau_associatif,
            'couleur' => $tableau_couleur[1],
        ]);
    }
}
