<?php

class Db{
    private  $servername = "localhost";
    private  $username = "root";
    private  $password = "";
    private  $database ="contacts";

    public function connection(){
        $conn = new PDO("mysql:host=$this->servername;dbname=$this->database", $this->username, $this->password);
        return $conn;
    }

}

$dg=new Db();
$cnx=$dg->connection();


?>