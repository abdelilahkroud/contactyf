<?php include "./component/layouts/head.php" ;?>
<?php include "./component/layouts/navbar.php";?>
<?php include "./crud/ajoute.php";?>
<?php include "./crud/suprimer.php";?>




<table class="table m-5 table-hover table-striped">
  <thead>
    <tr>
      <th scope="col" class="text-primary">ID</th>
      <th scope="col" class="text-primary">NOM</th>
      <th scope="col" class="text-primary">PRENOM</th>
      <th scope="col" class="text-primary">EMAIL</th>
      <th scope="col" class="text-primary">NUMERO</th>
    </tr>
  </thead>

  <tbody>
    <?php include "./crud/aficher.php";?>
  </tbody>

</table>

<div class="position-relative w-100"> 
  <div class="position-absolute top-0 start-50 translate-middle-x w-50">

  <form method="post" class="form">
    
    <?php include "./crud/allert/sucse.php"; ?>
    <?php include "./crud/allert/error.php"; ?>

    <div class="row">
      <div class="col">
        <label for="exampleInputEmail1" class="form-label">NOM</label>
        <input type="text" class="form-control" name="nom">
      </div>
      <div class="col">
        <label for="exampleInputEmail1" class="form-label">PRENOM</label>
        <input type="text" class="form-control" name="prenom">
      </div>
    </div>
      <div class="col">
        <label for="exampleInputEmail1" class="form-label">EMAIL</label>
        <input type="text" class="form-control" name="email">
      </div>
      <div class="col">
        <label for="exampleInputEmail1" class="form-label">NUMERO</label>
        <input type="text" class="form-control" name="numero">
      </div>
      <div class="form-group">
        <input class="btn btn-success btn-sm mt-2" type="submit">
      </div>
      
  </form>

</div>
</div>

<?php include "./component/layouts/footer.php"; ?>