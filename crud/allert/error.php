<?php
include "./crud/ajoute.php";


if (empty($errorMessage) ) {
echo"       
<div class='alert alert-warning alert-dismissible fade show' role='alert'>
<strong>Holy guacamole!</strong>$errorMessage
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
};


  ?>  
