<?php
session_start();
include 'connect.php';

   if(isset($_POST['subject'])){
        $subject = $_POST['subject'];
    }
    if(isset($_POST['suggestion'])){
        $suggestion = $_POST['suggestion'];
    }
    
    $sessionid = $_SESSION['UserIDmo'];
    $status = "Unsolved";
     $query_create = "insert into suggestions (suggestioneeid,subject,suggestion,status) values ('$sessionid','$subject','$suggestion','$status')";
        mysqli_query($conn,$query_create);

if($query_create){
    echo 1;
}
else
{
    echo 0;
}

    

?>