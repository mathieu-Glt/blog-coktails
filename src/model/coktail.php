<?php 

namespace Blog\Src\Model\Coktail;

require_once('src/lib/database.php');

use Blog\Src\Lib\Database\DatabaseConnection;

class PostRepository
{
    public DatabaseConnection $connection;

    public function getAllCoktails(): array {
        try {
            $getCoktails = 'SELECT * FROM cokatils';
            $getCoktailsStatement = $this->connection->getConnection()->prepare($getCoktails);
            $getCoktailsStatement->execute();
            $getCoktailsAll = $getCoktailsStatement->fetchAll();


        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage();
        }
        return $getCoktailsAll;
    }

    public function getCoktail(int $coktailId): array  {
        try {
            $getOneCoktail = 'SELECT * FROM cokatils WHERE id = :id';
            $getOneCoktailStatement = $this->connection->getConnection()->prepare($getOneCoktail);
            $getOneCoktailStatement->execute([
                'id' => $coktailId
            ]);
            $getCoktail = $getOneCoktailStatement->fetchAll();
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage();
        }
        return $getCoktail;
        
    }

    public function updateCoktail(array $datas): void {
        echo "J'ai la varible en question " .$datas['name']. " et l'autre aussi ," .$datas['description']. " et l'autre encore aussi ," .$datas['id'];

        try {
            
            // Ecriture de la requête à destination de la base de données
            $sqlUpdate = 'UPDATE cokatils SET name = :name, description = :description WHERE id = :id';
            
            // Préparation de la requête pour la base de données
            $updateCoktail = $this->connection->getConnection()->prepare($sqlUpdate);
    
            // Exécution de la requête vers la base de données
            $updateCoktail->execute([
                'id' => $datas['id'],
                'name' => $datas['name'],
                'description' => $datas['description'],
            ]) or die (print_r($this->connection->errorInfo()));
    
            echo "Success";
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage();
        }

    }

    public function insertCoktail(array $datas): string {
        echo "J'ai la varible en question " .$datas['name']. " et l'autre aussi ," .$datas['description']. " et l'autre encore aussi ," .$datas['author'];
        echo "J'ai la varible en question " .$datas['picture']. " et et la " .$datas['page'] ;   
        
        try {
            // $postUser = 'INSERT INTO users(full_name, email, password, role) VALUES (:full_name, :email, :password, :role)';

            // Ecriture de la requête à destination de la base de données
            $sqlCreate = 'INSERT cokatils(name, description, picture, author, page) VALUES (:name, :description, :picture, :author, :page)';
            
            // Préparation de la requête pour la base de données
            $createCoktail = $this->connection->getConnection()->prepare($sqlCreate);
    
            // Exécution de la requête vers la base de données
            $createCoktail->execute([
                'name' => $datas['name'],
                'description' => $datas['description'],
                'picture' => $datas['picture'],
                'author' => $datas['author'],
                'page' => $datas['page']
            ]) or die (print_r($this->connection->errorInfo()));
    
            echo "Success";
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage();
        }

        $registerDatas = 'Success';

        return $registerDatas;

    }

    public function deleteCoktail(int $idCokatil): string {

        echo "J'ai la variable en question methode delete : " .$idCokatil; 

        try {
        $sqlDelete = 'DELETE FROM cokatils WHERE id = :id';

        $deleteCoktail = $this->connection->getConnection()->prepare($sqlDelete);

        $deleteCoktail->execute([
            'id' => $idCokatil
        ]) or die (print_r('erreur : ' .$deleteCoktail->errorInfo()));

        $registerData = 'Success';

        } catch (Exception $e) {
        echo 'Caught Exception: ', $e->getMessage();
        $registerData = 'Erreur';

        }        


        return $registerData;

    }




    
}


    





?>