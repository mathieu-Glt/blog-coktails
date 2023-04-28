<?php 
require_once('./src/model/coktail.php');


use Blog\Src\Model\Coktail\PostRepository;
use Blog\Src\Lib\Database\DatabaseConnection;

// routeur page login
function createPostpage() {
    $postRepository = new PostRepository();
    $postRepository->connection = new DatabaseConnection();
    $coktails = $postRepository->getAllCoktails();


    include('inc/header.php');
    require_once('src/template/createpost.php');
    include('inc/footer.php');
    
}


?>
