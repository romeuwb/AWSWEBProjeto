<?php
/*
 *Autor: Victor Hugo
 * Data: 04/03/2015
 * Descrição: Classe responsável pela conexão ao banco de dados. 
 */
require 'config/config.php';
class dbConnection extends config{
    
    private $user = "root";
    private $pass = "root";
    private $host = "127.0.0.1";
    private $database = "DB_WBAWSWeb";
    
    //Conectar (privado)
    private function Connect(){
        $conn = new PDO("mysql:host=$this->host;dbname=$this->database",  $this->user, $this->pass);
        return $conn;
    }
    
    //Executa uma query. Retorna a quantidade de linha executada(True).
    public function RunQuery($sql){
        $stm = $this->Connect()->prepare($sql);
        return $stm->execute();
    }
    
    //Executa uma select
    public function RunSelect($sql){
        $stm = $this->Connect()->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}
