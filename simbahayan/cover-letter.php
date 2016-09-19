<?php
include "mysql_connect.php";
session_start();
if(!isset($_SESSION['name'])){
  header("location: index.php");
}
$d = $_GET['d'];
if(isset($_POST['submitted'])){

    $iso= $_POST['iso'];
    $year= $_POST['year'];
    $date = $_POST['date'];
    $address_name = $_POST['address_name'];
    $address_position = $_POST['address_position'];
    $address_company1 = $_POST['address_company1'];
    $address_company2 = $_POST['address_company2'];
    $salutation = $_POST['salutation'];
    $body = $_POST['body'];
    $closing = $_POST['closing'];
    $proj_head1 = $_POST['proj_head1'];
    $position1 = $_POST['position1'];
    $proj_head2 = $_POST['proj_head2'];
    $position2 = $_POST['position2'];
    $title = $_POST['title'];
   
   /*$queryz = "SELECT date FROM program_flow where proposal_id = '$d'";
    $results = mysqli_query($link,$queryz);
    $j = 0;
    while ($row = mysqli_fetch_array($results)){
    $datez[$j]= $row['date'];
    $j++;
    }
    $dates = "";
    for ($w = 0; $w != $j; $w++) {
     $dates = $datez[$w] .", " . $dates;
   }*/
      
  $sqlinsert = "INSERT INTO cover_letter (proposal_id, iso, year, date, address_name, address_position, address_company1, address_company2, salutation, body, closing, proj_head1, position1, proj_head2, position2, title) VALUES ('$d','$iso', '$year', '$date', '$address_name', '$address_position', '$address_company1', '$address_company2', '$salutation', '$body', '$closing', '$proj_head1', '$position1', '$proj_head2', '$position2' , '$title')";

  $sqli = "UPDATE proj_proposal SET cover = 1 WHERE proposal_id = $d ";
	
	if(!mysqli_query($link, $sqli)){
		die("<script type='text/javascript'>alert('UNABLE TO SUBMIT COVER LETTER!'); window.history.go(-1);</script>");
	}
	
  if(!mysqli_query($link, $sqlinsert)){
    die("<script type='text/javascript'>alert('ERROR IN SUBMITTING COVER LETTER!'); window.history.go(-1);</script>");
  }

    echo "<script type='text/javascript'>var days = prompt('Please enter number of days of proposed event.', '1');
    if (days != null) {
  window.location = 'budget-proposal.php?d=".$d."&days='+days;
}</script>";
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

	<body style = "background-color: #d8ced1; font-family: 'RobotoDraft'; height: 100%; color: #222; font-size: 14px; padding-top: 5%; padding-bottom: 5%;">
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
  <ul class="nav navbar-nav" style = "margin-left: 120px; margin-top: 30px;">
    <li class="active"><a href="org.php"><b>WORKSPACE</b><span class="sr-only">(current)</span></a></li>
    <li><a href="org-profile.php"><b>PROFILE</b></a></li>
    <li><a href="org-listproposal.php?page=1"><b>PROPOSALS</b></a></li> 
  </ul>
  <ul class="nav navbar-nav navbar-right" style = "margin-top: 30px;">
    <li><a href="org-profile.html"><b><?php echo $_SESSION['name'];?></b></a></li>
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

                <div class = "panel panel-body" style = "width: 100%; border-radius: 0;height: auto; color: #000; background-color: #fff; box-shadow: 5px 5px 5px grey;">
                  <div class = "panel panel-heading" style = "font-size: 20px; color: #222; font-weight: bold;"><center>COVER LETTER</center></div>

                  <div class = "col-md-12" style = "margin-top: 30px; font-size: 16px;">
		<?php
                echo "<form role='form' class='col-md-12' action = 'cover-letter.php?d=$d' method = 'post' enctype='multipart/form-data'>
                    <input type='hidden' name='submitted' value='true'/>";

        $sql = "SELECT * FROM proj_proposal WHERE proposal_id = ".$d.""; 
        $result = mysqli_query($link, $sql); 
        while($row = mysqli_fetch_array($result)) { 
            $lname1 = $row['lname1']; 
            $fname1 = $row['fname1'];
            $mi1 = $row['mi1']; 
            $lname2 = $row['lname2']; 
            $fname2 = $row['fname2'];
            $mi2 = $row['mi2']; 
            $proj_title = $row['proj_title'];
        }
		?>
        <div class  = "col-md-12"><label class = "control-label">ISO Number<sub>(ex. UST:A005-02-LE7)</sub></label>
           <input maxlength="100" name = "iso" type="text" pattern="\w{3}\:\w{4}\-\w{2}\-\w{3,4}" style = "margin-top: 10px;" class="form-control" />
        </div>
        
        <div class  = "col-md-12"><label class = "control-label">Academic Year (i.e. AY 2015-2016)</label>
           <input maxlength="100" name = "year" type="text" style = "margin-top: 10px;" required="required" class="form-control" />
        </div>
        
        <div class = "col-md-12"><label class = "control-label" style = "margin-top: 10px;">Date of Letter</label>
           <input maxlength="100" name = "date" type="text" style = "margin-top: 10px;" required="required" class="form-control" />
        </div>
        
        
        <div class = "col-md-12"><label class = "control-label" style = "margin-top: 10px;">Person to Address</label>
           <input maxlength="100" name = "address_name" type="text" style = "margin-top: 10px;" required="required" class="form-control" />
        </div>
        
        
        <div class  = "col-md-12"><label class = "control-label" style = "margin-top: 10px;">Position</label>
           <input maxlength="100" name = "address_position" type="text" style = "margin-top: 10px;" required="required" class="form-control" />
        </div>
        
        
        <div class = "col-md-12"><label class = "control-label" style = "margin-top: 10px;">Company Line 1</label>
           <input maxlength="100" name = "address_company1" type="text" style = "margin-top: 10px;" required="required" class="form-control" />
        </div>

        <div class = "col-md-12"><label class = "control-label" style = "margin-top: 10px;">Company Line 2</label>
           <input maxlength="100" name = "address_company2" type="text" style = "margin-top: 10px;" required="required" class="form-control" />
        </div>
        
        <div class = "col-md-12"><label class = "control-label" style = "margin-top: 10px;">Salutation/Greeting</label>
          <input type = "text" name = "salutation" class = "form-control" style = "margin-top: 10px;"/>
        </div>

        <div class = "col-md-12"><label class = "control-label" style = "margin-top: 10px;">Body</label>
          <textarea name = "body" class = "form-control" style ="height: 400px; margin-top: 10px;"></textarea>
        </div>
        
        <div class = "col-md-12"><label class = "control-label" style = "margin-top: 10px;">Closing (i.e. Sincerely Yours)</label>
          <input maxlength="100" name = "closing" type="text" style = "margin-top: 10px;" required="required" class="form-control" />
        </div>

        <div class = "col-md-12"><label class = "control-label" style = "margin-top: 10px;">Project Head 1</label>
          <input maxlength="100" name = "proj_head1" type="text" style = "margin-top: 10px;" required="required" class="form-control" value="<?php echo $fname1 . " " . $mi1 . ". " . $lname1;?>"/>
        </div>

        <div class = "col-md-12"><label class = "control-label" style = "margin-top: 10px;">Position</label>
          <input maxlength="100" name = "position1" type="text" style = "margin-top: 10px;" required="required" class="form-control" value="Project Head" />
        </div>

        <div class = "col-md-12"><label class = "control-label" style = "margin-top: 10px;">Project Head 2</label>
          <input maxlength="100" name = "proj_head2" type="text" style = "margin-top: 10px;" required="required" class="form-control" value="<?php echo $fname2 . " " . $mi2 . ". " . $lname2;?>"/>
        </div>

        <div class = "col-md-12"><label class = "control-label" style = "margin-top: 10px;">Position</label>
          <input maxlength="100" name = "position2" type="text" style = "margin-top: 10px;" required="required" class="form-control" value="Project Head" />
        </div>

        <div class = "col-md-12"><label class = "control-label" style = "margin-top: 10px;">Project Title</label>
          <input maxlength="100" name = "title" type="text" style = "margin-top: 10px;" required="required" class="form-control" value="<?php $sqllname = "SELECT proj_title FROM proj_proposal WHERE proposal_id = ".$d.""; $result = mysqli_query($link, $sqllname); while($row = mysqli_fetch_array($result)) { echo $row['proj_title']; }?>"/>
        </div>
        

        
        <div class="form-group" style="text-align:center">
                 <input style = "color: #fff; background-color: #23cf5f; border-radius: 0; margin-top: 30px;" type="submit" value="Submit" class="btn btn-default btn-lg"/>
                 </div>
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
