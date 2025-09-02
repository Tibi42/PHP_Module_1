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
        $ami = "Jeanne";
        $tableau_associatif = [
            'ciel' => 'gris',
            'terre' => 'verte',
        ];
        $tableau_associatif ['mer'] = 'bleu';

        $tableau_couleur = ['rouge', 'vert', 'bleu'];

        //profil Stagiaire
        $prenom = "Guillaume";
        $nom = "Pecquet";
        $age = 37;
        $email = "guillaume.pecquet@gmail.com";
        $telephone = "06 06 06 06 06";
        $ville = "Paris";
        $formation = "Developpeur Web";
        $duree_stage = "18 mois";
        $competences = ["frontend", "backend", "SEO"];
        $est_disponible = true;
        if ($est_disponible) {
            $est_disponible = "Oui";
        } else {
            $est_disponible = "Non";
        }

        // // Affichage de informations du stagiaire
        // echo "<H1>Bienvenue " . $prenom . " " . $nom . "<br>je suis heureux de vous revoir</H1>";
        // echo "<p>Vous avez " . $age . " ans</p>";
        // echo "<h2>Votre email est : " . $email . "</h2>";
        // echo "<p>Votre telephone est : " . $telephone . "</p>";
        // echo "<ul>
        //     <li>Votre ville est : " . $ville . "</li>
        //     <li>Votre formation est : " . $formation . "</li>
        //     <li>Votre duree de stage est : " . $duree_stage . "</li>
        // </ul>";
        // echo "<p>Vos competences sont : " . implode(", ", $competences) . "</p>";
        // echo "<p>Vous etes disponible : " . $est_disponible . "</p>";

        $tableau_associatif = [
            'Nom' => $nom,
            'Prenom' => $prenom,
            'Age' => $age,
            'Email' => $email,
            'Telephone' => $telephone,
            'Ville' => $ville,
            'Formation' => $formation,
            'Duree_stage' => $duree_stage,
            'Competences' => $competences,
            'Est_disponible' => $est_disponible,
        ];
       
        // dd($nom, $age, $sexe, $description); test de variable
        return $this->render('home/index.html.twig', [
            'stagiaire_name' => $prenom,
            'stagiaire_nom' => $nom,
            'stagiaire_age' => $age,
            'stagiaire_sexe' => $sexe,
            'stagiaire_description' => $description,
            'tableau' => $tableau_associatif,
            'couleur' => $tableau_couleur,
            'tableau_associatif' => $tableau_associatif,
            'ami' => $ami,
        ]);
        
    }
}
