<?php 
require_once('./src/model/users.php');

use Blog\Src\Lib\Database\DatabaseConnection;
use Blog\Src\Model\Users\UserRepository;


// routeur page register
function registerSubmitpage() {

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password']) && !empty($_POST['full_name'])) {
    echo 'Les champs sont remplis';
    echo '<br>';


    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];
    $userName = $_POST['full_name'];

    $sanitized_userEmail = filter_var($userEmail, FILTER_SANITIZE_EMAIL);
    if (filter_var($sanitized_userEmail, FILTER_VALIDATE_EMAIL)) {
        echo 'Cette email est valide';
        echo '<br>';

        if (preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/', $userPassword)) {
            echo 'Le mot de passe est valide';
            echo '<br>';

            $options = [
                'cost' => 12,
            ];

            $hash_password = password_hash($userPassword, PASSWORD_BCRYPT, $options);

            echo 'utilisateur : ' .$userName;
            echo '<br>';
            echo 'Email utilisateur : ' .$sanitized_userEmail;
            echo '<br>';
            echo 'Mot de passe utilisateur : ' .$hash_password;
            echo '<br>';

            // on va envoyé les données dans le model
            $datas = array(
                "user" => $userName,
                "email" => $sanitized_userEmail,
                "password" => $hash_password,

            );
            echo 'voici un  beau  tableau : ' .$datas;
            $userRepository = new UserRepository();
            $userRepository->connection = new DatabaseConnection();
            $registerDatas = $userRepository->registerUser($datas);

            echo '<br>';
            echo $registerDatas;

            if (!$registerDatas === 'Success') {
                echo 'Il y a eu un problème !';
                header("Location: index.php?page=register.php");

            } else {
                echo 'Vous êtes bien enregistré !';
                // il faudrait ici faire une condition if pour vérifier si l'utilisateur n'est pas déjà enregistré dans la base
                header("Location: index.php");
            }

            // header("Location: index.php?page=login.php");


        } else {
            echo 'Le mot de passe n\'est pas valide';
            echo '<br>';

        }
        



    } else {
        echo 'Cette email n\'est pas valide';
        echo '<br>';
    }
    

} else {
    echo 'Vous devez remplir tous les champs !';
}



    include('inc/footer.php');
    
}


?>
