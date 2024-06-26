<?php include 'include/config.php';
 
$sql = "SELECT * FROM `users` WHERE `users`.`id` = 1";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?=$data['name']?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <header id="header">
    <div class="container">

      <h1><a href="index.php"><?php echo $data['name']?></a></h1>
      <h2>I'm a passionate <span><?=$data['title']?></span> from <?=$data['place']?></h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <?php
          if($data['twitter']){
        ?>
            <a href="<?=$data['twitter']?>" target="blank" class="twitter"><i class="bi bi-twitter"></i></a>
        <?php
          }
        ?>

        <?php
          if($data['facebook']){
        ?>
            <a href="<?=$data['facebook']?>" target="blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <?php
          }
        ?>

        <?php
          if($data['instagram']){
        ?>
            <a href="<?=$data['instagram']?>" target="blank" class="instagram"><i class="bi bi-instagram"></i></a>
        <?php
          }
        ?>
        
        <?php
          if($data['linkedin']){
        ?>
             <a href="<?=$data['linkedin']?>" target="blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <?php
          }
        ?>
        
        <?php
          if($data['github']){
        ?>
            <a href="<?=$data['github']?>" target="blank" class="github"><i class="bi bi-github"></i></a>
        <?php
          }
        ?>
        
        <?php
          if($data['youtube']){
        ?>
            <a href="<?=$data['youtube']?>" target="blank" class="youtube"><i class="bi bi-youtube"></i></a>
        <?php
          }
        ?>
  
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2>About</h2>
        <p>Learn more about me</p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/me.jpg" class="img-fluid" alt="me">
        </div>

        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3><?php echo $data['title']?></h3>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?php echo date('d M Y', strtotime($data['birthday']))?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Gmail:</strong> <span><?=$data['gmail']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><?=$data['phone']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?=$data['city']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?=$data['age']?></span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Year Level:</strong> <span><?=$data['yearlevel']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Course:</strong> <span><?=$data['course']?></span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><?=$data['email']?></span></li> 
                <li><i class="bi bi-chevron-right"></i> <strong>Gender:</strong> <span>
                  <?php
                  if($data['gender'] == 1){
                    echo "Male";
                  }
                    else{
                      echo "Female";
                    }
                  ?>

                  </span></li>
              </ul>
            </div>
          </div>
          <p class="fst-italic">
          <?=$data['slogan']?>
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

      <div class="section-title">
        <h2>Interests</h2>
      </div>

      <div class="row">

      <?php

      $skills = "SELECT * FROM `skills`";
      $skills_result = mysqli_query($con, $skills);

      if($skills_result -> num_rows > 0){
        while($skills_row = $skills_result -> fetch_assoc()){
          ?>
            <div class="col-lg-3 col-md-4 mt-5">
             <div class="icon-box">
                <i class="<?=$skills_row['icon']?>" style="color: #<?=$skills_row['color']?>;"></i>
               <h3><?=$skills_row['title']?></h3>
              </div>
            </div>
          <?php
        }
      }
       
     ?>

      </div>

    </div><!-- End Interests -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Education</h3>
          <div class="resume-item pb-0">
            <h4>School</h4>
            <p><em></em></p>
            <p>
            <ul>
              <li>Academia De Padua</li>
              <li>Pury Elementary School</li>
              <li>Bixby Knolls Preparatory Academy</li>
              <li>National University - Lipa</li>
            </ul>
            </p>
          </div>

          <h3 class="resume-title">Achievements</h3>
          <div class="resume-item">
            <h4>Elementary</h4>
            <h5>2015 - 2016</h5>
            <p><em>Pury Elementary School</em></p>
            <p>Top Honor</p>
          </div>
          <div class="resume-item">
            <h4>High School</h4>
            <h5>2020</h5>
            <p><em>Bixby Knolls Preparatory Academy</em></p>
            <p>Bronze Awardee G10</p>
          </div>
        </div>
    </div>
  </section><!-- End Resume Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Contact Me</p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>My Address</h3>
            <p><?=$data['address']?></p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3>Social Profiles</h3>
                <div class="social-links">
        <?php
          if($data['twitter']){
        ?>
            <a href="<?=$data['twitter']?>" target="blank" class="twitter"><i class="bi bi-twitter"></i></a>
        <?php
          }
        ?>

        <?php
          if($data['facebook']){
        ?>
            <a href="<?=$data['facebook']?>" target="blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <?php
          }
        ?>

        <?php
          if($data['instagram']){
        ?>
            <a href="<?=$data['instagram']?>" target="blank" class="instagram"><i class="bi bi-instagram"></i></a>
        <?php
          }
        ?>
        
        <?php
          if($data['linkedin']){
        ?>
             <a href="<?=$data['linkedin']?>" target="blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <?php
          }
        ?>
        
        <?php
          if($data['github']){
        ?>
            <a href="<?=$data['github']?>" target="blank" class="github"><i class="bi bi-github"></i></a>
        <?php
          }
        ?>
        
        <?php
          if($data['youtube']){
        ?>
            <a href="<?=$data['youtube']?>" target="blank" class="youtube"><i class="bi bi-youtube"></i></a>
        <?php
          }
        ?>
  
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Me</h3>
            <p><?=$data['email']?></p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Call Me</h3>
            <p><?=$data['phone']?></p>
          </div>
        </div>
      </div>
      <?php 
        if(isset($_POST['send_message'])){
          $name = mysqli_real_escape_string($con, $_POST['name']);
          $email = mysqli_real_escape_string($con, $_POST['email']);
          $subject = mysqli_real_escape_string($con, $_POST['subject']);
          $message = mysqli_real_escape_string($con, $_POST['message']);

          $contact = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
          mysqli_query($con, $contact);
        }
      ?>
      <form action="#" method="post" role="form" class="mt-4">
        <div class="row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
        </div>
        <div class="form-group mt-3">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="text-center"><button type="submit" name="send_message">Send Message</button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
    <?php 

    $details = "SELECT * FROM `details` WHERE `details`.`id` = 1";
    $details_result = mysqli_query($con, $details);
    $details_data = mysqli_fetch_assoc($details_result);

    ?>
    Designed by <a href="<?=$details_data['url']?>" target="_blank"><?=$details_data['company']?></a>
  </div>

  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>