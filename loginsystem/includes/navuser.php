<?php
include_once('includes/config.php');
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
    
?>
     
   
        
    
<header class="header">
<a href="index.php" class="rnav-item"><div class="logo"><span class="logo-bg">BG</span>remover</div></a>
    <i class='bx bx-menu' id="menu-icon"></i>
    <nav class="navbars">
    <?php
    $userid=$_SESSION['id'];
    $query=mysqli_query($con,"select * from users where id='$userid'");
    while($result=mysqli_fetch_array($query))
    {?>
      <div class="users-data">
      <div class="user-profile-nav">
                <p><?php $first = $result['fname'];
                    echo $first[0];
                ?></p>
      </div>
      <div class="user-data-nav">
          <div class="user-name-nav">
              <p><?php echo $result['fname'];?> <?php echo $result['lname'];?></p>
          </div>
          <div class="user-email-nav">
              <p><?php echo $result['email'];?></p>
          </div>
          <p class="user-credits">credits: unlimited</p>
      </div>
      </div>
        <a href="background.php" class="rnav-item"><div class="navbar_item">Remove Background</div></a>
        <a href="industries.php" class="rnav-item"><div class="navbar_item">industries</div></a>
        <a href="userProfile.php" class="rnav-item"><div class="navbar_item hey-user-name-nav"><?php echo "hey, ".$result['fname']."!";?></div></a>
        <a href="logout.php" class="navbar_item sign-out-nav">signout</a>
    </nav>
</header>
<div class="nav-bg"></div>    
<?php }}?>