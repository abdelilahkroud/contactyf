<?php



$id = "";
$nom = "";
$prenom = "";
$email = "";
$numero = "";

$errorMessage = "";
$succesMessage = "";





if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $numero = $_POST["numero"];


    do{
        if (empty($nom) || empty($prenom) || empty($email) || empty($numero))
            $errorMessage = 'feild are requeir';
         

            $sql = "INSERT INTO contact (nom, prenom, email, numero)".
            "VALUES ('$nom','$prenom','$email','$numero')"; 
    
            $result = $connection->query($sql);
    
        if(!$result){
            $errorMessage = "invalid query: ".$connection->error;
        }

        else    
            $succesMessage = "succsecful work";
        
        header("location: index.php");
        exit; 

    }while(false);
}


?>
