<?php
require('fpdf17/fpdf.php');
include "mysql_connect.php";

//ID
$d = $_GET['d'];
$queryid = "SELECT vehicle_id FROM vehiclerequest";
$result = mysqli_query($link,$queryid);
while ($row = mysqli_fetch_array($result)){
    $vehicle_id = $row['vehicle_id'];
}

//Type of Activity

$query = "SELECT * FROM vehiclerequest WHERE proposal_id = $d ";
$result = mysqli_query($link,$query);
while ($row = mysqli_fetch_array($result)){
    $osg_num = $row['osg_num'];
    $borrower = $row['borrower'];
    $contact_person = $row['contact_person'];
    $contact_number = $row['contact_num'];
    $title = $row['title'];
    $destination = $row['destination'];
    $datetrip = $row['datetrip'];
    $etd = $row['etd'];
    $place = $row['place'];
    $passengersnum = $row['passengersnum'];
    $vehicle = $row['vehicle'];
    $driver = $row['driver'];
    $rental = $row['rental'];
}

$director = "images/krizsa.jpg";
$adviser = "images/krizsa.jpg";

class PDF extends FPDF
{
function setID($vehicle_id){ 
      $this->vehicle_id = $vehicle_id; 
    } 
// Page header
function Header()
{
    // // Logo
    // $this->Image('images/ust_logo1.png',10,6,50);
    // //Arial bold 15
    $vehicle_id = $GLOBALS['vehicle_id'];
    $this->SetFont('Times','',9);
    // Move to the right
    // $this->Cell(10);
    // Title
    $this->Cell(40,5,'University of Santo Tomas');
    $this->Ln(5);
    $this->SetFont('Times','',10);
    $this->Cell(40,5,'UST-SIMBAHAYAN Community Development Office');
    $this->Ln(5);
    $this->SetFont('Arial','',10);
    $this->Cell(40,5,'Vehicle Reservation Form No.: '.$vehicle_id);
    $this->Cell(10,5,'');
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
    $this->Cell(190,5,'UST:S040-00-FO25 rev01 6/24/13', '', 0, 'R', 0);
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
$pdf->setID($vehicle_id);
$pdf->AliasNbPages();
$pdf->AddPage('P', 'Letter', 0);
$pdf->SetFont('Arial','',11);
$pdf->Cell(190,10,'VEHICLE RESERVATION FORM','',0,'C',0);   // empty cell with left,top, and right borders
$pdf->Ln(10);
$pdf->SetFont('Arial','',10);
$pdf->Cell(30,5,'OSG Number:','',0,'L',0);
$pdf->Cell(160,5,$osg_num,'B',0,'L',0);  //Community Development Related or Non-Community Development Related
$pdf->Ln(5);
$pdf->Cell(30,5,'Borrower(s):','',0,'L',0);
$pdf->Cell(160,5,$borrower,'B',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(30,5,'Contact Person:','',0,'L',0);
$pdf->Cell(65,5,$contact_person,'B',0,'L',0);
$pdf->Cell(30,5,'Contact Number:','',0,'L',0);
$pdf->Cell(65,5,$contact_number,'B',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(50,5,'Purpose/Title of the Activity:','',0,'L',0);
$pdf->Cell(140,5,$title,'B',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(25,5,'Destination:','',0,'L',0);
$pdf->Cell(165,5,$destination,'B',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(23,5,'Date of Trip:','',0,'L',0);
$pdf->Cell(72,5,$datetrip,'B',0,'L',0);
$pdf->Cell(23,5,'ETD/ETA:','',0,'L',0);
$pdf->Cell(72,5,$etd,'B',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(30,5,'Place of Pick-up:','',0,'L',0);
$pdf->Cell(45,5,$place,'B',0,'L',0);
$pdf->Cell(30,5,'No. of Passengers:','',0,'L',0);
$pdf->Cell(45,5,$passengersnum,'B',0,'L',0);
$pdf->Cell(40,5,'(Attach List of Passengers)','',0,'L',0);
$pdf->Ln(10);
$pdf->Cell(30,5,'Type of Vehicle:','',0,'L',0);
$pdf->Cell(160,5,$vehicle,'B',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(30,5,'Driver Assigned:','',0,'L',0);
$pdf->Cell(160,5,$driver,'B',0,'L',0);
$pdf->Ln(5);
$pdf->Cell(65,5,'Vehicle Rental (thru Purchasing Office):','',0,'L',0);
$pdf->Cell(10,5,$rental,'B',0,'L',0); //Yes or No
$pdf->Ln(15);
$pdf->Cell(95,5,'Noted By:','',0,'C',0);
$pdf->Cell(95,5,'Approved By:','',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(20,15,' ','',0,'C',0);
$pdf->Cell( 40, 40, $pdf->Image($adviser, $pdf->GetX()+5, $pdf->GetY(), 40), 0, 0, 'L', false );//Signature of Adviser
$pdf->Cell(20,15,' ','',0,'C',0);
$pdf->Cell( 40, 40, $pdf->Image($director, $pdf->GetX()+35, $pdf->GetY(), 40), 0, 0, 'L', false );//Signature of Director
$pdf->Cell(20,15,' ','',0,'C',0);
$pdf->Ln(20);
$pdf->Cell(20,5,' ','',0,'C',0);
$pdf->Cell(65,5,'Adviser','T',0,'C',0);
$pdf->Cell(20,5,' ','',0,'C',0);
$pdf->Cell(65,5,'Director','T',0,'C',0);
$pdf->Cell(20,5,' ','',0,'C',0);
$pdf->Ln(5);
$pdf->Cell(20,5,' ','',0,'C',0);
$pdf->Cell(65,5,'Asst. Prof. Salve L. Diaz','',0,'C',0);
$pdf->Cell(20,5,' ','',0,'C',0);
$pdf->Cell(65,5,'Asst. Prof. Mark Anthony D. Abenir, Ph.D.','',0,'C',0);
$pdf->Cell(20,5,' ','',0,'C',0);
$pdf->Ln(10);
$pdf->SetFont('Arial','',9);
$pdf->Ln(5);
$pdf->Cell(190,5,'Responsibilities of the Borrower','',0,'L',0);
$pdf->Ln(7);
$pdf->Cell(190,3,'1. Toll fee','',0,'L',0);
$pdf->Ln(3);
$pdf->Cell(190,3,"2. The Passengers' Attendance Form noted by the accompanying Adviser/Faculty Member (for student organizations/councils),",'',0,'L',0);
$pdf->Ln(3);
$pdf->Cell(190,3,'should be accomplished by the passengers before the end of the trip.','',0,'L',0);
$pdf->Ln(3);
$pdf->Cell(190,3,"3.  The Driver's Evaluation Form should be accomplished by the accompanying Adviser/Faculty Member (for student",'',0,'L',0);
$pdf->Ln(3);
$pdf->Cell(190,3,'organizations/councils), and randomly by some passengers after each trip.','',0,'L',0);
$pdf->Ln(3);
$pdf->Cell(190,3,'4.  Cleanliness and Orderliness of the vehicle should be maintained after each trip. The Styro-Free discipline is highly','',0,'L',0);
$pdf->Ln(3);
$pdf->Cell(190,3,'encouraged.','',0,'L',0);
$pdf->Ln(10);
$pdf->Cell(190,5,'Cancellation of Trips','',0,'L',0);
$pdf->Ln(7);
$pdf->Cell(190,3,'1. Letter of Cancellation or Change of Date noted by the adviser, should be submitted to the UST-SIMBAHAYAN','',0,'L',0);
$pdf->Ln(3);
$pdf->Cell(190,3,"Community Development Office at least 2 days before the trip. ",'',0,'L',0);
$pdf->Ln(3);
$pdf->Cell(190,3,"2. If the requesting group failed to cancel the trip within the two day period, vehicle rental and driver's overtime pay will be",'',0,'L',0);
$pdf->Ln(3);
$pdf->Cell(190,3,"charged to them. The budget for the vehicle for their next trip will be coursed through the UST Purchasing Office and will ",'',0,'L',0);
$pdf->Ln(3);
$pdf->Cell(190,3,'already be charged to the borrower.','',0,'L',0);
$pdf->Ln(3);
$pdf->Output();
?>