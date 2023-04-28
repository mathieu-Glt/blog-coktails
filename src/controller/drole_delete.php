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


use Blog\Src\Lib\Database\DatabaseConnection;
use Blog\Src\Model\Users\UserRepository;
use Blog\Src\Model\Coktail\PostRepository;



// routeur page register
function droleDeletepage() {
    $connection = new DatabaseConnection();
    
    $postRepository = new PostRepository();
    $postRepository->connection = $connection;
    $coktails = $postRepository->getAllCoktails();
    
    var_dump($_GET['id']);
    $idCokatil = $_GET['id'];


    $postRepository = new PostRepository();
    $postRepository->connection = new DatabaseConnection();
    $registerData = $postRepository->deleteCoktail($idCokatil);

    if ($registerData === 'Success') {
        echo '
                    <div class="card" style="width: 18rem;">
                        <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Votre article  est biern supprimé.</p>
                        </div>
                    </div>';
    
    
    
    } else {
    echo '
    <div class="card m-auto" style="width: 30%;">
        <img src="./images/images.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center bg-warning p-2">Avertissement !!!</h5>
                <p class="card-text text-center">Vous devez remplir tous les champs !</p>
            </div>
    </div>';
            
    }
    
    


include('inc/header.php');
// require_once('src/template/drole.php');
include('inc/footer.php');
    
}

?>
</body>
</html>