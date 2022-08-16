<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form class="login" action=<?php echo htmlspecialchars('login_ok.php');?>
    method="post">
    <fieldset>
      <legend class="legend">Login</legend>
      <div class="input">
        <input type="email" placeholder="Email" name="email" required />
      </div>
      <div class="input">
        <input
          type="password"
          placeholder="Password"
          name="password"
          required
        />
      </div>
      <button type="submit" class="submit">로그인</button>

      <a href="/signup.php" style="text-decoration: none; color: black">
        회원가입
      </a>
    </fieldset>
    <div class="feedback"></div>
  </body>
</html>
