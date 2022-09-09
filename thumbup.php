<?php session_start(); ?>

<?php 
  $id = $_GET['id'];
  $email = $_SESSION["user_email"];


  include("./connectMysql.php");
  $conn = new mysqli($servername,$username,$password,"enigspage");

  $sql1 = "SELECT isthumbup FROM USER WHERE email = '$email'";

  $prev_thumbup = mysqli_fetch_array(mysqli_query($conn,$sql1))['isthumbup'];

  if($prev_thumbup == NULL){
    $plusid = $id;
  }else{
    $plusid = $prev_thumbup . ',' . $id;
  }

  $sql2 = "UPDATE USER SET isthumbup = '$plusid' WHERE email = '$email'";
  mysqli_query($conn,$sql2);
  $conn -> close();
?>