<?php
include 'C:\xampp\htdocs\Codelearners\backend\connect.php';
$signup=false;
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $Email=$_POST['email'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];

    if ($pass==$cpass) {

     // $hash=password_hash($pass,PASSWORD_DEFAULT);
      $sql="INSERT INTO `login` (`email`, `pass`, `cpass`) VALUES ('$Email', '$pass', '$cpass')";
      $result=mysqli_query($conn,$sql);

      if ($result) {
        $signup=true;
      }
      else {
        echo "Data not submited";
      }
    }
    else {   
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Error!</strong> Password and confirm password should be same.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  
    }
}

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
  <?php
          if($signup==true){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Signup successful!</strong> Your account is created now you can login.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          }
          ?>
  <div class="container col-6">
    <h2 class="text-center">Signup here</h2>
    <form method="post" action="signup.php">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="pass" id="pass" required>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" name="cpass" id="cpass" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
</body>

</html>