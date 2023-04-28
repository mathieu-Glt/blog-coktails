<?php 
require_once('./src/model/coktail.php');
require_once('./src/controller/header.php');
require_once('Coktail.php');

use Blog\Src\Model\Coktail\PostRepository;
use Blog\Src\Lib\Database\DatabaseConnection;


// routeur page home
function drolepage(int $coktailId) {
    $postRepository = new PostRepository();
    $postRepository->connection = new DatabaseConnection();
    $coktails = $postRepository->getCoktail($coktailId);

    foreach ($coktails as $coktail) {

        $coktailOne = new Coktail;
        $coktailOne->id = $coktail['id'];
        $coktailOne->name = $coktail['name'];
        $coktailOne->description = $coktail['description'];
        $coktailOne->author = $coktail['author'];
        $coktailOne->picture = $coktail['picture'];

    }


    headerpage();

    
    require_once('src/template/drole.php');
    include('inc/footer.php');
    
}


?>
