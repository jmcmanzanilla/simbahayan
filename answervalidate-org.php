<?php

  if (isset($_POST['submitted'])){
    include "mysql_connect.php";
    $answer = $_POST['answer'];

    $username = $_POST['username'];
    $queryid = "SELECT * FROM login_user WHERE username = '".$username."'";
    $resultname = mysqli_query($link, $queryid);
    while ($row = mysqli_fetch_array($resultname)){
      echo $user_id = $row['user_id'];
      echo $college = $row['college'];
    }      

    
    $array = array();
    
    $query = "SELECT answer FROM student_profile WHERE user_id = '".$user_id."'";
    $result = mysqli_query($link,$query);

    while ($row = mysqli_fetch_array($result)){

      echo $array[] = $row['answer'];

    }

    if (in_array($answer,$array)){
      include "mysql_connect.php";
            $sqlupdate = "UPDATE login_user SET password = md5('$college') WHERE user_id = '".$user_id."'";
        echo "<script type='text/javascript'>alert('PLEASE USE YOUR COLLEGE AS YOUR DEFAULT PASSWORD.');window.location = 'index.php';</script>";
        

        if(!mysqli_query($link, $sqlupdate)){
        die("<script type='text/javascript'>alert('ERROR CHANGING PASSWORD!'); window.history.go(-1);</script>");
    }
      
     }

    
    else{
        die("<script type='text/javascript'>alert('ANSWER INCORRECT! PLEASE TRY AGAIN.'); window.history.go(-1);</script>");
    }
  
  
    
  }
?>