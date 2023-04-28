<?php 

// controller//homepage.php
require_once('src/model/coktail.php');


use Blog\Src\Model\Coktail\PostRepository;
use Blog\Src\Lib\Database\DatabaseConnection;


// routeur page home
function headerpage() {
    $postRepository = new PostRepository();
    $postRepository->connection = new DatabaseConnection();
    $coktails = $postRepository->getAllCoktails();

    
    require_once('inc/header.php');
    
}



