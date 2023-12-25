<?php
$firstname= $_REQUEST['fname'];
$secondname=$_REQUEST['sname'];
$address=$_REQUEST['address'];
$phone=$_REQUEST['phone']
if(isset($-post)[btnsend])
{
    $host='localhost';
    
    $user="root";
    $password="";
    $db="Website";
    $conn= mysqli_connect($host, $user,$password, $db);
    $insert="insert into customers values('$firstname','$secondname','$address','$phone')";
    mysqli_query($conn, $insert);
    
    if ($conn) {
        echo("<h1 style='color:green;'> your registration is done!</h1>");
     }
     else{
         echo("<h1 style='color:red;'> your registration is failed!</h1>");
     }
 
 }
 
 
 ?>
 
 