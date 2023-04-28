<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet"
    >

    <title>Coktails</title>
</head>
<body class="home" style="background: rgb(133, 61, 47); ">
  
<a  href="index.php?page=createpost.php" type="button" class="btn btn-primary col-1 mx-auto">Créer un article</a>
<h1 class="text-center text-dark bg-warning m-2 p-3"style="color: black; text-align: center;">Le blog sur les coktails</h1>
    <p style="color: white; padding: 2%;">
    Le cocktail est une boisson obtenue par mélange de plusieurs ingrédients dont au moins une boisson alcoolisée ou spiritueuse. Le mélange peut contenir une ou plusieurs autres boissons alcoolisées, des jus de fruits, des sirops, des sodas ou de l'eau gazeuse, du café, de l'eau chaude, des œufs ou de la crème. Les cocktails sont préparés individuellement avec de la glace dans un shaker, un verre à mélange ou directement dans un verre à cocktail et servis. En général, chaque recette de cocktail porte un nom mémorable. Certains sont connus internationalement et sont élaborés par des bartenders du monde entier.
    L'origine du mot cocktail est contestée. La première utilisation connue ne se référant pas à un cheval se trouve dans le Morning Post and Gazetteer de Londres, Angleterre, le 20 mars 1798. M. Pitt (probablement le Premier ministre de l'époque, William Pitt le Jeune) aurait consommé deux verres d'huile de Vénus, un verre de Parfait Amour et un verre de cock-tail. Il n'est pas mentionné en quoi consistait ce cock-tail, mais il est également connue sous le nom de ginger. Ces boissons peuvent être des allusions à la vie privée de Pitt, car le fait qu'il ne soit pas marié fait l'objet de plaisanteries obscènes2. Le terme « ginger » ne désigne pas seulement une couleur rouge brunâtre, le terme est utilisé comme adjectif dans le sens de « sang chaud » ou « mécontent »3.

L'effet stimulant d'un cocktail matinal est souligné à plusieurs reprises, que les recettes contiennent ou non du gingembreN 1. Selon les historiens Brown et Miller, la mention en rapport avec les liqueurs pourrait également indiquer une origine française. Il existe en effet une boisson appelée « coquetel » ; Dietrich Bock parle d'une boisson mélangée à base de vin de la région de Bordeaux et souligne également que les Américains bénéficient du soutien d'une armée expéditionnaire française pendant la guerre d'indépendance, ce qui pourrait expliquer l'adoption ultérieure du mot dans la langue américaine4.

Toutefois, en Amérique du Nord, le terme cocktail apparaît pour la première fois en tant que nom de boisson en 1803. Dans un article de journal humoristique, le narrateur, un jeune homme à tout faire, décrit le déroulement d'une matinée avec la gueule de bois : « 11 [heures]. Boire un verre de cocktail - excellent pour la tête [...] Appelez chez le docteur - boire un autre verre de cocktail ». Quelle que soit cette boisson ; Il faut garder à l'esprit que dans la première moitié du xixe siècle, les cocktails sont consommés le matin en raison de leur effet reconstituant, notamment par des voleurs - l'historien David Wondrich les appelle « groupe de fainéants, de sportifs et de délinquants »; Ted Haigh parle de « joueurs, d'escrocs et de proxénètes »5.

En 1860, la première référence du mot cocktail est attesté dans le dictionnaire Bonnaffé comme « boisson glacée faite avec du vin ou du curaçao et quelques gouttes de bitter, le tout aromatisé d'écorces d'oranges vertes et de cannelle. » Une autre définition apparaît comme étant « une réception en fin de journée, où l'on boit des cocktails », dans le dictionnaire Le Robert en 1953. Bien que la première mention souvent citée dans le Knickerbocker's History of New York de Washington Irving, datant de 1809, ne soit pas documentée, un journal new-yorkais fait l'éloge en 1813 des « vertus supérieures du gin et du cocktail » et en 1816, un auteur du New York Courrier décrit comment il passe ses journées avec un cocktail ou deux chaque matin avant le petit-déjeuner et terminait la journée avec deux ou trois Brandy Toddy sans omettre un ou deux cocktails avant le dîner5. À l'origine, ce sont des boissons rapides, revigorantes et fortement alcoolisées qui se consomment tôt le matin. William Grimes cite un témoin contemporain de 1822, selon lequel un simple Kentucky breakfast consistait en trois cocktails et une portion de tabac à mâcher7.

Certaines recettes reprennent la définition de 1806, c'est-à-dire qu'en plus d'un alcool, elles ne contiennent que du sucre, de l'eau ou de la glace, ainsi que du bitter, des arômes épicées et parfois même du sirop ou du curaçao. Jusqu'à la fin du xixe siècle, les cocktails matinaux ne sont pas rares aux États-Unis : « Si vous aimez les cocktails le matin, venez ici et vous en obtiendrez un qui est fait comme cela doit être fait », c'est ce que propose le texte d'une publicité tirée d'un guide pour les marchands d'alcool de 1899. Les tentatives pour diviser les boissons alcoolisées mélangées en groupes s'effectue et Jerry Thomas classe les recettes de son manuel pour barmen de 1862 - le plus ancien du genre - en différentes catégories et définit le punch, le lait de poule, les juleps, le smash, le cobbler, le crusta, les mules et les sangarees, les toddies et les slings, les fixes et les sours, le flip, le negus et le shrub ; il résume les boissons non alcoolisées en tant que boissons de modération. Mais malgré les nombreux groupes, Thomas connait à l'époque de nombreuses boissons qui ne peuvent être clairement attribuées, de sorte qu'il répertorie plus de 50 recettes en tant que boissons de fantaisie et deux autres douzaines en tant que boissons diverses.   
</p>
    <?php foreach ($coktails as $coktail) {
        echo '<br>';
    ?>
    <div class="mb-4">
    <div class="card m-auto border border-warning p-2" style="width: 40%;">
  <img src="images/<?php echo $coktail['picture']?> " class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $coktail['name']?></h5>
    <p class="card-text"><?php echo $coktail['description']?>.</p>
    <p class="card-text"><?php echo 'L\'auteur de ce document est : ' .$coktail['author']?>.</p>
    <div class="d-flex justify-content-center">
    <a href="index.php?page=<?php echo $coktail['page']?>&name=<?php echo $coktail['name']?>&id=<?php echo $coktail['id']?>" class="btn btn-outline-primary m-2">Voir détails</a>

    </div>
  </div>
</div>    

    </div>
<?php } ?>

</body>
</html>