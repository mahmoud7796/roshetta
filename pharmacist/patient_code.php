<?php
$title = "patient_Code";
include_once "layouts/header.php";
// include_once "middlewares/guest.php";
include_once "layouts/navbar.php";
// HTTP => SERVER => $_POST
// email , password

$users = [
    [
        'id' => 4444,
        'name' => "Mohamed Gamal"
    ],
    [
        'id'=>55555,
        'name' => "Mohamed Gamal"

    ],
];


if($_POST){
   // Validation
   // save old values 
   $errors = [];
   if(empty($_POST['id'])){
        $errors['id-required'] = "<div class='text-danger font-weight-bold my-1'> * Code Is Required </div>";
   }

  

   // if no validation errors
   if(empty($errors)){
        foreach ($users as $index => $user) {
            if($user['id'] == $_POST['id']){
                $_SESSION['user'] = $user;
                header('location:patient_profile.php');die;
            }
        }
        $errors['wrong-credentials'] = "<div class='text-danger font-weight-bold my-1'> These credentials are incorrect </div>";
   }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
      body
      {
          background-image: url('assets/img/22.jpg');
      }
  </style>
</head>

</html>
<div class="container">
    <div class="row mt-5">
        <div class="col-12 text-center h1 text-primary">
            <?= $title ?>
        </div>
        <div class="offset-4 col-4">
            <form action="" method="post">
                <div class="form-group">
                  <input type="password" name="id" id="id" value="<?= (isset($_POST['email'])) ? $_POST['email'] : ''  ?>" class="form-control" placeholder="enter code" aria-describedby="helpId" >
                  <?php 
                    if(isset($errors['id-required'])){
                        echo $errors['id-required'];
                    }
                ?>
                </div>
                <div class="form-group">
                    <button class="btn btn-outline-primary btn-lg rounded">Confirm</button>
                 </div>
            </form>
        </div>
    </div>
</div>

<?php 
include_once "layouts/footer.php";
?>