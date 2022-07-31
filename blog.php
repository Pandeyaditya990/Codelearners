<?php
include 'C:\xampp\htdocs\Codelearners\backend\connect.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeLearners-Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <?php
    include 'C:\xampp\htdocs\Codelearners\backend\nav.php';
    ?>
    <div class="container my-4">
        <h2 class="">CodeLearners Blogs</h2>
    </div>
    
    <div class="container my-2">
        <div class="row my-2">
            <?php
            
            $sql="SELECT * FROM `blog`";
            $result=mysqli_query($conn,$sql);
            
            while ($rows=mysqli_fetch_assoc($result)) {
                $serialno=$rows['srno'];
                $blog_title=$rows['title'];
                $blog_desc=$rows['description'];

        echo '
            <div class="col-md-4 my-4">
            <div class="card" style="width: 18rem;">
              <img src="\Codelearners\img\card'.$serialno.'.jpg" class="card-img-top" width="200px" height="160px">
              <div class="card-body">
                <h5 class="card-title">'.$blog_title.'</h5>
                <p class="card-text">'.substr($blog_desc,0,90).'....</p>
                <a href="blogpost.php?id='.$serialno.'" class="btn btn-primary">Read now</a>
              </div>
            </div>
            </div>';
            }
            
            ?>
        </div>
    </div>
</body>
</html>