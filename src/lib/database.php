<?php


namespace Blog\Src\Lib\Database;

class DatabaseConnection
{
    public ?\PDO $database = null;

    public function getConnection(): \PDO
    {
    if ($this->database === null) {
        $this->database = new \PDO('mysql:host=localhost;port=3307;dbname=we_love_foods;charset=utf8', 
        'root', 'root'
    );
    }
    return $this->database;

}

}