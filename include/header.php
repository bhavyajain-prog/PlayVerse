<?php
include "../config/config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel = "icon" href = "../images/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PlayVerse</title>
    <link rel="stylesheet" href="../public/style.css"/>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/91c32085df.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <header class="m-1 d-flex justify-content-between align-items-center">
      <div class="logo d-flex justify-content-center align-items-center">
        <img src="../images/logo.jpg" alt="img" />
        <h2 class="m-2">PLAYVERSE</h2>
      </div>
      <?php
  if($_SESSION['success']!=='') {  ?>
      <h3 class = "text-capitalize">
    <?php echo $_SESSION['success'];?>
  </h3>
  <?php
  }$_SESSION['success'] = ""?>
      <div class="btns">
        <button class="room m-2">Create Room</button>
        <button class="login m-2">Sign In/Sign Up</button>
      </div>
    </header>