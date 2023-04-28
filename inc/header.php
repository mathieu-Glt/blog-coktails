<!-- header.php -->
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
<body class="body_header">

  <nav class="navbar navbar-expand-lg navbar-light bg-info m-3">
  <div class="container-fluid">
      <a class="nav-link active" aria-current="page" href="index.php">Le blog sur les cocktails</a>

    <?php foreach ($coktails as $coktail) { ?>
      
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link text-center text-dark fs-6" aria-current="page" href="index.php?page=<?php echo $coktail['page']?>&name=<?php echo $coktail['name']?>&id=<?php echo $coktail['id']?>">Le <?php echo $coktail['name']?></a>
        </li>
      </ul>
    </div>
    <?php  } ?>
    <a class="nav-link active" aria-current="page" href="index.php?page=login.php">Se connecter</a>
    <a class="nav-link active" aria-current="page" href="index.php?page=register.php">S'enregister</a>

  </div>
</nav>
</body>
</html>


