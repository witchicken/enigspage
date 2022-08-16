<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./src/css/Header.css">
</head>
<body>
  <header class="header">
    <div class="header_back">
      <?php 
      if(!isset($_SESSION['user_email']) || !isset($_SESSION['user_nickname'])){
        echo "<a href=\"login.php\">로그인</a>";
        echo "<a href=\"signup.php\">회원가입</a>";
      }else{
        $user_email = $_SESSION['user_email'];
        $user_nickname = $_SESSION['user_nickname'];
        echo "<p><strong>$user_nickname</strong>님 환영합니다.";
        echo "<a href=\"logout.php\">[로그아웃]</a></p>";
      }
    ?>
    </div>
    <div class="header_container">
      <div class="header_company">
        <div class="header_company_logo">
        </div>
        <a class="header_company_name" href="/">
            <span>enig's </span> <span>Page</span>
          </a>
      </div>
      <div class="header_nav">
        <nav>
          <ul>
            <li><p>자기소개</p>
              <div class="header_nav_detail">
                <div>인사말</div>
                <div>lorem</div>
                <div>itsum</div>
                <div>lorem</div>
              </div>
            </li>
            <li><p>보유스킬</p>
            <div class="header_nav_detail">
                <div>front</div>
                <div>back</div>
              </div>
            </li>
            <li><p>포트폴리오</p>
            <div class="header_nav_detail">
                <div>1</div>
                <div>2</div>
                <div>3</div>
                <div>4</div>
              </div>
            </li>
            <li><p>Contact</p>
            
            </li>
            <li><p>search</p>
            
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <script src="./src/js/Header.js" ></script>
</body>
</html>
