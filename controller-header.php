<?php 

require('src/model.php');
if (isset($_GET['id']) && $_GET['id'] > 0) {
    $coktailId = $_GET['id'];
    $coktailName = $_GET['name'];
} else {
    echo 'Erreur : aucun identifiant de billet envoyé';
 
    die;
}


// tous les résultats des requêtes venant du model.php seront là
$coktails = getCoktail($coktailId);

// var_dump($coktails);

require_once('inc/header.php');
include('inc/footer.php');

