<?php session_start();
include_once('includes/config.php');
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
    
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="css/home.css" rel="stylesheet" />
        <link href="css/nav.css" rel="stylesheet" />
        <link href="css/logo.css" rel="stylesheet" />
        <link href="css/userProfile.css" rel="stylesheet" />
    </head>
    <body>
    <?php
        if(isset($_SESSION['id'])){
            include('includes/navuser.php');
        }else{
            include('includes/navbar.php');
        }  
    
    $userid=$_SESSION['id'];
    $query=mysqli_query($con,"select * from users where id='$userid'");
    while($result=mysqli_fetch_array($query))
    { ?>
        <div class="user-profile-container">
            <div class="user-profile">
                <p><?php $first = $result['fname'];
                    echo $first[0];
                ?></p>
            </div>
            <div class="user-data">
                <div class="user-name">
                    <p><?php echo $result['fname'];?> <?php echo $result['lname'];?></p>
                </div>
                <div class="user-email">
                    <p><?php echo $result['email'];?></p>
                </div>
                <p>credits: unlimited</p>
            </div>
            <div class="sign-out-button">
            <a href="logout.php">Signout</a>
            </div>
        </div>
    <?php 
    } 
    ?>  
    <?php include_once('includes/footer.php');?>  
    </body>
    
    </html>
<?php
}
?>    