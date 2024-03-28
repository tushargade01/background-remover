<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Manage Users | Registration and Login System</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

    </head>
    <body class="sb-nav-fixed" style="color:white;background-color:black">
      <?php include_once('includes/navbar.php');?>
        <div id="layoutSidenav">
         <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">
Search Results</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboard.php" style="color:#8d14ff;">Dashboard</a></li>
                            <li class="breadcrumb-item active">Search Results</li>
                        </ol>
            <h3>Search Results against keyword '<?php echo $_POST['searchkey'];?>'</h3>
                        <div class="card mb-4" style="color:white;background-color:#313131">
                            <div class="card-header" style="background-color:#1a1a1a">
                                <i class="fas fa-table me-1"></i>
                               Search Result
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                             <th>Sno.</th>
                                  <th>First Name</th>
                                  <th> Last Name</th>
                                  <th> Email Id</th>
                              
                                  <th>Reg. Date</th>
                           
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                             <th>Sno.</th>
                                  <th>First Name</th>
                                  <th> Last Name</th>
                                  <th> Email Id</th>
                          
                                  <th>Reg. Date</th>
                               
                                        </tr>
                                    </tfoot>
                                    <tbody>
<?php 
$searchkey=$_POST['searchkey'];
$ret=mysqli_query($con,"select * from users where (fname like '%$searchkey%' || email like '%$searchkey%')");
                              $cnt=1;
                              while($row=mysqli_fetch_array($ret))
                              {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['fname'];?></td>
                                  <td><?php echo $row['lname'];?></td>
                                  <td><?php echo $row['email'];?></td>
                                  <td><?php echo $row['posting_date'];?></td>
                                  <td>
                                     
                                     <a href="user-profile.php?uid=<?php echo $row['id'];?>"> 
                          <i class="fas fa-edit" style="color:#8d14ff;"></i></a>
                                     <a href="manage-users.php?id=<?php echo $row['id'];?>" onClick="return confirm('Do you really want to delete');"><i class="fa fa-trash" aria-hidden="true" style="color:#8d14ff;"></i></a>
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                                      
                                    </tbody>
                                </table>
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
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php } ?>
