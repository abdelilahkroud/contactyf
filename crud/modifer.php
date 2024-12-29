<?php


$id = "";
$nom = "";
$prenom = "";
$email = "";
$numero = "";

$errorMessage = "";
$succesMessage = "";
$id = $_GET["id"];
// var_dump($id);
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
        

    // if(!isset($GET[$id])){
    //     header("location: ../index.php");
    //     exit;
    // }

    $sql = "SELECT * FROM contact WHERE id=$id";

    $result = $connection->query($sql);
    $row = $result->fetch_assoc();
    var_dump($row);

    if(!$row){
        header("location: ../index.php");
        exit;
    }

    $nom = $row["nom"];
    $prenom = $row["prenom"];
    $email = $row["email"];
    $numero = $row["numero"];
}

else{

    $id = $_POST["id"];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $numero = $_POST["numero"];

    do{
        if (empty($nom) || empty($prenom) || empty($email) || empty($numero)){
            $errorMessage = 'field is requiered';
        }
        $sql = "UPDATE contact". 
        "SET nom = '$nom', prenom = '$prenom',email = '$email', numero = '$numero'". 
        "WHERE id = $id" ;
        
        $result = $connection->query($sql);

        if(!$result){
            $errorMessage = "invalid query ". $connection->error;
        }
        else $succesMessage = "client updated";

        header("location: ../index.php");
        exit;

    }while(false);
}
?>
<form method="post" class="form">
    

<div class="row">
  <div class="col">
    <label for="exampleInputEmail1" class="form-label">NOM</label>
    <input type="text" class="form-control" name="nom" value="<?php echo $nom; ?>">
  </div>
  <div class="col">
    <label for="exampleInputEmail1" class="form-label">PRENOM</label>
    <input type="text" class="form-control" name="prenom"  value="<?php echo $prenom; ?>">
  </div>
</div>
  <div class="col">
    <label for="exampleInputEmail1" class="form-label">EMAIL</label>
    <input type="text" class="form-control" name="email"  value="<?php echo $email; ?>">
  </div>
  <div class="col">
    <label for="exampleInputEmail1" class="form-label">NUMERO</label>
    <input type="text" class="form-control" name="numero"  value="<?php echo $numero; ?>">
  </div>
  <div class="form-group">
    <input class="btn btn-success btn-sm mt-2" type="submit">
  </div>
  
</form>
<?php


