<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Dashboard | Registration and Login System </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed" style="background-color:black; color:white">
   <?php include_once('includes/navbar.php');?>
        <div id="layoutSidenav">
          <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active" style="color:#8d14ff;">Dashboard</li>
                        </ol>
                        <div class="row">
<?php
$query=mysqli_query($con,"select id from users");
$totalusers=mysqli_num_rows($query);
?>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4" style="border:white solid">
                                    <div class="card-body">Total Registered Users 
                                        <span style="font-size:22px;"> <?php echo $totalusers;?></span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="manage-users.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

<?php
$query2=mysqli_query($con,"select id from users where date(posting_date)>=now() - INTERVAL 7 day");
$last7daysregusers=mysqli_num_rows($query2);
?>

                            <div class="col-xl-3 col-md-6">
                                <div class="card  text-white mb-4" style="border:white solid; background-color:black">
                                    <div class="card-body"> Registered Users in Last 7 Days
                                        <span style="font-size:22px;"> <?php echo $last7daysregusers;?></span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="lastsevendays-reg-users.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

<?php
$query3=mysqli_query($con,"select id from users where date(posting_date)>=now() - INTERVAL 30 day");
$last30daysregusers=mysqli_num_rows($query3);
?>

                            <div class="col-xl-3 col-md-6" >
                                <div class="card text-white mb-4" style="border:white solid; background-color:black">
                                    <div class="card-body">Registered Users in Last 30 Days
                                        <span style="font-size:22px;"> <?php echo $last30daysregusers;?></span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="lastthirtyays-reg-users.php">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                      
                    </div>
                </main>
                <div class="copyright-section">
            <!--
            <p>Follow us</p>
            <div class="follow-links">
                <a href="https://www.linkedin.com/in/tushargade01/"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://github.com/tushargade01/"><i class="fa-brands fa-square-github"></i></a>
                <a href="https://www.instagram.com/tushargade_01/"><i class="fa-brands fa-square-instagram"></i></a>
            </div>
        --> 
            <span class="copyright-text" style="display:flex;justify-content:center">
                © Tushar Gade. All rights reserved.
            </span>
        </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php } ?>
