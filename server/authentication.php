<?php
    session_start();
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            //If user provided correct credentials, show main page.
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username; // $username coming from the form, such as $_POST['username']
                                       // something like this is optional, of course
            echo "<h1><center> Login successful </center></h1>";
            echo "<h2><center> Redirecting to mainpage in 5 seconds... </center></h2>";
            echo "<h2><center> If redirect does not occur in 5 seconds, Heres a manual <a href='http://uwubot.org/server/main/upload/'>Link</a>. </center></h2>";
            echo "<meta http-equiv='refresh' content='5;url=http://uwubot.org/server/main/upload/'>";
        }  
        else{  
            //If user provided incorrect credentials, show error page.
            echo "<h1><center> Login failed. Invalid username or password. </center></h1>";
            echo "<h2><center> Redirecting to login page in 5 seconds... </center></h2>";
            echo "<h2><center> If redirect does not occur in 5 seconds, Heres a manual <a href='http://uwubot.org/server/'>Link</a>. </center></h2>";
            echo "<meta http-equiv='refresh' content='5;url=http://uwubot.org/server/'>";
        }     
?>