<?php 

// controller//homepage.php
require_once('Coktail.php');
require_once('src/model/coktail.php');
require_once('src/lib/database.php');

use Blog\Src\Model\Coktail\PostRepository;
use Blog\Src\Lib\Database\DatabaseConnection;


// routeur page home
function homepage() {
    $connection = new DatabaseConnection();
    
    $postRepository = new PostRepository();
    $postRepository->connection = $connection;
    $coktails = $postRepository->getAllCoktails();

    

    
    include('inc/header.php');
    require_once('src/template/home.php');
    include('inc/footer.php');
    
}



