<?php
include "mysql_connect.php";
session_start();
$d = $_GET['d'];
$sql="SELECT * FROM proj_proposal where proposal_id = '".$d."'";
$result = mysqli_query($link,$sql);

while($row = mysqli_fetch_array($result)) {
    $proj_title = $row['proj_title'];
    $lead_org = $row['lead_org'];
    $affiliation = $row['affiliation'];
    $program_area = $row['prog_areadev'];
    $target_communities = $row['community'];
    $target_date = $row['target_date'];
    $comser_budget = $row['comser_budget'];
}
if(!isset($_SESSION['name'])){
  header("location: index.php");
}
    $d = $_GET['d'];
  
  if(isset($_POST['submitted'])){
    
    $title= $_POST['title'];
    $proponent= $_POST['proponent'];
    $affiliation = $_POST['affiliation'];
    $prog_area = $_POST['prog_area'];
    $community = $_POST['community'];
    $date = $_POST['date'];
    $budget = $_POST['budget'];
    
    $comments2 = $_POST['comments2'];
    $recommend_progarea = $_POST['recommend_progarea'];
    $budget_tobe = $_POST['budget_tobe'];
    
    if ($affiliation == "University-Wide") {
    $sqlinsert = "INSERT INTO approval_form (title, proponent, affiliation, prog_area, community, date, budget, comments2, recommend_progarea, budget_tobe, proposal_id) VALUES ('$title', '$proponent', '$affiliation', '$prog_area', '$community', '$date', '$budget', '$comments2', '$recommend_progarea', '$budget_tobe', '$d')";
    }
    else if ($affiliation == "College-Based") {
    $sqlinsert= "UPDATE approval_form SET comments2 = '$comments2', recommend_progarea = '$recommend_progarea', budget_tobe = '$budget_tobe' WHERE proposal_id = $d";
    }
       if(!mysqli_query($link, $sqlinsert)){
    die("<script type='text/javascript'>alert('ERROR IN UPDATING APPROVAL FORM!'); window.history.go(-1);</script>");
  }
  echo "<script type='text/javascript'>alert('SUCCESSFULLY UPDATED APPROVAL FORM!'); window.location = 'change_status.php?d=$d';</script>";

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
    <li class="active"><a href="signatory.php"><b>WORKSPACE</b><span class="sr-only">(current)</span></a></li>
    <li><a href="signatory-profile.php"><b>PROFILE</b></a></li>
    <li><a href="signatory-listproposal.php?page=1"><b>PROPOSALS</b></a></li> 
  </ul>
  <ul class="nav navbar-nav navbar-right" style = "margin-top: 30px;">
    <li><a href="org-profile.php"><b><?php echo $_SESSION['name'];?></b></a></li>
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

                <div class = "panel panel-body" style = "width: 100%; border-radius: 0;height: auto; color: #000; background-color: #fff; box-shadow: 5px 5px 5px grey;">
                  <div class = "panel panel-heading" style = "font-size: 20px; color: #222; font-weight: bold;"><center>ENDORSEMENT AND APPROVAL FORM</center></div>

                  <div class = "col-md-12" style = "margin-top: 30px; font-size: 16px;">

                 <form role="form" class="col-md-12" action = "approval-prog.php?d=<?php echo $d;?>" method = "post" enctype="multipart/form-data">
                    <input type="hidden" name="submitted" value="true"/>        

                    <?php

                        include "mysql_connect.php";

                         $d = $_GET['d'];
                    if ($affiliation == "College-Based") {
                    $sql = "SELECT * FROM approval_form WHERE proposal_id = $d";
                    $result1 = mysqli_query($link, $sql);
                    while ($row = mysqli_fetch_array($result1)){
                      $title= $row['title'];
                      $proponent= $row['proponent'];
                      $affiliation = $row['affiliation'];
                      $prog_area = $row['prog_area'];
                      $community = $row['community'];
                      $date = $row['date'];
                      $budget = $row['budget'];
                      $reports = $row['reports'];
                      $attendance = $row['attendance'];
                      $presence_profile = $row['presence_profile'];
                      $presence_moa = $row['presence_moa'];
                      $comments1 = $row['comments1'];
                      $reviewed = $row['reviewed'];
                      $budget_code = $row['budget_code'];
                      $comments2 = $row['comments2'];
                      $recommend_progarea = $row['recommend_progarea'];
                      $budget_tobe = $row['budget_tobe'];
                      $comments3 = $row['comments3'];
                      $approve_director = $row['approve_director'];
                      $finalbudget = $row['finalbudget'];
                      $finalbudget_code = $row['finalbudget_code'];
                      $cash_req = $row['cash_req'];
                      $date_today = $row['date_today'];
                      $transpo_date = $row['transpo_date'];

                    }
                    }
                    else if ($affiliation == "University-Wide") {
                    $sql="SELECT * FROM proj_proposal where proposal_id = $d";
                    $result = mysqli_query($link,$sql);

                    while($row = mysqli_fetch_array($result)) {
                        $title = $row['proj_title'];
                        $proponent = $row['lead_org'];
                        $affiliation = $row['affiliation'];
                        $prog_area = $row['prog_areadev'];
                        $community = $row['community'];
                        $date = $row['target_date'];
                        $budget = $row['comser_budget'];
                        $reports = " ";
                        $attendance = " ";
                        $presence_profile = " ";
                        $presence_moa = " ";
                        $comments1 = " ";
                        $reviewed = " ";
                        $budget_code = " ";
                    }
                    }
                    ?>

        <div class  = "col-md-12"><label class = "control-label">Project Title</label>
           <input maxlength="100" name = "title" type="text" style = "margin-top: 10px;" readonly="read-only" class="form-control" value = "<?php echo $title; ?>"/>
        </div>

        
        <div class  = "col-md-6"><label class = "control-label" style = "margin-top: 10px;">Proponent</label>
           <input maxlength="100" name = "proponent" type="text" style = "margin-top: 10px;" class="form-control" readonly="read-only" value = "<?php echo $proponent; ?>"/>
        </div>
        
        <div class = "col-md-6"><label class = "control-label" style = "margin-top: 10px;">Affiliation</label>
           <input maxlength="100" name = "affiliation" type="text" style = "margin-top: 10px;" class="form-control" readonly="read-only" value = "<?php echo $affiliation; ?>"/>
          </select>
        </div>
        
        <div class = "col-md-12"><label class = "control-label" style = "margin-top: 10px;">Program Area</label>
           <input maxlength="100" name = "prog_area" type="text" style = "margin-top: 10px;" readonly="read-only" value = "<?php echo $prog_area; ?>" class="form-control" />
        </div>
        
        
        <div class  = "col-md-12"><label class = "control-label" style = "margin-top: 10px;">Target Community(ies) or Institution(s)</label>
           <input maxlength="100" name = "community" type="text" style = "margin-top: 10px;" readonly="read-only" value = "<?php echo $community; ?>" class="form-control" />
        </div>
        <div class  = "col-md-6"><label class = "control-label" style = "margin-top: 10px;">Date(s) of Implementation</label>
           <input maxlength="100" name = "date" type="text" style = "margin-top: 10px;" readonly="read-only" value = "<?php echo $date; ?>" class="form-control" />
        </div>
        
        <div class = "col-md-6"><label class = "control-label" style = "margin-top: 10px;">Proposed CSF Budget</label>
           <input maxlength="100" name = "budget" type="text" style = "margin-top: 10px;" readonly="read-only" value = "<?php echo $budget; ?>" class="form-control" />
        </div>
      </div>
    </div>

       <div class = "panel panel-body" style = "width: 100%; border-radius: 0;height: auto; color: #000; background-color: #fff; box-shadow: 5px 5px 5px grey;">
                  <div class = "panel panel-heading" style = "font-size: 20px; color: #222; font-weight: bold;"><center>Endorsement from the Community Development Coordinator (only for local student organizations)</center></div>
                  <div class = "col-md-12" style = "margin-top: 30px; font-size: 16px;">

        <div class = "col-md-12" style = "margin-top: 20px;"><i style = "font-size: 14;">The requesting organization above have accomplished the following requirements in order to be considered for funding support: (Please check if accomplished)</i></div>

        <div class="form-group col-md-6" style = "margin-top: 30px;"> 
        <p><input type ="checkbox" name = "reports" value = "Yes" disabled <?php if($reports === 'Yes') echo 'checked="checked"';?>> Terminal and Expense Reports of Previous Projects</p> 
        <p><input type ="checkbox" name = "attendance" value = "Yes" disabled <?php if($attendance === 'Yes') echo 'checked="checked"';?>> Attendance in Community Development Orientation</p>
      </div>
    
      <div class="form-group col-md-6" style = "margin-top: 30px;"> 
        <p><input type ="checkbox" name = "presence_profile" value = "Yes" disabled <?php if($presence_profile === 'Yes') echo 'checked="checked"';?>> Presence of Profile of the chosen partner community or institution</p> 
        <p><input type ="checkbox" name = "presence_moa" value = "Yes"  disabled <?php if($presence_moa === 'Yes') echo 'checked="checked"';?>> Presence of MOA/MOU with the chosen partner community or institution</p>
      </div>

      <div class = "col-md-12"><label class = "control-label" style = "margin-top: 5px;">Comments</label>
          <textarea name = "comments1" class = "form-control" style ="height: 100px; margin-top: 10px;" disabled ><?php echo $comments1; ?></textarea>
        </div>

        <div class = "col-md-12" style = "margin-top: 40px;">
        <input type ="checkbox" name = "reviewed" disabled value = "Yes"<?php if($reviewed === 'Yes') echo 'checked="checked"';?>><i style = "margin-left: 15px;"  >I have thoroughly reviewed the community development project/research proposal stated above; hence, I hereby endorse it for processing.</i>
      </div>

      <div class = "col-md-12" style = "margin-top: 20px;">
      <label class = "control-label"> The assigned budget code is:</label><input value = "<?php echo $budget_code; ?>" disabled name = "budget_code" type="text" style = "margin-left: 10px;" class="form-control"/>
            </div>
          </div>
        </div>

     <div class = "panel panel-body" style = "width: 100%; border-radius: 0;height: auto; color: #000; background-color: #fff; box-shadow: 5px 5px 5px grey;">
                  <div class = "panel panel-heading" style = "font-size: 20px; color: #222; font-weight: bold;"><center>Endorsement from the Program Area Coordinator</center></div>
                  <div class = "col-md-12" style = "margin-top: 30px; font-size: 16px;">

      <div class = "col-md-12"><label class = "control-label" style = "margin-top: 5px;">Comments</label>
          <textarea name = "comments2" class = "form-control" style ="height: 100px; margin-top: 10px;" ></textarea>
        </div>

        <div class = "col-md-12" style = "margin-top: 20px;"><i style = "font-size: 14;">Please choose the statement of your choice:</i></div>

        <div class="form-group col-md-12" style = "margin-top: 10px;">  
            <p style = "margin-left: 15px;"><input type ="radio" name = "recommend_progarea" value = "Recommended" required="required"> I hereby recommend for approval the abovementioned community development project/research proposal. </p> 
            <p style = "margin-left: 15px;"><input type ="radio" name = "recommend_progarea" value = "Not Recommended" required="required">  I do not recommend for approval the stated community development project/research proposal above. </p>
          </div>

        <div class = "col-md-12" style = "margin-top: 20px;">
      <label class = "control-label"> Budget to be approved:</label><input name = "budget_tobe" type="text" style = "margin-left: 10px;" class="form-control" required="required"/>
            </div>


      </div>
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