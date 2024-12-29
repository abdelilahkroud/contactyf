<?php

class contact {
    private $id;
    private $nom;
    private $prenom;
    private $numero;
    private $db;

    function __construct ($nom,$prenom,$numero,$db){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->numero = $numero;
            $this->db = $db;
    } 

    public function afficher(){
        $sql = "SELECT * FROM contact";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result=$stmt->FetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


}

$contact = new contact("kroud","adelilah",'06665858974',$cnx);
?>