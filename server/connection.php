<?php      
    $host = "localhost";  
    $user = "uwubotor_oxmc";  
    $password = 'GLaDOS@23';  
    $db_name = "uwubotor_Login_system";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>