<?php
include 'C:\xampp\htdocs\codelearners\backend\connect.php';
include 'C:\xampp\htdocs\Codelearners\backend\nav.php';

$query=false;

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $user_name=$_POST['username'];
    $_contact=$_POST['contact'];
    $_query=$_POST['query'];

    $sql="INSERT INTO `query` (`username`, `contact`, `query`) VALUES ('$user_name', '$_contact', '$_query')";
    $result=mysqli_query($conn,$sql);
    if ($result) {
            $query=true;
    }
    else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>For query</strong> Please login firts.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
      }    
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
    if($query==true){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Thank you for your response!</strong> We will inform you by call or mail.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <div class="container col-8">
        <h2 class="text-center">Ask your query</h2>
        <form action="query.php" method="post">
            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="username" required>
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">Contact</label>
                <input type="phone" class="form-control" id="contact" name="contact" aria-describedby="contact" required>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Ask your query" name="query" id="query" style="height:300px" required></textarea>
                <label for="query">Write your query</label>
              </div>
            <button type="submit" class="btn btn-primary my-4">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>