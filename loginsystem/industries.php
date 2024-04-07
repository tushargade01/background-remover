<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link href="css/nav.css" rel="stylesheet" />
  <link href="css/logo.css" rel="stylesheet" />
  <link href="css/home.css" rel="stylesheet" />
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
<section id="industries-section">
        <div class="sample-industrie">
            <h1>Sample Results</h1>
            <p>See how BGremover performs on a variety of images</p>
        </div>
        <div>
            <ul class="industries-buttons">
                <li><a href="#" onclick="industriesButton(0)">ANIMALS</a></li>
                <li><a href="#" onclick="industriesButton(1)">PEOPLE</a></li>
                <li><a href="#" onclick="industriesButton(2)">CARS</a></li>
                <li><a href="#" onclick="industriesButton(3)">PRODUCT</a></li>
            </ul>
            <div class="animal-container">
                <div class="img-conatiner">
                    <div class="to-select-img">
                        <div class="column">
                            <img src="./image/animal.jpg" id="animal" onclick="imgSelection(this);">
                            <p>Original Background</p>
                        </div>
    
                        <div class="column">
                            <img src="./image/animal_bg.png" id="animal" onclick="imgSelection(this);">
                            <p>Remove Background</p>
                        </div>
                        <div class="column">
                            <img src="./image/animal_add.png" id="animal" class="animal3"
                            onclick="imgSelection(this);">
                            <p>Solid Background</p>
                        </div>
                    </div>
                    <div class="selected-img">
                        <img class="expandedImgAnimal">
                    </div>
                </div>
                <div class="for-phone">
                <img src="./image/animal_add.png" class="image-phone">
            </div>
            </div>
            
            <div class="people-container">
                <div class="img-conatiner">
                    <div class="to-select-img">
                        <div class="column">
                            <img src="./image/people.jpg" id="people" onclick="imgSelection(this);">
                            <p>Original Background</p>
                        </div>
    
                        <div class="column">
                            <img src="./image/people_bg.png" id="people" onclick="imgSelection(this);">
                            <p>Remove Background</p>
                        </div>
                        <div class="column">
                            <img src="./image/people_add.png" id="people" onclick="imgSelection(this);">
                            <p>Solid Background</p>
                        </div>
                    </div>
                    <div class="selected-img">
                        <img class="expandedImgPeople">
                    </div>
                </div>
                <div class="for-phone">
                <img src="./image/people_add.png" class="image-phone">
            </div>
            </div>
            <div class="car-container">
                <div class="img-conatiner">
                    <div class="to-select-img">
                        <div class="column">
                            <img src="./image/car.jpg" id="car" onclick="imgSelection(this);">
                            <p>Original Background</p>
                        </div>
    
                        <div class="column">
                            <img src="./image/car_bg.png" id="car" onclick="imgSelection(this);">
                            <p>Remove Background</p>
                        </div>
                        <div class="column">
                            <img src="./image/car_add.png" id="car" onclick="imgSelection(this);">
                            <p>Solid Background</p>
                        </div>
                    </div>
                    <div class="selected-img">
                        <img class="expandedImgCar">
                    </div>
                </div>
                <div class="for-phone">
                <img src="./image/car_add.png" class="image-phone">
            </div>
            </div>
            <div class="product-container">
                <div class="img-conatiner">
                    <div class="to-select-img">
                        <div class="column">
                            <img src="./image/product.jpg" id="product" onclick="imgSelection(this);">
                            <p>Original Background</p>
                        </div>
    
                        <div class="column">
                            <img src="./image/product_bg.png" id="product" onclick="imgSelection(this);">
                            <p>Remove Background</p>
                        </div>
                        <div class="column">
                            <img src="./image/product_add.png" id="product" onclick="imgSelection(this);">
                            <p>Solid Background</p>
                        </div>
                    </div>
                    <div class="selected-img">
                        <img class="expandedImgProducts">
                    </div>
                </div>
                <div class="for-phone">
                <img src="./image/product_add.png" class="image-phone">
            </div>
            </div>
        </div>
    </section>
    <?php include('includes/footer.php');?>
</body>
<script src="./js/industires.js"></script>
<script src="./js/nav.js"></script>
</html>
