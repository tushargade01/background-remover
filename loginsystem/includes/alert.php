<!DOCTYPE html>
<!-- Created By CodingNepal - www.codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>No Login</title>
    <link rel="stylesheet" href="../css/alert.css">
    <link href="../css/nav.css" rel="stylesheet" />
  <link href="../css/logo.css" rel="stylesheet" />
  <link href="../css/home.css" rel="stylesheet" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
   </head>
<body>
<header class="header">
<a href="../index.php" class="rnav-item"><div class="logo"><span class="logo-bg">BG</span>remover</div></a>
    <i class='bx bx-menu' id="menu-icon"></i>
    <nav class="navbars">
        <a href="../background.php">Remove Background</a>
        <a href="../industries.php">industries</a>
        <a href="../login.php">Sign in</a>
        <a href="../signup.php">Sign up</a>
    </nav>
</header>
<div class="nav-bg"></div>    
    <div class="containers">
      <div class="background"></div>
      <div class="alert_box">
        <div class="icon">
          <i class="fas fa-exclamation"></i>
        </div>
        <header>You are not logged in</header>
        <p>Please sign in to your account to access the background removal feature</p>
        <div class="button-sec">
          <a class="mylink" href="../login.php" >Sing in</a>
          <a class="mylink" href="../signup.php" >Sign up</a>
        </div>
      </div>
    </div>
    <script src="../js/nav.js"></script>
</body>
</html>