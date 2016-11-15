<?php
require('fpdf17/fpdf.php');
include "mysql_connect.php";
$d = $_GET['d'];

    $title= "";
    $proponent= "";
    $affiliation ="";
    $prog_area = "";
    $community = "";
    $date = "";
    $budget = "";
    $reports = "";
    $attendance = "";
    $presence_profile = "";
    $presence_moa = "";
    $comments1 = "";
    $reviewed = "";
    $budget_code = "";
    $comments2 = "";
    $recommend_progarea = "";
    $budget_tobe = "";
    $comments3 = "";
    $approve_director = "";
    $finalbudget = "";
    $finalbudget_code = "";
    $cash_req = "";
    $req_amt = "";
    $date_today = "";
    $transpo_amt = "";
    
$query = "SELECT * FROM approval_form where approval_id = $d";
$result = mysqli_query($link,$query);
while ($row = mysqli_fetch_array($result)){
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
}
/*
$org = "SELECT user_id FROM login_user WHERE name = $proponent";
$orgres = mysqli_query($link, $org);
while ($row = mysqli_fetch_array($orgres)){
    $org_id = $row['user_id'];
}
*/

$comcoor = "SELECT signatory_name FROM order_signatory WHERE order_number = 3 AND standard = 0 AND simbahayan = 0 AND univ_wide = 0 AND org_num = $proponent";
$comresult = mysqli_query($link, $comcoor);
while ($row = mysqli_fetch_array($comresult)){
    $comdev_name = $row['signatory_name'];
}

$progcoor = "SELECT signatory_name FROM order_signatory WHERE order_number = 1 AND standard = 1 AND simbahayan = 1 AND univ_wide = 0";
$progresult = mysqli_query($link, $progcoor);
while ($row = mysqli_fetch_array($progresult)){
    $prog_name = $row['signatory_name'];
}

$dir = "SELECT signatory_name FROM order_signatory WHERE order_number = 2 AND standard = 1 AND simbahayan = 1 AND univ_wide = 0";
$dirresult = mysqli_query($link, $dir);
while ($row = mysqli_fetch_array($dirresult)){
    $dir_name = $row['signatory_name'];
}

$logo1 = "images/logo2.jpg";
$logo2 = "images/logo2.jpg";
$comdev = "images/krizsa.jpg";
$progarea = "images/krizsa.jpg";
$director = "images/krizsa.jpg";

class PDF extends FPDF
{
// Page header
/*function Header()
{
    // // Logo
    // $this->Image('images/ust_logo1.png',10,6,50);
    // //Arial bold 15
    $this->SetFont('Arial','B',9);
    // Move to the right
    // $this->Cell(10);
    // Title
    $this->Cell(40,5,'Project Title:');
    $this->Ln(3);
    $this->Cell(40,5,'Lead Organization:');
    // Line break
    $this->Ln(20);
}*/
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

function setReq($cash_req){ 
$this->cash_req = $cash_req; 
} 

function setToday($date_today){ 
$this->date_today = $date_today; 
} 
function setTranspo($transpo_amt){ 
$this->transpo_amt = $transpo_amt; 
} 
function setAmtReq($req_amt){ 
$this->req_amt = $req_amt; 
}

// // Page footer
function Footer()
{
    $cash_req = $GLOBALS['cash_req'];
    $req_amt = $GLOBALS['req_amt'];
    $date_today = $GLOBALS['date_today'];
    $transpo_amt = $GLOBALS['transpo_amt'];
    // Position at 1.5 cm from bottom
    $this->SetY(-20);
    // Arial italic 8
    $this->SetFont('Arial','I',9);
    // Page number
    $this->Cell(40,5,'Cash Requisition Number:', '', 'L');
    $this->Cell(50,5,$cash_req, 'B', 0, 'C');
    $this->Cell(10,5,' ', '', 'R');
    $this->Cell(15,5,'Amount:', '', 'R');
    $this->Cell(30,5,$req_amt,'B', 0, 'C');
    $this->Cell(10,5,' ', '', 'R');
    $this->Cell(10,5,'Date:', '', 'R');
    $this->Cell(20,5,$date_today,'B', 0, 'C');
    $this->Ln(5);
    $this->Cell(55,5,'Transportation (SCDO/Purchasing):', '', 'R');
    $this->Cell(50,5,$transpo_amt,'B', 0, 'C');
    $this->Ln(5);
    $this->Cell(190,5,'UST:S040-00F022  rev02  09/08/2015', '', 0, 'C');
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
$pdf->setReq($cash_req); 
$pdf->setAmtReq($req_amt);
$pdf->setToday($date_today); 
$pdf->setTranspo($transpo_amt); 
$pdf->AliasNbPages();
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
$pdf->SetFont('Arial','',11);
$pdf->Ln(10);
$pdf->Cell(190,10,'Community Development Endorsement and Approval Form','LTBR',0,'C',0);   // empty cell with left,top, and right borders
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,5,'Project Title:','LBR',0,'R',0);
$pdf->Cell(140,5,$title,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(50,5,'Proponent:','LBR',0,'R',0);
$pdf->Cell(80,5,$proponent,'LBR',0,'C',0);
$pdf->Cell(20,5,'Affiliation:','LB',0,'L',0);
$pdf->Cell(40,5,$affiliation,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(50,5,'Program Area:','LBR',0,'R',0);
$pdf->Cell(140,5,$prog_area,'LBR',0,'C',0);  // cell with left and right
$pdf->Ln(5); 
$pdf->Cell(50,5,'Target Community(ies)/','LR',0,'R',0);
$pdf->Cell(140,10,$community,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(50,5,'Institution(s):','LBR',0,'R',0);
$pdf->Ln(5);
$pdf->Cell(50,5,'Date(s) of Implementation:','LBR',0,'R',0);
$pdf->Cell(45,5,$date,'LBR',0,'C',0);
$pdf->Cell(50,5,'Proposed CSF Budget:','LBR',0,'R',0);
$pdf->Cell(45,5,$budget,'LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(190,10,'Endorsement from the Community Development Coordinator (only for local student organizations)','LBR',0,'C',0);
$pdf->Ln(10);
$pdf->Cell(95,5,'The requesting organization above have accomplished the ','L',0,'L',0);
$pdf->Cell(5,5,' ','',0,'L',0);
$pdf->Cell(90,5,'Comments:','R',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(95,5,'following requirements in order to be considered for funding ','L',0,'L',0);
$pdf->Cell(5,20,' ','',0,'L',0);
$pdf->MultiCell(90,5,$comments1,'R','L',false);
$old = $pdf->GetY();

$pdf->Cell(95,5,'support: (Please check if accomplished and put an x','L',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(95,5,'if otherwise):','L',0,'L',0);
$pdf->Ln(5);
$x = $pdf->GetX();
$y = $pdf->GetY();

$pdf-> SetY($old);
$pdf->Cell(95,5,' ','L',0,'L',0);
$pdf->Cell(95,$y-$old,' ','R',0,'L',0);
//$pdf->Cell(95,5,' ','R',0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','',9);
$pdf->SetXY($x, $y);
if ($reports = 'Yes'){
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(45,5,'Terminal and Expense','L',0,'L',0);
}
else {
$pdf->Cell(45,5,'Terminal and Expense','L',0,'L',0);
}
$pdf->Cell(5,5,' ','',0,'L',0);
if ($presence_profile = 'Yes'){
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(45,5,'Presence of Profile of the chosen','',0,'LR',0);
    $pdf->SetFont('Arial','',9);
}
else {
$pdf->Cell(45,5,'Presence of Profile of the chosen','',0,'LR',0);
}
$pdf->Cell(5,5,' ','',0,'L',0);
$pdf->Cell(90,5,'I have thoroughly reviewed the community development','R',0,'L',0);
$pdf->Ln(5);
if ($reports = 'Yes'){
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(45,5,'Reports of Previous Projects','L',0,'L',0);
    $pdf->SetFont('Arial','',9);
}
else {
$pdf->Cell(45,5,'Reports of Previous Projects','L',0,'L',0);
}
$pdf->Cell(5,5,' ','',0,'L',0);
if ($presence_profile = 'Yes'){
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(45,5,'partner community or institution','',0,'LR',0);
    $pdf->Cell(5,5,' ','',0,'L',0);
    $pdf->SetFont('Arial','',9);
}
else {
$pdf->Cell(45,5,'partner community or institution','',0,'LR',0);
}
$pdf->Cell(90,5,'project /research proposal stated above; hence, I hereby','R',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(45,5,' ','L',0,'L',0);
$pdf->Cell(5,5,' ','',0,'LR',0);
$pdf->Cell(45,5,' ','',0,'LR',0);
$pdf->Cell(5,5,' ','',0,'LR',0);
$pdf->Cell(90,5,'endorse it for processing.','R',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(45,5,' ','L',0,'L',0);
$pdf->Cell(5,5,' ','',0,'L',0);
$pdf->Cell(45,5,' ','',0,'L',0);
$pdf->Cell(5,5,' ','',0,'L',0);
$pdf->Cell(45,5,'The assigned budget code is:','',0,'L',0);
$pdf->Cell(45,5,' ','R',0,'L',0);
$pdf->Ln(5);
if ($attendance = 'Yes'){
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(45,5,'Attendance in Community','L',0,'L',0);
    $pdf->SetFont('Arial','',9);
}
else {
$pdf->Cell(45,5,'Attendance in Community','L',0,'L',0);
}
$pdf->Cell(5,5,' ','',0,'L',0);
if ($presence_moa = 'Yes'){
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(45,5,'Presence of MOA/MOU with the','',0,'L',0);
    $pdf->SetFont('Arial','',9);
}
else {
$pdf->Cell(45,5,'Presence of MOA/MOU with the','',0,'L',0);
}
$pdf->Cell(5,5,' ','',0,'L',0);
$pdf->Cell(10,10,' ','',0,'L',0);
$pdf->Cell( 70, 15, $pdf->Image($comdev, $pdf->GetX()+15, $pdf->GetY(), 33.78), 0, 0, 'C', false );
$pdf->Cell(10,10,' ','R',0,'L',0);
$pdf->Ln(5);
if ($attendance = 'Yes'){
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(45,5,'Development Orientation','L',0,'L',0);
    $pdf->SetFont('Arial','',9);
}
else {
$pdf->Cell(45,5,'Development Orientation','L',0,'L',0);
}
$pdf->Cell(5,5,' ','',0,'L',0);
if ($presence_moa = 'Yes'){
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(45,5,'chosen partner community or','',0,'L',0);
    $pdf->SetFont('Arial','',9);
}
else {
$pdf->Cell(45,5,'chosen partner community or','',0,'L',0);
}
$pdf->Ln(5);
$pdf->Cell(45,5,' ','L',0,'L',0);
$pdf->Cell(5,5,' ','',0,'L',0);
if ($presence_moa = 'Yes'){
    $pdf->SetFont('Arial','B',9);
    $pdf->Cell(45,5,'institution','',0,'L',0);
    $pdf->SetFont('Arial','',9);
}
else {
$pdf->Cell(45,5,'institution','B',0,'L',0);
}
$pdf->Cell(5,5,' ','',0,'L',0);
$pdf->Cell(10,5,' ','',0,'L',0);
$pdf->Cell(70,5,'','',0,'C',0);
$pdf->Cell(10,5,' ','R',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(5,5,' ','L',0,'L',0);
$pdf->Cell(10,5,' ','',0,'L',0);
$pdf->Cell(70,5,'','',0,'C',0);
$pdf->Cell(10,5,' ','',0,'L',0);
$pdf->Cell(5,5,' ','',0,'L',0);
$pdf->Cell(10,5,' ','',0,'L',0);
$pdf->Cell(70,5,$comdev_name,'B',0,'C',0);
$pdf->Cell(10,5,' ','R',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(5,5,' ','LB',0,'L',0);
$pdf->Cell(10,5,' ','B',0,'L',0);
$pdf->Cell(70,5,'','B',0,'C',0);
$pdf->Cell(10,5,' ','B',0,'L',0);
$pdf->Cell(5,5,' ','B',0,'L',0);
$pdf->Cell(10,5,' ','B',0,'L',0);
$pdf->Cell(70,5,'Signature Over Printed Name','B',0,'C',0);
$pdf->Cell(10,5,' ','BR',0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','',10);
$pdf->Cell(95,5,'Endorsement from the Program Area Coordinator','LBR',0,'C',0);
$pdf->Cell(95,5,'Approval from the Director','LBR',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(95,5,'Comments:','LR',0,'L',0);
$pdf->Cell(95,5,'Comments:','LR',0,'L',0);
$pdf->Ln(5);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(95,5,$comments2,'LR','L',false);
$y1 = $pdf->GetY();
$pdf->SetXY($x + 95, $y);
$pdf->MultiCell(95,5,$comments3,'LR','L',false);
$x = $pdf->GetX();
$y2 = $pdf->GetY();
if ($y1>$y2){
    $yheight1 = $y1-$y2;
    $pdf->SetXY($x+95, $y2);
    $pdf->Cell(95, $yheight1, ' ', 'LBR', 0, 'L', 0);
    $pdf->SetXY($x, $y1);
}
else if ($y2>$y1){
    $yheight1 = $y2-$y1;
    $pdf->SetXY($x+95, $y1);
    $pdf->Cell(95, $yheight1, ' ', 'LBR', 0, 'L', 0);
    $pdf->SetXY($x, $y2);
}
else {
    $pdf->SetX($x);
}
//$pdf->SetXY($x, $y);
$pdf->SetFont('Arial','',9);
//$pdf->Cell(95,5,'Please put a check in the box for the statement of your choice:','LR',0,'L',0);
//$pdf->Cell(95,5,'Please put a check in the box for the statement of your choice:','LR',0,'L',0);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf ->Cell(95,5,' ','LR',0,'L',0);
$pdf->Ln(5);
if ($recommend_progarea = 'Recommended'){
    $pdf->SetFont('Arial','B',9);
    $pdf->MultiCell(95,5,'I hereby recommend for approval the abovementioned community development project/research proposal.','LR','L',false);
    $pdf->SetFont('Arial','',9);
    $pdf->MultiCell(95,5,'I do not recommend for approval the stated community development project/research proposal above. ','LR','L',false);
}
else {
    $pdf->SetFont('Arial','',9);
    $pdf->MultiCell(95,5,'I hereby recommend for approval the abovementioned community development project/research proposal.','LR','L',false);
    $pdf->SetFont('Arial','B',9);
    $pdf->MultiCell(95,5,'I do not recommend for approval the stated community development project/research proposal above. ','LR','L',false);
}
$y3 = $pdf->GetY();
if ($y1>$y2){
    $yheight1 = $y1-$y2;
    $pdf->SetXY($x+95, $y2);
    $pdf->Cell(95, $yheight1, ' ', 'LBR', 0, 'L', 0);
    $pdf->SetXY($x, $y1);
}else if ($y2>$y1) {
    $yheight1 = $y2-$y1;
    $pdf->SetXY($x+95, $y1);
    $pdf->Cell(95, $yheight1, ' ', 'LBR', 0, 'L', 0);
    $pdf->SetXY($x, $y2);
}

else {
    $pdf->SetXY($x+95, $y);
    $pdf->Cell(95, 5, '', 'LR', 0, 'L', 0);
    $pdf->Ln(5);
    $pdf->SetX($x+95);
}

if ($approve_director = 'Yes'){
    $pdf->SetFont('Arial','B',9);
    $pdf->MultiCell(95,5,'I hereby approve the abovementioned community development project/research proposal.','LR','L',false);
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x + 95, $y);
    $pdf->SetFont('Arial','',9);
    $pdf->MultiCell(95,5,'I hereby disapprove the abovementioned community development project/research proposal.','LR','L',false);

}

else {

    $pdf->SetFont('Arial','',9);
    $pdf->MultiCell(95,5,'I hereby approve the abovementioned community development project/research proposal.','LR','L',false);
    $x = $pdf->GetX();
    $y = $pdf->GetY();
    $pdf->SetXY($x + 95, $y);
    $pdf->SetFont('Arial','B',9);
    $pdf->MultiCell(95,5,'I hereby disapprove the abovementioned community development project/research proposal.','LR','L',false);
    $newy = $pdf->GetY();
    $pdf = SetXY($x+95, $newy);
    $pdf->Cell(95,5,' ','LR',0,'L',0);
}
$y4 = $pdf->GetY();
if ($y3>$y4){
    $yheight3 = $y3-$y4;
    $pdf->SetXY($x+95, $y3);
    $pdf->Cell(95, $yheight3, ' ', 'LBR', 0, 'L', 0);
    $pdf->SetXY($x, $y3);
}else if ($y4>$y3) {
    $yheight3 = $y4-$y3;
    $pdf->SetXY($x+95, $y3);
    $pdf->Cell(95, $yheight3, ' ', 'LBR', 0, 'L', 0);
    $pdf->SetXY($x, $y4);
}

else {
    $pdf->SetXY($x+95, $y);
    $pdf->Cell(95,5, '', 'LR', 0, 'L', 0);
    $pdf->Ln(5);
    $pdf->SetX($x+95);
}
$pdf->Ln(5);
$pdf->Cell(45,5,'Budget to be approved:','L',0,'L',0);
$pdf->Cell(50,5,$budget_tobe,'R',0,'L',0);
$pdf->Cell(45,5,'Approved Budget:','L',0,'L',0);
$pdf->Cell(50,5,$finalbudget,'R',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(95,5,' ','LR',0,'L',0);
$pdf->Cell(45,5,'Final Budget Code is:','L',0,'L',0);
$pdf->Cell(50,5,$finalbudget_code,'R',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(20,15,' ','L',0,'L',0);
$pdf->Cell( 70, 15, $pdf->Image($progarea, $pdf->GetX()+15, $pdf->GetY(), 33.78), 0, 0, 'C', false );
$pdf->Cell(5,15,' ','R',0,'L',0);
$pdf->Cell(20,15,' ','L',0,'L',0);
$pdf->Cell( 70, 15, $pdf->Image($director, $pdf->GetX()+15, $pdf->GetY(), 33.78), 0, 0, 'C', false );
$pdf->Cell(5,15,' ','R',0,'L',0);
$pdf->Ln(15);
$pdf->Cell(20,5,' ','L',0,'L',0);
$pdf->Cell(70,5,$prog_name.$date_today,'B',0,'C',0);
$pdf->Cell(5,5,' ','R',0,'L',0);
$pdf->Cell(20,5,' ','L',0,'L',0);
$pdf->Cell(70,5,$dir_name.$date_today,'B',0,'C',0);
$pdf->Cell(5,5,' ','R',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(20,5,' ','LB',0,'L',0);
$pdf->Cell(70,5,'Signature Over Printed Name / Date','B',0,'C',0);
$pdf->Cell(5,5,' ','RB',0,'L',0);
$pdf->Cell(20,5,' ','LB',0,'L',0);
$pdf->Cell(70,5,'Signature Over Printed Name / Date','B',0,'C',0);
$pdf->Cell(5,5,' ','RB',0,'L',0);
$pdf->Output();
?>