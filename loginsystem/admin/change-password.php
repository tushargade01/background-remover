<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
 // for  password change   
if(isset($_POST['update']))
{
$oldpassword=md5($_POST['currentpassword']); 
$newpassword=md5($_POST['newpassword']);
$sql=mysqli_query($con,"SELECT password FROM admin where password='$oldpassword'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
$adminid=$_SESSION['adminid'];
$ret=mysqli_query($con,"update admin set password='$newpassword' where id='$adminid'");
echo "<script>alert('Password Changed Successfully !!');</script>";
echo "<script type='text/javascript'> document.location = 'change-password.php'; </script>";
}
else
{
echo "<script>alert('Old Password not match !!');</script>";
echo "<script type='text/javascript'> document.location = 'change-password.php'; </script>";
}
}

    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Change password | Registration and Login System</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
<script language="javascript" type="text/javascript">
function valid()
{
if(document.changepassword.newpassword.value!= document.changepassword.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.changepassword.confirmpassword.focus();
return false;
}
return true;
}
</script>

    </head>
    <body class="sb-nav-fixed" style="background-color:black; color:white">
      <?php include_once('includes/navbar.php');?>
        <div id="layoutSidenav">
          <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        

                        <h1 class="mt-4">Change Password</h1>
                        <div class="card mb-4">
                     <form method="post" name="changepassword" onSubmit="return valid();">
                            <div class="card-body" style="background-color:#1a1a1a">
                                <table class="table table-bordered" style="background-color:#313131;color:white">
                                   <tr>
                                    <th>Current Password</th>
                                       <td><input class="form-control" id="currentpassword" name="currentpassword" type="password" value="" required style="background-color:#5c5c5c;color:white"/></td>
                                   </tr>
                                   <tr>
                                       <th>New Password</th>
                                       <td><input class="form-control" id="newpassword" name="newpassword" type="password" value=""  required style="background-color:#5c5c5c;color:white"/></td>
                                   </tr>
                                         <tr>
                                       <th>Confirm Password</th>
                                       <td colspan="3"><input class="form-control" id="confirmpassword" name="confirmpassword" type="password"    required style="background-color:#5c5c5c;color:white"/></td>
                                   </tr>
                  
                                   <tr>
                                       <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="update" style="background-color:#8d14ff;color:white;border:none">Change</button></td>

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
