<?php
session_start();
if(!isset($_GET['email']))
        header("location:login.php");
$e=$_GET['email'];
?>

<!DOCTYPE html>
<html>
<head>
<!-- All Meta tags -->
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1"> 
	<!-- Bootstrap CSS and other CSS files-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" ></link>
<link rel="stylesheet" href="css/header.css">
<title>FACULTY</title>
</head>
<body> 
<div class="container-fluid cont">
            <div class="row heading">
                <div class="col-md-1 form-group"></div>
                <div class="col-md-10 form-group">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-1 float-center mx-auto d-block">
                            <img src="https://resume.abes.ac.in/assets/images/ABESEC_logo.png"  height="50" width="60" class="float-center mt-2" alt="Abes Logo" >
                        </div>
                        <div class="col-md-7">
                            <h1 class="text-center"> ABES ENGINEERING COLLEGE</h1>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                </div>
                <div class="col-md-1 form-group"></div>
            </div>
        </div>
<p class="text-center text-danger">
<?php
if(isset($_SESSION['m']))
echo $_SESSION['m'];
session_destroy();
?>
</p>
  <div class="container mt-3">
  <h4 class="display-4 text-center" style = "font-size:40px;">DELETE STUDENT</h4><hr><br>
  <form action="DeleteStudentData.php?email=<?php echo $e; ?>" method="post">
  <div class="form-row">
    
        <div class="form-group col-10 text-center" style = "margin-left:120px;">
            <input type="email" class= "form-control" name="Email" id="Email" placeholder="Enter Student Email Id" required>
        </div>
     
     </div>
     <div class = "row" style = "margin-bottom:100px;" >
            <div class = "col-md-3"></div>
            <div class = "col-md-6" style = "text-align:center;" >
                <button type="submit" name = "view" class="btn button mt-3">VIEW</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a class ="btn button mt-3" href = "faculty_dashboard.php?email=<?php echo $e;?>" role = "button" >Back</a>
            </div>
        </div>
     </form>
     </div>
     <footer style="position: fixed; bottom: 0px; background-color: #000000; left: 0px; right: 0px; margin-bottom: 0px;">
  <div class="container">
      <div class="footer-copyright text-center text-white">
      Copyright ©️ 2020 developed by Aaditya Bhargav
      </div>
  </div>
</footer>
    </body>
    </html>