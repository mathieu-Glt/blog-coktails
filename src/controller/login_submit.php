<?php 
require_once('./src/model/users.php');

use Blog\Src\Lib\Database\DatabaseConnection;
use Blog\Src\Model\Users\UserRepository;


// routeur page login
function loginSubmitpage() {

    if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])) {

    var_dump($_POST['email']);
    var_dump($_POST['password']);
    
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];
    
    $sanitized_userEmail = filter_var($userEmail, FILTER_SANITIZE_EMAIL);
    if (filter_var($sanitized_userEmail, FILTER_VALIDATE_EMAIL)) {
        echo 'Cette email est valide';
        echo '<br>';


        if (preg_match('/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/', $userPassword)) {
            echo 'Le mot de passe est valide';
            echo '<br>';

            echo 'Email utilisateur : ' .$sanitized_userEmail;
            echo '<br>';
            echo 'Mot de passe utilisateur : ' .$userPassword;
            echo '<br>';
            $userRepository = new UserRepository();
            $userRepository->connection = new DatabaseConnection();
            $user = $userRepository->getUserInfoConnection($sanitized_userEmail);
            echo $user['email'];
            echo '<br>';
            echo $user['password'];

            if (!isset($user['email'])) {
                echo 'Cet utilisateur n\'existe pas  !';
                header("Location: index.php?page=register.php");
            } else {
                echo 'Cet utilisateur existe bien !';
                echo '<br>';
                // comparaison des mots de passe si utilisateur déjà enregistré
                echo 'voici le mot de passe  : ' .$user['password'];
                if (!password_verify($userPassword, $user['password'])) {
                    echo 'les mots de passe ne correspondent pas';
                    header("Location: index.php?page=login.php");

                } else {
                header("Location: index.php");

                }
            }
            
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

}

?>