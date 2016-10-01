<?php
include "mysql_connect.php";
session_start();
if(!isset($_SESSION['name'])){
	header("location: index.php");
}

$d = $_GET['d'];
$days = $_GET['days'];

if ($days == 0) {
    echo "<script type='text/javascript'>var days = prompt('Please enter number of days of proposed event.', '1');
    if (days != null) {
        window.location = 'budget-proposal.php?d=".$d."&days='+days;
    }
    </script>";
    }; 
$org = $_SESSION['user_id'];
$signatory1 = "";
$totalfund = 0;
$totalorg = 0;
$totalcom = 0;
$type = "";
$proj_evaluation="";
$proj_evaluation1="";

if ($type == 'nstp'){
$sql = "SELECT * from order_signatory WHERE nstp = 1 AND order_number = 1";
$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_array($result)) {
	$signatory1 = $row['signatory_num'];
	}
}
else {
$sql = "SELECT * from order_signatory WHERE org_num = '$org' AND order_number = 1";
$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_array($result)) {
	$signatory1 = $row['signatory_num'];
	}
}

$sql = "SELECT * from order_signatory WHERE org_num = '$org' AND order_number = 1";
$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_array($result)) {
	$signatory1 = $row['signatory_num'];
	}
	
$query2 = "SELECT * FROM budget_proposal WHERE proposal_id = $d";
$result2 = mysqli_query($link, $query2);
while ($row = mysqli_fetch_array($result2)){
   $pname0 = $row['pname0']; //P
   $pmail0 = $row['pmail0'];
   $pfund0 = $row['pfund0'];
   $porg0 = $row['porg0'];
   $pcom0 = $row['pcom0'];
   $pname1 = $row['pname1'];
   $pmail1 = $row['pmail1'];
   $pfund1 = $row['pfund1'];
   $porg1 = $row['porg1'];
   $pcom1 = $row['pcom1'];
   $pname2 = $row['pname2'];
   $pmail2 = $row['pmail2'];
   $pfund2 = $row['pfund2'];
   $porg2 = $row['porg2'];
   $pcom2 = $row['pcom2'];
   $pname3 = $row['pname3'];
   $pmail3 = $row['pmail3'];
   $pfund3 = $row['pfund3'];
   $porg3 = $row['porg3'];
   $pcom3 = $row['pcom3'];
   $pname4 = $row['pname4'];
   $pmail4 = $row['pmail4'];
   $pfund4 = $row['pfund4'];
   $porg4 = $row['porg4'];
   $pcom4 = $row['pcom4']; 
   $oname0 = $row['oname0']; //O
   $omail0 = $row['omail0'];
   $ofund0 = $row['ofund0'];
   $oorg0 = $row['oorg0'];
   $ocom0 = $row['ocom0'];
   $oname1 = $row['oname1']; //O
   $omail1 = $row['omail1'];
   $ofund1 = $row['ofund1'];
   $oorg1 = $row['oorg1'];
   $ocom1 = $row['ocom1'];
   $oname2 = $row['oname2']; //O
   $omail2 = $row['omail2'];
   $ofund2 = $row['ofund2'];
   $oorg2 = $row['oorg2'];
   $ocom2 = $row['ocom2'];
   $oname3 = $row['oname3']; //O
   $omail3 = $row['omail3'];
   $oname7 = $row['oname7']; //O
   $omail7 = $row['omail7'];
   $oname8 = $row['oname8']; //O
   $omail8 = $row['omail8'];
   $oname9 = $row['oname9']; //O
   $omail9 = $row['omail9'];
   $oname4 = $row['oname4']; //O
   $omail4 = $row['omail4'];
   $ofund6 = $row['ofund6'];
   $oorg6 = $row['oorg6'];
   $ocom6 = $row['ocom6'];
   $oname5 = $row['oname5']; //O
   $omail5 = $row['omail5'];
   $ofund7 = $row['ofund7'];
   $oorg7 = $row['oorg7'];
   $ocom7 = $row['ocom7'];
   $oname6 = $row['oname6']; //O
   $omail6 = $row['omail6'];
   $ofund8 = $row['ofund8'];
   $oorg8 = $row['oorg8'];
   $ocom8 = $row['ocom8'];
   $ofund9 = $row['ofund9'];
   $oorg9 = $row['oorg9'];
   $ocom9 = $row['ocom9'];
   $mname0 = $row['mname0']; //M
   $mmail0 = $row['mmail0'];
   $mfund0 = $row['mfund0'];
   $morg0 = $row['morg0'];
   $mcom0 = $row['mcom0'];
   $mname1 = $row['mname1']; //M
   $mmail1 = $row['mmail1'];
   $mfund1 = $row['mfund1'];
   $morg1 = $row['morg1'];
   $mcom1 = $row['mcom1'];
   $mname2 = $row['mname2']; //M
   $mmail2 = $row['mmail2'];
   $mfund2 = $row['mfund2'];
   $morg2 = $row['morg2'];
   $mcom2 = $row['mcom2'];
   $mname3 = $row['mname3']; //M
   $mmail3 = $row['mmail3'];
   $mfund3 = $row['mfund3'];
   $morg3= $row['morg3'];
   $mcom3 = $row['mcom3'];
   $mname4 = $row['mname4']; //M
   $mmail4 = $row['mmail4'];
   $mfund4 = $row['mfund4'];
   $morg4 = $row['morg4'];
   $mcom4 = $row['mcom4'];
   $mfund5 = $row['mfund5'];
   $morg5 = $row['morg5'];
   $mcom5 = $row['mcom5'];
   $otname0 = $row['otname0']; //OT
   $otmail0 = $row['otmail0'];
   $otfund0 = $row['otfund0'];
   $otorg0 = $row['otorg0'];
   $otcom0 = $row['otcom0'];
   $otname1 = $row['otname1']; //OT
   $otmail1 = $row['otmail1'];
   $otfund1 = $row['otfund1'];
   $otorg1 = $row['otorg1'];
   $otcom1 = $row['otcom1'];
   $otname2 = $row['otname2']; //OT
   $otmail2 = $row['otmail2'];
   $otfund2 = $row['otfund2'];
   $otorg2 = $row['otorg2'];
   $otcom2 = $row['otcom2'];
   $otname3 = $row['otname3']; //OT
   $otmail3 = $row['otmail3'];
   $otfund3 = $row['otfund3'];
   $otorg3 = $row['otorg3'];
   $otcom3 = $row['otcom3'];
   $otname4 = $row['otname4']; //OT
   $otmail4 = $row['otmail4'];
   $otfund4 = $row['otfund4'];
   $otorg4 = $row['otorg4'];
   $otcom4 = $row['otcom4'];
   $otfund5 = $row['otfund5'];
   $otorg5 = $row['otorg5'];
   $otcom5 = $row['otcom5'];
   $otfund6 = $row['otfund6'];
   $otorg6 = $row['otorg6'];
   $otcom6 = $row['otcom6'];
   //$proj_evaluation = $row['proj_evaluation'];
   //$proj_evaluation1 = $row['proj_evaluation1']; //added proj_evaluation1
}

$progsql = "SELECT * FROM program_flow WHERE proposal_id = $d";
$resultsql = mysqli_query($link, $progsql);
while ($row = mysqli_fetch_array($resultsql)){
   $date = $row['date'];
   $address = $row['address'];
   
   $time0 = $row['time0'];
   $description0 = $row['description0'];
   $person0 = $row['person0'];
   
   $time1 = $row['time1'];
   $description1 = $row['description1'];
   $person1 = $row['person1'];
   
   $time2 = $row['time2'];
   $description2 = $row['description2'];
   $person2 = $row['person2'];
   
   $time3 = $row['time3'];
   $description3 = $row['description3'];
   $person3 = $row['person3'];
   
   $time4 = $row['time4'];
   $description4 = $row['description4'];
   $person4 = $row['person4'];
   
   $time5 = $row['time5'];
   $description5 = $row['description5'];
   $person5 = $row['person5'];
   
   $time6 = $row['time6'];
   $description6 = $row['description6'];
   $person6 = $row['person6'];
   
   $time7 = $row['time7'];
   $description7 = $row['description7'];
   $person7 = $row['person7'];
   
   $time8 = $row['time8'];
   $description8 = $row['description8'];
   $person8 = $row['person8'];
   
   $time9 = $row['time9'];
   $description9 = $row['description9'];
   $person9 = $row['person9'];
   
   $time10 = $row['time10'];						//added additional boxes for Program Flow
   $description10 = $row['description10'];
   $person10 = $row['person10'];
   
   $time11 = $row['time11'];						//added additional boxes for Program Flow
   $description11 = $row['description11'];
   $person11 = $row['person11'];
   
   $time12 = $row['time12'];						//added additional boxes for Program Flow
   $description12 = $row['description12'];
   $person12 = $row['person12'];
   
   $time13 = $row['time13'];						//added additional boxes for Program Flow
   $description13 = $row['description13'];
   $person13 = $row['person13'];
   
   $time14 = $row['time14'];						//added additional boxes for Program Flow
   $description14 = $row['description14'];
   $person14 = $row['person14'];
   
   $time15 = $row['time15'];						//added additional boxes for Program Flow
   $description15 = $row['description15'];
   $person15 = $row['person15'];
   
   
 }
 
 if(isset($_POST['submitted'])){
    for ($x = 0; $x < $days; $x++) {
	$date = $_POST['date'][$x];
    $date_target = $date .",";
	$submission = date('Y-m-d', strtotime("+15 days"));
	$address = $_POST['address'][$x];
    
	$starttime0 = $_POST['starttime0'][$x];
	$endtime0 = $_POST['endtime0'][$x];
	$time0 = $starttime0.' - '.$endtime0;
	$description0 = $_POST['description0'][$x];
	$person0 = $_POST['person0'][$x];
	
	$starttime1 = $_POST['starttime1'][$x];
	$endtime1 = $_POST['endtime1'][$x];
	$time1 = $starttime1.' - '.$endtime1;
	$description1 = $_POST['description1'][$x];
	$person1 = $_POST['person1'][$x];
	
	$starttime2 = $_POST['starttime2'][$x];
	$endtime2 = $_POST['endtime2'][$x];
	$time2 = $starttime2.' - '.$endtime2;
	$description2 = $_POST['description2'][$x];
	$person2 = $_POST['person2'][$x];
	
	$starttime3 = $_POST['starttime3'][$x];
	$endtime3 = $_POST['endtime3'][$x];
	$time3 = $starttime3.' - '.$endtime3;
	$description3 = $_POST['description3'][$x];
	$person3 = $_POST['person3'][$x];
	
	$starttime4 = $_POST['starttime4'][$x];
	$endtime4 = $_POST['endtime4'][$x];
	$time4 = $starttime4.' - '.$endtime4;
	$description4 = $_POST['description4'][$x];
	$person4 = $_POST['person4'][$x];
	
	$starttime5 = $_POST['starttime5'][$x];
	$endtime5 = $_POST['endtime5'][$x];
	$time5 = $starttime5.' - '.$endtime5;
	$description5 = $_POST['description5'][$x];
	$person5 = $_POST['person5'][$x];
	
	$starttime6 = $_POST['starttime6'][$x];
	$endtime6 = $_POST['endtime6'][$x];
	$time6 = $starttime6.' - '.$endtime6;
	$description6 = $_POST['description6'][$x];
	$person6 = $_POST['person6'][$x];
	
	$starttime7 = $_POST['starttime7'][$x];
	$endtime7 = $_POST['endtime7'][$x];
	$time7 = $starttime7.' - '.$endtime7;
	$description7 = $_POST['description7'][$x];
	$person7 = $_POST['person7'][$x];
	
	$starttime8 = $_POST['starttime8'][$x];
	$endtime8 = $_POST['endtime8'][$x];
	$time8 = $starttime8.' - '.$endtime8;
	$description8 = $_POST['description8'][$x];
	$person8 = $_POST['person8'][$x];
	
	$starttime9 = $_POST['starttime9'][$x];
	$endtime9 = $_POST['endtime9'][$x];
	$time9 = $starttime9.' - '.$endtime9;
	$description9 = $_POST['description9'][$x];
	$person9 = $_POST['person9'][$x];
	
	$starttime10 = $_POST['starttime10'][$x];   	 //added additional boxes program flow
	$endtime10 = $_POST['endtime10'][$x];
	$time10 = $starttime10.' - '.$endtime10;
	$description10 = $_POST['description10'][$x];
	$person10 = $_POST['person10'][$x];
	
	$starttime11 = $_POST['starttime11'][$x];		//added additional boxes program flow
	$endtime11 = $_POST['endtime11'][$x];
	$time11 = $starttime11.' - '.$endtime11;
	$description11 = $_POST['description11'][$x];
	$person11 = $_POST['person11'][$x];
	
	$starttime12 = $_POST['starttime12'][$x];		//added additional boxes program flow
	$endtime12 = $_POST['endtime12'][$x];
	$time12 = $starttime12.' - '.$endtime12;
	$description12 = $_POST['description12'][$x];
	$person12 = $_POST['person12'][$x];
	
	$starttime13 = $_POST['starttime13'][$x];		//added additional boxes program flow
	$endtime13 = $_POST['endtime13'][$x];
	$time13 = $starttime13.' - '.$endtime13;
	$description13 = $_POST['description13'][$x];
	$person13 = $_POST['person13'][$x];
	
	$starttime14 = $_POST['starttime14'][$x];		//added additional boxes program flow
	$endtime14 = $_POST['endtime14'][$x];
	$time14 = $starttime14.' - '.$endtime14;
	$description14 = $_POST['description14'][$x];
	$person14 = $_POST['person14'][$x];
	
	$starttime15 = $_POST['starttime15'][$x];		//added additional boxes program flow
	$endtime15 = $_POST['endtime15'][$x];
	$time15 = $starttime15.' - '.$endtime15;
	$description15 = $_POST['description15'][$x];
	$person15 = $_POST['person15'][$x];
    
	$pname0 = $_POST['pname0'][$x];
	$pquan0 = $_POST['pquan0'];
	$pmon0 = $_POST['pmon0'];
	$pday0 = $_POST['pday0'];
	$pmail0 = $pquan0 . "X" . $pmon0 . "X" . $pday0;
	//$pmail0 = $_POST['pmail0'][$x];
	$pfund0 = "";
	$porg0 = $pquan0 * $pmon0 * $pday0;
	$pcom0 = "";
    
	$pname1 = $_POST['pname1'][$x];
	$pquan1 = $_POST['pquan1'];
	$pmon1 = $_POST['pmon1'];
	$pday1 = $_POST['pday1'];
	$pmail1 = $pquan1 . "X" . $pmon1 . "X" . $pday1;
	//$pmail1 = $_POST['pmail1'][$x];
	$pfund1 = "";
	$porg1 = $pquan1 * $pmon1 * $pday1;
	$pcom1 = "";
    
	$pname2 = $_POST['pname2'][$x];
	$pquan2 = $_POST['pquan2'];
	$pmon2 = $_POST['pmon2'];
	$pday2 = $_POST['pday2'];
	$pmail2 = $pquan2 . "X" . $pmon2 . "X" . $pday2;
	//$pmail2 = $_POST['pmail2'][$x];
	$pfund2 = "";
	$porg2 = "";
	$pcom2 = $pquan2 * $pmon2 * $pday2;
    
	$pname3 = $_POST['pname3'][$x];
	$pquan3 = $_POST['pquan3'];
	$pmon3 = $_POST['pmon3'];
	$pday3 = $_POST['pday3'];
	$pmail3 = $pquan3 . "X" . $pmon3 . "X" . $pday3;
	//$pmail3 = $_POST['pmail3'][$x];
	$pfund3 = "";
	$porg3 = $pquan3 * $pmon3 * $pday3;
	$pcom3 = "";
    
	$pname4 = "Subtotal";
	$pmail4 = "";
	$pfund4 = "";
	$porg4 = $porg0 + $porg1 + $porg3;
	$pcom4 = $porg3;
    
	$oname0 = $_POST['oname0'][$x];
	$oquan4 = $_POST['oquan4'];
	$omon4 = $_POST['omon4'];
	$oday4 = $_POST['oday4'];
	$omail0 = $oquan4 . "X" . $omon4 . "X" . $oday4;
	//$omail0 = $_POST['omail0'][$x];
	$ofund0 = $_POST['ofund0'][$x];
	$oorg0 = $_POST['oorg0'][$x];
	$ocom0 = $_POST['ocom0'][$x];
    
	$oname1 = $_POST['oname1'][$x];
	$oquan5 = $_POST['oquan5'];
	$omon5 = $_POST['omon5'];
	$oday5 = $_POST['oday5'];
	$omail1 = $oquan5 . "X" . $omon5 . "X" . $oday5;
	//$omail1 = $_POST['omail1'][$x];
	$ofund1 = $_POST['ofund1'][$x];
	$oorg1 = $_POST['oorg1'][$x];
	$ocom1 = $_POST['ocom1'][$x];
    
	$oname2 = $_POST['oname2'][$x];
	$oquan6 = $_POST['oquan6'];
	$omon6 = $_POST['omon6'];
	$oday6 = $_POST['oday6'];
	$omail2 = $oquan6 . "X" . $omon6 . "X" . $oday6;
	//$omail2 = $_POST['omail2'][$x];
	$ofund2 = $_POST['ofund2'][$x];
	$oorg2 = $_POST['oorg2'][$x];
	$ocom2 = $_POST['ocom2'][$x];
    
	$oname3 = $_POST['oname3'][$x];
	$oquan7 = $_POST['oquan7'];
	$omon7 = $_POST['omon7'];
	$oday7 = $_POST['oday7'];
	$oquan8 = $_POST['oquan8'];
	$omon8 = $_POST['omon8'];
	$oday8 = $_POST['oday8'];
	$oquan9 = $_POST['oquan9'];
	$omon9 = $_POST['omon9'];
	$oday9 = $_POST['oday9'];
	$omail3 = $oquan7 . "X" . $omon7 . "X" . $oday7 . ", " . $oquan8 . "X" . $omon8 . "X" . $oday8 . ", ". $oquan9 . "X" . $omon9 . "X" . $oday9;
	//$omail3 = $_POST['omail3'][$x];
	$oname7 = $_POST['oname7'][$x]; //CSF
	$ofund3 = $_POST['ofund3'];
	$ofund4 = $_POST['ofund4'];
	$ofund5 = $_POST['ofund5'];
	$omail7 =  $ofund3 . "," . $ofund4 . "," . $ofund5;
	//$omail7 = $_POST['omail7'][$x]; 
	
	$oname8 = $_POST['oname8'][$x]; //OC
	$oorg3 = $_POST['oorg3'];
	$oorg4 = $_POST['oorg4'];
	$oorg5 = $_POST['oorg5'];
	$omail8 =  $oorg3 . "," . $oorg4 . "," . $oorg5;
	//$omail8 = $_POST['omail8'][$x]; 
	$oname9 = $_POST['oname9'][$x]; //CC
	$ocom3 = $_POST['ocom3'][$x];
	$ocom4 = $_POST['ocom4'][$x];
	$ocom5 = $_POST['ocom5'][$x];
	$omail9 =  $ocom3 . "," . $ocom4 . "," . $ocom5;
	//$omail9 = $_POST['omail9'][$x]; 
	
	$oname4 = $_POST['oname4'][$x];
	$oquan10 = $_POST['oquan10'];
	$omon10 = $_POST['omon10'];
	$oday10 = $_POST['oday10'];
	$omail4 = $oquan10 . "X" . $omon10 . "X" . $oday10;
	//$omail4 = $_POST['omail4'][$x];
	$ofund6 = $_POST['ofund6'][$x];
	$oorg6 = $_POST['oorg6'][$x];
	$ocom6 = $_POST['ocom6'][$x];
	$oname5 = $_POST['oname5'][$x];
	$oquan11 = $_POST['oquan11'];
	$omon11 = $_POST['omon11'];
	$oday11 = $_POST['oday11'];
	$omail5 = $oquan11 . "X" . $omon11 . "X" . $oday11;
	//$omail5 = $_POST['omail5'][$x];
	$ofund7 = $_POST['ofund7'][$x];
	$oorg7 = $_POST['oorg7'][$x];
	$ocom7 = $_POST['ocom7'][$x];
	$oname6 = $_POST['oname6'][$x];
	$oquan12 = $_POST['oquan12'];
	$omon12 = $_POST['omon12'];
	$oday12 = $_POST['oday12'];
	$omail6 = $oquan12 . "X" . $omon12 . "X" . $oday12;
	//$omail6 = $_POST['omail6'][$x];
	$ofund8 = $_POST['ofund8'][$x];
	$oorg8 = $_POST['oorg8'][$x];
	$ocom8 = $_POST['ocom8'][$x];
	$ofund9 = $_POST['ofund9'][$x];
	$oorg9 = $_POST['oorg9'][$x];
	$ocom9 = $_POST['ocom9'][$x];
	$mname0 = $_POST['mname0'][$x];
	$mquan13 = $_POST['mquan13'];
	$mmon13 = $_POST['mmon13'];
	$mday13 = $_POST['mday13'];
	$mmail0 = $mquan13 . "X" . $mmon13 . "X" . $mday13;
	//$mmail0 = $_POST['mmail0'][$x];
	$mfund0 = $_POST['mfund0'][$x];
	$morg0 = $_POST['morg0'][$x];
	$mcom0 = $_POST['mcom0'][$x];
	$mname1 = $_POST['mname1'][$x];
	$mquan14 = $_POST['mquan14'];
	$mmon14 = $_POST['mmon14'];
	$mday14 = $_POST['mday14'];
	$mmail1 = $mquan14 . "X" . $mmon14 . "X" . $mday14;
	//$mmail1 = $_POST['mmail1'][$x];
	$mfund1 = $_POST['mfund1'][$x];
	$morg1 = $_POST['morg1'][$x];
	$mcom1 = $_POST['mcom1'][$x];
	$mname2 = $_POST['mname2'][$x];
	$mquan15 = $_POST['mquan15'];
	$mmon15 = $_POST['mmon15'];
	$mday15 = $_POST['mday15'];
	$mmail2 = $mquan15 . "X" . $mmon15 . "X" . $mday15;
	//$mmail2 = $_POST['mmail2'][$x];
	$mfund2 = $_POST['mfund2'][$x];
	$morg2 = $_POST['morg2'][$x];
	$mcom2 = $_POST['mcom2'][$x];
	$mname3 = $_POST['mname3'][$x];
	$mquan16 = $_POST['mquan16'];
	$mmon16 = $_POST['mmon16'];
	$mday16 = $_POST['mday16'];
	$mmail3 = $mquan16 . "X" . $mmon16 . "X" . $mday16;
	//$mmail3 = $_POST['mmail3'][$x];
	$mfund3 = $_POST['mfund3'][$x];
	$morg3 = $_POST['morg3'][$x];
	$mcom3 = $_POST['mcom3'][$x];
	$mname4 = $_POST['mname4'][$x];
	$mquan17 = $_POST['mquan17'];
	$mmon17 = $_POST['mmon17'];
	$mday17 = $_POST['mday17'];
	$mmail4 = $mquan17 . "X" . $mmon17 . "X" . $mday17;
	//$mmail4 = $_POST['mmail4'][$x];
	$mfund4 = $_POST['mfund4'][$x];
	$morg4 = $_POST['morg4'][$x];
	$mcom4 = $_POST['mcom4'][$x];
	$mfund5 = $_POST['mfund5'][$x];
	$morg5 = $_POST['morg5'][$x];
	$mcom5 = $_POST['mcom5'][$x];
	$otname0 = $_POST['otname0'][$x];
	$otquan18 = $_POST['otquan18'];
	$otmon18 = $_POST['otmon18'];
	$otday18 = $_POST['otday18'];
	$otmail0 = $otquan18 . "X" . $otmon18 . "X" . $otday18;
	//$otmail0 = $_POST['otmail0'][$x];
	$otfund0 = $_POST['otfund0'][$x];
	$otorg0 = $_POST['otorg0'][$x];
	$otcom0 = $_POST['otcom0'][$x];
	$otname1 = $_POST['otname1'][$x];
	$otquan19 = $_POST['otquan19'];
	$otmon19 = $_POST['otmon19'];
	$otday19 = $_POST['otday19'];
	$otmail1 = $otquan19 . "X" . $otmon19 . "X" . $otday19;
	//$otmail1 = $_POST['otmail1'][$x];
	$otfund1 = $_POST['otfund1'][$x];
	$otorg1 = $_POST['otorg1'][$x];
	$otcom1 = $_POST['otcom1'][$x];
	$otname2 = $_POST['otname2'][$x];
	$otquan20 = $_POST['otquan20'];
	$otmon20 = $_POST['otmon20'];
	$otday20 = $_POST['otday20'];
	$otmail2 = $otquan20 . "X" . $otmon20 . "X" . $otday20;
	//$otmail2 = $_POST['otmail2'][$x];
	$otfund2 = $_POST['otfund2'][$x];
	$otorg2 = $_POST['otorg2'][$x];
	$otcom2 = $_POST['otcom2'][$x];
	$otname3 = $_POST['otname3'][$x];
	$otquan21 = $_POST['otquan21'];
	$otmon21 = $_POST['otmon21'];
	$otday21 = $_POST['otday21'];
	$otmail3 = $otquan21 . "X" . $otmon21 . "X" . $otday21;
	//$otmail3 = $_POST['otmail3'][$x];
	$otfund3 = $_POST['otfund3'][$x];
	$otorg3 = $_POST['otorg3'][$x];
	$otcom3 = $_POST['otcom3'][$x];
	$otname4 = $_POST['otname4'][$x];
	$otquan22 = $_POST['otquan22'];
	$otmon22 = $_POST['otmon22'];
	$otday22 = $_POST['otday22'];
	$otmail4 = $otquan22 . "X" . $otmon22 . "X" . $otday22;
	//$otmail4 = $_POST['otmail4'][$x];
	$otfund4 = $_POST['otfund4'][$x];
	$otorg4 = $_POST['otorg4'][$x];
	$otcom4 = $_POST['otcom4'][$x];
	$otfund5 = $_POST['otfund5'][$x];
	$otorg5 = $_POST['otorg5'][$x];
	$otcom5 = $_POST['otcom5'][$x];
	$otfund6 = $_POST['otfund6'][$x];
	$otorg6 = $_POST['otorg6'][$x];
	$otcom6 = $_POST['otcom6'][$x];
    
   // $ptotalfund = $pfund0 + $pfund1 + $pfund2 + $pfund3 + $pfund4; 
   // $ptotalorg = $porg0 + $porg1 + $porg2 + $porg3 + $porg4;
   // $ptotalcom = $pcom0 + $pcom1 + $pcom2 + $pcom3 + $pcom4;
	
    //$ototalfund = $ofund0 + $ofund1 + $ofund2 + $ofund3 + $ofund4;
    //$ototalorg = $oorg0 + $oorg1 + $oorg2 + $oorg3 + $oorg4;
    //$ototalcom = $ocom0 + $ocom1 + $ocom2 + $ocom3 + $ocom4;
    
    //$mtotalfund = $mfund0 + $mfund1 + $mfund2 + $mfund3 + $mfund4;
    //$mtotalorg = $morg0 + $morg1 + $morg2 + $morg3 + $morg4;
    //$mtotalcom = $mcom0 + $mcom1 + $mcom2 + $mcom3 + $mcom4;
    
   // $ottotalfund = $otfund0 + $otfund1 + $otfund2 + $otfund3 + $otfund4;
   // $ottotalorg = $otorg0 + $otorg1 + $otorg2 + $otorg3 + $otorg4;
   // $ottotalcom = $otcom0 + $otcom1 + $otcom2 + $otcom3 + $otcom4;
    
   // $totalfund = $totalfund + ($ptotalfund + $mtotalfund + $ototalfund + $ottotalfund);
   // $totalorg = $totalorg + ($ptotalorg + $mtotalorg + $ototalorg + $ottotalorg);
   //$totalcom = $totalcom + ($ptotalcom + $mtotalcom + $ototalcom + $ottotalcom);
   
	$sqlupdate = "UPDATE budget_proposal SET proj_evaluation = '$proj_evaluation', proj_evaluation1 = '$proj_evaluation1', pname0 = '$pname0', pmail0 = '$pmail0', pfund0 = '$pfund0', porg0 = '$porg0', pcom0 = '$pcom0', pname1 = '$pname1', pmail1 = '$pmail1', pfund1 = '$pfund1', porg1 = '$porg1', pcom1 = '$pcom1', pname2 = '$pname2', pmail2 = '$pmail2', pfund2 = '$pfund2', porg2 = '$porg2', pcom2 = '$pcom2', pname3 = '$pcom3', pmail3 = '$pmail3', pfund3 = '$pfund3', porg3 = '$porg3', pcom3 = '$pcom3', pname4 = '$pcom4', pmail4 = '$pmail4', pfund4 = '$pfund4', porg4 = '$porg4', pcom4 = '$pcom4', oname0 = '$oname0, omail0 = '$omail0', ofund0 = '$ofund0', oorg0 = '$oorg0', ocom0 = '$ocom0', oname1 = '$oname1', omail1 = '$omail1', ofund1 = '$ofund1', oorg1 = '$oorg1', ocom1 = '$ocom1', oname2 = '$oname2', omail2 = '$omail2', ofund2 = '$ofund2', oorg2 = '$oorg2', ocom2 = '$ocom2', oname3 = '$oname3', omail3 = '$omail3', oname7 = '$oname7', omail7 = '$omail7', oname8 = '$oname8', omail8 = '$omail8', oname9 = '$oname9', omail9 = '$omail9', oname4 = '$oname4', omail4 = '$omail4', ofund6 = '$ofund6', oorg6 = '$oorg6', ocom6 = '$ocom6', oname5 = '$oname5', omail5 = '$omail5', ofund7 = '$ofund7, oorg7 = '$oorg7', ocom7 = '$ocom7', oname6 = '$oname6', omail6 = '$omail6', ofund8 = '$ofund8', oorg8 = '$oorg8', ocom8 = '$ocom8', ofund9 = '$ofund9', oorg9 = '$oorg9', ocom9 = '$ocom9', mname0 = '$mname0', mmail0 = '$mmail0', mfund0 = '$mfund0', morg0 = '$morg0', mcom0 = '$mcom0', mname1 = '$mname1', mmail1 = '$mmail1', mfund1 = '$mfund1', morg1 = '$morg1', mcom1 = '$mcom1', mname2 = '$mname2', mmail2 = '$mmail2', mfund2 = '$mfund2', morg2 = '$morg2', mcom2 = '$mcom2', mname3 = '$mname3', mmail3 = '$mmail3', mfund3 = '$mfund3', morg3 = '$morg3', mcom3 = '$mcom3', mname4 = '$mname4', mmail4 = '$mmail4', mfund4 = '$mfund4', morg4 = '$morg4', mcom4 = '$mcom4', mfund5 = '$mfund5', morg5 = '$morg5', mcom5 = '$mcom5', otname0 = '$otname0', otmail0 = '$otmail0', otfund0 = '$otfund0', otorg0 = '$otorg0', otcom0 = '$otcom0', otname1 = '$otname1', otmail1 = '$otmail1', otfund1 = '$otfund1', otorg1 = '$otorg1', otcom1 = '$otcom1', otname2 = '$otname2', otmail2 = '$otmail2', otfund2 = '$otfund2', otorg2 = '$otorg2', otcom2 = '$otcom2', otname3 = '$otname3', otmail3 = '$otmail3', otfund3 = '$otfund3', otorg3 = '$otorg3', otcom3 = '$otcom3', otname4 = '$otname4', otmail4 = '$otmail4', otfund4 = '$otfund4', otorg4 = '$otorg4', otcom4 = '$otcom4', otfund5 = '$otfund5', otorg5 = '$otorg5', otcom5 = '$otcom5', otfund6 = '$otfund6', otorg6 = '$otorg6', otcom6 = '$otcom6' WHERE proposal_id = $d";     
    
	$sqlprog = "UPDATE program_flow SET date = '$date', address = '$address', time0 = '$time0', description0 = '$description0', person0 = '$person0', time1 = '$time1', description1 = '$description1', person1 = '$person1', time2 = '$time2', description2 = '$description2', person2 = '$person2', time3 = '$time3', description3 = '$description3', person3 = '$person3', time4 = '$time4', description4 = '$description4', person4 = '$person4', time5 = '$time5', description5 = '$description5', person5 = '$person5', time6 = '$time6', description6 = '$description6', person6 = '$person6', time7 = '$time7', description7 = '$description7', person7 = '$person7', time8 = '$time8', description8 = '$description8', person8 = '$person8', time9 = '$time9', description9 = '$description9', person9 = '$person9', time10 = '$time10', description10 = '$description10', person10 = '$person10', time11 = '$time11', description11 = '$description11', person11 = '$person11', time12 = '$time12', description12 = '$description12', person12 = '$person12', time13 = '$time13', description13 = '$description13', person13 = '$person13', time14 = '$time14', description14 = '$description14', person14 = '$person14', time15 = '$time15', description15 = '$description15', person15 = '$person15' WHERE proposal_id = $d";
	
	
	if(!mysqli_query($link, $sqlupdate)){
		die("<script type='text/javascript'>alert('UNABLE TO SUBMIT PROPOSAL!!!!'); window.history.go(-1);</script>");
	}
	
	if (!mysqli_query($link, $sqlprog)){
        die("<script type='text/javascript'>alert('FAILED PROGRAM SUBMISSION!'); window.history.go(-1);</script>");
	}
    else if ($date < $submission){
		die ("<script type='text/javascript'>alert('PROPOSALS SHOULD BE ENCODED 15 DAYS BEFORE THE EVENT!'); window.history.go(-1);</script>");

	}
	}
    $sqli = "UPDATE proj_proposal SET budget = '1', program_flow = '1', days = '$days', pending = '$signatory1' WHERE proposal_id = $d ";
	$sqlproposal = "UPDATE proj_proposal SET target_date = '$date_target' WHERE proposal_id = $d";
	
	if(!mysqli_query($link, $sqlproposal)){
		die("<script type='text/javascript'>alert('UNABLE TO SUBMIT PROPOSAL!!!!'); window.history.go(-1);</script>");
	}
	if(!mysqli_query($link, $sqli)){
		die("<script type='text/javascript'>alert('UNABLE TO SUBMIT BUDGET PROPOSAL!'); window.history.go(-1);</script>");
	}
	echo "<script type='text/javascript'>alert('SUCCESSFULLY ADDED PROGRAM FLOW AND BUDGET PROPOSAL'); window.location ='org-listproposal.php?d=$d';</script>";
    
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
	<script type="text/javascript">
	
function calc(){
	var x = document.getElementById("pquan0").value; //personnel
	var v = document.getElementById("pmon0").value;  <!--student volunteers-->
	var y = document.getElementById("pday0").value;
		
	var xz = document.getElementById("pquan1").value; <!--faculty/admin-->
	var vz = document.getElementById("pmon1").value;
	var yz = document.getElementById("pday1").value;
	
	var a = document.getElementById("pquan2").value; <!--volunteers from the partner community or institution-->
	var d = document.getElementById("pmon2").value;
	var b = document.getElementById("pday2").value;
		
	var az = document.getElementById("pquan3").value; <!--volunteer external resource person(not from ust)-->
	var dz = document.getElementById("pmon3").value;
	var bz = document.getElementById("pday3").value;
	
	var ra = document.getElementById("porg0").value; <!--for subtotal-->
	var rb = document.getElementById("porg1").value;
	var rc = document.getElementById("pcom2").value;
	var rd = document.getElementById("porg3").value;
	
	//var j = document.getElementById("ofund0").value; <!--for subtotal / Operations and Logistics / CSF -->
	//var k = document.getElementById("ofund1").value;
	///var l = document.getElementById("ofund2").value;
	//var m = document.getElementById("ofund3").value;
	//var n = document.getElementById("ofund4").value;
	//var o = document.getElementById("ofund5").value;
	//var p = document.getElementById("ofund6").value;
	//var q = document.getElementById("ofund7").value;
	//var r = document.getElementById("ofund8").value;
	
	
	
			if(x>0 && y>0){
			var comp = x*(v*y);
			comp = String(comp);
			
		var compcalc = comp;
		document.getElementById("porg0").value = compcalc; <!--result to porg0(STUDENT VOLUNTEERS)-->
		}
		
			if(xz>0 && yz>0){
			var comp1 = xz*(vz*yz);
			comp1 = String(comp1);
			
		var compcalc1 = comp1;
		document.getElementById("porg1").value = compcalc1; <!--result to porg1(Faculty/Admin/Support)-->
		}
		
			if(a>0 && b>0){
			var comp2 = a*(d*b);
			comp2 = String(comp2);
			
		var compcalc2 = comp2;
		document.getElementById("pcom2").value = compcalc2; <!--result to pcom2(volunteers from the partner community or institution)-->
		}
		
			if(az>0 && bz>0){
			var comp3 = az*(dz*bz);
			comp3 = String(comp3);
			
		var compcalc3 = comp3;
		document.getElementById("porg3").value = compcalc3; <!--result to porg3(volunteer external resource person(not from ust))-->
		}
		
			if(ra>0 || rb>0 || rd>0){
			var comp4 = (parseInt(ra)+parseInt(rb)+parseInt(rd));
			var comp4z = String(comp4); 
			
		var compcalc4 = comp4z;
		document.getElementById("porg4").value = String(comp4); <!--subtotal to porg4(PERSONNEL)-->
		}
		
			if(rc>0){
			var comp5 = rc;
			var comp5z = comp5;
			
		var compcalc5 = comp5;
		document.getElementById("pcom4").value = compcalc5; <!--subtotal to pcom4-->
		}
		
		//if(j>0 && k>0 || l>0 || m>0 || n>0 || o>0 || p>0 || q>0 || r>0){
		//	var comp6 = (parseInt(j)+parseInt(k)+parseInt(l)+parseInt(m)+parseInt(n)+parseInt(o)+parseInt(p)+parseInt(q)+parseInt(r));
		//	var comp6z = String(comp6); 
			
		//var compcalc6 = comp6z;
		//document.getElementById("ofund9").value = String(comp6); <!--subtotal to ofund9(OPERATIONS AND LOGISTICS)-->
		//}
		

}

document.addEventListener("DOMContentLoaded", function() {
	calculate();
});	
</script>

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
            <li><a href="org-help.php">Help</a></li>
                <li><a href="logout.php">Sign Out</a></li>
      </ul>
    </li>
  </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>


               <div class = "col-md-12" style = "div-align: center; margin-top: 10px;">

            <div class = "col-md-12">

                <div class = "panel panel-body" style = "width: 100%; border-radius: 0;height: auto; color: #000; margin-bottom: 50px; background-color: #fff; box-shadow: 5px 5px 5px grey;">
                  <div class = "panel panel-heading" style = "font-size: 20px; color: #222; font-weight: bold;"><center>PROJECT PROPOSAL</center></div>

                  <div class = "col-md-12" style = "margin-top: 30px; font-size: 16px;">
<?php
                 echo "<form role='form' class='form-horizontal' method='post' action='budget-proposal.php?d=".$d."&&days=".$days."' enctype='multipart/form-data'>
				<input type='hidden' name='submitted' value='true'/>";
                
          
                for ($x = 0 ; $x < $days; $x++) {
                echo '<!-- Proposed Program Flow -->
                   <div class="form-group col-md-12">
                      <div class="col-md-2"><h5 style="font-weight: bold">Date(s) and Venue(s) of Project Implementation</h5></div>
                        <div class="row" style="margin-left:4px">
                          <div class="col-md-3">
                            <label class="control-label" for="target_date">Target Date</label>
                            <input class="form-control" id="date" name="date['.$x.']" onblur = "checkDate();" type="date" required="required" placeholder="mm/dd/yyyy"/>
                          </div>
                          <div class="col-md-7">
                            <label class="control-label" for="address">Address</label>
                            <input class="form-control" type="text" required="required" placeholder="Room No./Building Name/Street Address, Village or Barangay/City or Province" name="address['.$x.']"/>
                          </div>
                        </div>
          </div>
                  <div class="col-md-12">
                    <label class="control-label" style="font-weight:bold">PROPOSED PROGRAM FLOW</label>
                    <p>What is the sequence of events that needs to be followed in order to guide the successful implementation and completion of your community development project? Please fill out the matrix provided below.</p>
                    <div class="row clearfix">
                      <div class="col-md-12 column">
                        <table class="table table-bordered table-hover" id="prog_flow">
                          <thead>
                            <tr>
                              <th class="text-center">#</th>
                              <th class="text-center">Start Time<sub> (i.e. 07:00 AM)</sub></th>
                              <th class="text-center">End Time<sub> (i.e. 07:00 AM)</sub></th>
                              <th class="text-center">Activity Description</th>
                              <th class="text-center">Person/Group Responsible</th>
                            </tr>
                          </thead>
                          <tbody>
                    <tr id="ppf0">
                    <td>1</td>
                              <td><input type="text" name="starttime0['.$x.']" placeholder="Time" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" class="form-control"/></td>
                              <td><input type="text" name="endtime0['.$x.']" placeholder="Time" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" class="form-control"/></td>
                              <td><input type="text" name="description0['.$x.']"  placeholder="Description" class="form-control"/></td>
                              <td><input type="text" name="person0['.$x.']" placeholder="Name of Person/Group" class="form-control"/></td>
                            </tr>
                    <tr id="ppf1">
                    <td>2</td>
                              <td><input type="text" name="starttime1['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="endtime1['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="description1['.$x.']" placeholder="Description" class="form-control"/></td>
                              <td><input type="text" name="person1['.$x.']" placeholder="Name of Person/Group" class="form-control"/></td>
						  </tr>
				     <tr id="ppf2">
                     <td>3</td>
                              <td><input type="text" name="starttime2['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="endtime2['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="description2['.$x.']" placeholder="Description" class="form-control"/></td>
                              <td><input type="text" name="person2['.$x.']" placeholder="Name of Person/Group" class="form-control"/></td>
                            </tr>
					<tr id="ppf3">
					<td>4</td>
                              <td><input type="text" name="starttime3['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="endtime3['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="description3['.$x.']" placeholder="Description" class="form-control"/></td>
                              <td><input type="text" name="person3['.$x.']" placeholder="Name of Person/Group" class="form-control"/></td>
							</tr>
					<tr id="ppf4">
					<td>5</td>
                              <td><input type="text" name="starttime4['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="endtime4['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="description4['.$x.']" placeholder="Description" class="form-control"/></td>
                              <td><input type="text" name="person4['.$x.']" placeholder="Name of Person/Group" class="form-control"/></td>
                            </tr>
                    <tr id="ppf5">
					<td>6</td>
                              <td><input type="text" name="starttime5['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="endtime5['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="description5['.$x.']" placeholder="Description" class="form-control"/></td>
                              <td><input type="text" name="person5['.$x.']" placeholder="Name of Person/Group" class="form-control"/></td>
						</tr>
					<tr id="ppf6">
                    <td>7</td>
                              <td><input type="text" name="starttime6['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="endtime6['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="description6['.$x.']" placeholder="Description" class="form-control"/></td>
                              <td><input type="text" name="person6['.$x.']" placeholder="Name of Person/Group" class="form-control"/></td>
                            </tr>
                    <tr id="ppf7">
					<td>8</td>
                              <td><input type="text" name="starttime7['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="endtime7['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="description7['.$x.']" placeholder="Description" class="form-control"/></td>
                              <td><input type="text" name="person7['.$x.']" placeholder="Name of Person/Group" class="form-control"/></td>
							</tr>
					<tr id="ppf8">
                    <td>9</td>
                              <td><input type="text" name="starttime8['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="endtime8['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="description8['.$x.']" placeholder="Description" class="form-control"/></td>
                              <td><input type="text" name="person8['.$x.']" placeholder="Name of Person/Group" class="form-control"/></td>
                            </tr>
                    <tr id="ppf9">
					<td>10</td>
                              <td><input type="text" name="starttime9['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="endtime9['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="description9['.$x.']" placeholder="Description" class="form-control"/></td>
                              <td><input type="text" name="person9['.$x.']" placeholder="Name of Person/Group" class="form-control"/></td>
							</tr>
					<tr id="ppf10">
					<td>11</td>
                              <td><input type="text" name="starttime10['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="endtime10['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="description10['.$x.']" placeholder="Description" class="form-control"/></td>
                              <td><input type="text" name="person10['.$x.']" placeholder="Name of Person/Group" class="form-control"/></td>
                            </tr>
					<tr id="ppf11">
					<td>12</td>
                              <td><input type="text" name="starttime11['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="endtime11['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="description11['.$x.']" placeholder="Description" class="form-control"/></td>
                              <td><input type="text" name="person11['.$x.']" placeholder="Name of Person/Group" class="form-control"/></td>
                            </tr>
					<tr id="ppf12">
					<td>13</td>
                              <td><input type="text" name="starttime12['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="endtime12['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="description12['.$x.']" placeholder="Description" class="form-control"/></td>
                              <td><input type="text" name="person12['.$x.']" placeholder="Name of Person/Group" class="form-control"/></td>
                            </tr>
					<tr id="ppf13">
					<td>14</td>
                              <td><input type="text" name="starttime13['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="endtime13['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="description13['.$x.']" placeholder="Description" class="form-control"/></td>
                              <td><input type="text" name="person13['.$x.']" placeholder="Name of Person/Group" class="form-control"/></td>
                            </tr>
					<tr id="ppf14">
					<td>15</td>
                              <td><input type="text" name="starttime14['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="endtime14['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="description14['.$x.']" placeholder="Description" class="form-control"/></td>
                              <td><input type="text" name="person14['.$x.']" placeholder="Name of Person/Group" class="form-control"/></td>
                            </tr>
					<tr id="ppf15">
					<td>16</td>
                              <td><input type="text" name="starttime15['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="endtime15['.$x.']" pattern="^(00|0[0-9]|1[012]):[0-5][0-9] ?((a|p)m|(A|P)M)$" placeholder="Time" class="form-control"/></td>
                              <td><input type="text" name="description15['.$x.']" placeholder="Description" class="form-control"/></td>
                              <td><input type="text" name="person15['.$x.']" placeholder="Name of Person/Group" class="form-control"/></td>
                            </tr>
							
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                    
                <!-- end of Proposed Program Flow -->';
                
                echo '<!-- start of Budget Proposal -->';
                echo '<div class="col-md-12">
          <label class="control-label" style="font-weight:bold">PROPOSED BUDGET</label>';
         echo " <p>State the approximate or anticipated cost of the project. Please note that Simbahayan's policy is to make a contribution to your project, but not to provide 100% of the cost. Therefore, it is important that you record the extent of funding counterparts to the project. Please prepare one budget proposal per date of implementation.</p>";

          echo '  <div class="row clearfix">
              <div clas="col-md-12">
                <label class="control-label">1. Personnel</label>
                <table class="table table-bordered table-hover" id="personnel">
                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <th class="text-center">Item</th>
                      <th class="text-center">Description <br>(Quantity x Monetary Value x No. of Days)</th></br>
                      <th class="text-center">Community Service Fund</th>
                      <th class="text-center">Organization Counterpart</th>
                      <th class="text-center">Community Counterpart</th>
                    </tr>
                  </thead>
                  
				  <tbody>
				  
				  
				  
                    <tr id="per0">
                      <td>1</td>
                      <td><input maxlength ="25" type="text" name="pname0['.$x.']" placeholder="Item" class="form-control" value="Student Volunteers"/></td>
					  <td><input name="pquan0" type="text" id="pquan0" onkeyup="calc()" style="height: 35px;width:100px; border-radius: 5px; margin-left: 20px "/> x 
					  <input type="text" id="pmon0" name="pmon0" onkeyup="calc()" style="height: 35px;width:100px; border-radius: 5px;"  placeholder="Description" value="300"/> x <input name="pday0" type="text" id="pday0" onkeyup="calc()" style="height:35px;width:100px; border-radius: 5px;"/></td>
                      <td><input type="number" id="pfund0" name="pfund0['.$x.']" placeholder="00.00" disabled class="form-control"/></td>
                      <td><input type="number" id="porg0" name="porg0['.$x.']" onkeyup="calc()" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id = "pcom0" name="pcom0['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
					 
                    </tr>';
					
            echo '<tr id="per1">
            <td>2</td>
                      <td><input type="text" name="pname1['.$x.']" placeholder="Item" class="form-control" value="Faculty/Admin/Support Staff Volunteers"/></td>
                      <td><input name="pquan1" type="text" id="pquan1" onkeyup="calc()" style="height: 35px;width:100px; border-radius: 5px; margin-left: 20px "/> x <input type="text" id="pmon1" name="pmon1" onkeyup="calc()" style="height: 35px;width:100px; border-radius: 5px;"  placeholder="Description" value="1500"/> x 
					  <input name="pday1" "type="text"  id="pday1" onkeyup="calc()" style="height:35px;width:100px; border-radius: 5px;"/></td>
                      <td><input type="number" id= "pfund1" name="pfund1['.$x.']" placeholder="00.00" disabled class="form-control"/></td>
                      <td><input type="number" id="porg1" name="porg1['.$x.']" onkeyup="calc()" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id= "pcom1" name="pcom1['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
          
		  </tr>';
          echo '<tr id="per2">
            <td>3</td>
                      <td><input type="text" name="pname2['.$x.']" placeholder="Item" class="form-control" value="Volunteers from the Partner Community or Institution"/></td>
                      <td><input type="text" id="pquan2" name="pquan2" onkeyup="calc()" style="height: 35px;width:100px; border-radius: 5px; margin-left: 20px "/> x <input type="text" id="pmon2" name="pmon2" onkeyup="calc()" style="height: 35px;width:100px; border-radius: 5px;" placeholder="Description" value="500"/> x 
					  <input type="text" id="pday2" name="pday2"onkeyup="calc()" style="height:35px;width:100px; border-radius: 5px;"/></td>
                      <td><input type="number" id="pfund2" name="pfund2['.$x.']" placeholder="00.00" disabled class="form-control"/></td>
                      <td><input type="number" id="porg2" name="porg2['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="pcom2" name="pcom2['.$x.']" onkeyup="calc()" placeholder="Community Counterpart" class="form-control"/></td>
         
		 </tr>';
          echo '<tr id="per3">
            <td>4</td>
                      <td><input type="text" name="pname3['.$x.']" placeholder="Item" class="form-control" value="Volunteer External Resource Person (not from UST)"/></td>
                      <td><input type="text" id="pquan3" name="pquan3" onkeyup="calc()"  style="height: 35px;width:100px; border-radius: 5px; margin-left: 20px "/> x <input type="text" id="pmon3" name="pmon3" onkeyup="calc()" style="height: 35px;width:100px; border-radius: 5px;" placeholder="Description" value="1500"/> x 
					  <input type="text" id="pday3" name="pday3" onkeyup="calc()" style="height:35px;width:100px; border-radius: 5px;"/></td>
                      <td><input type="number" id="pfund3" name="pfund3['.$x.']" placeholder="00.00" disabled class="form-control"/></td>
                      <td><input type="number" id="porg3" name="porg3['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="pcom3" name="pcom3['.$x.']" onkeyup="calc()" placeholder="Community Counterpart" class="form-control"/></td>
          </tr>';
          echo '<tr id="per4">
            <td></td>
					  <td></td>
					  <td align="right"><b> Sub-Total 1:</b></td> 
					  <td><input type="number" id="pfund4" name="pfund4['.$x.']" placeholder="00.00" disabled class="form-control"/></td>
                      <td><input type="number" id="porg4" name="porg4['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="pcom4" name="pcom4['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
          </tr>
                  </tbody>
                </table>
              </div>
            </div>';


         echo '   <div class="row clearfix">
              <div clas="col-md-12">
			   <label class="control-label">2. Operations and Logistics (Compute and place the result on the appropriate counterpart.) </label>
                <table class="table table-bordered table-hover" id="operationslog">
                  
                    <thead>
                      <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Item</th>
                        <th class="text-center">Description<br>(Quantity x Monetary Value x No. of Days)</th></br>
                        <th class="text-center">Community Service Fund</th>
                        <th class="text-center">Organization Counterpart</th>
                        <th class="text-center">Community Counterpart</th>
                      </tr>
                    </thead>
                    
					<tbody>
                    <tr id="opslog0">
                      <td>1</td>
                      <td><input type="text" name="oname0['.$x.']" placeholder="Item" class="form-control" value="Lunch / Dinner"/></td>
                      <td><input type="text" id= "oquan4" name = "oquan4" onkeyup="calc()" style="height: 35px;width:100px; border-radius: 5px; margin-left: 5px"/> x <input type="text" id="omon4" name="omon4" onkeyup="calc()"style="height: 35px;width:100px; border-radius: 5px;" placeholder="Description" value="90"/> x <input type="text" id="oday4" name = "oday4" onkeyup="calc()" style="height:35px;width:100px; border-radius: 5px;"/></td>
                      <td><input type="number" id="ofund0" name="ofund0['.$x.']" placeholder="00.00" class="form-control"/></td>
                      <td><input type="number" id="oorg0" name="oorg0['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="ocom0" name="ocom0['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
                    </tr>';
					
			echo '<tr id="opslog1">
            <td>2</td>
                      <td><input type="text" name="oname1['.$x.']" placeholder="Item" class="form-control" value="Snack"/></td>
                      <td><input type="text" id="oquan5" name="oquan5" onkeyup="calc()" style="height: 35px;width:100px; border-radius: 5px; margin-left: 5px"/> x <input type="text" id="omon5" name="omon5" onkeyup="calc()" style="height: 35px;width:100px; border-radius: 5px;" placeholder="Description" value="50"/> x <input type="text" id="oday5" name="oday5" onkeyup="calc()" style="height:35px;width:100px; border-radius: 5px;"/></td>
                      <td><input type="number" id="ofund1" name="ofund1['.$x.']" placeholder="00.00" class="form-control"/></td>
                      <td><input type="number" id="oorg1" name="oorg1['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="ocom1" name="ocom1['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
          </tr>
          <tr id="opslog2">
            <td>3</td>
                      <td><input type="text" name="oname2['.$x.']" placeholder="Item" class="form-control" value="Venue and Facilities"/></td>
                      <td><input type="text"  id= "oquan6" name = "oquan6" style="height: 35px;width:100px; border-radius: 5px; margin-left: 5px "/> x <input type="text"  id= "omon6" name = "omon6" style="height: 35px;width:100px; border-radius: 5px;" placeholder=""/> x <input type="text"  id= "oday6" name = "oday6"  style="height:35px;width:100px; border-radius: 5px;"/></td>
                      <td><input type="number" id="ofund2" name="ofund2['.$x.']" placeholder="00.00" class="form-control"/></td>
                      <td><input type="number" id="oorg2" name="oorg2['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="ocom2" name="ocom2['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
          </tr>
         
            <tr id ="opslog4"><input type="hidden" name="oname3['.$x.']" value="Transportation"/>
			<td>4</td>
            <br>
			<td>
		<p>Transportation/s</p>
			
            <input type="checkbox" name="vehicle" value="None">None
            <br>
           <input type="checkbox" name="vehicle" value="Hi-Ace Van (14 seater)">Hi-Ace Van (14 seater)
            <br>
            <input type="checkbox" name="vehicle" value="Canter (16 seater)">Canter (16 seater)
            <br>
            <input type="checkbox" name="vehicle" value="Coaster (28 seater)">Coaster (28 seater)
            <br>
            <input type="checkbox" name="vehicle" value="Bus 1 (55 seater)">Bus 1 (55 seater)
            <br>
	    <input type="checkbox" name="vehicle" value="Bus 2 (55 seater)">Bus 2 (55 seater)
            <br>
	    <input type="checkbox" name="vehicle" value="Bus 3 (70 seater)">Bus 3 (70 seater)
            <br>
            <br>
			<a href=".\uploads\Vehicle Rate.pdf"target="_blank">Click to view the Vehicle Rates</a>
						
			<td><input type="text" id= "oquan7" name = "oquan7" style="height: 35px;width:100px; border-radius: 5px; margin-left: 5px "/> x <input type="text" id= "omon7" name = "omon7" style="height: 35px;width:100px; border-radius: 5px;" placeholder=""/> x <input type="number" id= "oday7" name = "oday7" style="height:35px;width:100px; border-radius: 5px;"/><br><input type="number" id= "oquan8" name = "oquan8" style="height:35px;width:100px; border-radius: 5px; margin-left: 5px "/> x <input type="number" id= "omon8" name = "omon8" style="height:35px;width:100px; border-radius: 5px; margin-left: 0px; "/> x <input type="text" id= "oday8" name = "oday8" style="height:35px;width:100px; border-radius: 5px; margin-left: 0px;"/> <br><input type="text" id= "oquan9" name = "oquan9"  style="height:35px;width:100px; border-radius: 5px; margin-left: 5px "/> x <input type="text" id= "omon9" name = "omon9" style="height:35px;width:100px; border-radius: 5px; margin-left: 0px;"/> x <input type="text" id= "oday9" name = "oday9" style="height:35px;width:100px; border-radius: 5px; margin-left: 0px;"/> </td></br>
			
            <td><input type="hidden" name="oname7['.$x.']"/>
			<input type="number" id="ofund3" name="ofund3" placeholder="00.00" class="form-control"/><input type="number" id="ofund4" name="ofund4" placeholder="00.00" class="form-control"/> <input type="number" id="ofund5" name="ofund5" placeholder="00.00" class="form-control"/></td>
			
            <td><input type="hidden" name="oname8['.$x.']"/>
			<input type="number" id="oorg3" name="oorg3" placeholder="Organization Counterpart" class="form-control"/> <input type="number" id="oorg4" name="oorg4" placeholder="Organization Counterpart" class="form-control"/> <input type="number" id="oorg5" name="oorg5" placeholder="Organization Counterpart" class="form-control"/></td>
			
            <td><input type="hidden" name="oname9['.$x.']"/>
			<input type="number" id="ocom3" name="ocom3['.$x.']" placeholder="Community Counterpart" class="form-control"/> <input type="number" id="ocom4" name="ocom4['.$x.']" placeholder="Community Counterpart" class="form-control"/> <input type="number" id="ocom5" name="ocom5['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
			

		  </p>
		

</td>


            
			</tr>
			<tr id="opslog3">
            <td>5</td>
                      <td><input type="text" name="oname4['.$x.']" placeholder="Item" class="form-control" value="Accommodation"/></td>
                     <td><input type="text" id="oquan10" name="oquan10" style="height: 35px;width:100px; border-radius: 5px; margin-left: 5px "/> x <input type="text" id="omon10" name="omon10" style="height: 35px;width:100px; border-radius: 5px;" placeholder=""/> x <input type="text" id="oday10" name="oday10"  style="height:35px;width:100px; border-radius: 5px;"/></td>
                      <td><input type="number" id="ofund6" name="ofund6['.$x.']" placeholder="00.00" class="form-control"/></td>
                      <td><input type="number" id="oorg6" name="oorg6['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="ocom6" name="ocom6['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
			
		   </tr>
		  
		  
          <tr id="opslog5">
            <td>6</td>
                      <td><input type="text" name="oname5['.$x.']" placeholder="Toll Fee" class="form-control"/></td>
                      <td><input type="text" id="oquan11" name="oquan11" style="height: 35px;width:100px; border-radius: 5px; margin-left: 5px "/> x <input type="text" id="omon11" name="omon11" style="height: 35px;width:100px; border-radius: 5px;" placeholder=""/> x <input type="text" id="oday11" name="oday11"  style="height:35px;width:100px; border-radius: 5px;"/></td>
                      <td><input type="number" id="ofund7" name="ofund7['.$x.']" placeholder="00.00" class="form-control"/></td>
                      <td><input type="number" id="oorg7" name="oorg7['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="ocom7" name="ocom7['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
          </tr>

            <tr id="opslog6">
            <td>7</td>
                      <td><input type="text" name="oname6['.$x.']" placeholder="Communications" class="form-control"/></td>
                      <td><input type="text" id="oquan12" name="oquan12" style="height: 35px;width:100px; border-radius: 5px; margin-left: 5px "/> x <input type="text" id="omon12" name="omon12" style="height: 35px;width:100px; border-radius: 5px;" placeholder=""/> x <input type="text" id="oday12" name="oday12"  style="height:35px;width:100px; border-radius: 5px;"/></td>
					  <td><input type="number" id="ofund8" name="ofund8['.$x.']" placeholder="00.00" class="form-control"/></td>
                      <td><input type="number" id="oorg8" name="oorg8['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="ocom8" name="ocom8['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
         
		 <tr id="opslog7">
            <td></td>
					  <td></td>
					  <td align="right"><b> Sub-Total 2:</b></td> 
					  <td><input type="number" id="ofund9" name="ofund9['.$x.']" placeholder="00.00" class="form-control"/></td>
                      <td><input type="number" id="oorg9" name="oorg9['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="ocom9" name="ocom9['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
          
		  </tr>
		  </tr>
                 
				 </tbody>
                  </table>

            

              </div>
            </div>';


         echo '   <div class="row clearfix">
              <div clas="col-md-12">
                <table class="table table-bordered table-hover" id="materials">
                  <label class="control-label">3. Materials and Supplies</label>
                    <thead>
                      <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Item</th>
                        <th class="text-center">Description <br>(Quantity x Monetary Value x No. of Days)</th><br>
                        <th class="text-center">Community Service Fund</th>
                        <th class="text-center">Organization Counterpart</th>
                        <th class="text-center">Community Counterpart</th>
                      </tr>
                    </thead>
                   <tbody>
                    <tr id="materials0">
                      <td>1</td>
                      <td><input type="text" name="mname0['.$x.']" placeholder="Item" class="form-control"/></td>
                      <td><input type="text" id="mquan13" name="mquan13" style="height: 35px;width:100px; border-radius: 5px; margin-left: 5px "/> x <input type="text" id="mmon13" name="mmon13" style="height: 35px;width:100px; border-radius: 5px;" placeholder=""/> x <input type="text" id="mday13" name="mday13"  style="height:35px;width:100px; border-radius: 5px;"/></td>
                      <td><input type="number" id="mfund0" name="mfund0['.$x.']" placeholder="00.00" class="form-control"/></td>
                      <td><input type="number" id="morg0" name="morg0['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="mcom0" name="mcom0['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
                    </tr>
                    <tr id="materials1">
            <td>2</td>
                      <td><input type="text" name="mname1['.$x.']" placeholder="Item" class="form-control"/></td>
                      <td><input type="text" id="mquan14" name="mquan14"style="height: 35px;width:100px; border-radius: 5px; margin-left: 5px "/> x <input type="text" id="mmon14" name="mmon14" style="height: 35px;width:100px; border-radius: 5px;" placeholder=""/> x <input type="text" id="mday14" name="mday14"  style="height:35px;width:100px; border-radius: 5px;"/></td>
                      <td><input type="number" id="mfund1" name="mfund1['.$x.']" placeholder="00.00" class="form-control"/></td>
                      <td><input type="number" id="morg1" name="morg1['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="mcom1" name="mcom1['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
          </tr>
          <tr id="materials2">
            <td>3</td>
                      <td><input type="text" name="mname2['.$x.']" placeholder="Item" class="form-control"/></td>
                     <td><input type="text" id="mquan15" name="mquan15" style="height: 35px;width:100px; border-radius: 5px; margin-left: 5px "/> x <input type="text" id="mmon15" name="mmon15" style="height: 35px;width:100px; border-radius: 5px;" placeholder=""/> x <input type="text" id="mday15" name="mday15"  style="height:35px;width:100px; border-radius: 5px;"/></td>
                      <td><input type="number" id="mfund2" name="mfund2['.$x.']" placeholder="00.00" class="form-control"/></td>
                      <td><input type="number" id="morg2" name="morg2['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="mcom2" name="mcom2['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
          </tr>
          <tr id="materials3">
            <td>4</td>
                      <td><input type="text" name="mname3['.$x.']" placeholder="Item" class="form-control"/></td>
                      <td><input type="text" id="mquan16" name="mquan16" style="height: 35px;width:100px; border-radius: 5px; margin-left: 5px "/> x <input type="text" id="mmon16" name="mmon16" style="height: 35px;width:100px; border-radius: 5px;" placeholder=""/> x <input type="text" id="mday16" name="mday16"  style="height:35px;width:100px; border-radius: 5px;"/></td>
                      <td><input type="number" id="mfund3" name="mfund3['.$x.']" placeholder="00.00" class="form-control"/></td>
                      <td><input type="number" id="morg3" name="morg3['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="mcom3" name="mcom3['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
          </tr>
          <tr id="materials4">
            <td>5</td>
                      <td><input type="text" name="mname4['.$x.']" placeholder="Item" class="form-control"/></td>
                      <td><input type="text" id="mquan17" name="mquan17" style="height: 35px;width:100px; border-radius: 5px; margin-left: 5px "/> x <input type="text" id="mmon17" name="mmon17" style="height: 35px;width:100px; border-radius: 5px;" placeholder=""/> x <input type="text" id="mday17" name="mday17"  style="height:35px;width:100px; border-radius: 5px;"/></td>
                      <td><input type="number" id="mfund4" name="mfund4['.$x.']" placeholder="00.00" class="form-control"/></td>
                      <td><input type="number" id="morg4" name="morg4['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="mcom4" name="mcom4['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
         
				<tr id="mat1">
            <td></td>
					  <td></td>
					  <td align="right"><b> Sub-Total 3:</b></td> 
					  <td><input type="number" id="mfund5" name="mfund5['.$x.']" placeholder="00.00" class="form-control"/></td>
                      <td><input type="number" id="morg5" name="morg5['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="mcom5" name="mcom5['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
          
		  </tr>
		  </tr>
                  </tbody>
                  </table>
              </div>
            </div>';


         echo '   <div class="row clearfix">
              <div clas="col-md-12">
                <table class="table table-bordered table-hover" id="others">
                    <thead>
                    <label class="control-label">4. Others</label>
                      <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Item</th>
                        <th class="text-center">Description <br>(Quantity x Monetary Value x No. of Days)</th>
                        <th class="text-center">Community Service Fund</th>
                        <th class="text-center">Organization Counterpart</th>
                        <th class="text-center">Community Counterpart</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr id="others0">
                      <td>1</td>
                      <td><input type="text" name="otname0['.$x.']" placeholder="Item" class="form-control"/></td>
                      <td><input type="text" id="otquan18" name="otquan18" style="height: 35px;width:100px; border-radius: 5px; margin-left: 5px "/> x <input type="text" id="otmon18" name="otmon18" style="height: 35px;width:100px; border-radius: 5px;" placeholder=""/> x <input type="text" id="otday18" name="otday18"  style="height:35px;width:100px; border-radius: 5px;"/></td>
                      <td><input type="number" id="otfund0" name="otfund0['.$x.']" placeholder="00.00" class="form-control"/></td>
                      <td><input type="number" id="otorg0" name="otorg0['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="otcom0" name="otcom0['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
                    </tr>
                    <tr id="others1">
            <td>2</td>
                      <td><input type="text" name="otname1['.$x.']" placeholder="Item" class="form-control"/></td>
                      <td><input type="text" id="otquan19" name="otquan19" style="height: 35px;width:100px; border-radius: 5px; margin-left: 5px "/> x <input type="text" id="otmon19" name="otmon19" style="height: 35px;width:100px; border-radius: 5px;" placeholder=""/> x <input type="text" id="otday19" name="otday19"  style="height:35px;width:100px; border-radius: 5px;"/></td>
                      <td><input type="number" id="otfund1" name="otfund1['.$x.']" placeholder="00.00" class="form-control"/></td>
                      <td><input type="number" id="otorg1" name="otorg1['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="otcom1" name="otcom1['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
          </tr>
          <tr id="others2">
            <td>3</td>
                      <td><input type="text" name="otname2['.$x.']" placeholder="Item" class="form-control"/></td>
                      <td><input type="text" id="otquan20" name="otquan20" style="height: 35px;width:100px; border-radius: 5px; margin-left: 5px "/> x <input type="text" id="otmon20" name="otmon20" style="height: 35px;width:100px; border-radius: 5px;" "placeholder=""/> x <input type="text" id="otday20" name="otday20"  style="height:35px;width:100px; border-radius: 5px;"/></td>
                      <td><input type="number" id="otfund2" name="otfund2['.$x.']" placeholder="00.00" class="form-control"/></td>
                      <td><input type="number" id="otorg2" name="otorg2['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="otcom2" name="otcom2['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
          </tr>
          <tr id="others3">
            <td>4</td>
                      <td><input type="text" name="otname3['.$x.']" placeholder="Item" class="form-control"/></td>
                      <td><input type="text" id="otquan21" name="otquan21" style="height: 35px;width:100px; border-radius: 5px; margin-left: 5px "/> x <input type="text" id="otmon21" name="otmon21" style="height: 35px;width:100px; border-radius: 5px;" placeholder=""/> x <input type="text" id="otday21" name="otday21"  style="height:35px;width:100px; border-radius: 5px;"/></td>
					  <td><input type="number" id="otfund3" name="otfund3['.$x.']" placeholder="00.00" class="form-control"/></td>
                      <td><input type="number" id="otorg3" name="otorg3['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="otcom3" name="otcom3['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
          </tr>
          <tr id="others4">
            <td>5</td>
                      <td><input type="text" name="otname4['.$x.']" placeholder="Item" class="form-control"/></td>
                      <td><input type="text" id="otquan22" name="otquan22" style="height: 35px;width:100px; border-radius: 5px; margin-left: 5px "/> x <input type="text" id="otmon22" name="otmon22" style="height: 35px;width:100px; border-radius: 5px;" placeholder=""/> x <input type="text" id="otday22" name="otday22"  style="height:35px;width:100px; border-radius: 5px;"/></td>
					  <td><input type="number" id="otfund4" name="otfund4['.$x.']" placeholder="00.00" class="form-control"/></td>
                      <td><input type="number" id="otorg4" name="otorg4['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="otcom4" name="otcom4['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
         
		 <tr id="others5">
            <td></td>
					  <td></td>
					  <td align="right"><b> Sub-Total 4:</b></td> 
					  <td><input type="number" id="otfund5" name="otfund5['.$x.']" placeholder="00.00" class="form-control"/></td>
                      <td><input type="number" id="otorg5" name="otorg5['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="otcom5" name="otcom5['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
          
		 <tr id="others6">
            <td></td>
					  <td></td>
					  <td align="right"><b> Overall Total:</b></td> 
					  <td><input type="number" id="otfund6" name="otfund6['.$x.']" placeholder="00.00" class="form-control"/></td>
                      <td><input type="number" id="otorg6" name="otorg6['.$x.']" placeholder="Organization Counterpart" class="form-control"/></td>
                      <td><input type="number" id="otcom6" name="otcom6['.$x.']" placeholder="Community Counterpart" class="form-control"/></td>
		  
		  </tr>
		 </tr>

            
                  </tbody>
                  </table>
            
        
              </div>
            </div>';

            echo '<!-- end of budget proposal -->';
                }

        
        echo "<div class='col-md-6'>
          <input class='btn btn-success sbmtBtn btn-lg pull-right' style = 'color: #fff; background-color: #23cf5f; border-radius: 0; margin-top: 30px;' type='submit' value='Submit'/> 
        </div>
     </form>";   
?>	 
                 
              
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