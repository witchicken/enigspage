<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>enig'sPage</title>
  <link rel="stylesheet" href="./src/css/reset.css" type="text/css"/>
  <link rel="stylesheet" href="./src/css/Header.css" type="text/css" />
  <link rel="stylesheet" href="./src/css/Footer.css" type="text/css" />
  <link rel="stylesheet" href="./src/css/Board.css" type="text/css" />

  
</head>
<body>
  <?php include_once 'header.inc' ?>
  <section class="board">
    <div class="board_container">
      <div class="board_background">
        <p>Board</p>
      </div>
      
    </div>
    <div class="board_content">
        <table class="board_list">
        <thead>
          <tr>
              <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="120">글쓴이</th>
                <th width="100">작성일</th>
                <th width="100">추천수</th>
                <th width="100">조회수</th>
            </tr>
        </thead>
        <?php
          include("./connectMysql.php");
          $conn = new mysqli($servername,$username,$password,"enigspage");
          mysqli_report(MYSQLI_REPORT_ALL);
          $sql = "SELECT * FROM BOARD order by id desc limit 0,10";
          $board = $conn -> query($sql) -> fetch_array();
          echo $board;
          $conn -> close();
          
        ?>
        <tbody>
          <tr>
          <td width="70"><?php echo $board['id']; ?></td>
          <td width="500"><a href=""><?php echo $title;?></a></td>
          <td width="120"><?php echo $board['email']?></td>
          <td width="100"><?php echo $board['date']?></td>
          <td width="100"><?php echo $board['hit']; ?></td>
          <td width="100"><?php echo $board['thumbup']?></td>
          </tr>
        </tbody>
        
        </table>
    </div>
  </section>
  <?php include_once 'footer.inc' ?>
  <script src="./src/js/Header.js" ></script>
</body>
</html>