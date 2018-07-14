<?php
session_start();
include 'connect.php';

   if(isset($_POST['subject'])){
        $subject = $_POST['subject'];
    }
    if(isset($_POST['problem'])){
        $problem = $_POST['problem'];
    }
    
    $sessionid = $_SESSION['UserIDmo'];
    $status = "Unsolved";
     $query_create = "insert into complaints (complaineeid,subject,problem,status) values ('$sessionid','$subject','$problem','$status')";
        mysqli_query($conn,$query_create);

if($query_create){
    echo 1;
}
else
{
    echo 0;
}

    

?>