<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="static/css/style.css">
  </head>
  <body>
<?php
    include 'header.html';
?>
    <section class="showcase">
      <h1><span class="bold-text highlight-text1">GLAD</span> TO <span class="bold-text highlight-text2">SEE</span> YOU<br>AGAIN
      </h1>
    </section>
    <form class="form">
      <div class="form-field">
        <input type="text" id="username" placeholder="Enter your username" />
      </div>
      <div class="form-field">
        <input type="password" id="password" placeholder="Enter your password" />
      </div>
      <button type="submit" class="login-button">Login</button>
    </form>
  </body>
</html>