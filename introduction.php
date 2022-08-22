<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>enig's Page</title>
  <link rel="stylesheet" href="./src/css/reset.css" type="text/css"/>
  <link rel="stylesheet" href="./src/css/Header.css" type="text/css" />
  <link rel="stylesheet" href="./src/css/Footer.css" type="text/css" />
  <link rel="stylesheet" href="./src/css/Introduction.css" type="text/css" />
  
</head>
<body>
  <?php include_once 'header.inc' ?>
  <div class="introduction">
    <section class="introduction_main">
      <div class="introduction_img"></div>
      <div class="introduction_msg">
        <h1>enig's page에 오신걸 환영합니다.</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, sit!</p>
      </div>
      <div class="introduction_nav">
      <nav>
        <ul>
          <a href="introduction.php?cr=hello" class="intro_hello"><li>인사말</li></a>
          <a href="introduction.php?cr=career" class="intro_career"><li>경력</li></a>
          <a href="introduction.php?cr=news" class="intro_news"><li>소식</li></a>
          <a href="introduction.php?cr=location" class="intro_location"><li>location</li></a>
        </ul>
      </nav>
    </div>
    </section>
    
    <?php
      if(!empty($_GET['cr'])){
        $cr = $_GET['cr'];
        switch ($cr) {
          case 'hello':
            echo "<section class=\"introduction_hello\" id=\"move_hello\">
          <h1>인사말</h1>
          <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam autem qui numquam tempore magnam? Reiciendis delectus repellendus, doloribus amet quae cum?</h3>
          <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo alias expedita eveniet, iure earum veritatis similique sed facilis quae ipsum repellendus velit.</h3>
          <p>Lorem, ipsum.</p>
          </section>";
            break;
          case 'career':
            echo "career";
            break;
          case 'career':
            echo "career";
            break;  
          case 'news':
            echo "news";
            break;
          case 'location':
            echo "location";
            break;
          default:
            # code...
            break;
        }
      }else{
        echo "<section class=\"introduction_hello\" id=\"move_hello\">
          <h1>인사말</h1>
          <h3>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam autem qui numquam tempore magnam? Reiciendis delectus repellendus, doloribus amet quae cum?</h3>
          <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo alias expedita eveniet, iure earum veritatis similique sed facilis quae ipsum repellendus velit.</h3>
          <p>Lorem, ipsum.</p>
          </section>";
      }
      
    ?>
    
    <section class="introduction_career" id="move_career">

    </section>
    
  </div>
  <?php include_once 'footer.inc' ?>
  <script src="./src/js/Header.js" ></script>
  <script src="./src/js/introduction.js"></script>
</body>
</html>