<?php
include "mysql_connect.php";
session_start();
if(!isset($_SESSION['name'])){
	header("location: index.php");
}
$d = $_GET['d'];
	$key=$d;
    $id = $_SESSION['user_id'];
if(isset($_POST['submitted'])){
	$d = $_GET['d'];
	$key=$d;
	$comment = $_POST['comment'];
	$id = $_SESSION['user_id'];
	$name = $_SESSION['name'];
		
	$sqlcomment = "INSERT INTO comment (user_id, date, sender_name, comment, proposal_id) VALUES ('$id', now(),'$name', '$comment','$key')";
	
	if(!mysqli_query($link, $sqlcomment)){
		die("<script type='text/javascript'>alert('ERROR IN SENDING COMMENT'); window.location = 'signatory-viewproposal.php?d=$d';</script>");
	}
	
	echo "<script type='text/javascript'>alert('COMMENT ADDED'); window.location = 'signatory-viewproposal.php?d=$d';</script>";
	
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
<a href="signatory.html"><img src= "images/ust_logo1.png" style = "height: 90px;"></a>
<a href="signatory.html"><img src= "images/simba_logo.png" style = "height: 90px;"></a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav" style = "margin-left: 120px; margin-top: 30px;">
    <li class="active"><a href="signatory.php"><b>WORKSPACE</b><span class="sr-only">(current)</span></a></li>
    <li><a href="signatory-profile.php"><b>PROFILE</b></a></li>
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

                <div class = "panel panel-body" style = "width: 100%; border-radius: 0;height: 600px; background-color: #fff; box-shadow: 5px 5px 5px grey;">
                  <div class = "panel panel-heading" style = "font-size: 20px; color: #222; font-weight: bold;">PROPOSAL DETAILS<a class="btn btn-default pull-right" style = "color: #fab303;" href="allowedit.php?d=<?php echo $d;?>" onclick="return confirm('Are you sure you want to allow the organization to edit their papers?')">Allow Revision</a><a class="btn btn-default pull-right" style = "color: #fab303;" href="editproposal.php?d=<?php echo $d;?>" onclick="return confirm('Are you sure you want to edit their papers?')">Edit Proposal</a></div>
                  <div class = "col-md-8" style = "overflow-y: scroll; height: 85%; color: #000;">
   
                  			<?php
$d = $_GET['d'];
$key=$d;
$sql="SELECT * FROM proj_proposal where proposal_id = '".$d."'";
$result = mysqli_query($link,$sql);

while($row = mysqli_fetch_array($result)) {
	echo "<table>";
    echo "<tr>";
	echo "<th> Proposal ID: </th>";
    echo "<td>" . $row['proposal_id'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th> Lead Organization: </th>"; 
    echo "<td>" . $row['lead_org'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th> Affiliation: </th>";
	echo "<td>" . $row['affiliation'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th> College: </th>";
    echo "<td>" . $row['college'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th> Contact Person 1: </th>";
	echo "<td>" . $row['lname1'] . "," . $row['fname1'] . "," . $row['mi1'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th> Contact Number:  </th>";
	echo "<td>" . $row['cnum1'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th> Email: </th>";
    echo "<td>" . $row['email1'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th> Collaborating Organization: </th>";
	echo "<td> " . $row['collab'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th><br><br>Project Title: </th>";
    echo "<td> <br><br>" . $row['proj_title'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th> Program Area for Development: </th>";
	echo "<td> " . $row['prog_areadev'] . "</td>";
    echo "</tr>";
	echo "<tr>";
	echo "<th> Commmunity: </th>";
    echo "<td>" . $row['community'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th> Number of Participants: </th>"; 
    echo "<td>" . $row['participants'] . "</td>";
	echo "</tr>";
	
	echo "<tr>";
	echo "<th> Project Background: </th>";
	echo "<td>" . $row['proj_background'] . "</td>";
	echo "</tr>";
	echo "<tr>";
	echo "<th> General Objective:  </th>";
	echo "<td>" . $row['gen_objective'] . "</td>";
	echo "</tr>";
		
	echo "<tr>";
	echo "<th> Project Evaluation:  </th>";
	echo "<td>" . $row['proj_evaluation'] . "</td>";
	echo "</tr>";
	
	echo "<tr>";
    echo "<th><br><br> Specific Objective </th>";
    echo "<th><br><br> Expected Result</th>";
	echo "</tr>";
	echo "<tr>";
    echo "<td>" . $row['spec_obj1'] . "</td>";
    echo "<td>" . $row['exp_result1'] . "</td>";
	echo "</tr>";
	echo "<tr>";
    echo "<td>" . $row['spec_obj2'] . "</td>";
    echo "<td>" . $row['exp_result2'] . "</td>";
	echo "</tr>";
	echo "<tr>";
    echo "<td>" . $row['spec_obj3'] . "</td>";
    echo "<td>" . $row['exp_result3'] . "</td>";
	echo "</tr>";
	$days = $row['days'];
    $lead_org = $row['lead_org'];
	$status = $row['status'];
	echo "</table>";
}



                echo '</div>
                <div class = "col-md-4">
                  <div class = "col-md-12">';
$sqli="SELECT affiliation FROM student_profile where user_id=".$lead_org."";
$resulti = mysqli_query($link,$sqli);
while($row = mysqli_fetch_array($resulti)) {
    $affiliation = $row['affiliation'];
}
                echo '</div>
                <div class = "col-md-12">
                  <div class = "col-md-12">';
					
                    if ($affiliation == "University-Wide") {
                    echo '<a href = "projectproposalpdf-univ.php?d='.$d.'&&days='.$days.'" style = "color: #fab303;" class = "btn btn-default btn-md btn-block col-md-12">PROJECT PROPOSAL (PDF)</a>';
                    }
                    else if ($affiliation == "College-Based"){
                    echo '<a href = "projectproposalpdf-college.php?d='.$d.'&&days='.$days.'" style = "color: #fab303;" class = "btn btn-default btn-md btn-block col-md-12">VIEW PROJECT PROPOSAL (PDF)</a>';
                    }
					if ($affiliation == "None - NSTP") {
                    echo '<a href = "projectproposalpdf-nstp.php?d='.$d.'&&days='.$days.'" style = "color: #fab303;" class = "btn btn-default btn-md btn-block col-md-12">VIEW PROJECT PROPOSAL (PDF) </a>';
                    }
					
                    echo '<a href = "viewterminal.php?d='.$d.'" style = "color: #fab303;" class = "btn btn-default btn-md btn-block col-md-12">TERMINAL REPORT</a>';
                   
                    if ($affiliation == "University-Wide") {
                    echo '<a href = "coverletterpdf-univ.php?d='.$d.'" style = "color: #fab303;" class = "btn btn-default btn-md btn-block col-md-12">COVER LETTER </a>';
                    }
                        else if ($affiliation == "College-Based"){
                    echo '<a href = "coverletterpdf-college.php?d='.$d.'" style = "color: #fab303;" class = "btn btn-default btn-md btn-block col-md-12">COVER LETTER</a>';
                    }
					
					
					if ($status == "Approved" && $affiliation == "University-Wide") {
                    echo '<a href ="approvalpdf-univ.php?d='.$d.'" style = "color: #fab303;" class = "btn btn-default btn-md btn-block col-md-12">ENDORSEMENT</a>';
                    }
                    
                    if ($status == "Approved" && $affiliation == "College-Based") {
                    echo '<a href ="approvalpdf-college.php?d='.$d.'" style = "color: #fab303;" class = "btn btn-default btn-md btn-block col-md-12">ENDORSEMENT</a>';
                    }
					
					if ($status == "Approved" && $affiliation == "None - NSTP") {
                    echo '<a href ="approvalpdf-nstp.php?d='.$d.'" style = "color: #fab303;" class = "btn btn-default btn-md btn-block col-md-12">ENDORSEMENT</a>';
                    }
					
					echo '</div>';
					
                    
					/*echo '<a href ="vehiclerequestpdf.php?d='.$d.'" style = "color: #fab303;" class = "btn btn-default btn-md btn-block col-md-12">VEHICLE REQUEST</a>
                  </div>';*/
?>	 
                 <div class = "col-md-12">
				 <br>
				 <label class="control-label" style="color:black;"> Status </label>
				<div class="col-md-12">
    <?php
    $sqlselect="SELECT position FROM signatory_profile where user_id = $id";
    $results = mysqli_query($link, $sqlselect);
					
    while($row = mysqli_fetch_array($results)) {
	$position = $row['position'];
	if ($position == "College Community Development Coordinator") {
	echo '<a class="btn btn-block btn-success" href="approval-comdev.php?d='.$d.'">Approve</a>';
	}
    if($position == "Simbahayan Program Area Coordinator") {
    echo '<a class="btn btn-block btn-success" href="approval-prog.php?d='.$d.'">Approve</a>';
	}
    if ($position == "Simbahayan Director") {
    echo '<a class="btn btn-block btn-success" href="approval-director.php?d='.$d.'">Approve</a>';
    }
	if ($position == "NSTP Moderator") {
	echo '<a class="btn btn-block btn-success" href="approval-comdev.php?d='.$d.'">Approve</a>';
	}
    else if ($position != "College Community Development Coordinator" && $position != "Simbahayan Program Area Coordinator" && $position != "Simbahayan Director") {
    echo '<a class="btn btn-block btn-success" href="change_status.php?d='.$d.'">Approve</a>';
    }
    }
    ?>
	<a class="btn btn-block btn-danger" onclick="ConfirmDelete()">Reject</a>
	</div>
    <script>
    function ConfirmDelete()
    {
      var x = confirm("Are you sure you want to reject proposal?");
      if (x)
          var reason = prompt("Please enter reason for decision.", "");
         if (reason != null) {
            window.location = 'change_status-reject.php?d=<?php echo $d;?>&reason='+reason;
           }
      else
        return false;
    }
</script>    
</div>
<?php
					echo "
                  <div class='col-md-12' style='height:170px; max-height: 190px; margin-top: 20px; overflow-y:scroll; background-color:white;'>
                    <h4> Comments </h4>";
					$sqli="SELECT * FROM comment where proposal_id = ".$d." order by date desc";
					$results = mysqli_query($link,$sqli);
					echo "<br>";
					echo "<table>"; 
					while($row = mysqli_fetch_array($results)) {
					echo "<tr>";
					echo "<td><b>".$row['sender_name'] .": </b>[<em>" . $row['date'] . "</em>]<b> " . $row['comment'] . "</b><br><br></td>";
					
					echo "</tr>";
					}
					echo "</table>";
					echo "<form role='form' method='post' action='signatory-viewproposal.php?d=$key' enctype='multipart/form-data'>";
					echo "<input type='hidden' name='submitted' value='true'/>
                    <textarea class='form-control' id = 'comment' rows='3' name='comment'></textarea>
                 <div class='form-group'>
         <input type='submit' style = 'margin-top: 2%; width: 100%; color: black; background-color: #d3d3d3; border-radius: 0;' value='SUBMIT' />";
					
				
                echo "</div>
</form>
                </div>";
				?>
					
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
