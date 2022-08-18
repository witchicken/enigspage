<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>enig's Page</title>
    <!--fontawesome-->

    <!--font-->
    
    <link rel="stylesheet" href="./src/css/reset.css">
    <link rel="stylesheet" href="./src/css/Home.css">

  </head>
  <body>
    <div class="Home">
      <section class="Home_main">
        <div class="Home_slide_1 visible" >
          <div class="Home_main_description_1">
            <p class="Home_main_description_title">lorem itsum</p>
            <p class="Home_main_description_content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores, quidem? Error impedit non eligendi id ipsum maiores, asperiores, deleniti tenetur tempora vero laudantium inventore quia! Fugit obcaecati dolore eaque dolores.</p>
          </div>
        </div>
        <div class="Home_slide_2">
        <div class="Home_main_description_2">
            <p class="Home_main_description_title">lorem itsum</p>
            <p class="Home_main_description_content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores, quidem? Error impedit non eligendi id ipsum maiores, asperiores, deleniti tenetur tempora vero laudantium inventore quia! Fugit obcaecati dolore eaque dolores.</p>
          </div>
        </div>
        <div class="Home_slide_3">
        <div class="Home_main_description_3">
            <p class="Home_main_description_title">lorem itsum</p>
            <p class="Home_main_description_content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores, quidem? Error impedit non eligendi id ipsum maiores, asperiores, deleniti tenetur tempora vero laudantium inventore quia! Fugit obcaecati dolore eaque dolores.</p>
          </div>
        </div>
        <div class="Home_slide_4">
        <div class="Home_main_description_4">
            <p class="Home_main_description_title">lorem itsum</p>
            <p class="Home_main_description_content">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores, quidem? Error impedit non eligendi id ipsum maiores, asperiores, deleniti tenetur tempora vero laudantium inventore quia! Fugit obcaecati dolore eaque dolores.</p>
          </div>
        </div>
        <div class="Home_slide_btn">
          <span id="Home_slide_left"><</span>
          <span id="Home_slide_num">1</span>
          <span id="Home_slide_right">></span>
        </div>
        
        <?php include_once 'header.inc' ?>
        
      </section>
      <section class="Home_skill">
        <h1 class="Home_skill_title">Technology</h1>
        <h3 class="Home_skill_subtitle">Lorem, ipsum dolor.</h3>
        <div class="Home_skill_list">
          <div>
            <h2>Front</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, cumque!</p>
          </div>
          <div>
            <h2>Back</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
          <div>
            <h2>DB</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A repellat libero dolor.</p>
          </div>
        </div>
      </section>

    </div>
    

    <script src="./src/js/Home.js" ></script>
  </body>
</html>
