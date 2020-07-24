<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "lab assignment 1";

if(isset($_POST['submit'])){
$conn = new mysqli ( $host, $dbusername,  $dbpassword, $dbname);
$name = $_POST['name1'];
$email = $_POST['email'];
$query =$_POST['query'];
$id = isset($_POST['ID']);
if (!empty($name) && (!empty($email)) && (!empty($number)) && (!empty($enquiry))) {    
    $sql = "INSERT INTO clients (id,name1,query,response,email) VALUES ('$name', '$email', '$number', '$enquiry')";
    $query_run = mysqli_query($conn, $sql);
    header("Location:return.html");
}
else{
       echo 'Error303';
    } 
    
}
?>