<?php 


namespace Blog\Src\Model\Users;

require_once('src/lib/database.php');

use Blog\Src\Lib\Database\DatabaseConnection;


class UserRepository 
{
    public DatabaseConnection $connection;


    public function getUserInfoConnection(string $sanitized_userEmail): array {
        echo 'Info email dans model : ' .$sanitized_userEmail;
        try {
            $sql = 'SELECT email, password FROM users WHERE email = :email';
            $getUserStatement = $this->connection->getConnection()->prepare($sql);
            $getUserStatement->execute([
                'email' => $sanitized_userEmail,
            ]);
            $getUser = $getUserStatement->fetch();
            // echo 'fetch user : ' .$getUser;
    
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage();
        }
        return $getUser;
    
    }

    public function registerUser(array $datas): void {
        var_dump($datas);
        echo '<br>';
        echo 'les datas dans le model : ' .$datas['email']. ', '.$datas['user']. ' ,' .$datas['password'];
        echo '<br>';
    
    
        try {
            
            // Ecriture de la requête à destination de la base de données
            $postUser = 'INSERT INTO users(full_name, email, password, role) VALUES (:full_name, :email, :password, :role)';
            
            // Préparation de la requête pour la base de données
            $insertUser = $this->connection->getConnection()->prepare($postUser);
    
            // Exécution de la requête vers la base de données
            $insertUser->execute([
                'full_name' => $datas['user'],
                'email' => $datas['email'],
                'password' => $datas['password'],
                'role' => 'user'
            ]) or die (print_r($this->connection->errorInfo()));
    
            echo "Success";
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage();
        }
    
    
    }
    
    

}






?>