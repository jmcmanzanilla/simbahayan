      <?php
      include "mysql_connect.php";
         $person = $_GET['person'];
         if ($person != "Complete") {
         $sql = "SELECT name, email FROM login_user WHERE user_id = $person";
         $result = mysqli_query($link, $sql);
					
         while($row = mysqli_fetch_array($result)) {
         $email = $row['email'];
         $name = $row['name'];
         $to = $email;
         $subject = "Pending Approval";
         $message = "<b>".$name.", please be informed that a proposal is pending for your approval.</b>";
         
         $header = "From: SIMBAHAYAN PROPOSAL TRACKING SYSTEM \r\n" .
                'Content-Type: text/html; charset=ISO-8859-1'."\r\n".
                'MIME-Version: 1.0'."\r\n\r\n";
         $retval = mail ($to,$subject,$message,$header);
          if( $retval == true ) {
            echo "<script type='text/javascript'>window.location = 'signatory-listproposal.php?page=1';</script>";
         }else {
            echo "Message could not be sent...";
         }
         }
         }
         else if ($person == "Complete") {
            echo "<script type='text/javascript'>window.location = 'signatory-listproposal.php?page=1';</script>";
            }
      ?>