<?php 
require_once('./src/model/coktail.php');
require_once('./src/controller/header.php');

use Blog\Src\Model\Coktail\PostRepository;
use Blog\Src\Lib\Database\DatabaseConnection;



function editCoktailPage($datas) {
// var_dump($_GET['id']);
// var_dump($datas['coktailId']);
// var_dump($datas['coktailDescription']) ;
// var_dump($datas['coktailPicture']); 
$coktailName = $datas['coktailName'];
$coktailId = $datas['coktailId'];
$coktailDescription = $datas['coktailDescription'];
$coktailPicture = $datas['coktailPicture'];

/***
 * Il faut s'inspirer du register_submit on résupère des $_POST du formuliare editcokatil.php on fait les vérification 
 * nécessaire sur les $_post puis on instancie  dans une variable la classe Coktail et Databse  et dans la classe coktail on lance la méthode 
 * qui exécutera la requête sql 'UPDATE .... '
 * voir la fonxction regsiterSubmitPage qui se trouve dans le fichier regsiter_submit dans le dossier controller.
 * 
 */

// regex pour verifier les entrées /([A-Z-a-z]\s)\w+/



headerpage();

    
    require_once('src/template/editcoktail.php');
    include('inc/footer.php');
    
}


?>
