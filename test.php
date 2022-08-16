<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  test123
  <?php 
    $orgStr = "Jongbin";

    $enc1 = password_hash($orgStr, PASSWORD_DEFAULT);
    $enc2 = password_hash($orgStr, PASSWORD_DEFAULT);
    $enc3 = password_hash($orgStr, PASSWORD_DEFAULT);
    
    echo "<br/>org = $orgStr";
    echo "<br/>enc1 = $enc1";
    echo "<br/>enc2 = $enc2";
    echo "<br/>enc3 = $enc3";
    echo "<hr/>";

    $tmp = "jongbin";
    echo password_verify($tmp, $enc3) ? "일치함" : "다름";

    $tmp = "jongBin";
    echo "<br/>$tmp 는 ".(password_verify($tmp, $enc3) ? "일치함" : "다름");

    $tmp = "Jongbin";
    echo "<br/>$tmp 는 ".(password_verify($tmp, $enc3) ? "일치함" : "다름");

    echo "<br/>$tmp 는 ".(password_verify($tmp, $enc2) ? "일치함" : "다름");

    echo "<br/>$tmp 는 ".(password_verify($tmp, $enc1) ? "일치함" : "다름");


  ?>
</body>
</html>