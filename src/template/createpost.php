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
    <div class="container">

    
        <h1 class="text-center bg-primary text-dark p-2">Formulaire pour créer un article</h1>
        <form action="index.php?page=create_post_submit.php" method="POST">
        <div class="mb-3">
                <label for="picture" class="form-label">Image de l'article</label>
                <input type="text" placeholder="" class="form-control" id="picture" name="picture" value="" aria-describedby="picture-help">
        </div>
        <div class="mb-3">
                <label for="name" class="form-label">Nom du coktail</label>
                <input type="text" placeholder="" class="form-control" id="name" name="name" value="" aria-describedby="name-help">
        </div>
        <div class="mb-3">
                <label for="description"  class="form-label">Description de la recette</label>
                <textarea class="form-control" placeholder="" name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div class="mb-3">
                <label for="author" class="form-label">Auteur de l'article</label>
                <input type="text" placeholder="" class="form-control" id="author" name="author" value="" aria-describedby="author-help">
        </div>
        <div class="mb-3">
                <label for="page" class="form-label">Page de l'article</label>
                <input type="text" placeholder="" class="form-control" id="page" name="page" value="" aria-describedby="author-help">
        </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <br />
    </div>
</body>
</html>
