<?php
include 'C:\xampp\htdocs\Codelearners\backend\connect.php';

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Signup - here</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <?php
  include 'C:\xampp\htdocs\Codelearners\backend\nav.php';
  
  ?>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="\Codelearners\img\pic1.jpg" height=500px; class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="\Codelearners\img\pic2.jpg" height=500px; class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="\Codelearners\img\pic3.jpg" height=500px; class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container my-4 ps-5">
    <h2 class="text-center my-2">Recommended Courses</h2>
    <div class="row my4">
      <?php
          $sql="SELECT * FROM `courses` Limit 3";
          $result=mysqli_query($conn,$sql);
          
          while ($rows=mysqli_fetch_assoc($result)) {
              $courceno=$rows['srno'];
              $title=$rows['course_title'];
              $desc=$rows['Course_desc'];
          
          
            echo '
            <div class="col-md-4 my-4">
            <div class="card" style="width: 18rem;">
              <img src="\Codelearners\img\card'.$courceno.'.jpg" class="card-img-top" width="200px" height="160px">
              <div class="card-body">
                <h5 class="card-title">'.$title.'</h5>
                <p class="card-text">'.substr($desc,0,90).'....</p>
                <a href="videos.php?id='.$courceno.'" class="btn btn-primary">Start learning</a>
              </div>
            </div>
            </div>';
          }
      ?>
    </div>
  </div>

  <div class="container">
    <h3 class="text-center my-4">Testimonials</h3>
    <div class="row">
      <div class="col">
        <p class="pe-4 my-2">I don't have words to thank this man, I'm really grateful to have this channel and website
          in my
          daily routine.
          If you're a mere beginner, then you can trust this guy and can put your time into his content.
          I can assure you that it'll be worth it.</p>
        <p><b>Shiv, Web Developer</b></p>
      </div>
      <div class="col">
        <p class="ps-4 my-2">For everyone who wants to level up their #Coding and #Dev skills - seriously, this channel
          is
          for you! Both basic and advanced stacks are covered on this channel, and one
          can learn according to his skill levels. And the icing on the cake is.</p>
        </p>
        <p class="ps-4"><b>Sandeep, PHP developer</b></p>
      </div>
    </div>
  </div>
  <p class="text-center py-2 mb-0 bg-dark text-light">All Rights Reserved By CodeLearners @ 2022</p>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
</body>

</html>