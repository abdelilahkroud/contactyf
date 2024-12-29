<?php




$result=$contact->afficher();
foreach($result as $row){
echo"
<tr>
    <th>$row[id]</th>
    <td>$row[nom]</td>
    <td>$row[prenom]</td>
    <td>$row[email]</td>
    <td>$row[numero]</td>
    <td><a href='./crud/modifer.php?id=$row[id]' class='btn btn-outline-warning btn-sm me-2'>MODIFER</a>
    <a type='button' href='./crud/suprimer.php?id=$row[id]' class='btn btn-outline-danger btn-sm'>SUPRIMER</a></td>  
    ";
  };
  ?>