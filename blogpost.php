<?php
include 'C:\xampp\htdocs\Codelearners\backend\connect.php';
include 'C:\xampp\htdocs\Codelearners\backend\nav.php';

$blogno=$_GET['id'];
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
      $blogno=$_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $comment=$_POST['comment'];
        $user=$_SESSION['username'];

        $sql="INSERT INTO `comment` (`blog_no`, `Comment_content`, `user_id`) VALUES ('$blogno', '$comment', '$user')";
        $result=mysqli_query($conn,$sql);
      }
}
else {
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>You can not comment</strong> For commenting login firts.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>blogpost</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <div class="container my-4">
    <?php

        $blog_id= $_GET['id'];
        $sql="SELECT * FROM `blog` WHERE srno='$blog_id'";
        $result=mysqli_query($conn,$sql);
        //$num=mysqli_num_rows($result);
        
        while ($rows=mysqli_fetch_assoc($result)) {
            $serial=$rows['srno'];
            $title=$rows['title'];
            $desc=$rows['description'];

            echo '<div class="caontainer text-center">
            <div class="card-body">
              <img class="img-fluid rounded" src="\Codelearners\img\pic3.jpg" alt="" srcset="" height=600px width=600px>
              <h2 class="my-4">'.$title.'</h2>
              <p>'.$desc.'</p>
            </div>
          </div>';
        }
        ?>
  </div>
  <div class="container">
    <h5 class="my-4">Leave a comment.</h5>
    <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
      <div class="form-floating">
        <textarea class="form-control" placeholder="Leave a comment here" name="comment" id="comment"
          style="height: 100px" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary my-4">Submit</button>
    </form>
  </div>


  
  <?php 
      if ($result) {
        $sql2="SELECT * FROM `comment` WHERE `blog_no`='$blogno'";
        $firequery=mysqli_query($conn,$sql2);
        $num_of_comment=mysqli_num_rows($firequery);
        if ($num_of_comment>0) {
            while ($rows=mysqli_fetch_assoc($firequery)) {
                $comm=$rows['Comment_content'];
                $user_id=$rows['user_id'];
                echo' <div class="container">
                <p>'.$comm.'</p>
                <p>'.$user_id.'</p>
                </div>';
            }       
        }  
        else {
          echo '<div class="container"><p>No comment found</p></div>';
            
        }
    }
  ?>
  <p class="text-center py-2 mb-0 bg-dark text-light">All Rights Reserved By CodeLearners @ 2022</p>

</body>

</html>