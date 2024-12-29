<?php



if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql = "DELETE FROM contact WHERE id=$id";
}

?>
