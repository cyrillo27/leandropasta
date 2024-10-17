<?php

// Classe que retorna uma instância do banco de dados dentro da aplicação
class Database 
{
    private static $instance = null;

    // retorno estatico da instância encapsulada
    public static function getInstance()
    {
        if(self::$instance === null)
        {    
            $host - 'localhost';
            $dbname = 'sistema_vendas';
            $username = 'root';
            $password = '';
            
            self::$instance = new PDO("mysql;host=$host;dbbame=$dbname", $username,  $password);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }  

        return self::$instance;
    }
}

?>