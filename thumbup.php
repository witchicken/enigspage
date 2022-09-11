<?php session_start(); ?>

<?php 
  $id = $_GET['id'];
  if(isset($_SESSION['user_email'])){
    $email = $_SESSION["user_email"];
    include("./connectMysql.php");
    $conn = new mysqli($servername,$username,$password,"enigspage");
  
    $sql_select_isthumbup = "SELECT isthumbup FROM USER WHERE email = '$email'";
  
    $prev_thumbup = mysqli_fetch_array(mysqli_query($conn,$sql_select_isthumbup))['isthumbup'];
  
    if($prev_thumbup == NULL){
      $plusid = $id;
    }else{
      $split_prev_thumbup = explode(',',$prev_thumbup);
      $isexist_thumbup = false;
      foreach ($split_prev_thumbup as $item) {
        if($item === $id){
          $isexist_thumbup = true;
        }else{
          
        }
      }
      if($isexist_thumbup == true){
        echo "<script>
          alert('이미 추천 하였습니다.');
          window.location.href='/read.php?id=$id';
          </script>";
      }else{
        $plusid = $prev_thumbup . ',' . $id;
        $sql_update_isthumbup = "UPDATE USER SET isthumbup = '$plusid' WHERE email = '$email'";
        mysqli_query($conn,$sql_update_isthumbup);
        $board = mysqli_fetch_array($conn->query("select thumbup from board where id = $id"));
        $thumbup = $board['thumbup'] + 1;
        mysqli_query($conn,"UPDATE BOARD SET thumbup = $thumbup where id = $id");    
        echo "<script>
          alert('추천하였습니다..');
          window.location.href='/read.php?id=$id';
          </script>";
      }
    }
  $conn -> close();
    
    
  }else{
    echo "<script>
      alert('추천 권한이 없습니다.로그인 해 주세요.');
      window.location.href='/read.php?id=$id';
      </script>";
  }


  
?>