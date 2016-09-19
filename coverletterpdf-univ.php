<?php
require('fpdf17/fpdf.php');
include "mysql_connect.php";

$d = $_GET['d'];

$query1 = "SELECT * FROM proj_proposal WHERE proposal_id = $d";
$result1 = mysqli_query($link,$query1);
while ($row = mysqli_fetch_array($result1)){
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
   $gen_objective = $row['gen_objective'];
   $spec_obj1 = $row['spec_obj1'];
   $exp_result1 = $row['exp_result1'];
   $spec_obj2 = $row['spec_obj2'];
   $exp_result2 = $row['exp_result2'];
   $spec_obj3 = $row['spec_obj3'];
   $exp_result3 = $row['exp_result3'];
   $proj_evaluation = $row['proj_evaluation'];
}
$query = "SELECT * FROM cover_letter where proposal_id = $d";
$result = mysqli_query($link,$query);
while ($row = mysqli_fetch_array($result)){
    $iso= $row['iso'];
    $year= $row['year'];
    $date = $row['date'];
    $address_name = $row['address_name'];
    $address_position = $row['address_position'];
    $address_company1 = $row['address_company1'];
    $address_company2 = $row['address_company2'];
    $salutation = $row['salutation'];
    $body = $row['body'];
    $closing = $row['closing'];
    $proj_head1 = $row['proj_head1'];
    $position1 = $row['position1'];
   // $proj_head2 = $row['proj_head2'];
   // $position2 = $row['position2'];
    $title = $row['title'];
}

$pressql = "SELECT signatory_name, signatory_num FROM order_signatory WHERE org_num = $lead_org AND order_number = 1";
 $resultpres = mysqli_query($link, $pressql);
 while ($row = mysqli_fetch_array($resultpres)){
  $pres_name = $row['signatory_name'];
  $president_num = $row['signatory_num'];
 }
 
$presselect = "SELECT signature FROM signatory_profile WHERE user_id = $president_num"; 
$presult = mysqli_query($link, $presselect);
while ($row = mysqli_fetch_array($presult)){
  $president = $row['signature'];
}

 $advsql = "SELECT signatory_name, signatory_num FROM order_signatory WHERE org_num = $lead_org AND order_number = 2";
 $resultadv = mysqli_query($link, $advsql);
 while ($row = mysqli_fetch_array($resultadv)){
  $adv_name = $row['signatory_name'];
  $adviser_num = $row['signatory_num'];
 }
 
$aresselect = "SELECT signature FROM signatory_profile WHERE user_id = $adviser_num"; 
$aresult = mysqli_query($link, $aresselect);
while ($row = mysqli_fetch_array($aresult)){
  $adviser1 = $row['signature'];
}

$sqlii = "SELECT org_name, signature FROM student_profile where user_id = $lead_org";
$sqlrr = mysqli_query($link, $sqlii);
while ($row = mysqli_fetch_array($sqlrr)){
  $org_name = $row['org_name'];
  $projhead1 = $row['signature'];
 }
 
/*
$projhead1 = "images/krizsa.jpg";
$projhead2 = "images/krizsa.jpg";

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
// Page header
function Header()
{
    //$letterhead = "images/letterhead.jpg";
    //$this->Cell( 40, 40, $this->Image($letterhead, 0, 0, 216), 0, 0, 'L', false );
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
/*function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(190,5,'UST:S040-00-FO25 rev01 6/24/13', '', 0, 'R', 0);
}*/

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
$pdf->SetAutoPageBreak(true, 30);
$pdf->AddPage('P', 'Letter', 0);
$pdf->SetFont('Arial','',11);
$pdf->Ln(30);
$pdf->Cell(190,5,$iso,'',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(190,5,$year,'',0,'L',0);
$pdf->Ln(10);
$pdf->Cell(190,5,$date,'',0,'L',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(190,5,$address_name,'',0,'L',0);
$pdf->Ln(5);
$pdf->SetFont('Arial','',11);
$pdf->Cell(190,5,$address_position,'',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(190,5,$address_company1,'',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(190,5,$address_company2,'',0,'L',0);
$pdf->Ln(10);
$pdf->Cell(190,5,$salutation,'',0,'L',0);
$pdf->Ln(10);
$body = utf8_decode($body);
$pdf->MultiCell(190,5,$body,'','J',false);
$pdf->Ln(5);
$pdf->Cell(190,5,$closing,'',0,'L',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',11);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Cell( 40, 40, $pdf->Image($projhead1, $pdf->GetX(), $pdf->GetY(), 33.78), 0, 0, 'L', false );
$pdf->SetXY($x+95, $y);
//$pdf->Cell( 40, 40, $pdf->Image($projhead2, $pdf->GetX(), $pdf->GetY(), 33.78), 0, 0, 'L', false );
$pdf->Ln(15);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->Cell(95,5,$proj_head1,'',0,'L',0);
$pdf->SetXY($x+95, $y);
//$pdf->Cell(95,5,0,' ',0);
$pdf->SetFont('Arial','',11);
$pdf->Ln(5);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(95,5,$position1.','.$org_name,'','L',false);
$pdf->SetXY($x+95, $y);
$pdf->MultiCell(95,5,'',false);
$x = $pdf->GetX();
$y = $pdf->GetY();
$pdf->MultiCell(95,5,'Project Head 1, '.$title,'','L',false);
$pdf->SetXY($x+95, $y);
$pdf->MultiCell(95,5,'',false);
$pdf->AddPage('P', 'Letter', 0);
$pdf->Ln(30);
$pdf->SetFont('Arial','',11);
$pdf->Cell(190,5,'Noted by:','',0,'L',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','B',11);
$pdf->Cell( 40, 40, $pdf->Image($president, $pdf->GetX(), $pdf->GetY(), 33.78), 0, 0, 'L', false );
$pdf->Cell( 40, 40, $pdf->Image($adviser1, 110, $pdf->GetY(), 33.78), 0, 0, 'L', false );
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
$pdf->Output();
?>