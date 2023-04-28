<!-- contact.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de recettes - Formulaire de Contact</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">





<?php 

require_once('./src/model/users.php');

use Blog\Src\Lib\Database\DatabaseConnection;
use Blog\Src\Model\Users\UserRepository;
use Blog\Src\Model\Coktail\PostRepository;



// routeur page register
function createPostSubmitpage() {
    $connection = new DatabaseConnection();
    
    $postRepository = new PostRepository();
    $postRepository->connection = $connection;
    $coktails = $postRepository->getAllCoktails();
    
    
    $name = $_POST['name'];
    $page = $_POST['page'];
    $picture = $_POST['description'];
    $description = $_POST['picture'];
    $author = $_POST['author'];

    // echo $name  ?: 'Le champs "name" est vide. <br>';
    // echo '<br>';
    // echo $description ?: 'Le champs "description" est vide. <br>';
    // echo '<br>';
    // echo $picture ?: 'Le champs "image" est vide. <br>';
    // echo '<br>';
    // echo $author ?: 'Le champs "auteur" est vide. <br>';
    

if (isset($_POST['author']) && !empty($_POST['author']) && isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['description']) && !empty($_POST['description']) && isset($_POST['picture']) && !empty($_POST['picture'])) {
    include('inc/header.php');

    // echo 'Les champs sont remplis';
    // echo '<br>';
    $registerDatas = 'Success';
    // echo '<br>';
    $matchName = preg_match('/([A-Z-a-z])\w+/', $_POST['name']);
    // echo ' valeur : $matchName : ' .$matchName;
    // echo '<br>';
    $matchDescription = preg_match('/([A-Z-a-z]\s)\w+/', $_POST['description']);
    // echo ' valeur : $matchDescription : ' .$matchDescription;
    // echo '<br>';
    $matchAuthor = preg_match('/([A-Z-a-z]\s)\w+/', $_POST['author']);
    // echo ' valeur : $matchAuthor : ' .$matchAuthor;
    // echo '<br>';
    $matchPicture = preg_match('/([A-Z-a-z])\w+/', $_POST['picture']);
    // echo ' valeur : $matchPicture : ' .$matchPicture;
    // echo '<br>';

    if ($matchName === 1 && $matchDescription === 1 && $matchAuthor === 1 && $matchPicture === 1) {

            // on va envoyé les données dans le model
            $datas = array(
                "name" => $_POST['name'],
                "description" => $_POST['description'],
                "author" => $_POST['author'],
                "picture" => $_POST['picture'],
                "page" => $_POST['page']
            );

            $postRepository = new PostRepository();
            $postRepository->connection = new DatabaseConnection();
            $registerDatas = $postRepository->insertCoktail($datas);

            echo '<br>';
            echo 'La valeur de retour de la methode insertCoktail : ' .$registerDatas;

        
    } else {
            $registerDatas = 'Error';
    }

} else {
    // echo 'Les champs ne pas sont remplis';
    $registerDatas = 'Error';
}

include('inc/header.php');
require_once('src/template/create_post_submit.php');
include('inc/footer.php');
    
}

?>
</body>
</html>