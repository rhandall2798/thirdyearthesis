
<?php
session_start();

include 'connect.php';


if(isset($_POST['username']) && isset($_POST['password'])) {

    $username = trim(mysqli_real_escape_string($conn, $_POST['username']));
    $password = trim(mysqli_real_escape_string($conn, $_POST['password']));
    

      
    //let's try it.
    //wait lemme check my table.
    $admin = 3;
    $moderator = 2;
    $user = 1;
    
    $status = "Active";
    
    $query_admin = mysqli_query($conn, "SELECT * FROM accounts WHERE username = '$username' AND password = '$password' AND user_level='$admin' AND status='$status' " );
    
    
    
    if(mysqli_num_rows($query_admin) === 1) {
        echo 1;
        $row = mysqli_fetch_assoc($query_admin);
        $username = $row['username'];
        $_SESSION['Username'] = $username;
        $useridmo = $row['id'];
        $_SESSION['UserIDmo'] = $useridmo;
    
    } else {
        
             $query_moderator = mysqli_query($conn, "SELECT * FROM accounts WHERE username = '$username' AND password = '$password' AND user_level='$moderator' AND status='$status' " );

            if(mysqli_num_rows($query_moderator) === 1) {
                echo 2;
                $row = mysqli_fetch_assoc($query_moderator);
                $username = $row['username'];
                $_SESSION['Username'] = $username;
                $useridmo = $row['id'];
                $_SESSION['UserIDmo'] = $useridmo;
    
            } else{
                          $query_user = mysqli_query($conn, "SELECT * FROM accounts WHERE username = '$username' AND password = '$password' AND user_level='$user' AND status='$status' " );

                    if(mysqli_num_rows($query_user) === 1) {
                        echo 3;
                        $row = mysqli_fetch_assoc($query_user);
                        $username = $row['username'];
                        $_SESSION['Username'] = $username;
                        $useridmo = $row['id'];
                        $_SESSION['UserIDmo'] = $useridmo;
                        

                        
                        
                        
    
            }
            }
            

    }
}
?>