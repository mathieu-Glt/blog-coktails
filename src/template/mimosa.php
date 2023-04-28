<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
    <link href="../style.css" rel="stylesheet">


    <title>Recette coktails</title>
    
</head>
<body class="" style="background: rgb(236, 227, 59);">
<a href="index.php" class="btn btn-primary col-1 mx-auto">Retour à le blog sur les coktails</a>

  
<h1 class="text-center bg-light m-4 p-2">Le <?php echo $coktailOne->name ?></h1>
<div class="card m-auto p-2" style="width: 40%;">
  <img src="images/<?php echo $coktailOne->picture ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $coktailOne->name ?></h5>
    <p class="card-text"><?php echo $coktailOne->description ?></p>
    <p class="card-text">Article écrit par : <?php echo $coktailOne->author ?></p>
    <a href="index.php?page=editcoktail.php&name=<?php echo $coktailOne->name?>&description=<?php echo substr($coktailOne->description, 0, 50)?>&picture=<?php echo $coktailOne->picture?>&id=<?php echo $coktailOne->id ?>" class="btn btn-outline-warning m-2">Editer</a>
    <a href="index.php" class="btn btn-outline-danger m-2">Supprimer</a>
  </div>

</div>

    
</div>





</body>
</html>