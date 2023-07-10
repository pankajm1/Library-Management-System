<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lb";


$conn= new mysqli($servername,$username,$password ,$dbname);

if($conn){
//    echo"connection OK";
}
else{
    die(mysqli_error($con));
}

?>