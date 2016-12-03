<?php
include "mysql_connect.php";
session_start();
if(!isset($_SESSION['name'])){
  header("location: index.php");
}
if(isset($_POST['submitted'])){

/*  $target = $_SERVER['DOCUMENT_ROOT'] . "/USTSIMBAHAYAN/uploads/";  
    $target_file = $target . basename( $_FILES['file']['name']) ;  
    $file = $_FILES['file']['name'];
    $file_path = mysqli_real_escape_string($link, $target_file);
  $file_path1 = "uploads/" .$file; */

    $id = $_SESSION['user_id'];
    $lname = $_POST['lname'];
    $fname= $_POST['fname'];
    $mi = $_POST['mi'];
    $address = $_POST['address'];
  $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
  $college = $_POST['college'];
    $position = $_POST['position'];
    $security_question = $_POST['security_question'];
    $answer = $_POST['answer'];
        
 // if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file))  { 
  
  $sqlprofile = "UPDATE login_user SET profile = 1 WHERE user_id = $id ";
        
    $sqlinsert = "INSERT INTO signatory_profile (user_id, fname, mi, lname, address, contact_number, email, college, position, security_question, answer) VALUES ('$id','$fname', '$mi', '$lname', '$address', '$contact_number','$email','$college','$position', '$security_question', '$answer')";
    
  if(!mysqli_query($link, $sqlprofile)){
         die("<script type='text/javascript'>alert('UNABLE TO CREATE PROFILE!'); window.history.go(-1);</script>");
    }
    if(!mysqli_query($link, $sqlinsert)){
         die("<script type='text/javascript'>alert('UNABLE TO CREATE PROFILE!'); window.history.go(-1);</script>");
    }
    
    echo "<script type='text/javascript'>alert('SUCCESSFULLY CREATED PROFILE!'); window.location = 'signatory-profile.php';</script>";

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
<a href="signatory.php"><img src= "images/ust_logo1.png" style = "height: 90px;"></a>
<a href="signatory.php"><img src= "images/simba_logo.png" style = "height: 90px;"></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav" style = "margin-left: 120px; margin-top: 30px;">
    <li><a href="signatory.php"><b>WORKSPACE</b></a></li>
    <li class="active"><a href="signatory-profile.php"><b>PROFILE</b><span class="sr-only">(current)</span></a></li>
    <li><a href="manage-order-step1.php"><b>SIGNATORIES</b></a></li> 
    <li><a href="signatory-listproposal.php?page=1"><b>PROPOSALS</b></a></li> 
  </ul>
  <ul class="nav navbar-nav navbar-right" style = "margin-top: 30px;">
    <li><a href="signatory-profile.php"><b><?php echo $_SESSION['name'];?></b></a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
                  <ul class="dropdown-menu">
                  <li><a href="signatory-profile.php">View Profile</a></li>
           <li><a href="changepassword-signatory.php">Change Password</a></li>
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

                <div class = "panel panel-body" style = "background-color: #fff; box-shadow: 5px 5px 5px grey;">
                  <div class = "panel panel-heading" style = "font-size: 20px; color: #222; font-weight: bold;"><center>CREATE PROFILE</center></div>
                  <div class = "col-md-12" style = "margin-top: 30px; color: #000;">
    <div class = "col-md-12">
      <form role="form" class="form-horizontal" method="post" action="signatory-newprofile.php" enctype="multipart/form-data">
    <input type="hidden" name="submitted" value="true"/>
    
        <label class="control-label">LAST NAME:</label>
    <input maxlength="100" type="text" required="required" class="form-control" name="lname"/>
    <label class="control-label">FIRST NAME:</label>
    <input maxlength="100" type="text" required="required" class="form-control" name="fname"/>
    <label class="control-label">MIDDLE NAME:</label>
    <input maxlength="100" type="text" required="required" class="form-control" name="mi"/>
        <label class="control-label">ADDRESS:</label>
    <input maxlength="100" type="text" required="required" class="form-control" name="address"/>
        <label class="control-label">CONTACT NUMBER:</label>
    <input maxlength="100" type="text" required="required" class="form-control" name="contact_number" />
        <label class="control-label">EMAIL:</label>
    <input maxlength="100" type="text" required="required" class="form-control" name="email" value="<?php $sql = "SELECT email FROM login_user WHERE user_id = ".$_SESSION['user_id'].""; $result = mysqli_query($link, $sql); while($row = mysqli_fetch_array($result)) { echo $row['email']; }?>"/>
        <label class="control-label">COLLEGE:</label>
    <?php
          $college_name = $_SESSION['college'];
          $query = mysqli_query($link, "SELECT college_name from college_list WHERE college_code = '$college_name'");
          echo '<select name="college" class="form-control" required>';
          while ($row = mysqli_fetch_array($query)) {
            echo '<option value="'.$row['college_name'].'">'.$row['college_name'].'</option>';
          }
          echo '</select>';
    ?>
        <label class="control-label">POSITION:</label>
    <?php
          $query1 = mysqli_query($link, "SELECT * from position order by position_id");
          echo '<select name="position" class="form-control" required>';
          echo '<option value="">Choose one... </option>';
          while ($row = mysqli_fetch_array($query1)) {
            echo '<option value="'.$row['position_name'].'">'.$row['position_name'].'</option>';
          }
          echo '</select>';
    ?>
    <label class="control-label">SECURITY QUESTION:</label>
    <input maxlength="100" type="text" required="required" class="form-control" name="security_question"/>
     <label class="control-label">ANSWER:</label>
    <input maxlength="100" type="text" required="required" class="form-control" name="answer"/>
    
    </div>
    
    <div class = "col-md-4"></div>
    <div class = "col-md-4"></div>
    <div class = "col-md-2"></div>
     <div class ="col-md-2" style ="margin-top: 20px;"><input class="btn btn-default btn-md btn-block signin" type = "submit" value="SUBMIT"style = "color: #fff; background-color: #23cf5f; border-radius: 0;"></div>
   </form>
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