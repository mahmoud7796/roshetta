<?php
  include 'connect.php';
  $id = $_GET['updateid'];
  $sql = "select * from `patients`where id=$id";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($result);
  $medicine = $row['medicine'];
  $notes = $row['notes'];
  if(isset($_POST['create'])){
    $medicine=$_POST['medicine'];
    $notes=$_POST['notes'];

    $sql = "update `patients` set id=$id,medicine='$medicine',notes='$notes'where id=$id ";

    $result = mysqli_query($con,$sql);
    if($result){
      header('location:display.php');
    }else{
      die(mysqli_error($con));
    }
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container my-5">
  <form method="post">
  <div class="mb-3">
    <label for="Medicine Type" class="form-label">Medicine Type</label>
    <select name="medicine" id="medicineType" class="form-select" autocomplete="off" value="<?php echo $medicine; ?>">
      <option value="">Search For The Type Of Medicine</option>
      <option value="Primperan Tablets">Primperan Tablets</option>
      <option value="Omez 20 Capsules"> Omez 20 Capsules</option>
      <option value="Spasmofen Amp"> Spasmofen Amp</option>
      <option value="Xithrone 500 mg">Xithrone 500 mg</option>
      <option value="Dexamethasone Amp"> Dexamethasone Amp</option>
      <option value="Ceftriaxone 1g"> Ceftriaxone 1g</option>
      <option value="Panadol Advance"> Panadol Advance</option>
      <option value=" Decancit SR"> Decancit SR</option>
      <option value="PowerCaps"> PowerCaps</option>
      <option value="Congestal"> Congestal</option>
      <option value="Comtrex Tablets"> Comtrex Tablets</option>
      <option value=" Panadol Extra Tablets"> Panadol Extra Tablets</option>
      <option value="Depovit B12 Amp"> Depovit B12 Amp</option>
      <option value=" Omega 3 Plus"> Omega 3 Plus</option>
      <option value=" Neurimax Cap Amp"> Neurimax Cap Amp</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="notes" class="form-label">Notes and how many times</label>
    <textarea class="form-control" placeholder="Post your comments here ..." rows="3" id="notes" name="notes" autocomplete="off" value="<?php echo $notes; ?>"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary" name="create">Create</button</form>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

