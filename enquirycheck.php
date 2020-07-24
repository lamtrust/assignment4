<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "lab assignment 1";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  

    $name = $_POST['name1'];  
    $email = $_POST['email'];
    $num = $_POST['number1'];

      
        //to prevent from mysqli injection  
        $name = stripcslashes($name);  
        $email = stripcslashes($email); 
        $num = stripcslashes($num); 
        $name = mysqli_real_escape_string($con, $name);  
        $email = mysqli_real_escape_string($con, $email);  
        $num = mysqli_real_escape_string($con, $num);
      
        $sql = "SELECT  * from clients where name1 = '$name' and email = '$email' and number1 = '$num'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
           header("Location:display.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid Credintials!.</h1>";  
        }     
?>  