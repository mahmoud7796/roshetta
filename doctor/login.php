<?php
$title = "Welcome To Rosetta Pro";
include_once "layouts/header.php";
include_once "middlewares/guest.php";
include_once "layouts/navbar.php";
include_once "../prescriptions/connect.php";

// HTTP => SERVER => $_POST
// email , password
/*
$users = [
    [
        'name'=>'Abdul_Rahman Awad',
        'username'=>'Abdul_Rahman Awad',
        'password'=>123456,
    ],
    [
        'name'=>'Mohamed Taher',
        'username'=>'Mohamed Taher',
        'password'=>1234,
    ],
];*/

$conn = new PDO(
    "mysql:host=$servername; dbname=$dbname",
    $username, $password
);
$stmt = $conn->prepare("SELECT * FROM users");
$stmt->execute();
$users = $stmt->fetchAll();

$stmt = $conn->prepare("SELECT * FROM users where type='patient' limit 1");
$stmt->execute();
$patient = $stmt->fetchAll();
if($_POST){
   // Validation
   // save old values 
   $errors = [];
   if(empty($_POST['username'])){
        $errors['username-required'] = "<div class='text-danger font-weight-bold my-1'> * username Is Required </div>";
   }

   if(empty($_POST['password'])){   
        $errors['password-required'] = "<div class='text-danger font-weight-bold my-1'>*  Password Is Required </div>";
   }

   // if no validation errors
   if(empty($errors)){
        foreach ($users as $index => $user) {
            if($user['name'] == $_POST['username'] && $user['password'] == $_POST['password']){
                $_SESSION['user'] = $user;
                $_SESSION['patient'] = $patient;
                header('location:patient_code.php');die;
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
                  <input type="username" name="username" id="username" value="<?= (isset($_POST['email'])) ? $_POST['email'] : ''  ?>" class="form-control" placeholder="UserName" aria-describedby="helpId" >
                  <?php 
                    if(isset($errors['username-required'])){
                        echo $errors['username-required'];
                    }
                ?>
                </div>
                
                <div class="form-group">
                  <input type="password" name="password" id="Password" class="form-control" placeholder="Password" aria-describedby="helpId" >
                  <?php 
                    if(isset($errors['password-required'])){
                        echo $errors['password-required'];
                    }
                    if(isset($errors['wrong-credentials'])){
                        echo $errors['wrong-credentials'];
                    }
                ?>
                </div>
               
                <div class="form-group">
                    <button class="btn btn-outline-primary btn-lg rounded">Sign In</button>

                 </div>
            </form>
        </div>
    </div>
</div>

<?php 
include_once "layouts/footer.php";
?>