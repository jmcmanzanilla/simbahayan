<?php
include "mysql_connect.php";
session_start();
$d = $_GET['d'];
$key=$d;
//$days = $_GET['days'];
if(isset($_POST['submitted'])){
	
    
    $target = $_SERVER['DOCUMENT_ROOT'] . "/ustsimbahayan/uploads/";  
    $target_file = $target . basename( $_FILES['file']['name']) ;  
    $file = $_FILES['file']['name'];
    $file_path = mysqli_real_escape_string($link, $target_file);
	$file_path1 = "/ustsimbahayan/uploads/" .$file;
	$student = $_POST['student'];
    $faculty = $_POST['faculty'];
    $admin = $_POST['admin'];
    $staff = $_POST['staff'];
    $alumni = $_POST['alumni'];
    
    if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file))  { 
    
        $sqlinsert = "INSERT INTO terminal (proposal_id,file_path,file_path1) VALUES ('$key','$file_path','$file_path1')";
        
        $sqlreport = "UPDATE report SET student = '$student' , faculty = '$faculty', admin = '$admin', staff = '$staff', alumni = '$alumni' WHERE proposal_id = $d";
$sqlterminal = "UPDATE proj_proposal SET terminal = 1 WHERE proposal_id = '$d'";
		
	}
	if(!mysqli_query($link, $sqlinsert)){
		
		die("<script type='text/javascript'>alert('ERROR WITH THE SUBMISSION!');window.history.go(-1);</script>");
	}
    
	if(!mysqli_query($link, $sqlreport)){
		
		die("<script type='text/javascript'>alert('ERROR WITH THE SUBMISSION!');window.history.go(-1);</script>");
	}
if(!mysqli_query($link, $sqlterminal)){
		
		die("<script type='text/javascript'>alert('ERROR WITH THE SUBMISSION!');window.history.go(-1);</script>");
	}
    
    echo "<script type='text/javascript'>alert('SUCCESSFULLY SUBMITTED!');window.location = 'add-terminal.php?d=$d';</script>";

    }


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Proposal Tracking System</title>

   	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

</head>

<style>
@font-face {
  font-family: 'RobotoDraft';
  font-style: normal;
  font-weight: 400;
  src: local('RobotoDraft'), local('RobotoDraft-Regular'), local('Roboto-Regular'), url('fonts/RobotoDraftRegular.woff2') format('woff2'), url('../fonts/RobotoDraftRegular.woff') format('woff');
}
@font-face {
  font-family: 'RobotoDraft';
  font-style: normal;
  font-weight: 500;
  src: local('RobotoDraft Medium'), local('RobotoDraft-Medium'), local('Roboto-Medium'), url('fonts/RobotoDraftMedium.woff2') format('woff2'), url('../fonts/RobotoDraftMedium.woff') format('woff');
}
@font-face {
  font-family: 'RobotoDraft';
  font-style: normal;
  font-weight: 700;
  src: local('RobotoDraft Bold'), local('RobotoDraft-Bold'), local('Roboto-Bold'), url('fonts/RobotoDraftBold.woff2') format('woff2'), url('../fonts/RobotoDraftBold.woff') format('woff');
}
@font-face {
  font-family: 'RobotoDraft';
  font-style: italic;
  font-weight: 400;
  src: local('RobotoDraft Italic'), local('RobotoDraft-Italic'), local('Roboto-Italic'), url('fonts/RobotoDraftItalic.woff2') format('woff2'), url('../fonts/RobotoDraftItalic.woff') format('woff');
}
</style>

	<body style = "background-color: #d8ced1; font-family: 'RobotoDraft'; height: 100%; font-size: 14px; color: #222; padding-top: 5%; padding-bottom: 5%;">
  <div class = "wrapper">
<nav class="navbar navbar-default navbar-fixed-top">
<div class="container-fluid">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="org.php"><img src= "images/ust_logo1.png" style = "height: 90px;"></a>
<a href="org.php"><img src= "images/simba_logo.png" style = "height: 90px;"></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav" style="margin-left: 120px; margin-top: 30px;">
    <li class="active"><a href="org.php"><b>WORKSPACE</b><span class="sr-only">(current)</span></a></li>
    <li><a href="org-profile.php"><b>PROFILE</b></a></li>
    <li><a href="org-listproposal.php?page=1"><b>PROPOSALS</b></a></li> 
  </ul>
  <ul class="nav navbar-nav navbar-right" style = "margin-top: 30px;">
    <li><a href="org-profile.php"><b><?php echo $_SESSION['name'];?></b></a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
                  <ul class="dropdown-menu">
                  <li><a href="org-profile.php">View Profile</a></li>
            <li><a href="changepassword-org.php">Change Password</a></li>
                <li><a href="logout.php">Sign Out</a></li>
      </ul>
    </li>
  </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
    <div class = "container">
               <div class = "col-md-12" style = "div-align: center; margin-top: 30px;">

            <div class = "col-md-12">


                <div class = "panel panel-body" style = "width: 100%; border-radius: 0;height: 600px; background-color: #fff; box-shadow: 5px 5px 5px grey;">
                  <div class = "panel panel-heading" style = "font-size: 20px; color: #222; font-weight: bold;">TERMINAL REPORT</div>
                  <div class = "col-md-8" style = "height: 85%; color: #000;">
					<?php
					echo '<form action="add-terminal.php?d='.$d.'" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="submitted" value="true"/>
                    <label class = "control-label" style = "margin-top: 10px;">No. of Students Involved</label>
                    <input maxlength="100" name = "student" type="text" style = "margin-top: 10px;" required="required" class="form-control"/>
                    
                    <label class = "control-label" style = "margin-top: 10px;">No. of Faculty Members Involved</label>
                    <input maxlength="100" name = "faculty" type="text" style = "margin-top: 10px;" required="required" class="form-control"/>
                    
                    <label class = "control-label" style = "margin-top: 10px;">No. of Administrators Involved</label>
                    <input maxlength="100" name = "admin" type="text" style = "margin-top: 10px;" required="required" class="form-control"/>
                    
                    <label class = "control-label" style = "margin-top: 10px;">No. of Support Staff Involved</label>
                    <input maxlength="100" name = "staff" type="text" style = "margin-top: 10px;" required="required" class="form-control"/>
                    
                    <label class = "control-label" style = "margin-top: 10px;">No. of Alumni Involved</label>
                    <input maxlength="100" name = "alumni" type="text" style = "margin-top: 10px;" required="required" class="form-control"/>
                    
					<label class="control-label" style = "color: #000;"> Upload Terminal Report </label>
					<input style = "margin-top: 0px;" pattern="?=n" id = "f" name="file" class="form-control"  type="file" accept="application/pdf" required/><br />
                    
                    <div class = "col-md-4">
                    </div>
                    <div class = "col-md-4">
                    <input type="submit" value="Submit" class="form-control" style = "background-color: #23cf5f; color: #fff"/>
                    </div>
                    <div class ="col-md-4">
                    </div>
                    </form>';
				echo '
				</div>
                <div class = "col-md-4">
                  <div class = "col-md-12">

                    <a href = "projectproposalpdf.php?d='.$d.'&&days='.$days.'" style = "background-color: #403f3f; color: #fff;" class = "btn btn-default btn-md btn-block col-md-12">PROJECT PROPOSAL (PDF)</a>
                    <a href = "cover-letter.php?d='.$d.'" style = "background-color: #403f3f; color: #fff;" class = "btn btn-default btn-md btn-block col-md-12">COVER LETTER</a>';
?>
                  </div>

                  <div class="col-md-12" style="height:170px; max-height: 170px;">
           
</div>
</div>
                </div>
              </div>
     </div>
</div>
</div>
<footer style = "position:fixed; bottom:0px; height:30px; width:100%; padding-top:9px; background-color:#282122; color: #fff; text-align: center; font-size: 11px;">UNIVERSITY OF SANTO TOMAS. ALL RIGHTS RESERVED. 2015.</footer>
<script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/step-monitor.js"></script>
  <script src="js/add-field.js"></script>
  <script src="js/add-row.js"></script>
</div>

</body>
	</html>
