<?php
$title = "patient_profile";
include_once "layouts/header.php";
include_once "middlewares/auth.php";
include_once "layouts/navbar.php";
include_once "../Prescriptions/connect.php";
?>
<?php 
   
    // if(isset($_POST['submit'])){
    //     $place = $_POST['place'];
    //     $content = $_POST['content'];
    //     $sql = "insert into `medicine` (place , content) values('$place', '$content')";
    //     $result = mysqli_query($con,$sql);      
    //   }
      // if(isset($_POST['submit'])){
      //   $content = $_POST['content'];
      //     $sql = "insert into `medicine` (content) values('$content')";
      //     $result = mysqli_query($con,$sql);
  
      //   }
      
    


?>



<head>



<style>
 /* #left {
            flex: 0 1 80%;
            margin: auto;
        }

        #left #drugs-section {
            display: flex;
            flex-direction: row;
            margin: 50px;
        } */

        div.drugs {
            text-align: center;
        }

        /* div.drugs button {
            color: rgb(255, 255, 255);
            border: none;
            border-radius: 10px;
            padding: 8px 15px;
            background-color: #3877E5;
            box-shadow: 2px 2px 2px         
            
        } */

        div.drug {
            color: rgb(255, 255, 255);
            margin: 10px;
            background-color: #3877E5;
            text-align: center;
            border-radius: 10px;
            padding: 10px;
            text-align: center;

        }

        form {
            width: 70%;
            display: flex;
            flex-direction: column;
            margin: auto;

        }

        form label {
            font-size: 22px;
            font-weight: bold;
            margin: 10px 10px;
            text-align: left;
            

        }

        form select {
            border-radius: 10px;
            padding: 10px;
            border: none;
            box-shadow: 2px 2px 2px rgb(199, 195, 195);

        }

        form textarea {
            border-radius: 10px;
            padding: 10px;
            border: 1px solid rgb(0, 0, 0);
            

        }

        div.add {
            text-align: center;
            margin-top: 60px;
            margin-bottom: 100px;
            padding: 32px 20px ;
        }

        form input {
            color: rgb(255, 255, 255);
            background-color: #3877E5;
            box-shadow: 2px 2px 2px rgb(199, 195, 195);
            padding: 10px;
            border-radius: 10px;
            border: none;
            font-size: 20px;
            font-weight: bold;



        }
</style> 
 
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
        
</head>

<body>

 
  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  
  <header id="header">
      
    <div class="d-flex flex-column">
        
      <div class="profile">
        <img src="123.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html"><?php echo $_SESSION['patient'][0]['name']?></a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="telegram"><i class="bx bxl-telegram"></i></a>
          <a href="#" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Personal Data</span></a></li>
          <li><a href="#left" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span> Diagnosis</span></a></li>
          <li><a href="#Portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Prescriptions</span></a></li>
            <li><a href="logout.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Logout</span></a></li>

            <!-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-about"></i> <span>About Us</span></a></li> -->
        </ul>
      </nav><!-- .nav-menu -->
    </div>
    
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <!-- <img src=".jpg" alt=""> -->
    <div class="hero-container" data-aos="fade-in">
      <h1>Rosetta Pro</h1>
      <p>Make The Service <span class="typed" data-typed-items="Easier, Faster, Better"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2> Personal Data</h2>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cumque dignissimos impedit delectus!</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="123.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3><?php echo $_SESSION['patient'][0]['name']?></h3>
    
            <p class="fst-italic">
              Student at faculty of computers and information mansoura university
            </p>
            <br>
            <br>

            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>10 Fab 2000</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?php echo $_SESSION['patient'][0]['email']?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>01026441602</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Mansoura</span></li>
                </ul>
              </div>
              <br>
              <br>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>22</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Bachelor's</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Gender:</strong> <span>Male</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Blood Type:</strong> <span>O+</span></li>
                </ul>
              </div>
            </div>
            <!-- <p>
              Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
              Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
            </p> -->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    

    <!-- ======= Resume Section ======= -->
    
    <a href="../Prescriptions/presc.php?patientId=<?php echo $_SESSION['patient'][0]['id']?>"><button class="btn btn-primary">Add Prescriptions</button></a>
    
   




    <!-- ======= Prescription Section ======= -->
    <section id="Portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Prescriptions</h2>
          <p>This group contains all prescriptions (modern and old)</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Old Prescriptions</li>
              <li data-filter=".filter-web">Modern Prescriptions</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="rosetta.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="rosetta.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="rosetta3.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="rosetta3.png" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="rosetta.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="rosetta.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="rosetta3.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="rosetta1.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="rosetta1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="rosetta3.png" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>
          <?php
          $userId= $_SESSION['patient'][0]['id'];
          $conn = new PDO(
          "mysql:host=$servername; dbname=$dbname",
          $username, $password
          );
          $stmt = $conn->prepare("SELECT medicine, notes FROM patients, users where users.id='".$userId."' AND users.id=patients.patient_id");
          $stmt->execute();
          $users = $stmt->fetchAll();
          ?>
          <h2><?=$_SESSION['patient'][0]['name']?> Prescriptions</h2><br>
          <table class="table">
              <thead>
              <tr>
                  <th scope="col">Medicine</th>
                  <th scope="col">Notes and how many times</th>
              </tr>
              </thead>
              <tbody>
              <?php
              foreach ($users as $user){
                  echo ' <tr>
                <td>'.$user['medicine'].'</td>
                <td>'.$user['notes'].'</td>
                <td>
                </td>
              </tr>';
              }

              ?>
              </tbody>
          </table>

          <a href="../Prescriptions/done.php"><button class="btn btn-primary">Update Prescription</button></a>
      </div>
    </section><!-- End Portfolio Section -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/main.js"></script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>

</html>
<?php ?>

<?php
include_once "layouts/footer.php";
?>