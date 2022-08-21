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
            <li>
              <a href="introduction.php">
                <p>자기소개</p>
              </a>
              <div class="header_nav_detail">
                <div><a href="introduction.php#move_hello">인사말</a></div>
                <div>lorem</div>
                <div>itsum</div>
                <div>lorem</div>
              </div>
            </li>
            <li>
            <a href="#">
                <p>보유스킬</p>
            </a>
            <div class="header_nav_detail">
                <div>front</div>
                <div>back</div>
              </div>
            </li>
            <li>
            <a href="#">
                <p>포트폴리오</p>
            </a>
            <div class="header_nav_detail">
                <div>1</div>
                <div>2</div>
                <div>3</div>
                <div>4</div>
              </div>
            </li>
            <li>
            <a href="#">
                <p>contact</p>
            </a>
            
            </li>
            <li>
            <a href="#">
                <p>search</p>
            </a>
            
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="btn_toTop">
        Top
      </div>
  </header>
