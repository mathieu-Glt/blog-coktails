<!-- contact.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire pour s'enregistrer</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="bg-light-subtle">


        <form class="form-control m-auto" action="index.php?page=post_update_coktail.php&id=<?php echo $coktailId ?>" method="POST" style="width: 60%;">
        <h1 class="text-center" >Formulaire pour éditer le coktail : <?php echo $coktailName ?> id :<?php echo $_GET['id'] ?></h1>
        <img src="images/<?php echo $coktailPicture ?> " class="card-img-top mx-auto d-block" style="width: 500px;"alt="...">
        <input type="hidden" id="postId" name="postId" value="<?php echo $_GET['id'] ?>" class="form-control" id="id" name="id" aria-describedby="id-help">

            <div class="mb-3">
                <label for="name" class="form-label">Nom du coktail</label>
                <input type="text" placeholder="<?php echo $coktailName ?>" class="form-control" id="name" name="name" value="<?php echo $coktailName ?>" aria-describedby="name-help">
            </div>
            <div class="mb-3">
                <label for="description"  class="form-label">Description de la recette</label>
                <textarea class="form-control" placeholder="<?php echo $coktailDescription ?>..." name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <br />
    </div>
</body>
</html>