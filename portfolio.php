<?php session_start(); ?>

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
  <link rel="stylesheet" href="./src/css/Portfolio.css" type="text/css" />
</head>
<body>
  <?php include_once 'header.inc' ?>
  <section class="portfolio">
    <div class="portfolio_main">
      <div class="portfolio_backimg"></div>
      <h1>portfolio</h1>
    </div>
    <div class="portfolio_list">
      <ul>
        <li>
          <div class="portfolio_content">
            <div class="portfolio_thumbnail"></div>
            <div class="portfolio_des">
              <h1>travelAgency</h1>
              <p>html,css,js</p>
              <a href="/folio/01_travelAgency">
                <span>visit site</span>
                <svg width="13px" height="10px" viewBox="0 0 13 10">
                  <path d="M1,5 L11,5"></path>
                  <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
              </a>
            </div>
          </div>
        </li>
        <li>
        <div class="portfolio_content">
            <div class="portfolio_thumbnail"></div>
            <div class="portfolio_des">
              <h1>svgcontroller</h1>
              <p>html,css,js</p>
              <a href="/folio/02_svgcontrol">
                <span>visit site</span>
                <svg width="13px" height="10px" viewBox="0 0 13 10">
                  <path d="M1,5 L11,5"></path>
                  <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
              </a>
            </div>
          </div>
        </li>
        <li>
        <div class="portfolio_content">
            <div class="portfolio_thumbnail"></div>
            <div class="portfolio_des">
              <h1>simplecountdown</h1>
              <p>react,css,js</p>
              <a href="/folio/03_simpleCountdown">
                <span>visit site</span>
                <svg width="13px" height="10px" viewBox="0 0 13 10">
                  <path d="M1,5 L11,5"></path>
                  <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
              </a>
            </div>
          </div>
        </li>
        <li>
        <div class="portfolio_content">
            <div class="portfolio_thumbnail"></div>
            <div class="portfolio_des">
              <h1>enigmusic</h1>
              <p>html,css,js</p>
              <a href="/folio/04_enigmusic">
                <span>visit site</span>
                <svg width="13px" height="10px" viewBox="0 0 13 10">
                  <path d="M1,5 L11,5"></path>
                  <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
              </a>
            </div>
          </div>
        </li>
        <li>
          <div class="portfolio_content">
            <div class="portfolio_thumbnail"></div>
            <div class="portfolio_des">
              <h1>weddingform</h1>
              <p>react,css,express,axios,mysql,</p>
              <p>heroku.kakaoapi(kakaomap)</p>
              <a href="https://testwitchicken.herokuapp.com/">
                <span>visit site</span>
                <svg width="13px" height="10px" viewBox="0 0 13 10">
                  <path d="M1,5 L11,5"></path>
                  <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
              </a>
            </div>
          </div>
        </li>
        <li>
        <div class="portfolio_content">
            <div class="portfolio_thumbnail"></div>
            <div class="portfolio_des">
              <h1>simplelogin</h1>
              <p>jsp,jstl,tomcat,servlet,eclipse</p>
              <a href="/nothosted.php">
                <span>visit site</span>
                <svg width="13px" height="10px" viewBox="0 0 13 10">
                  <path d="M1,5 L11,5"></path>
                  <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
              </a>
            </div>
          </div>
        </li>
        
      </ul>
    </div>
  </section>
  <?php include_once 'footer.inc' ?>
  <script src="./src/js/Header.js" ></script>
</body>
</html>