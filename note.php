<?php
  include_once "base.php";
?>
 
<?php
// ? 為要放入查詢句子的變數
$sql="select * from information where 1";
$user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Resume - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/resume.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">
      <span class="d-block d-lg-none">Clarence Taylor</span>
      <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="img/profile.jpg" alt="">
      </span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#media">Media</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#education">Experience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="show.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#job">Job conditions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid p-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-top" id="about">
      <div class="w-100">
        <h1 class="mb-0"><?php echo $user["name"];?>
          <span class="text-primary">Leo</span>
        </h1>
        <div class="subheading mb-5">0975370801
          <a href="mailto:name@email.com">leohus999@hotmail.com</a>
        </div>
        <p class="lead mb-5"><?php echo" 一生追求的座右銘".$user["motto"];?></p>
        <div class="social-icons">
          <a href="https://www.linkedin.com/in/leohsu999/">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a href="https://github.com/leohsu999">
            <i class="fab fa-github"></i>
          </a>
          <a href="https://www.facebook.com/">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>
      </div>
    </section>

    <hr class="m-0">
    <h2 class="mb-5">媒體宣傳</h2>
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-top" id="media">
      <div class="w-100">
    <?php
        foreach ($pdo->query('select * from media ' ) as $row) {
        
?>

   
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php echo $row["exposure"];?></h3>
            <div class="subheading mb-3"><?php echo $row["m1"];?></div>
            <div class="subheading mb-3"><?php echo $row["link1"];?></div>
          </div>
          
      </div>
      <?php
} 
?>
    </section>

    <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-top" id="education">
      <div class="w-100">
        <h2 class="mb-5">學經歷</h2>
    <?php
    foreach ($pdo->query('select * from exp' ) as $row) {
  ?>
 
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php echo $row["class"];?></h3>
            <div class="subheading mb-3"><?php echo $row["c1"];?></div>
            <!-- <div>Computer Science - Web Development Track</div>
            <p>GPA: 3.23</p> -->
          </div>
          <div class="resume-date text-md-right">
            <!-- <span class="text-primary">August 2006 - May 2010</span> -->
          </div>
        </div>
        <?php
}
?>
        
    </section>
    <hr class="m-0">
      <h2 class="mb-5">專業技能</h2>

        <div class="subheading mb-3">Programming Languages &amp; Tools</div>
        <ul class="list-inline dev-icons">
          <li class="list-inline-item">
            <i class="fab fa-html5"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-css3-alt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-js-square"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-angular"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-react"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-node-js"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-sass"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-less"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-wordpress"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-gulp"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-grunt"></i>
          </li>
          <li class="list-inline-item">
            <i class="fab fa-npm"></i>
          </li>
        </ul>
        <div class="subheading mb-3">專業執照<div>
<section class="resume-section p-3 p-lg-5 d-flex align-items-top" id="skills">
      <div class="w-100">
      <ul class="fa-ul mb-0">
    <?php
        foreach ($pdo->query('select * from license' ) as $row) {
      ?>


  
          <li>
            <i class="fa-li fa fa-check"></i>
            <?php echo $row['l1'];?></li>
            <?php
  }

?>
        </ul>
      </div>
    </section>
    <?php
// ? 為要放入查詢句子的變數
$sql="select * from introduction where 1";
$user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
?>
    <hr class="m-0">

    <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
      <div class="w-100">
        <h2 class="mb-5">個人自傳</h2>
        <p><?php echo nl2br( $user["myself"]);?></<p>
        <p class="mb-0"></p>
      </div>
    </section>
    <h2 class="mb-5">Awards &amp; Certifications</h2>
    <hr class="m-0">
    <section class="resume-section p-3 p-lg-5 d-flex align-items-top" id="job">
      <div class="w-100">

      <hr class="m-0">
    <h2 class="mb-5">求職條件</h2>
    <section class="resume-section p-3 p-lg-5 d-flex justify-content-top" id="job">
      <div class="w-100">
    <?php
        foreach ($pdo->query('select * from job ' ) as $row) {
        
?>

   
        <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
          <div class="resume-content">
            <h3 class="mb-0"><?php echo $row["j1"];?></h3>
            <div class="subheading mb-3"><?php echo $row["c1"];?></div>
          </div>
          
      </div>
      <?php
} 
?>
    </section>
    <hr class="m-0">
<section class="resume-section p-3 p-lg-5 d-flex align-items-top" id="awards">
     
<h2 class="mb-5">專業證照</h2>
      <?php
    $all=$pdo->query('select * from license')->fetchAll(PDO::FETCH_ASSOC);
        foreach ($all as $row) {
            echo "<ul>";
      ?>

<div class="w-100">
 
        <ul class="fa-ul mb-0">
        <ul class="fa-ul mb-0">
       
          <li>
            <i class="fa-li fa fa-trophy text-warning"></i>
            <?php echo $row['l1'];?>
          </li>

          <li>
          <i class="fa-li fa fa-trophy text-warning"></i>
            <?php echo $row['l2'];?>
          </li>
         
        </ul>
        <?php
/*            foreach($row as $k=> $r){
 
          if(!empty($r)){
             if($k!="id")
              echo "<li>$r</li>";
         
          }
       } */
        ?>
</ul>
        </div>
<?php
    }

?>
      </div>
    </section>

  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/resume.min.js"></script>

</body>

</html>

