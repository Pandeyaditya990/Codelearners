<?php
include 'C:\xampp\htdocs\Codelearners\backend\connect.php';
session_start();
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
echo '  
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="\Codelearners\courses.php">CodeLearners</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="\Codelearners\courses.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="\Codelearners\courses.php">Courses</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="\Codelearners\blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="\Codelearners\backend\query.php">Ask Query</a>
        </li>
      </ul>';
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
        echo '<header class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <p class="my-2 me-2 ms-2">'.$_SESSION['username'].'</p>
        </header>
        <button type="button" class="btn btn-success"><a class="nav-link" href="\Codelearners\backend\logout.php">Logout</a></button>
        ';
        }
        else {
          echo '<header class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
          </header>
          <button type="button" class="btn btn-success ms-2 me-2"><a class="nav-link" href="\Codelearners\backend\signup.php">Signup</a></button>
          <button type="button" class="btn btn-success"><a class="nav-link" href="\Codelearners\backend\login.php">Login</a></button>
          ';
        }
   echo' </div>
  </div>
</nav>';/*
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true) {
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert" mb-0>
  <strong>Login successful!</strong> Your account is created now you can login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}*/

?>
  <!--
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
      <a class="navbar-brand" href="\Codelearners\courses.php">CodeLearners</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="\Codelearners\courses.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="\Codelearners\courses.php">Courses</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="\Codelearners\blog.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="\Codelearners\backend\query.php">Ask Query</a>
          </li>
        </ul>
         <header class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
          <button type="button" class="btn btn-success ms-2 me-2"><a class="nav-link" href="\Codelearners\backend\signup.php">Signup</a></button>
          <button type="button" class="btn btn-success"><a class="nav-link" href="\Codelearners\backend\login.php">Login</a></button>
        </header>
      </div>
    </div>
  </nav>-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
</body>
</html>