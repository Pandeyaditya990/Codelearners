<?php
include 'C:\xampp\htdocs\codelearners\backend\connect.php';
$login=false;

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $Email=$_POST['email'];
    $pass=$_POST['pass'];

    $sql="SELECT * FROM `login` WHERE `email`='$Email' AND `pass`='$pass'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);

      if ($num==1) {
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['username']=$Email;
        $login=true;
        header('location:\Codelearners\courses.php');
      }
     else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Invalid Credentials!</strong> Enter valid username and password.
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
    <title>Login - here</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <?php
    include 'C:\xampp\htdocs\Codelearners\backend\nav.php';
    
    ?>
    <?php
    if($login==true){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Login successful!</strong> Your account is created now you can login.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }    
    ?>
  <div class="container col-4 my-4">
      <h2 class="text-center">Login Here</h2>
            <form method="post" action="login.php">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" name="pass" id="pass" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
          </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>