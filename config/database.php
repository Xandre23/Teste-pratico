<?php

namespace Config;

use PDO;
use PDOException;

class Database
{
    public static function getConnection()
    {
        try {
            $host = 'localhost';
            $dbname = 'sistema_cadastro';
            $usuario = 'root'; 
            $senha = '3006';       

            return new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $usuario, $senha);
        } catch (PDOException $e) {
            die("Erro ao conectar: " . $e->getMessage());
        }
    }
}
