<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BG Remover</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/questionSec.css">
    <link href="css/nav.css" rel="stylesheet" />
  <link href="css/logo.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/home.css">
  <link href="css/userProfile.css" rel="stylesheet" />
</head>


<body>
<?php
 
    if(isset($_SESSION['id'])){
        include('includes/navuser.php');
    }else{
        include('includes/navbar.php');
    }  
?>
    <section id="home-section">
        <div class="home-container">
            <div class="home-container-left">
                <h1>Free image background remover.</h1>
                <p>Easily remove backgrounds and customize your photos with background colors using BGremover.</p>
                <a href="background.php"><button class="upload-your-photo">Upload Your Photo</button></a>
            </div>
            <div class="home-container-right">
                <img src="./css/images/homeImg.webp">
            </div>
        </div>
        <div class="how-to">
            <h2>How to remove the background of a Image.</h2>
            <p>Change Background From Image In 3 Easy Steps</p>
            <div class="how-to-container">
                <div class="how-to-sub-container">
                    <div><i class="fa-solid fa-upload"></i></div>
                    <div>
                        <h4>1. Select.</h4>
                        <p>For best results, choose an image where the subject has clear edges with nothing overlapping.</p>
                    </div>
                </div>
                <div class="how-to-sub-container">
                    <div><i class="fa-regular fa-image"></i></div>
                    <div>
                        <h4>2. Remove.</h4>
                        <p>For best results, choose an image where the subject has clear edges with nothing overlapping.</p>
                    </div>
                </div>
                <div class="how-to-sub-container">
                    <div><i class="fa-solid fa-pencil"></i></div>
                    <div>
                        <h4>3. Continue editing.</h4>
                        <p>Download your new image as a PNG file with a transparent background to save, share, or keep editing in BGremover.</p>
                    </div>
                </div>
            </div>
        </div>
<section class="section_accordion">
<h1 class="asked">Frequently asked questions.</h1>
  <div class="accordion">
    <div class="card is-active">
      <a class="card__title is-active" data-toggle="collapse" href="#content1">
      Is the bgremover free?
        <svg class="icon icon-keyboard_arrow_down" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
        </svg>
      </a>

      <div id="content1" class="collapse is-active" data-parent=".accordion">
        <div class="card__content">
        Yes, the background remover tool from bgremover is free to use. Simply upload your photo, and let bgremover work its magic. You'll have a clean and polished transparent image in no time.
        </div>
      </div>
    </div>

    <div class="card">
      <a class="card__title" data-toggle="collapse" href="#content2">
      Can I remove photo background on phone?
        <svg class="icon icon-keyboard_arrow_down" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
        </svg>
      </a>

      <div id="content2" class="collapse" data-parent=".accordion">
        <div class="card__content">
        Yes, you can remove backgrounds directly from your phone using bgremover in your browser. Enjoy the flexibility to remove the background of a picture on iPhone, Android, and tablet devices.
        </div>
      </div>
    </div>

    <div class="card">
      <h4 class="card__title" data-toggle="collapse" data-target="#content3">
      What image formats does bgremover support?
        <svg class="icon icon-keyboard_arrow_down" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
        </svg>
      </h4>

      <div id="content3" class="collapse" data-parent=".accordion">
        <div class="card__content">
        bgremover supports a wide range of image formats. Whether you want to remove background from PNG, JPG, or JPEG, where we got you covered.
        </div>
      </div>
    </div>

    <div class="card">
      <h4 class="card__title" data-toggle="collapse" data-target="#content4">
      What types of images can bgremover handle?
        <svg class="icon icon-keyboard_arrow_down" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
        </svg>
      </h4>

      <div id="content4" class="collapse" data-parent=".accordion">
        <div class="card__content">
        Our bgremover is versatile and works on a diverse range of images. From portraits and animals to cars, logos, real estate, product photos, and digital art, our tool ensures seamless background removal across various subjects and creative projects.
        </div>
      </div>
    </div>

    <div class="card">
      <h4 class="card__title" data-toggle="collapse" data-target="#content5">
      How to make an image transparent?
        <svg class="icon icon-keyboard_arrow_down" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
        </svg>
      </h4>

      <div id="content5" class="collapse" data-parent=".accordion">
        <div class="card__content">
        Making an image transparent bgremover is a straightforward process.<br><br>

            1.Upload the image you want to make transparent.<br>
            2.bgremover will automatically detect the subject in your image and separate it from the background with a transparent.<br>
            3.After removing the background, click on the "Download" button to download your transparent image as a PNG file.<br>
            That’s it! Making image backgrounds transparent can be used for various applications, such as creating transparent logos, product images, or overlaying images on different backgrounds.liquam, non, aliquid dolores cum distinctio porro, itaque recusandae ad aperiam voluptates!
        </div>
      </div>
    </div>

    <div class="card">
      <h4 class="card__title" data-toggle="collapse" data-target="#content6">
      How to remove white background from image?
        <svg class="icon icon-keyboard_arrow_down" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
        </svg>
      </h4>

      <div id="content6" class="collapse" data-parent=".accordion">
        <div class="card__content">
        bgremover simplifies the process of removing white backgrounds from images. Just upload your picture, and within moments, bgremover automatically detects and removes the white background. No manual editing needed. You can get clean, transparent images for your projects instantly.
        </div>
      </div>
    </div>

    <div class="card">
      <h4 class="card__title" data-toggle="collapse" data-target="#content7">
      How to change the background of a photo?
        <svg class="icon icon-keyboard_arrow_down" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
        </svg>
      </h4>

      <div id="content7" class="collapse" data-parent=".accordion">
        <div class="card__content">
        With bgremover background remover, you can seamlessly change the background of a photo in just a few clicks. Simply upload your image, and let bgremover remove the existing image background automatically. After removal, choose a new background from bgremover library. If you’re satisfied with the result, click “Download” to save your photo with the updated background to your device.
        </div>
      </div>
    </div>
    
  </div>
</section> 
</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
<script>
    const button = document.querySelector(".download-button");

    button.addEventListener("click", (e) => {
        e.preventDefault;
        button.classList.add("animate");
        setTimeout(() => {
        button.classList.remove("animate");
        }, 600);
    });
</script>
<script src="./js/nav.js"></script>
<script src="./js/scripts.js"></script>
<script src="./js/algorithms.js"></script>
</html>



