<?php
include "mysql_connect.php";
session_start();
if(!isset($_SESSION['name'])){
	header("location: index.php");
}
$d = $_GET['d'];
  if(isset($_POST['submitted'])){
    
    $osg_num = $_POST['osg_num'];
    $borrower= $_POST['borrower'];
    $contact_person = $_POST['contact_person'];
    $contact_num = $_POST['contact_num'];
    $title = $_POST['title'];
    $destination = $_POST['destination'];
    $datetrip = $_POST['datetrip'];
    $etd = $_POST['etd'];
    $place = $_POST['place'];
    $passengersnum = $_POST['passengersnum'];
    $vehicle = $_POST['vehicle'];
    $driver = $_POST['driver'];
    $rental = $_POST['rental'];
 
$vehicle = implode(',', $_POST['vehicle']);
 
  $sqlinsert = "INSERT INTO vehiclerequest (proposal_id,osg_num, borrower, contact_person, contact_num, title, destination, datetrip, etd, place, passengersnum, vehicle, driver, rental) VALUES ('$d','$osg_num', '$borrower', '$contact_person', '$contact_num', '$title', '$destination', '$datetrip', '$etd', '$place', '$passengersnum', '$vehicle', '$driver', '$rental')";

  $sqli = "UPDATE proj_proposal SET vehicle = 1 WHERE proposal_id = $d ";
	
	if(!mysqli_query($link, $sqli)){
		die("<script type='text/javascript'>alert('UNABLE TO SUBMIT BUDGET PROPOSAL!'); window.history.go(-1);</script>");
	}
	
  if(!mysqli_query($link, $sqlinsert)){ 
    die("ERROR IN SUBMITTING VEHICLE REQUEST");
  }

    echo "<script type='text/javascript'>alert('SUCCESSFULLY SUBMITTED VEHICLE REQUEST!'); window.location = 'org-listproposal.php';</script>";
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
<a href="org.html"><img src= "images/ust_logo1.png" style = "height: 90px;"></a>
<a href="org.html"><img src= "images/simba_logo.png" style = "height: 90px;"></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav" style = "margin-left: 120px; margin-top: 30px;">
    <li class="active"><a href="org.php"><b>WORKSPACE</b><span class="sr-only">(current)</span></a></li>
    <li><a href="org-profile.php"><b>PROFILE</b></a></li>
    <li><a href="org-listproposal.php"><b>PROPOSALS</b></a></li> 
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

                <div class = "panel panel-body" style = "width: 100%; border-radius: 0;height: auto; color: #000; background-color: #fff; box-shadow: 5px 5px 5px grey;">
                  <div class = "panel panel-heading" style = "font-size: 20px; color: #222; font-weight: bold;"><center>VEHICLE RESERVATION FORM</center></div>

                  <div class = "col-md-12" style = "margin-top: 30px; font-size: 16px;">
<?php
             echo "<form role='form' class='col-md-12' action = 'vehiclerequest.php?d=$d' method = 'post' enctype='multipart/form-data'>
                    <input type='hidden' name='submitted' value='true'/>  ";      
?>
        <div class  = "col-md-12"><label class = "control-label">OSG No.</label><br>
           <input maxlength="100" name = "osg_num" type="text" style = "margin-top: 10px;" required="required" class="form-control" />
        </div>
        
        
        <div class = "col-md-12"><label class = "control-label" style = "margin-top: 10px;">Borrower(s)</label>
           <input maxlength="100" name = "borrower" type="text" style = "margin-top: 10px;" required="required" class="form-control" />
        </div>
        
        
        <div class = "col-md-6"><label class = "control-label" style = "margin-top: 10px;">Contact Person</label>
           <input maxlength="100" name = "contact_person" type="text" style = "margin-top: 10px;" required="required" class="form-control" />
        </div>
        
        
        <div class  = "col-md-6"><label class = "control-label" style = "margin-top: 10px;">Contact Number</label>
           <input maxlength="100" name = "contact_num" type="text" style = "margin-top: 10px;" required="required" class="form-control" />
        </div>
        
           
        
        <div class = "col-md-12"><label class = "control-label" style = "margin-top: 10px;">Purpose/Title of Activity</label>
          <textarea name = "title" class = "form-control" style ="height: 100px; margin-top: 10px;"></textarea>
        </div>
        

        <div class = "col-md-12"><label class = "control-label" style = "margin-top: 10px;">Destination</label>
          <input maxlength="100" name = "destination" type="text" style = "margin-top: 10px;" required="required" class="form-control" />
        </div>
        
		<div class = "col-md-6"><label class = "control-label" style = "margin-top: 10px;">Date of Trip</label>
           <input maxlength="100" name = "datetrip" type="text" style = "margin-top: 10px;" required="required" class="form-control" />
        </div>
		
		
       <!-- <div class = "col-md-6"><label class = "control-label" style = "margin-top: 10px;">Date of Trip</label>
          <input maxlength="100" name = "datetrip" type="date" style = "margin-top: 10px;" required="required" class="form-control" />
        </div>-->
        
        <div class = "col-md-6"><label class = "control-label" style = "margin-top: 10px;">ETD/ETA</label>
          <input maxlength="100" name = "etd" type="text" style = "margin-top: 10px;" required="required" class="form-control" />
        </div>

        <div class = "col-md-6"><label class = "control-label" style = "margin-top: 10px;">Place of Pick-up</label>
          <input maxlength="100" name = "place" type="text" style = "margin-top: 10px;" required="required" class="form-control" />
        </div>
        
        <div class = "col-md-6"><label class = "control-label" style = "margin-top: 10px;">No. of Passengers</label>
          <input maxlength="100" name = "passengersnum" type="text" style = "margin-top: 10px;" required="required" class="form-control" />
        </div>

      
        <div class = "col-md-12"><label class = "control-label" style = "margin-top: 30px;">Type of Vehicle</label>

            <br>
            <input type="checkbox" name="vehicle[]" value="None"><label>None</label>
            <br>
            <input type="checkbox" name="vehicle[]" value="Hi-Ace Van(YR5322)"><label>Hi-Ace Van(YR5322)</label> 
            <br>
            <input type="checkbox" name="vehicle[]" value="Canter(XLW 494)"><label>Canter(XLW 494)</label>
            <br>
            <input type="checkbox" name="vehicle[]" value="Coaster(THQ 846)"><label>Coaster(THQ 846)</label>
            <br>
            <input type="checkbox" name="vehicle[]" value="Bus 1(NQC 746)"><label>Bus 1(NQC 746)</label>
            <br>
			<input type="checkbox" name="vehicle[]" value="Bus 2(AAM 9201)"><label>Bus 2(AAM 9201)</label>
            <br>
			<input type="checkbox" name="vehicle[]" value="Bus 3(AAM 9202)"><label>Bus 3(AAM 9202)</label>
            <br>
            <br><br>
        </div>

 <br>
           

        <div class = "col-md-12"><label class = "control-label" style = "margin-top: 10px;">Driver Assigned</label>
          <input maxlength="100" name = "driver" type="text" style = "margin-top: 10px;" required="required" class="form-control" />
        </div>

        <div class = "col-md-12"><label class = "control-label" style = "margin-top: 10px;">Vehicle Rental (thru Puchasing Office)</label><br>
         <h5><input type="radio" name="rental" value = "Yes">Yes</h5>
           <h5><input type="radio" name="rental" value = "No">No</h5>
        </div>



        
        <div class="form-group" style="text-align:center">
                 <input style = "color: #fff; background-color: #23cf5f; border-radius: 0; margin-top: 30px;" type="submit" value="Submit" action = "vehiclerequest.php" class="btn btn-default btn-lg"/>
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
