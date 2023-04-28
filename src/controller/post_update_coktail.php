<?php 
require_once('./src/model/users.php');

use Blog\Src\Lib\Database\DatabaseConnection;
use Blog\Src\Model\Coktail\PostRepository;


// routeur page register
function postUpdateCoktailSubmitpage() {
var_dump($_GET['id']);
// if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && !empty($_POST['full_name'])) {
//     echo 'Les champs sont remplis';
//     echo '<br>';



    if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['description']) && !empty($_POST['description'])) {
        echo 'Les champs sont remplis';
        echo '<br>';

        $id = $_GET['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];

        echo 'le nom du coktail est : ' .$name ;
        echo '<br>';
        echo 'la description du coktail est : ' .$description;
        echo '<br>';

        // on va envoyé les données dans le model
        $datas = array(
                "id" => $id,
                "name" => $name,
                "description" => $description,
                );
        echo 'voici un  beau  tableau : ' .$datas['name']. ' et : ' .$datas['description']. ' et : ' .$datas['id']. "\n";
        echo '<br>';
        $postRepository = new PostRepository();
        $postRepository->connection = new DatabaseConnection();
        $registerDatas = $postRepository->updateCoktail($datas);

        if (!$registerDatas === 'Success') {
            echo 'Il y a eu un problème !';
            header("Location: index.php?page=editcoktail.php");

        } else {
            echo "La modification de l'article s'est bien déroulé !";
            // il faudrait ici faire une condition if pour vérifier si l'utilisateur n'est pas déjà enregistré dans la base
            header("Location: index.php");
        }


    
    }



/***
 * Il faut s'inspirer du register_submit on résupère des $_POST du formuliare editcokatil.php on fait les vérification 
 * nécessaire sur les $_post puis on instancie  dans une variable la classe Coktail et Databse  et dans la classe coktail on lance la méthode 
 * qui exécutera la requête sql 'UPDATE .... '
 * voir la fonxction regsiterSubmitPage qui se trouve dans le fichier regsiter_submit dans le dossier controller.
 * 
 */

// regex pour verifier les entrées /([A-Z-a-z]\s)\w+/


    

// } else {
//     echo 'Vous devez remplir tous les champs !';
// }



    include('inc/footer.php');
    
}


?>
