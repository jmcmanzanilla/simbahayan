<?php
include "mysql_connect.php";
session_start();
if(!isset($_SESSION['name'])){
	header("location: index.php");
}
$id = $_SESSION['user_id'];
$college = $_SESSION['college'];
if ($college == "nstp") {
$sqlnstp = "SELECT count(org_num) as org FROM order_signatory where nstp = '1'";
$result = mysqli_query($link, $sqlnstp);
while($row = mysqli_fetch_array($result)) {
	$org_num = $row['org'];
}
}
else if ($college != "nstp") {
$sqlselect="SELECT count(org_num) as org FROM order_signatory where org_num = $id";
$results = mysqli_query($link, $sqlselect);
while($row = mysqli_fetch_array($results)) {
	$org_num=$row['org'];
}				
}
	if ($org_num < 2) {
	echo "<script type='text/javascript'>alert('Your signatories are not yet properly managed. Please contact your coordinator.');window.location = 'org.php';</script>";
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

.stepwizard-step p {
  margin-top: 10px;
}

.stepwizard-row {
  display: table-row;
}

.stepwizard {
  display: table;
  width: 100%;
  position: relative;
}

.stepwizard-step button[disabled] {
  opacity: 1 !important;
  filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
  top: 14px;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 100%;
  height: 1px;
  background-color: #ccc;
  z-order: 0;

}

.stepwizard-step {
  display: table-cell;
  text-align: center;
  position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}

.nextBtn {
  float: right;
  width: 10%;
  margin-right: 10px;
  margin-top: 40px;
  font-size: 15px;
  height:50px;
  overflow:auto;
}
</style>
<script>
function contactNum1()  
       {  

          var cnum1 = document.getElementById('cnum1');

          var message = document.getElementById('confirmMessage');

          var goodColor = "#66cc66";
          var badColor = "#ff6666";

          var numbers = /^[0-9]+$/;  
          if(cnum1.value.match(numbers))  
                {  

                if (cnum1.value.length == 7 || 

            cnum1.value.length == 11){
                    message.innerHTML = "Valid contact number!"
                    cnum1.style.backgroundColor = goodColor;
                    message.style.color = goodColor;
                    return true;  
                    }

                else {

                    message.innerHTML = "Invalid contact number!" 
                    cnum1.style.backgroundColor = badColor;
                    message.style.color = badColor;
                    return false;  
                }

             }  
          
          else  
          {  
          message.innerHTML = "Invalid contact number!" 
          cnum1.style.backgroundColor = badColor;
            message.style.color = badColor;
          return false;  
          }  
       } 

function contactNum2()  
       {  

          var cnum2 = document.getElementById('cnum2');

          var message = document.getElementById('confirmMessage2');

          var goodColor = "#66cc66";
          var badColor = "#ff6666";

          var numbers = /^[0-9]+$/;  
          if(cnum2.value.match(numbers))  
                {  

                if (cnum2.value.length == 7 || 

            cnum2.value.length == 11){
                    message.innerHTML = "Valid contact number!"
                    cnum2.style.backgroundColor = goodColor;
                    message.style.color = goodColor;
                    return true;  
                    }

                else {

                    message.innerHTML = "Invalid contact number!" 
                    cnum2.style.backgroundColor = badColor;
                    message.style.color = badColor;
                    return false;  
                }

             }  
          
          else  
          {  
          message.innerHTML = "Invalid contact number!" 
          cnum2.style.backgroundColor = badColor;
            message.style.color = badColor;
          return false;  
          }  
       } 
/*
 function checkDate() {
            var InputDate = document.getElementById("date").value;
            
            var today = new Date();
 
// GET YYYY, MM AND DD FROM THE DATE OBJECT
            var yyyy = today.getFullYear().toString();
            var mm = today.getMonth()+1.toString();
            var dd  = today.getDate()+30.toString();
 
// CONVERT mm AND dd INTO chars
            var mmChars = mm.split('');
            var ddChars = dd.split('');
 
// CONCAT THE STRINGS IN YYYY-MM-DD FORMAT
            var datestring = yyyy + '-' + (mmChars[1]?mm:"0"+mmChars[0]) + '-' + (ddChars[1]?dd:"0"+ddChars[0]);
        
            if (InputDate < datestring) {
                alert("Proposals should be encoded at least 30 days before the event.");
            }
            
        }*/

function ValidateEmail1()  
    {  
var email1 = document.getElementById("email1");
    var message1 = document.getElementById('confirmMessage3');

          var goodColor = "#66cc66";
          var badColor = "#ff6666";
    
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
    if(email1.value.match(mailformat))  
    {  
    
                    message1.innerHTML = "Valid email address!"
                    email1.style.backgroundColor = goodColor;
                    message1.style.color = goodColor;
                    return true;    
    }  
    else  
    {  
                    message1.innerHTML = "You have entered an invalid email address!" 
                    email1.style.backgroundColor = badColor;
                    message1.style.color = badColor;
                    return false; 
    }  
    }  

    function ValidateEmail2()  
    {  
var email2 = document.getElementById("email2");
    var message2 = document.getElementById('confirmMessage4');

          var goodColor = "#66cc66";
          var badColor = "#ff6666";
    
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
    if(email2.value.match(mailformat))  
    {  
    
                    message2.innerHTML = "Valid email address!"
                    email2.style.backgroundColor = goodColor;
                    message2.style.color = goodColor;
                    return true;    
    }  
    else  
    {  
                    message2.innerHTML = "You have entered an invalid email address!" 
                    email2.style.backgroundColor = badColor;
                    message2.style.color = badColor;
                    return false; 
    }  
    }  

	
</script>

	<body style = "background-color: #d8ced1; font-family: 'RobotoDraft'; height: 100%; color: #222; font-size: 14px; padding-top: 5%; padding-bottom: 10%;">
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
      <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>Organization Information</p>
                <p>General Project Overview</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Project Details</p>
            </div>
           
        </div>
    </div>
  </div>
               <div class = "col-md-12" style = "div-align: center; margin-top: 10px;">

            <div class = "col-md-12">

                <div class = "panel panel-body" style = "width: 100%; border-radius: 0;height: auto; color: #000; margin-bottom: 50px; background-color: #fff; box-shadow: 5px 5px 5px grey;">
                  <div class = "panel panel-heading" style = "font-size: 20px; color: #222; font-weight: bold;"><center>PROJECT PROPOSAL</center></div>

                  <div class = "col-md-12" style = "margin-top: 30px; font-size: 16px;">

                 <form role="form" autocomplete="off" class="form-horizontal" method="post" action="upload_proposal.php?days=<?php echo $days;?>" enctype="multipart/form-data">
    <input type="hidden" name="submitted" value="true"/>
    <!-- step 1 -->
      <div class="row setup-content" id="step-1">
        <div class="col-md-12">
          <h4>ORGANIZATION INFORMATION</h4>

          <div class="form-group col-md-12">
                    <label class="control-label">Organization Name Affiliated: </label>
                    <select class="form-control" name="lead_org">
            <option value="<?php echo $_SESSION['user_id']?>"><?php echo $_SESSION['name'];?></option>
          </select>
                </div>

          <!-- Affiliation Dropdown Menu -->
          <div class="form-group col-md-12">
      <label class="control-label" style="font-weight:bold">Affiliation: </label>
                    <select class="form-control" name="affiliation">
		 <?php $query = mysqli_query($link, "SELECT affiliation from student_profile WHERE user_id=".$_SESSION['user_id']."");
						while ($row = mysqli_fetch_array($query)) {
							echo '<option value="'.$row['affiliation'].'">'.$row['affiliation'].'</option>';
						}
						echo '</select>';
						
		?>
          </div>
      
      <div class="form-group col-md-12">
                    <label class="control-label" style="font-weight:bold">College: </label>
                    <select class="form-control" name="college">
		 <?php $query = mysqli_query($link, "SELECT college from student_profile WHERE user_id=".$_SESSION['user_id']."");
						while ($row = mysqli_fetch_array($query)) {
							echo '<option value="'.$row['college'].'">'.$row['college'].'</option>';
						}
						echo '</select>';
$proj_evaluation="";						
		?>
		
                </div>
        <!-- end of Affiliation Dropdown Menu -->

        <!-- contact person -->
          <div class="form-group col-md-12">
            <div class="col-md-1"><h5 style="font-weight:bold">Contact Person 1</h5></div>
            <div class="col-md-5">
              <label class="control-label">Last Name</label>
              <input maxlength="100" type="text" required="required" class="form-control" name="lname1" value="<?php $sqllname = "SELECT lname FROM student_profile WHERE user_id = ".$_SESSION['user_id'].""; $result = mysqli_query($link, $sqllname); while($row = mysqli_fetch_array($result)) { echo $row['lname']; }?>"/>
            </div>
            <div class="col-md-5">
              <label class="control-label">First Name</label>
              <input maxlength="100" type="text" required="required" class="form-control" name="fname1" value="<?php $sqlfname = "SELECT fname FROM student_profile WHERE user_id = ".$_SESSION['user_id'].""; $result = mysqli_query($link, $sqlfname); while($row = mysqli_fetch_array($result)) { echo $row['fname']; }?>"/>
            </div>
            <div class="col-md-1">
              <label class="control-label">M.I.</label>
              <input maxlength="2" type="type" required="required" class="form-control" name="mi1" value="<?php $sqlmi = "SELECT mi FROM student_profile WHERE user_id = ".$_SESSION['user_id'].""; $result = mysqli_query($link, $sqlmi); while($row = mysqli_fetch_array($result)) { echo $row['mi']; }?>"/>
            </div>
          </div>
          <div class="form-group col-md-12">
            <div class="col-md-1"></div>
            <div class="col-md-4">
              <label class="control-label">Contact Number</label>
              <input maxlength="100" type="text" required="required" class="form-control" name="cnum1" id = "cnum1" value="<?php $sqlcon = "SELECT contact_number FROM student_profile WHERE user_id = ".$_SESSION['user_id'].""; $result = mysqli_query($link, $sqlcon); while($row = mysqli_fetch_array($result)) { echo $row['contact_number']; }?>" onkeyup = "contactNum1();"/>
              <br><center><span id="confirmMessage" class="confirmMessage"></span></center>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <label class="control-label">E-mail Address</label>
              <input maxlength="100" type="text" required="required" class="form-control" id = "email1" name="email1" value="<?php $sqlem = "SELECT email FROM student_profile WHERE user_id = ".$_SESSION['user_id'].""; $result = mysqli_query($link, $sqlem); while($row = mysqli_fetch_array($result)) { echo $row['email']; }?>" onkeyup = "ValidateEmail1();"/>
              <br><center><span id="confirmMessage3" class="confirmMessage3"></span></center>
            </div>
          </div>
          <div class="form-group col-md-12">
            <div class="col-md-1"><h5 style="font-weight:bold">Contact Person 2</h5></div>
            <div class="col-md-5">
              <label class="control-label">Last Name</label>
              <input maxlength="100" type="text" required="required" class="form-control" name="lname2"/>
            </div>
            <div class="col-md-5">
              <label class="control-label">First Name</label>
              <input maxlength="100" type="text" required="required" class="form-control" name="fname2"/>
            </div>
            <div class="col-md-1">
              <label class="control-label">M.I.</label>
              <input maxlength="2" type="text" required="required" class="form-control" name="mi2"/>
            </div>
          </div>
          <div class="form-group col-md-12">
            <div class="col-md-1"></div>
            <div class="col-md-4">
              <label class="control-label">Contact Number</label>
              <input maxlength="100" type="text" required="required" class="form-control" name="cnum2" id = "cnum2" onkeyup = "contactNum2();"/>
              <br><center><span id="confirmMessage2" class="confirmMessage2"></span></center>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <label class="control-label">E-mail Address</label>
              <input maxlength="100" type="text" required="required" id = "email2" onkeyup = "ValidateEmail2();" class="form-control" name="email2"/>
              <br><center><span id="confirmMessage4" class="confirmMessage4"></span></center>
            </div>
          </div>
          <!-- end of contact person -->

          <div class="form-group col-md-12">
            <label class="control-label" style="font-weight:bold">Collaborating Organizations (write NA if none):</label>
            <input maxlength="100" type="text" required="required" class="form-control" name="collab"/>
          </div>

          <h4>GENERAL PROJECT OVERVIEW</h4>

          <div class="form-group col-md-12">
            <label class="control-label" style="font-weight:bold">Project Title (not more than 15 words):</label>
            <input maxlength="140" type="text" required="required" class="form-control" name="proj_title"/>
          </div>

          <!-- Program Area Radio Button -->
          <div class="form-group col-md-12">
            <label class="control-label" style="font-weight:bold">Program Area for Development (choose only one):</label>
            <div class="radio">
              <label><input type="radio" name="prog_areadev" value="Health and Wellness Development">Health and Wellness Development</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="prog_areadev" value="Equitable and Inclusive Education">Equitable and Inclusive Education</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="prog_areadev" value="Leadership, Organizational Development and Good Governance">Leadership, Organizational Development and Good Governance</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="prog_areadev" value="Employability and Social Enterprise Development">Employability and Social Enterprise Development</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="prog_areadev" value="Socio-pastoral Ministry and Evangelization">Socio-pastoral Ministry and Evangelization</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="prog_areadev" value="Heritage, Culture and Sports and Development">Heritage, Culture and Sports and Development</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="prog_areadev" value="Environmental Sustainability and Infrastructure Development">Environmental Sustainability and Infrastructure Development</label>
            </div>
            <div class="radio">
              <label><input type="radio" name="prog_areadev" value="Disaster Risk Reduction and Management">Disaster Risk Reduction and Management</label>
            </div>
          </div>
          <!-- end of Program Area Radio Button -->

          <div class="form-group col-md-12">
            <div class="col-md-2"><h5 style="font-weight: bold">Target Community/Institution Participants:</h5></div>
            <div class="col-md-5">
              <label class="control-label">Community(ies) or Institution(s)</label>
              <input maxlength="100" type="text" required="required" class="form-control" name="community"/>
            </div>
            <div class="col-md-5">
              <label class="control-label">Number of Participants</label>
              <input maxlength="100" type="number" required="required" class="form-control" name="participants"/>
            </div>
          </div>

          <!-- Venue add field -->
          
          <!-- end of Venue add field -->

          <div class="form-group col-md-12">          
            <div class="col-md-2"><h5 style="font-weight:bold">Proposed Project Budget in Php:</h5></div>
            <div class="col-md-3">
              <label class="control-label">Community Service Fund</label>
              <input class="form-control" type="number" required="required" name="comser_budget"/>
            </div>
            <div class="col-md-3">
              <label class="control-label">Organizational Counterpart</label>
              <input class="form-control" type="number" required="required" name="org_budget"/>
            </div>
            <div class="col-md-3">
              <label class="control-label">Community Counterpart</label>
              <input class="form-control" type="number" required="required" name="com_budget"/>
            </div>
          </div>

          <div>
		     
            <button class="btn btn-primary nextBtn btn-lg pull-right" style = "color: #fff; background-color: #05B2d2; border-radius: 0; border-color: transparent; margin-top: 30px;" type="button">Next</button>
          </div>
        </div>
      </div>
    <!-- end of step 1 -->

    <!-- step 2 -->
      <div class="row setup-content" id="step-2">
        <div class="col-md-12">
          <h4>PROJECT DETAILS</h4>
            <div class="form-group">
              <div class="col-md-12">
                <!-- project background -->

                  <div class="col-md-12">
                    <label class="control-label" style="font-weight:bold">Project Background</label>
                    <p>What specific problem or need in the partner community or institution does your organization wish to address?</p>
                    <textarea class="form-control" rows="5" cols="10" maxlength="1500" type="text" required="required" placeholder="Insert Project Background Here" name="proj_background"></textarea>
                  </div>
				  
				  <div class="col-md-12">
                    <label class="control-label" style="font-weight:bold"></label>
                    <p>Why is it important?</p>
                    <textarea class="form-control" rows="5" cols="10" maxlength="1500" type="text" required="required" placeholder="Insert Project Background Here" name="proj_background1"></textarea>
                  </div>
				  
				  <div class="col-md-12">
                    <label class="control-label" style="font-weight:bold"></label>
                    <p>How is the project related to your chosen program area?</p>
                    <textarea class="form-control" rows="5" cols="10" maxlength="1500" type="text" required="required" placeholder="Insert Project Background Here" name="proj_background2"></textarea>
                  </div>
				  
				  <div class="col-md-12">
                    <label class="control-label" style="font-weight:bold"></label>
                    <p>What specific University Community Development Program (UCDP) success indicator is it trying to address? <a href=".\uploads\UCDP Success Indicators.pdf"target="_blank">Click to view the UCDP Success Indicators</a></p>
                    <textarea class="form-control" rows="5" cols="10" maxlength="1500" type="text" required="required" placeholder="Insert Project Background Here" name="proj_background3"></textarea>
					
                  </div>


                <!-- General Objective -->
 
                  <div class="col-md-12">
                    <label class="control-label" style="font-weight:bold">General Objective</label>
                    <p>What is the overall intention of your community development project? What does it realistically intend to achieve within the duration of the project? Only state one general objective.</p>
                    <textarea class="form-control" rows="5" cols="10" maxlength="1500" type="text" required="required" placeholder="Insert General Objective Here" name="gen_objective"></textarea>
                  </div>


                <!-- Specific Objectives -->
 
                  <div class="col-md-12">
                    <label class="control-label" style="font-weight:bold">Specific Objectives</label>
                    <p>What are the specific steps that need to be fulfilled in order to achieve the general objective of your community development project? What are the expected results for each specific objective? Identify three specific objectives.</p>
                    <div class="row clearfix">
                      <div class="col-md-12 column">
                        <table class="table table-bordered table-hover">
                          <thead>
                            <tr>
                              <th class="text-center">Specific Objectives</th>
                              <th class="text-center">Expected Results</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><textarea type="text" placeholder='Specific Objective 1' class="form-control" name="spec_obj1" required></textarea></td>
                              <td><textarea type="text" placeholder='Expected Results 1' class="form-control" name="exp_result1" required="required"></textarea></td>
                            </tr>
                            <tr>
                              <td><textarea type="text" placeholder='Specific Objective 2' class="form-control" name="spec_obj2" required></textarea></td>
                              <td><textarea type="text" placeholder='Expected Results 2' class="form-control" name="exp_result2" required = "required"></textarea></td>
                            </tr>
                            <tr>
                              <td><textarea type="text" placeholder='Specific Objective 3' class="form-control"name="spec_obj3" required></textarea></td>
                              <td><textarea type="text" placeholder='Expected Results 3' class="form-control" name="exp_result3" required="required"></textarea></td>
                            </tr>
							<tr>
                              <td><textarea type="text" placeholder='Specific Objective 4(Optional)' class="form-control"name="spec_obj4" required></textarea></td>
                              <td><textarea type="text" placeholder='Expected Results 4 (Optional)' class="form-control" name="exp_result4" required="required"></textarea></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
				  
                   <div class="col-md-12">
					<label class="control-label" style="font-weight:bold">PROJECT EVALUATION</label>
					<p>How will the achievements be evaluated?</p>
					<textarea class="form-control" rows="5" cols="10" maxlength="1500" type="text" required="required" placeholder="Insert Project Evaluation Here" name="proj_evaluation"></textarea>
				   </div>
				   
				   <div class="col-md-12">
					<label class="control-label" style="font-weight:bold"></label>
					<p>What needs to be done in order to know whether the community development project has achieved its general and specific objectives?</p>
					<textarea class="form-control" rows="5" cols="10" maxlength="1500" type="text" required="required" placeholder="Insert Project Evaluation Here" name="proj_evaluation1"></textarea>
				   </div>
				   
              </div>
            </div>
        </div>
       <div class="col-md-6">
          <input class="btn btn-success sbmtBtn btn-lg pull-right" style = "color: #fff; background-color: #23cf5f; border-radius: 0; margin-top: 30px;" type="submit" value="Submit">
        </div>
      </div>
    <!-- end of step 2 -->

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
