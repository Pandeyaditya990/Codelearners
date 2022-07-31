<?php
include 'C:\xampp\htdocs\Codelearners\backend\connect.php';
$courceId=$_GET['id'];

 if (isset($_POST['upload'])) {
  
  $filename=$_FILES['uploadvideo']['name'];
  $tempname=$_FILES['uploadvideo']['tmp_name'];
  $folder="videos/".$filename;

  move_uploaded_file($tempname,$folder);
  $sql="INSERT INTO `video` (`cource_id`, `name`) VALUES ('$courceId', '$filename')";
  $result=mysqli_query($conn,$sql);

  if ($result) {
    echo "Video uploaded successfully";
  }
  else {
    echo "Video not upload because of few error";
  }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Videos-Watch more tutorials</title>
</head>
<body>
  <?php
        include 'C:\xampp\htdocs\Codelearners\backend\nav.php';
    ?>
    <!--
  <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data">
    <label for="filename">Filename</label>
    <input type="file" name="uploadvideo">
    <input type="submit" name="upload" value="upload">
  </form>
-->
<div class="container my-4">
  <h3 class="text-center">Currently no video tutorials available. You will get it soon.</h3>
</div>
  <?php
    ?>
</body>

</html>