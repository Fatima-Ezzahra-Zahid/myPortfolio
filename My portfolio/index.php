
<?php 
include '../Admin/config/db.php';
include '../Admin/config/session.php';
include 'lang.php';


$selectT = $db->query("SELECT * FROM projects");
$project = $selectT->fetchAll();

$selectT = $db->query("SELECT id_t,pict,text,name_t,work FROM testimonials");
$testimonials = $selectT->fetchAll();



$selectC = $db->query("SELECT id_c,nb_cl,nb_projetc,nb_hours,nb_workes FROM counte");
$count = $selectC->fetchAll();


$selectE = $db->query("SELECT * FROM education");
$educ = $selectE->fetchAll();

$selectE = $db->query("SELECT * FROM professional_expe");
$exp = $selectE->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My portfolio</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
 

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header-tops">
    <div class="container" id="cont">

      <h1><a href="index.php">Fatima-Ezzahra Zahid</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2><?= $title1 ?> <span><?= $title2 ?></span></h2>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header"><?= $home?></a></li>
          <li><a href="#about"><?= $about ?></a></li>
          <li><a href="#resume"><?= $Resume ?></a></li>
          <li><a href="#portfolio"><?= $portfolio ?></a></li>
          <li><a href="#contact"><?= $contact ?></a></li>
          <li>
          <a href="index.php?la=fr"><img src="https://demo.neontheme.com/assets/images/flags/flag-fr.png" /></a>
       
    </li>
    <li>
    <a href="index.php?la=en"><img src="https://demo.neontheme.com/assets/images/flags/flag-uk.png"/></a>
    </li>
        </ul>
      </nav><!-- .nav-menu -->

      <div class="social-links">
        <a href="https://twitter.com/EzzahraZahid" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="https://www.facebook.com/fatimaezzahra.zahid.1" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="https://www.instagram.com/fatimaezzahra.zahid/" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="https://join.skype.com/invite/fqzsLJBo2bjN" class="google-plus"><i class="icofont-skype"></i></a>
        <a href="https://www.linkedin.com/in/fatima-ezzahra-zahid-a86681186/" class="linkedin"><i class="icofont-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

      <div class="section-title">
        <h2><?= $title3 ?></h2>
        <p><?= $p1 ?></p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/me.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>UI/UX &amp; <?= $web ?></h3>
          <p class="font-italic">
           
          <?= $p2 ?>
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong><?= $i1 ?>:</strong>27 November 1997</li>
                <li><i class="icofont-rounded-right"></i> <strong><?= $i2 ?>:</strong> +212 665754482</li>
                <li><i class="icofont-rounded-right"></i> <strong><?= $city ?>:</strong>Youssoufia,Morocco</li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="icofont-rounded-right"></i> <strong><?= $Age ?>:</strong>22</li>
                <li><i class="icofont-rounded-right"></i> <strong><?= $Degree ?>:</strong>Bac+2</li>
                <li><i class="icofont-rounded-right"></i> <strong><?= $Email ?>:</strong>fatimaezzahrazahid7@gmail.com</li>
              </ul>
            </div>
          </div>
          <p>
          <?= $p3 ?>
          </p>
        </div>
      </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <div class="counts container">

      <div class="row">
      <?php foreach($count as $count):?>
        <div class="col-lg-3 col-md-6">
          <div class="count-box">
            <i class="icofont-simple-smile"></i>
            <span data-toggle="counter-up"><?= $count['nb_cl'];?></span>
            <p><?= $happy ?></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
          <div class="count-box">
            <i class="icofont-document-folder"></i>
            <span data-toggle="counter-up"><?= $count['nb_projetc'];?></span>
            <p><?= $projects ?></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="icofont-live-support"></i>
            <span data-toggle="counter-up"><?= $count['nb_hours'];?></span>
            <p><?= $hours ?></p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="count-box">
            <i class="icofont-users-alt-5"></i>
            <span data-toggle="counter-up"><?= $count['nb_workes'];?></span>
            <p><?= $hard?></p>
          </div>
        </div>
        <?php endforeach?>

      </div>

    </div><!-- End Counts -->

    <!-- ======= Skills  ======= -->
    <div class="skills container">

      <div class="section-title">
        <h2><?= $skills ?></h2>
      </div>

      <div class="row skills-content">

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">HTML <i class="val">85%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">CSS <i class="val">75%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>


          <div class="progress">
            <span class="skill">Sass<i class="val">70%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">JavaScript <i class="val">50%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>


          <div class="progress">
            <span class="skill">Bootstrap<i class="val">50%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">

          <div class="progress">
            <span class="skill">PHP <i class="val">60%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>


          <div class="progress">
            <span class="skill">Laravel<i class="val">50%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">MySql <i class="val">70%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>


          <div class="progress">
            <span class="skill">Sql server<i class="val">70%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

          <div class="progress">
            <span class="skill">Photoshop <i class="val">55%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>

        </div>

      </div>

    </div><!-- End Skills -->


    <!-- ======= Testimonials ======= -->
    <div class="testimonials container">

      <div class="section-title">
        <h2><?= $test ?>:</h2>
      </div>
      <div class="owl-carousel testimonials-carousel">
        
         <?php foreach($testimonials as $testimonials):?>

        <div class="testimonial-item" >
          <p>
            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
            <?= $testimonials['text'];?>
            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
          </p>
          <img src="../Admin/assets/img/<?= $testimonials['pict'];?>" class="testimonial-img" alt="">
          <h3><?=$testimonials['name_t'] ;?></h3>
          <h4><?=$testimonials['work'] ;?></h4>
        </div>
         <?php endforeach ?>

      </div>

     

    </div><!-- End Testimonials  -->

  </section><!-- End About Section -->

  <!-- ======= Resume Section ======= -->
  <section id="resume" class="resume">
    <div class="container">

      <div class="section-title">
        <h2><?= $Resume?></h2>
        <p><?= $check ?>:</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
        <h3 class="resume-title"><?= $edu?></h3>
        <?php foreach($educ as $educ):?>
          <div class="resume-item">
            <h4><?=$educ['title'] ?></h4>
            <h5><?=$educ['years'] ?></h5>
            <p><em><?=$educ['name_sc'] ?></em></p>
          </div>
         <?php endforeach ?>
          
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title"><?= $pro?></h3>
          <?php foreach($exp as $exp): ?>
          <div class="resume-item">
            <h4><?=$exp['title'] ?></h4>
            <h5><?=$exp['years'] ?></h5>
            <p><em><?=$exp['name'] ?> </em></p>
          </div>
          <?php endforeach ?>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->

 

  <!-- ======= Portfolio Section ======= -->

  <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title">
        <h2><?= $portfolio?></h2>
        <p><?= $work?></p>
      </div>

      
      <div class="row portfolio-container">
      <?php foreach($project as $project):?>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
          <input type="hidden" class="input" name="id_c" value="<?=$project['id_t']; ?>">
            <img src="../Admin/assets/img/<?= $project['pict'];?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?=$project['name_project'] ;?></h4>
              <div class="portfolio-links">
                <a href="../Admin/assets/img/<?= $project['pict'];?>" data-gall="portfolioGallery" class="venobox" title=<?=$project['name_project'] ;?>><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.php?id_c=<?= $project['id_pro'];?>" data-gall="portfolioDetailsGallery" data-vbtype="iframe" class="venobox" title="Portfolio Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

    

      </div>

    </div>
  </section>




  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2><?=$contact ?></h2>
        <p><?=$ct ?></p>
      </div>

      <div class="row mt-2">

        <div class="col-md-6 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-map"></i>
            <h3><?=$adress ?></h3>
            <p>52,Nouveau lotissement Essaada Street,Youssoufia, NY 46300</p>
          </div>
        </div>

        <div class="col-md-6 mt-4 mt-md-0 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-share-alt"></i>
            <h3><?=$social ?></h3>
            <div class="social-links">
            <a href="https://twitter.com/EzzahraZahid" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="https://www.facebook.com/fatimaezzahra.zahid.1" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="https://www.instagram.com/fatimaezzahra.zahid/" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="https://join.skype.com/invite/fqzsLJBo2bjN" class="google-plus"><i class="icofont-skype"></i></a>
            <a href="https://www.linkedin.com/in/fatima-ezzahra-zahid-a86681186/" class="linkedin"><i class="icofont-linkedin"></i></a>
            </div>
          </div>
        </div>

        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3><?=$email ?></h3>
            <p>fatimaezzahrazahid7@gmail.com</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 d-flex align-items-stretch">
          <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3><?=$cal ?></h3>
            <p>+212 665754482</p>
          </div>
        </div>
      </div>
      <?php 
                            $Msg = "";
                            if(isset($_GET['error']))
                            {
                                $Msg = " Please Fill in the Blanks ";
                                echo '<div class="alert alert-danger">'.$Msg.'</div>';
                            }

                            if(isset($_GET['success']))
                            {
                                $Msg = " Your Message Has Been Sent ";
                                echo '<div class="alert alert-success">'.$Msg.'</div>';
                            }
                        
                        ?>

      <form action="forms/mail_handler.php" method="post" role="form" class="php-email-form mt-4">
        <div class="form-row">
          <div class="col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validate"></div>
          </div>
          <div class="col-md-6 form-group">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
          <div class="validate"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
          <div class="validate"></div>
        </div>
        <div class="text-center"><button type="submit" name="btn-send"><?=$send ?></button></div>
      </form>

    </div>
  </section><!-- End Contact Section -->

  <div class="credits">
  copyright <a href="">2020
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>