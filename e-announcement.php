      <?php
      include "mysql_connect.php";
         $announcement = $_GET['announcement'];
         $subject = $_GET['subject'];
         $sql = "SELECT email FROM login_user";
         $result = mysqli_query($link, $sql);
         $email = "noreply@simbahayan.com";			
         while($row = mysqli_fetch_array($result)) {
         $email = $email . " , " .$row['email'];
         }
         
        $to = $email;
         $message = "<b>"Please be informed that a new announcement has been posted in the Simbahayan Proposal Tracking System.</b>";
            $message .= "<h3>Subject: ".$subject."</h3>";
            $message .= "<h3>Announcement: ".$announcement."</h3>";
         
         $header = "From: noreply@simbahayan.com \r\n" .
                'Content-Type: text/html; charset=ISO-8859-1'."\r\n".
                'MIME-Version: 1.0'."\r\n\r\n";
         $retval = mail ($to,$subject,$message,$header);
          if( $retval == true ) {
            echo "<script type='text/javascript'>window.location = 'add-announcement.php';</script>";
         }else {
            echo "Message could not be sent...";
         }
         
      ?>