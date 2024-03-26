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
        <title>Between Dates report date selection | Registration and Login System</title>
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
                        

                        <h1 class="mt-4">B/w Dates Report Date Selection</h1>
                        <div class="card mb-4">
                     <form method="post" name="bwdatesreport" action="bwdates-report-result.php" >
                            <div class="card-body" style="background-color:#1a1a1a">
                                <table class="table" style="color:white;border:solid black;background-color:#525252">
                                   <tr>
                                    <th>From Date</th>
                                       <td><input class="form-control" id="fromdate" name="fromdate" type="date" value="" required /></td>
                                   </tr>
                                   <tr>
                                       <th>To Date</th>
                                       <td><input class="form-control" id="todate" name="todate" type="date" value=""  required /></td>
                                   </tr>
                                      
                  
                                   <tr>
                                       <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="submit" style="background-color:#8d14ff;color:white;border:none">Submit</button></td>

                                   </tr>
                                    </tbody>
                                </table>
                            </div>
                            </form>
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
