<?php
    session_start();

    if(!isset($_GET['email']))
        header("location:login.php");
        
    $e = $_GET['email'];

    include("dbconnection.php");

    $student = "select * from faculty";
    $rs = $con->query($student);
    $row = $rs->fetch_array();

    //-------------Student------------------------------------------

    //-------------Fetching all data-------------------------------------------------

    if(!isset($_GET['page'])) {
        $page=1;
    }
    else{
        $page= $_GET['page'];
    }

    $lowerlimit= ($page-1)*10;
    $noofrow= 10;
    $s= "select * from faculty limit $lowerlimit,$noofrow";
    $result =$con->query($s);


    
?>
<!DOCTYPE>
<html>
<head>
<!-- All Meta tags -->
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1, shrink-to-fit = no">

<!-- Bootstrap CSS and other CSS files-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/header.css">


<!-- Bootstrap JS and other JS files-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>

<!--title tag-->
<title>ADMIN</title>

</head>
<body>
	<div class="container-fluid cont">
        <div class="row heading">
            <div class="col-md-1 form-group"></div>
            <div class="col-md-10 form-group">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-1 float-center mx-auto d-block">
                        <img src="https://resume.abes.ac.in/assets/images/ABESEC_logo.png"  height="50" width="60" class="flaot-center mt-2" alt="Abes Logo" >
                    </div>
                    <div class="col-md-7">
                        <h1 class="text-center">ABES ENGINEERING COLLEGE</h1>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
            <div class="col-md-1 form-group"></div>
        </div>
    </div>

<!--------------------------Header complete--------------------------------->

    <div class="container" style = "margin-top:20px;">
        <div class="row">
            <div class="col-md-12">
                
                <h3 class="display-4 text-center" style = "font-size:40px;"> LIST OF FACULTIES</h3>
                
                <table class="table table-responsive" style = "margin-top:20px;">
                        <thead>
                            <tr><th>Name</th><th>ID</th><th>Email-ID</th><th>Subject1</th><th>Subject1Sem</th><th>Subject1Branch</th><th>Subject1Sec</th><th>Subject2</th><th>Subject2Sem</th><th>Subject2Branch</th><th>Subject2Sec</th><th>Subject3</th><th>Subject3Sem</th><th>Subject3Branch</th><th>Subject3Sec</th></tr>
                        </thead>
                        <tbody>
                            <?php while($row = $result->fetch_array()){ ?>
                            <tr><td><?php echo $row[1];?></td><td><?php echo $row[0];?></td><td><?php echo $row[3];?></td><td><?php echo $row[4];?></td><td><?php echo $row[5];?></td><td><?php echo $row[6];?></td><td><?php echo $row[7];?></td><td><?php echo $row[8];?></td><td><?php echo $row[9];?></td><td><?php echo $row[10];?></td><td><?php echo $row[11];?></td><td><?php echo $row[12];?></td><td><?php echo $row[13];?></td><td><?php echo $row[14];?></td><td><?php echo $row[15];?></td></tr>
                            <?php }	?>		 
                        </tbody>
                </table>     
            </div>    
        </div>
    </div>
    <p style = "text-align:center; margin-top:30px; margin-bottom:50px;">
    <?php 
    $s2= "select * from faculty";
    $result1= $con->query($s2);
    $page = ceil($result1->num_rows/$noofrow); 
    for($i=1;$i<=$page;$i++)
    { ?>
    <a class ="button btn" style = "width:auto" role = "button"  href= "view_data_faculty.php?page=<?php echo $i; ?>&email=<?php echo $e; ?>"><?php echo $i;?> </a>
    <?php }	   ?>
</p>
<footer style="position: fixed; bottom: 0px; background-color: #000000; left: 0px; right: 0px; margin-bottom: 0px;">
  <div class="container">
      <div class="footer-copyright text-center text-white">
      Copyright ©️ 2020 developed by Aaditya Bhargav
      </div>
  </div>
</footer>
</body>
</html>
