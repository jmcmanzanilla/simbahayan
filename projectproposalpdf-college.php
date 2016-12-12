<?php
require('fpdf17/fpdf.php');
include "mysql_connect.php";
$d = $_GET['d'];
$days = $_GET['days'];
$query = "SELECT * FROM proj_proposal WHERE proposal_id = $d";
$result = mysqli_query($link,$query);
while ($row = mysqli_fetch_array($result)){
   $lead_org = $row['lead_org'];
   $affiliation = $row['affiliation'];
   $college = $row['college'];
   $lname1 = $row['lname1'];
   $fname1 = $row['fname1'];
   $mi1 = $row['mi1'];
   $cnum1 = $row['cnum1'];
   $email1 = $row['email1'];
   $lname2 = $row['lname2'];
   $fname2 = $row['fname2'];
   $mi2 = $row['mi2'];
   $cnum2 = $row['cnum2'];
   $email2 = $row['email2'];
   $collab = $row['collab'];
   $proj_title = $row['proj_title'];
   $prog_areadev = $row['prog_areadev'];
   $community = $row['community'];
   $participants = $row['participants'];
   $comser_budget = $row['comser_budget'];
   $org_budget = $row['org_budget'];
   $com_budget = $row['com_budget'];
   $proj_background = $row['proj_background'];
   $proj_background1 = $row['proj_background1'];		// added proj_backround 1-3
   $proj_background2 = $row['proj_background2'];
   $proj_background3 = $row['proj_background3'];
   $gen_objective = $row['gen_objective'];
   $spec_obj1 = $row['spec_obj1'];
   $exp_result1 = $row['exp_result1'];
   $spec_obj2 = $row['spec_obj2'];
   $exp_result2 = $row['exp_result2'];
   $spec_obj3 = $row['spec_obj3'];
   $exp_result3 = $row['exp_result3'];
   $spec_obj4 = $row['spec_obj4'];						//added spec_obj4 & exp_result4
   $exp_result4 = $row['exp_result4'];
   $spec_obj5 = $row['spec_obj5'];					//added spec_obj5 & exp_result5
   $exp_result5 = $row['exp_result5'];
   $proj_evaluation = $row['proj_evaluation'];
   $proj_evaluation1 = $row['proj_evaluation1'];		//added proj_evaluation1
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
  // $proj_evaluation1 = $row['proj_evaluation1'];  //added proj_evaluation1
}
//eto daw ung mga undefined variable sa collegePDF 
$query2 = "SELECT * FROM budget_proposal WHERE proposal_id = $d";
$result2 = mysqli_query($link, $query2);
while ($row = mysqli_fetch_array($result2)){
   $chair_name = "";
   $college_dean = "";
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
   //$ofund3 = $row['ofund3'];
   //$oorg3 = $row['oorg3'];
   //$ocom3 = $row['ocom3'];
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
}
//-------
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
$orgsql = "SELECT org_name, signature FROM student_profile WHERE user_id = $lead_org";
$orgresult = mysqli_query($link, $orgsql);
while ($row = mysqli_fetch_array($orgresult)){
  $org_name = $row['org_name'];
  $projhead1 = $row['signature'];
 }
$count = "SELECT count(signatory_num) as counting FROM order_signatory WHERE org_num = $lead_org";
$cresult = mysqli_query($link, $count);
while($row = mysqli_fetch_array($cresult)) {
	$resultcount = $row['counting'];
}
if ($resultcount == 4){
$pressql = "SELECT signatory_name, signatory_num FROM order_signatory WHERE org_num = $lead_org AND order_number = 1";
 $resultpres = mysqli_query($link, $pressql);
 while ($row = mysqli_fetch_array($resultpres)){
  $pres_name = $row['signatory_name'];
  $president_num = $row['signatory_num'];
 }
 
/*$presselect = "SELECT signature FROM signatory_profile WHERE user_id = $president_num"; 
$presult = mysqli_query($link, $presselect);
while ($row = mysqli_fetch_array($presult)){
  $president = $row['signature'];
}*/
 
 $advsql = "SELECT signatory_name, signatory_num FROM order_signatory WHERE org_num = $lead_org AND order_number = 2";
 $resultadv = mysqli_query($link, $advsql);
 while ($row = mysqli_fetch_array($resultadv)){
  $adv_name = $row['signatory_name'];
  $adviser_num = $row['signatory_num'];
 }
 
/*$aresselect = "SELECT signature FROM signatory_profile WHERE user_id = $adviser_num"; 
$aresult = mysqli_query($link, $aresselect);
while ($row = mysqli_fetch_array($aresult)){
  $adviser1 = $row['signature'];
}*/

 $coorsql = "SELECT signatory_name, signatory_num FROM order_signatory WHERE org_num = $lead_org AND order_number = 3";
 $resultcoor = mysqli_query($link, $coorsql);
 while ($row = mysqli_fetch_array($resultcoor)){
 $coor_name = $row['signatory_name'];
 $coor_num = $row['signatory_num'];
 }
 
/*$coorselect = "SELECT signature FROM signatory_profile WHERE user_id = $coor_num"; 
$coorresult = mysqli_query($link, $coorselect);
while ($row = mysqli_fetch_array($coorresult)){
  $coordinator = $row['signature'];
}*/

 $chairsql = "SELECT signatory_name, signatory_num FROM order_signatory WHERE org_num = $lead_org AND order_number = 4";
 $resultchair = mysqli_query($link, $chairsql);
 while ($row = mysqli_fetch_array($resultchair)){
  $chair_name = $row['signatory_name'];
  $chair_num = $row['signatory_num'];
 }
 
/*$chairselect = "SELECT signature FROM signatory_profile WHERE user_id = $chair_num"; 
$chairresult = mysqli_query($link, $chairselect);
while ($row = mysqli_fetch_array($chairresult)){
  $chair = $row['signature'];
} */

  /*$deansql = "SELECT signatory_name FROM order_signatory WHERE org_num = $lead_org AND order_number = 5";
 $resultdean = mysqli_query($link, $deansql);
 while ($row = mysqli_fetch_array($resultdean)){
  $dean_name = $row['signatory_name'];
 }
  $regsql = "SELECT signatory_name FROM order_signatory WHERE org_num = $lead_org AND order_number = 5";
 $resultreg = mysqli_query($link, $regsql);
 while ($row = mysqli_fetch_array($resultreg)){
  $reg_name = $row['signatory_name'];
 }*/
}
else {
$pressql = "SELECT signatory_name, signatory_num FROM order_signatory WHERE org_num = $lead_org AND order_number = 1";
 $resultpres = mysqli_query($link, $pressql);
 while ($row = mysqli_fetch_array($resultpres)){
  $pres_name = $row['signatory_name'];
  $president_num = $row['signatory_num'];
 }
 
/*$presselect = "SELECT signature FROM signatory_profile WHERE user_id = $president_num"; 
$presult = mysqli_query($link, $presselect);
while ($row = mysqli_fetch_array($presult)){
  $president = $row['signature'];
}*/

 $advsql = "SELECT signatory_name, signatory_num FROM order_signatory WHERE org_num = $lead_org AND order_number = 2";
 $resultadv = mysqli_query($link, $advsql);
 while ($row = mysqli_fetch_array($resultadv)){
  $adv_name = $row['signatory_name'];
  $adviser_num = $row['signatory_num'];
 }
 
/*$adselect = "SELECT signature FROM signatory_profile WHERE user_id = $adviser_num"; 
$adresult = mysqli_query($link, $adselect);
while ($row = mysqli_fetch_array($adresult)){
  $adviser1 = $row['signature'];
}*/

 $coorsql = "SELECT signatory_name, signatory_num FROM order_signatory WHERE org_num = $lead_org AND order_number = 3";
 $resultcoor = mysqli_query($link, $coorsql);
 while ($row = mysqli_fetch_array($resultcoor)){
  $coor_name = $row['signatory_name'];
  $coor_num = $row['signatory_num'];
 }
 
/*$coorselect = "SELECT signature FROM signatory_profile WHERE user_id = $coor_num"; 
$coorresult = mysqli_query($link, $coorselect);
while ($row = mysqli_fetch_array($coorresult)){
 $coordinator = $row['signature'];
}*/
}

$deansql = "SELECT * FROM order_signatory WHERE org_num = 0 AND order_number = 1 AND simbahayan = 0 AND univ_wide = 0 AND standard = 1 AND nstp = 0";
 $resultdean = mysqli_query($link, $deansql);
 while ($row = mysqli_fetch_array($resultdean)){
  $dean_num = $row['signatory_num'];
  $dean_name = $row['signatory_name'];
 }
 
/*$collegedean = "SELECT signature, college FROM signatory_profile WHERE user_id = $dean_num";
 $resultcollege = mysqli_query($link, $collegedean);
 while ($row = mysqli_fetch_array($resultcollege)){
  $college_dean = $row['college'];
  $dean = $row['signature'];
 }*/
 
 $regsql = "SELECT * FROM order_signatory WHERE org_num = 0 AND order_number = 2 AND simbahayan = 0 AND univ_wide = 0 AND standard = 1 AND nstp = 0";
 $resultreg = mysqli_query($link, $regsql);
 while ($row = mysqli_fetch_array($resultreg)){
  $reg_name = $row['signatory_name'];
  $reg_num = $row['signatory_num'];
 }
 
/*$regselect = "SELECT signature FROM signatory_profile WHERE user_id = $reg_num"; 
$regresult = mysqli_query($link, $regselect);
while ($row = mysqli_fetch_array($regresult)){
  $regent = $row['signature'];
}*/

$logo1 = "images/logo_1.jpg";
$logo2 = "images/logo2.jpg";
/*
$president = "images/krizsa.jpg";
$adviser1 = "images/krizsa.jpg";
$adviser2 = "images/krizsa.jpg";
$coordinator = "images/krizsa.jpg";
$chair = "images/krizsa.jpg";
$dean = "images/krizsa.jpg";
$regent = "images/krizsa.jpg";
*/
class PDF extends FPDF
{
  function setProj($proj_title){ 
      $this->proj_title = $proj_title; 
    } 
    function getProj(){
        return $this->proj_title;
    }
    function setOrg($org_name){ 
      $this->org_name = $org_name; 
    } 
    function getOrg(){
        return $this->org_name;
    }
// Page header
function Header()
{
    $proj_title = $GLOBALS['proj_title'];
    $org_name = $GLOBALS['org_name'];
    // // Logo
    // $this->Image('images/ust_logo1.png',10,6,50);
    // //Arial bold 15
    $this->SetFont('Arial','B',9);
    // Move to the right
    // $this->Cell(10);
    // Title
    $this->Cell(40,5,'Project Title:');
    $this->Cell(150,5,$proj_title, '', 'L');
    $this->Ln(5);
    $this->Cell(40,5,'Lead Organization:');
    $this->Cell(150,5,$org_name, '', 'L');
    // Line break
    $this->Ln(20);
}
function WordWrap(&$text, $maxwidth)
{
    $text = trim($text);
    if ($text==='')
        return 0;
    $space = $this->GetStringWidth(' ');
    $lines = explode("\n", $text);
    $text = '';
    $count = 0;
    foreach ($lines as $line)
    {
        $words = preg_split('/ +/', $line);
        $width = 0;
        foreach ($words as $word)
        {
            $wordwidth = $this->GetStringWidth($word);
            if ($wordwidth > $maxwidth)
            {
                // Word is too long, we cut it
                for($i=0; $i<strlen($word); $i++)
                {
                    $wordwidth = $this->GetStringWidth(substr($word, $i, 1));
                    if($width + $wordwidth <= $maxwidth)
                    {
                        $width += $wordwidth;
                        $text .= substr($word, $i, 1);
                    }
                    else
                    {
                        $width = $wordwidth;
                        $text = rtrim($text)."\n".substr($word, $i, 1);
                        $count++;
                    }
                }
            }
            elseif($width + $wordwidth <= $maxwidth)
            {
                $width += $wordwidth + $space;
                $text .= $word.' ';
            }
            else
            {
                $width = $wordwidth + $space;
                $text = rtrim($text)."\n".$word.' ';
                $count++;
            }
        }
        $text = rtrim($text)."\n";
        $count++;
    }
    $text = rtrim($text);
    return $count;
}
// // Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(140,5,'UST-SIMBAHAYAN Community Development Project Proposal Form   UST:S040-00-FO21 rev 02 08/08/15', 'C');
    $this->Cell(0,5,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
// function SetCol($col)
// {
//     // Set position at a given column
//     $this->col = $col;
//     $x = 10+$col*65;
//     $this->SetLeftMargin($x);
//     $this->SetX($x);
// }
// function AcceptPageBreak()
// {
//     // Method accepting or not automatic page break
//     if($this->col<2)
//     {
//         // Go to next column
//         $this->SetCol($this->col+1);
//         // Set ordinate to top
//         $this->SetY($this->y0);
//         // Keep on page
//         return false;
//     }
//     else
//     {
//         // Go back to first column
//         $this->SetCol(0);
//         // Page break
//         return true;
//     }
// }
}
// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->setProj($proj_title); 
$pdf->setOrg($org_name); 
$pdf->AddPage('P', 'Letter', 0);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(20, 20, $pdf->Image($logo1, 20, $pdf->GetY(), 20), 0, 0, 'L', false);
$pdf->Cell(150,5,'University of Santo Tomas','',0,'C',0);
$pdf->Cell(20, 20, $pdf->Image($logo2, 160, $pdf->GetY(), 30), 0, 0, 'L', false);
$pdf->Ln(5);
$pdf->Cell(20,5,'','',0,'C',0);
$pdf->Cell(150,5,'Simbahayan Community Development Office','',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(20,5,'','',0,'C',0);
$pdf->Cell(150,5,'Room 101, Tan Yan Kee Student Center','',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(20,5,'','',0,'C',0);
$str = utf8_decode("España, Manila 1015, PHILIPPINES");
$pdf->Cell(150,5,$str,'',0,'C',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(190,5,'Community Development Project Proposal','LTBR',0,'C',0);   // empty cell with left,top, and right borders
$pdf->Ln(5);
$pdf->Cell(190,5,'Organization Information','LTBR',0,'C',0);   // empty cell with left,top, and right borders
$pdf->Ln(5);
$pdf->Cell(50,5,'Lead Organization:','LBR',0,'R',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(140,5,$org_name,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,5,'Affiliation:','LBR',0,'R',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(140,5,$affiliation,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,5,'Contact Person 1:','LR',0,'R',0);
$pdf->SetFont('Arial','',9);  // cell with left and right
$pdf->Cell(30,5,$lname1,'LBR',0,'C',0);
$pdf->Cell(30,5,$fname1,'LBR',0,'C',0);
$pdf->Cell(10,5,$mi1,'LBR',0,'C',0);
$pdf->Cell(25,5,$cnum1,'LBR',0,'C',0);
$pdf->Cell(45,5,$email1,'LBR',0,'C',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,5,' ','LBR',0,'L',0);
$pdf->Cell(30,5,'Last Name','LBR',0,'C',0);
$pdf->Cell(30,5,'First Name','LBR',0,'C',0);
$pdf->Cell(10,5,'M.I.','LBR',0,'C',0);
$pdf->Cell(70,5,'Contact Number and Email','LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(50,5,'Contact Person 2:','LR',0,'R',0);  // cell with left and right
$pdf->SetFont('Arial','',9);
$pdf->Cell(30,5,$lname2,'LBR',0,'C',0);
$pdf->Cell(30,5,$fname2,'LBR',0,'C',0);
$pdf->Cell(10,5,$mi2,'LBR',0,'C',0);
$pdf->Cell(25,5,$cnum2,'LBR',0,'C',0);
$pdf->Cell(45,5,$email2,'LBR',0,'C',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,5,' ','LBR',0,'L',0);
$pdf->Cell(30,5,'Last Name','LBR',0,'C',0);
$pdf->Cell(30,5,'First Name','LBR',0,'C',0);
$pdf->Cell(10,5,'M.I.','LBR',0,'C',0);
$pdf->Cell(70,5,'Contact Number and Email','LBR',0,'C',0);
$pdf->Ln(5); 
$pdf->Cell(50,15,'Collaborating Organizations:','LBR',0,'R',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(140,15,$collab,'LBR',0,'C',0);
$pdf->Ln(15);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(190,5,'General Project Overview','LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(50,5,'Project Title:','LBR',0,'R',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(140,5,$proj_title,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,5,'Program Area for','LR',0,'R',0);
$pdf->Cell(140,5,'','LR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(50,5,'Development:','LBR',0,'R',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(140,5,$prog_areadev,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,5,'Target Community/','LR',0,'R',0);  // cell with left and right
$pdf->SetFont('Arial','',9);
$pdf->Cell(70,5,$community,'LBR',0,'C',0);
$pdf->Cell(70,5,$participants,'LBR',0,'C',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,5,'Institution Participants:','LBR',0,'R',0);
$pdf->Cell(70,5,'Community(ies) or Institution(s)','LBR',0,'C',0);
$pdf->Cell(70,5,'Number of Participants','LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(50,5,'Date(s) and','LR',0,'R',0);
$pdf->SetFont('Arial','',9);  // cell with left and right
$pdf->Cell(40,5,$date,'LBR',0,'C',0);
$pdf->Cell(100,5,$address,'LBR',0,'C',0);
$pdf->Ln(5); 
$pdf->SetFont('Arial','B',10);
$pdf->Cell(50,5,'Venue(s) of','LR',0,'R',0);
$pdf->Cell(40,5,' ','LBR',0,'C',0);
$pdf->Cell(100,5,' ','LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(50,5,'Project','LR',0,'R',0);
$pdf->Cell(40,5,' ','LBR',0,'C',0);
$pdf->Cell(100,5,' ','LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(50,5,'Implementation','LR',0,'R',0);
$pdf->Cell(40,5,' ','LBR',0,'C',0);
$pdf->Cell(100,5,' ','LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(50,5,' ','LR',0,'R',0);
$pdf->Cell(40,5,' ','LBR',0,'C',0);
$pdf->Cell(100,5,' ','LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(50,5,'(add rows','LR',0,'R',0);
$pdf->Cell(40,5,'Month. Date. Year','LR',0,'C',0);
$pdf->Cell(100,5,'Address','LR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(50,5,'when neccessary)','LBR',0,'R',0);
$pdf->Cell(40,5,' ','LBR',0,'C',0);
$pdf->Cell(100,5,' ','LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(50,10,'Proposed Project','LR',0,'R',0);
$pdf->SetFont('Arial','',9);
$pdf->Cell(40,10,$comser_budget,'LBR',0,'C',0);
$pdf->Cell(50,10,$org_budget,'LBR',0,'C',0);
$pdf->Cell(50,10,$com_budget,'LBR',0,'C',0);
$pdf->Ln(10);
$pdf->Cell(50,5,'Budget in Php:','LBR',0,'R',0);
$pdf->Cell(40,5,'Community Service Fund','LBR',0,'C',0);
$pdf->Cell(50,5,'Organizational Counterpart','LBR',0,'C',0);
$pdf->Cell(50,5,'Community Counterpart','LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(190,5,'Project Details','LBR',0,'C',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(190,5,'PROJECT BACKGROUND: What specific problem or need in the partner community or institution does your organization wish to address?','LBR','L',false);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(190,5,$proj_background,'LBR', 'L', false);
//$pdf->Ln(5); added proj_background1
$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(190,5,'Why is it important?','LBR','L',false);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(190,5,$proj_background1,'LBR', 'L', false);
//$pdf->Ln(5); added proj_background2
$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(190,5,'How is the project related to your chosen program area?','LBR','L',false);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(190,5,$proj_background2,'LBR', 'L', false);
//$pdf->Ln(5); added proj_background3
$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(190,5,'What specific University Community Development Program (UCDP) success indicator is it trying to address?','LBR','L',false);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(190,5,$proj_background3,'LBR', 'L', false);
$pdf->MultiCell(190,5,'GENERAL OBJECTIVE: What is the overall intention of your community development project?  What does it realistically intend to achieve within the duration of the project? Only state one general objective. (Please write inside the box provided below)','LTBR','L',false);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(190,5,$gen_objective,'LBR','L',false);
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(190,5,'SPECIFIC OBJECTIVES: What are the specific steps that need to be fulfilled in order to achieve the general objective of your community development project? What are the expected results for each specific objective? Identify only three specific objectives. (Please fill out the matrix provided below)','LTBR','L',false);
$pdf->Cell(95,5,'Specific Objectives','LBR',0,'L',0);
$pdf->Cell(95,5,'Expected Results','LBR',0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','',9);
//Spec1
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(95,5,'1. '.$spec_obj1,'LR', 'L', false);
$y1 = $pdf->GetY();
$pdf->SetXY($x+95, $y);
$pdf->MultiCell(95,5,'1. '.$exp_result1,'R', 'L', false);
$x = $pdf->GetX();
$y2 = $pdf->GetY();
if ($y1 > $y2){
  $yheight1 = $y1-$y2;
  $pdf->SetXY($x+95, $y2);
  $pdf->Cell(95, $yheight1, ' ', 'LBR', 0, 'L', 0);
  $pdf->SetXY($x, $y1);
  
} 
else {
  $yheight1 = $y2-$y1;
  $pdf->SetXY($x+95, $y1);
  $pdf->Cell(95, $yheight1, ' ', 'LBR', 0, 'L', 0);
  $pdf->SetXY($x, $y2);
  }
//Spec2
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(95,5,'2. '.$spec_obj2,'LTR', 'L', false);
$y1 = $pdf->GetY();
$pdf->SetXY($x+95, $y);
$pdf->MultiCell(95,5,'2. '.$exp_result2,'TR', 'L', false);
$x = $pdf->GetX();
$y2 = $pdf->GetY();
if ($y1 > $y2){
  $yheight2 = $y1-$y2;
  $pdf->SetXY($x+95, $y2);
  $pdf->Cell(95, $yheight2, ' ', 'LBR', 0, 'L', 0);
  $pdf->SetXY($x, $y1);
  
} 
else {
  $yheight2 = $y2-$y1;
  $pdf->SetXY($x+95, $y1);
  $pdf->Cell(95, $yheight2, ' ', 'LBR', 0, 'L', 0);
  $pdf->SetXY($x, $y2);
  }
//Spec3
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(95,5,'3. '.$spec_obj3,'LTR', 'L', false);
$y1 = $pdf->GetY();
$pdf->SetXY($x+95, $y);
$pdf->MultiCell(95,5,'3. '.$exp_result3,'TR', 'L', false);
$x = $pdf->GetX();
$y2 = $pdf->GetY();
if ($y1 > $y2){
  $yheight3 = $y1-$y2;
  $pdf->SetXY($x+95, $y2);
  $pdf->Cell(95, $yheight3, ' ', 'LBR', 0, 'L', 0);
  $pdf->SetXY($x, $y1);
  
} 
else {
  $yheight3 = $y2-$y1;
  $pdf->SetXY($x+95, $y1);
  $pdf->Cell(95, $yheight3, ' ', 'LBR', 0, 'L', 0);
  $pdf->SetXY($x, $y2);
  }
  
//spec4 added
$x = $pdf->GetX();
$y = $pdf->GetY(); 
$pdf->MultiCell(95,5,'4. '.$spec_obj4,'LTR', 'L', false);
$y1 = $pdf->GetY();
$pdf->SetXY($x+95, $y);
$pdf->MultiCell(95,5,'4. '.$exp_result4,'TR', 'L', false);
$x = $pdf->GetX();
$y2 = $pdf->GetY();
if ($y1 > $y2){
  $yheight4 = $y1-$y2;
  $pdf->SetXY($x+95, $y2);
  $pdf->Cell(95, $yheight4, ' ', 'LBR', 0, 'L', 0);
  $pdf->SetXY($x, $y1);
  
} 
else {
  $yheight4 = $y2-$y1;
  $pdf->SetXY($x+95, $y1);
  $pdf->Cell(95, $yheight4, ' ', 'LBR', 0, 'L', 0);
  $pdf->SetXY($x, $y2);
  }
  
//spec5 added 
$x = $pdf->GetX();
$y = $pdf->GetY(); 
$pdf->MultiCell(95,5,'5. '.$spec_obj5,'LTR', 'L', false);
$y1 = $pdf->GetY();
$pdf->SetXY($x+95, $y);
$pdf->MultiCell(95,5,'5. '.$exp_result5,'TR', 'L', false);
$x = $pdf->GetX();
$y2 = $pdf->GetY();
if ($y1 > $y2){
  $yheight5 = $y1-$y2;
  $pdf->SetXY($x+95, $y2);
  $pdf->Cell(95, $yheight5, ' ', 'LBR', 0, 'L', 0);
  $pdf->SetXY($x, $y1);
  
} 
else {
  $yheight5 = $y2-$y1;
  $pdf->SetXY($x+95, $y1);
  $pdf->Cell(95, $yheight5, ' ', 'LBR', 0, 'L', 0);
  $pdf->SetXY($x, $y2);
  }
  
$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(190,5,'PROPOSED PROGRAM FLOW: What is the sequence of events that needs to be followed in order to guide the successful implementation and completion of your community development project? (Please fill out the matrix provided below)','LTR','L',false);
$flow = $days;
while ($flow != 0){
$pdf->SetFont('Arial','B',10);
$pdf->Cell(95,5,'Date: '.$date,'LTBR',0,'L',0);
$pdf->Cell(95,5,'Venue: '.$address,'LTBR',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(30,5,'Time','LBR',0,'C',0);
$pdf->Cell(100,5,'Activity Description','LBR',0,'C',0);
$pdf->Cell(60,5,'Person/Group Responsible','LBR',0,'C',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','',9);
$pdf->Cell(30,5,$time0,'LBR',0,'C',0);
$pdf->Cell(100,5,$description0,'LBR',0,'C',0);
$pdf->Cell(60,5,$person0,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(30,5,$time1,'LBR',0,'C',0);
$pdf->Cell(100,5,$description1,'LBR',0,'C',0);
$pdf->Cell(60,5,$person1,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(30,5,$time2,'LBR',0,'C',0);
$pdf->Cell(100,5,$description2,'LBR',0,'C',0);
$pdf->Cell(60,5,$person2,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(30,5,$time3,'LBR',0,'C',0);
$pdf->Cell(100,5,$description3,'LBR',0,'C',0);
$pdf->Cell(60,5,$person3,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(30,5,$time4,'LBR',0,'C',0);
$pdf->Cell(100,5,$description4,'LBR',0,'C',0);
$pdf->Cell(60,5,$person4,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(30,5,$time5,'LBR',0,'C',0);
$pdf->Cell(100,5,$description5,'LBR',0,'C',0);
$pdf->Cell(60,5,$person5,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(30,5,$time6,'LBR',0,'C',0);
$pdf->Cell(100,5,$description6,'LBR',0,'C',0);
$pdf->Cell(60,5,$person6,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(30,5,$time7,'LBR',0,'C',0);
$pdf->Cell(100,5,$description7,'LBR',0,'C',0);
$pdf->Cell(60,5,$person7,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(30,5,$time8,'LBR',0,'C',0);
$pdf->Cell(100,5,$description8,'LBR',0,'C',0);
$pdf->Cell(60,5,$person8,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(30,5,$time9,'LBR',0,'C',0);
$pdf->Cell(100,5,$description9,'LBR',0,'C',0);
$pdf->Cell(60,5,$person9,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(30,5,$time10,'LBR',0,'C',0);
$pdf->Cell(100,5,$description10,'LBR',0,'C',0);
$pdf->Cell(60,5,$person10,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(30,5,$time11,'LBR',0,'C',0);
$pdf->Cell(100,5,$description11,'LBR',0,'C',0);
$pdf->Cell(60,5,$person11,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(30,5,$time12,'LBR',0,'C',0);
$pdf->Cell(100,5,$description12,'LBR',0,'C',0);
$pdf->Cell(60,5,$person12,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(30,5,$time13,'LBR',0,'C',0);
$pdf->Cell(100,5,$description13,'LBR',0,'C',0);
$pdf->Cell(60,5,$person13,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(30,5,$time14,'LBR',0,'C',0);
$pdf->Cell(100,5,$description14,'LBR',0,'C',0);
$pdf->Cell(60,5,$person14,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(30,5,$time15,'LBR',0,'C',0);
$pdf->Cell(100,5,$description15,'LBR',0,'C',0);
$pdf->Cell(60,5,$person15,'LBR',0,'C',0);
$pdf->Ln(5);
$flow--;
}
$budget = $days;
$pdf->AddPage('L', 'Letter', 0);
while($budget !=0) {
$pdf->Ln(5);
$pdf->SetFont('Arial','B',9);
$pdf->MultiCell(260,5,"PROPOSED BUDGET:  State the approximate or anticipated cost of the project.  Please note that Simbahayan's policy is to make a contribution to your project, but not to provide 100% of the cost. Therefore, it is important that you record the extent of funding counterparts to the project. Please prepare one budget proposal per date of implementation.",'LTR','L',false);
$pdf->Cell(260,5,'Date of Implementation:','LRB',0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(82,5,'Item','LR',0,'C',0);
$pdf->Cell(52,5,'Description (Quantity x','LR',0,'C',0);
$pdf->Cell(42,5,'Community Service','LR',0,'C',0);
$pdf->Cell(42,5,'Organization','LR',0,'C',0);
$pdf->Cell(42,5,'Community','RL',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(82,5,' ','LBR',0,'C',0);
$pdf->Cell(52,5,'Monetary Value x No. of Days)','LBR',0,'C',0);
$pdf->Cell(42,5,'Fund','LBR',0,'C',0);
$pdf->Cell(42,5,'Counterpart','LBR',0,'C',0);
$pdf->Cell(42,5,'Counterpart','RBL',0,'C',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(260,5,'1. Personnel–Theoretical Counterpart (please add or delete sub-items and corresponding rows when necessary)','RBL',0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','',8);
$pdf->Cell(82,5,'Student Volunteers','LTBR',0,'R',0);
$pdf->Cell(52,5,$pmail0,'LTBR',0,'R',0);
$pdf->Cell(42,5,$pfund0,'LTBR',0,'R',0);
$pdf->Cell(42,5,$porg0,'LTBR',0,'R',0);
$pdf->Cell(42,5,$pcom0,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(82,5,'Faculty / Admin / Support Staff Volunteers','LTBR',0,'R',0);
$pdf->Cell(52,5,$pmail1,'LTBR',0,'R',0);
$pdf->Cell(42,5,$pfund1,'LTBR',0,'R',0);
$pdf->Cell(42,5,$porg1,'LTBR',0,'R',0);
$pdf->Cell(42,5,$pcom1,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(82,5,'Volunteers from the Partner Community or Institution','LTBR',0,'R',0);
$pdf->Cell(52,5,$pmail2,'LTBR',0,'R',0);
$pdf->Cell(42,5,$pfund2,'LTBR',0,'R',0);
$pdf->Cell(42,5,$porg2,'LTBR',0,'R',0);
$pdf->Cell(42,5,$pcom2,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(82,5,'Volunteer External Resource Person (not from UST)','LTBR',0,'R',0);
$pdf->Cell(52,5,$pmail3,'LTBR',0,'R',0);
$pdf->Cell(42,5,$pfund3,'LTBR',0,'R',0);
$pdf->Cell(42,5,$porg3,'LTBR',0,'R',0);
$pdf->Cell(42,5,$pcom3,'LTBR',0,'R',0);
//$pdf->Ln(5);
//$pdf->Cell(82,5,$pname4,'LTBR',0,'R',0);
//$pdf->Cell(52,5,$pmail4,'LTBR',0,'R',0);
//$pdf->Cell(42,5,$pfund4,'LTBR',0,'R',0);
//$pdf->Cell(42,5,$porg4,'LTBR',0,'R',0);
//$pdf->Cell(42,5,$pcom4,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(134,5,'Subtotal 1:','LTBR',0,'R',0);
$pdf->Cell(42,5,$pfund4,'TBR',0,'R',0);
$pdf->Cell(42,5,$porg4,'LTBR',0,'R',0);
$pdf->Cell(42,5,$pcom4,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(260,5,'2. Operations and Logistics (please add or delete sub-items and corresponding rows when necessary)','RBL',0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','',8);
$pdf->Cell(82,5,'Lunch / Dinner','LTBR',0,'R',0);
$pdf->Cell(52,5,$omail0,'LTBR',0,'R',0);
$pdf->Cell(42,5,$ofund0,'LTBR',0,'R',0);
$pdf->Cell(42,5,$oorg0,'LTBR',0,'R',0);
$pdf->Cell(42,5,$ocom0,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(82,5,'Snack','LTBR',0,'R',0);
$pdf->Cell(52,5,$omail1,'LTBR',0,'R',0);
$pdf->Cell(42,5,$ofund1,'LTBR',0,'R',0);
$pdf->Cell(42,5,$oorg1,'LTBR',0,'R',0);
$pdf->Cell(42,5,$ocom1,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(82,5,'Venue and Facilities','LTBR',0,'R',0);
$pdf->Cell(52,5,$omail2,'LTBR',0,'R',0);
$pdf->Cell(42,5,$ofund2,'LTBR',0,'R',0);
$pdf->Cell(42,5,$oorg2,'LTBR',0,'R',0);
$pdf->Cell(42,5,$ocom2,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(82,5,'Transportation (identify if bus, coaster, canter, or van)','LTBR',0,'R',0);
$pdf->Cell(52,5,$omail3,'LTBR',0,'R',0); //Description
$pdf->Cell(42,5,$omail7, 'LTBR',0,'R',0); //CSf
$pdf->Cell(42,5,$omail8, 'LTBR',0,'R',0);  //OC
$pdf->Cell(42,5,$omail9, 'LTBR',0,'R',0);  //CC
$pdf->Ln(5);
$pdf->Cell(82,5,'Toll Fee','LTBR',0,'R',0);
$pdf->Cell(52,5,$omail4,'LTBR',0,'R',0);
$pdf->Cell(42,5,$ofund6,'LTBR',0,'R',0);
$pdf->Cell(42,5,$oorg6,'LTBR',0,'R',0);
$pdf->Cell(42,5,$ocom6,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(82,5,'Communications','LTBR',0,'R',0);
$pdf->Cell(52,5,$omail5,'LTBR',0,'R',0);
$pdf->Cell(42,5,$ofund7,'LTBR',0,'R',0);
$pdf->Cell(42,5,$oorg7,'LTBR',0,'R',0);
$pdf->Cell(42,5,$ocom7,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(82,5,'etc.','LTBR',0,'R',0);
$pdf->Cell(52,5,$omail6,'LTBR',0,'R',0);
$pdf->Cell(42,5,$ofund8,'LTBR',0,'R',0);
$pdf->Cell(42,5,$oorg8,'LTBR',0,'R',0);
$pdf->Cell(42,5,$ocom8,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(134,5,'Subtotal 2:','LTBR',0,'R',0);
$pdf->Cell(42,5,$ofund9,'TBR',0,'R',0);
$pdf->Cell(42,5,$oorg9,'LTBR',0,'R',0);
$pdf->Cell(42,5,$ocom9,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(260,5,'3. Materials and Supplies (please add or delete sub-items and corresponding rows when necessary)','RBL',0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','',8);
$pdf->Cell(82,5,$mname0,'LTBR',0,'R',0);
$pdf->Cell(52,5,$mmail0,'LTBR',0,'R',0);
$pdf->Cell(42,5,$mfund0,'LTBR',0,'R',0);
$pdf->Cell(42,5,$morg0,'LTBR',0,'R',0);
$pdf->Cell(42,5,$mcom0,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(82,5,$mname1,'LTBR',0,'R',0);
$pdf->Cell(52,5,$mmail1,'LTBR',0,'R',0);
$pdf->Cell(42,5,$mfund1,'LTBR',0,'R',0);
$pdf->Cell(42,5,$morg1,'LTBR',0,'R',0);
$pdf->Cell(42,5,$mcom1,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(82,5,$mname2,'LTBR',0,'R',0);
$pdf->Cell(52,5,$mmail2,'LTBR',0,'R',0);
$pdf->Cell(42,5,$mfund2,'LTBR',0,'R',0);
$pdf->Cell(42,5,$morg2,'LTBR',0,'R',0);
$pdf->Cell(42,5,$mcom2,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(82,5,$mname3,'LTBR',0,'R',0);
$pdf->Cell(52,5,$mmail3,'LTBR',0,'R',0);
$pdf->Cell(42,5,$mfund3,'LTBR',0,'R',0);
$pdf->Cell(42,5,$morg3,'LTBR',0,'R',0);
$pdf->Cell(42,5,$mcom3,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(82,5,$mname4,'LTBR',0,'R',0);
$pdf->Cell(52,5,$mmail4,'LTBR',0,'R',0);
$pdf->Cell(42,5,$mfund4,'LTBR',0,'R',0);
$pdf->Cell(42,5,$morg4,'LTBR',0,'R',0);
$pdf->Cell(42,5,$mcom4,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(134,5,'Subtotal 3:','LTBR',0,'R',0);
$pdf->Cell(42,5,$mfund5,'TBR',0,'R',0);
$pdf->Cell(42,5,$morg5,'LTBR',0,'R',0);
$pdf->Cell(42,5,$mcom5,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(260,5,'4. Others (please add or delete sub-items and corresponding rows when necessary)','RBL',0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','',8);
$pdf->Cell(82,5,$otname0,'LTBR',0,'R',0);
$pdf->Cell(52,5,$otmail0,'LTBR',0,'R',0);
$pdf->Cell(42,5,$otfund0,'LTBR',0,'R',0);
$pdf->Cell(42,5,$otorg0,'LTBR',0,'R',0);
$pdf->Cell(42,5,$otcom0,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(82,5,$otname1,'LTBR',0,'R',0);
$pdf->Cell(52,5,$otmail1,'LTBR',0,'R',0);
$pdf->Cell(42,5,$otfund1,'LTBR',0,'R',0);
$pdf->Cell(42,5,$otorg1,'LTBR',0,'R',0);
$pdf->Cell(42,5,$otcom1,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(82,5,$otname2,'LTBR',0,'R',0);
$pdf->Cell(52,5,$otmail2,'LTBR',0,'R',0);
$pdf->Cell(42,5,$otfund2,'LTBR',0,'R',0);
$pdf->Cell(42,5,$otorg2,'LTBR',0,'R',0);
$pdf->Cell(42,5,$otcom2,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(82,5,$otname3,'LTBR',0,'R',0);
$pdf->Cell(52,5,$otmail3,'LTBR',0,'R',0);
$pdf->Cell(42,5,$otfund3,'LTBR',0,'R',0);
$pdf->Cell(42,5,$otorg3,'LTBR',0,'R',0);
$pdf->Cell(42,5,$otcom3,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(82,5,$otname4,'LTBR',0,'R',0);
$pdf->Cell(52,5,$otmail4,'LTBR',0,'R',0);
$pdf->Cell(42,5,$otfund4,'LTBR',0,'R',0);
$pdf->Cell(42,5,$otorg4,'LTBR',0,'R',0);
$pdf->Cell(42,5,$otcom4,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','B',9);
$pdf->Cell(134,5,'Subtotal 4:','LTBR',0,'R',0);
$pdf->Cell(42,5,$otfund5,'TBR',0,'R',0);
$pdf->Cell(42,5,$otorg5,'LTBR',0,'R',0);
$pdf->Cell(42,5,$otcom5,'LTBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(134,5,'Overall Total:','LTBR',0,'R',0);
$pdf->Cell(42,5,$otfund6,'TBR',0,'R',0);
$pdf->Cell(42,5,$otorg6,'LTBR',0,'R',0);
$pdf->Cell(42,5,$otcom6,'LTBR',0,'R',0);
$pdf->Ln(5);
$budget--;
}
$pdf->AddPage('L', 'Letter', 0);
$budget = $days;
$pdf->Ln(5);  
$pdf->SetFont('Arial','B',10);
$pdf->Cell(260,5,'Budget Proposal Summary','TRBL',0,'C',0);
$pdf->Ln(5);
while($budget !=0) {
  $pdf->SetFont('Arial','B',9);
  $pdf->Cell(260,5,'Budget for (insert date):','TRBL',0,'L',0);
  $pdf->Ln(5);
  $pdf->SetFont('Arial','',9);
  $pdf->Cell(134,5,'Personnel','LTBR',0,'R',0);
  $pdf->Cell(42,5,'','LTBR',0,'R',0);
  $pdf->Cell(42,5,'','LTBR',0,'R',0);
  $pdf->Cell(42,5,'','LTBR',0,'R',0);
  $pdf->Ln(5);
  $pdf->Cell(134,5,'Operations and Logistics','LTBR',0,'R',0);
  $pdf->Cell(42,5,'','LTBR',0,'R',0);
  $pdf->Cell(42,5,'','LTBR',0,'R',0);
  $pdf->Cell(42,5,'','LTBR',0,'R',0);
  $pdf->Ln(5);
  $pdf->Cell(134,5,'Materials and Supplies','LTBR',0,'R',0);
  $pdf->Cell(42,5,'','LTBR',0,'R',0);
  $pdf->Cell(42,5,'','LTBR',0,'R',0);
  $pdf->Cell(42,5,'','LTBR',0,'R',0);
  $pdf->Ln(5);
  $pdf->Cell(134,5,'Others','LTBR',0,'R',0);
  $pdf->Cell(42,5,'','LTBR',0,'R',0);
  $pdf->Cell(42,5,'','LTBR',0,'R',0);
  $pdf->Cell(42,5,'','LTBR',0,'R',0);
  $pdf->Ln(5);
  $pdf->Cell(134,5,'Subtotal:','LTBR',0,'R',0);
  $pdf->Cell(42,5,' ','TBR',0,'R',0);
  $pdf->Cell(42,5,' ','LTBR',0,'R',0);
  $pdf->Cell(42,5,' ','LTBR',0,'R',0);
  $pdf->Ln(5);
  $budget--;
}
$pdf->SetFont('Arial','B',9);
 $pdf->Cell(134,5,'Overall Total:','LTBR',0,'R',0);
  $pdf->Cell(42,5,' ','BR',0,'R',0);
  $pdf->Cell(42,5,' ','LTBR',0,'R',0);
  $pdf->Cell(42,5,' ','LTBR',0,'R',0);
  $pdf->Ln(10);
$pdf->MultiCell(260,5,"PROJECT EVALUATION: How will the project's achievements be evaluated? What needs to be done in order to know whether the community development project has achieved its general and specific objectives?",'LBTR','L',false);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(260,5,$proj_evaluation,'LBR','L',false);
$pdf->SetFont('Arial','B',10);
//added proj_evaluation1
$pdf->MultiCell(260,5,"What needs to be done in order to know whether the community development project has achieved its general and specific objectives?",'LBTR','L',false);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(260,5,$proj_evaluation1,'LBR','L',false);
$pdf->AddPage('P', 'Letter', 0);
$pdf->Cell(190,5,'Prepared by:','',0,'L',0);
$pdf->Ln(15);
$pdf->SetFont('Arial','B',11);
$pdf->Cell( 40, 40, $pdf->Image($projhead1, $pdf->GetX(), $pdf->GetY(), 33.78), 0, 0, 'L', false );
$pdf->Ln(15);
$pdf->Cell(190,5,$fname1.' '.$mi1.' '.$lname1,'',0,'L',0);
$pdf->SetFont('Arial','',11);
$pdf->Ln(5);
//$pdf->MultiCell(190,5,$position1.','.$org_name,'','L',false);
$pdf->MultiCell(190,5,'Project Head 1, '.$proj_title,'','L',false);
$pdf->Ln(5);
$pdf->SetFont('Arial','',11);
/*$pdf->Cell( 40, 40, $pdf->Image($chair, $pdf->GetX(), $pdf->GetY(), 33.78), 0, 0, 'L', false );
$pdf->Ln(15);
$pdf->Cell(190,5,$fname2.' '.$mi2.' '.$lname2,'',0,'L',0);
$pdf->SetFont('Arial','',11);
$pdf->Ln(5);
//$pdf->MultiCell(190,5,$position2.','.$org_name,'','L',false);
$pdf->MultiCell(190,5,'Project Head 2, '.$proj_title,'','L',false);
$pdf->Ln(5);*/
if ($resultcount == 4){
$pdf->Cell(190,5,'Noted by:','',0,'L',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',11);
//$pdf->Cell( 40, 40, $pdf->Image($president, $pdf->GetX(), $pdf->GetY(), 33.78), 0, 0, 'L', false );
//$pdf->Cell( 40, 40, $pdf->Image($adviser1, 110, $pdf->GetY(), 33.78), 0, 0, 'L', false );
$pdf->Ln(15);
$pdf->Cell(95,5,$pres_name,'',0,'L',0);
$pdf->Cell(95,5,$adv_name,'',0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','',11);
$pdf->Cell(95,5,'President','',0,'L',0);
$pdf->Cell(95,5,'Adviser','',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(95,5,$org_name,'',0,'L',0);
$pdf->Cell(95,5,$org_name,'',0,'L',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','',11);
$pdf->Cell(190,5,'Endorsed by:','',0,'L',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',11);
//$pdf->Cell( 40, 40, $pdf->Image($coordinator, $pdf->GetX(), $pdf->GetY(), 33.78), 0, 0, 'L', false );
//$pdf->Cell( 40, 40, $pdf->Image($chair, 110, $pdf->GetY(), 33.78), 0, 0, 'L', false );
$pdf->Ln(15);
$pdf->Cell(95,5,$coor_name,'',0,'L',0);
$pdf->Cell(95,5,$chair_name,'',0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','',11);
$pdf->Cell(95,5,'Community Development Coordinator','',0,'L',0);
$pdf->Cell(95,5,'Department Chair','',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(95,5,$college_dean,'',0,'L',0);
$pdf->Cell(95,5,$college_dean,'',0,'L',0);
$pdf->Ln(10);
}
else{
$pdf->Cell(190,15,'Noted by:','',0,'L',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',11);
//$pdf->Cell( 40, 40, $pdf->Image($president, $pdf->GetX(), $pdf->GetY(), 33.78), 0, 0, 'L', false );
//$pdf->Cell( 40, 40, $pdf->Image($adviser1, 110, $pdf->GetY(), 33.78), 0, 0, 'L', false );
$pdf->Ln(15);
$pdf->Cell(95,5,$pres_name,'',0,'L',0);
$pdf->Cell(95,5,$adv_name,'',0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','',11);
$pdf->Cell(95,5,'President','',0,'L',0);
$pdf->Cell(95,5,'Adviser','',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(95,5,$org_name,'',0,'L',0);
$pdf->Cell(95,5,$org_name,'',0,'L',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','',11);
$pdf->Cell(190,15,'Endorsed by:','',0,'L',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',11);
//$pdf->Cell( 40, 40, $pdf->Image($coordinator, $pdf->GetX(), $pdf->GetY(), 33.78), 0, 0, 'L', false );
$pdf->Ln(15);
$pdf->Cell(95,5,$coor_name,'',0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','',11);
$pdf->Cell(95,5,'Community Development Coordinator','',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(95,5,$college_dean,'',0,'L',0);
$pdf->Ln(10);
}
$pdf->SetFont('Arial','B',11);
//$pdf->Cell( 40, 40, $pdf->Image($dean, $pdf->GetX(), $pdf->GetY(), 33.78), 0, 0, 'L', false );
//$pdf->Cell( 40, 40, $pdf->Image($regent, 110, $pdf->GetY(), 33.78), 0, 0, 'L', false );
$pdf->Ln(15);
$pdf->Cell(95,5,$dean_name,'',0,'L',0);
$pdf->Cell(95,5,$reg_name,'',0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','',11);
$pdf->Cell(95,5,'Director','',0,'L',0);
$pdf->Cell(95,5,'Regent','',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(95,5,$college_dean,'',0,'L',0);
$pdf->Cell(95,5,$college_dean,'',0,'L',0);
$pdf->Ln(10);
$pdf->Output();
?>