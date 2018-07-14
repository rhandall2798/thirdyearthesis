<?php
include("connect.php");
	
if(isset($_POST['reguname'])){
    $reguname = $_POST['reguname'];
}
if(isset($_POST['regpwordlast'])){
    $regpwordlast = $_POST['regpwordlast'];
}
		// get values 
		
		
        $reglevel = 1;
        $regstatus = "Inactive";

		$query = "INSERT INTO accounts(username, password, user_level,status) VALUES('$reguname', '$regpwordlast', '$reglevel','$regstatus')";
    mysqli_query($conn,$query);

if($query){
    header('location:../../ThesisFinal/index.php');
}
else{
    
}
		
	
?>