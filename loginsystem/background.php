<?php session_start();
include_once('includes/config.php');
if (!isset($_SESSION['id']) || strlen($_SESSION['id']) == 0) {
  header('location:includes/alert.php');
  } else{
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>remove background</title>
  <link href="css/styles.css" rel="stylesheet" />
  <link href="css/nav.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="css/logo.css" rel="stylesheet" />
  <link href="css/home.css" rel="stylesheet" />
  <link href="css/userProfile.css" rel="stylesheet" />
  
</head>
<body>
<?php
if(isset($_SESSION['id'])){
    include('includes/navuser.php');
}
?>
<section id="remove-background-section">
    <div class="select-section">
    
        <div class="sub-select-section">
            <h1><img src="./css/images/remove_background.svg" alt=""> Background Remover</h1>
            <p>Erase image backgrounds for free and replace it with different backgrounds of your choosing.</p>
        </div>
        <div class="user-img-background">
            <div class="container">
                <div class="color-container">
                    <span class="color-circles color-1"><img src="./css/images/background.png"></span>
                    <span class="color-circles color-2"></span>
                    <span class="color-circles color-3"></span>
                    <span class="color-circles color-4"></span>
                </div>
                <input type="file" id="file" accept="image/*" hidden>
                <div class="img-area" data-img="">
                    <div class="img-back">
                        <h3>Upload Image</h3>
                        <p>Remove Background From Image for Free</p>
                    </div>
                </div>
                <button class="button"><span class="button__text">Upload Image</span></button>
                <button class="download-button button" style="display: none;"><span class="button__text">download</span></button>
            </div>
        </div>
    </div>
</section>
<?php include('includes/footer.php');?>
</body>
<script src="js/background.js"></script>
<script src="js/nav.js"></script>
</html>
<?php }?>
