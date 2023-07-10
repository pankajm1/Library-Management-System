<?php
include("connect.php");

$id = $_GET['id'];

$query = "DELETE FROM addbook WHERE id ='$id'";

$data =  mysqli_query($conn,$query);

if ($data) {
    echo 'Record Delete successfully ';
    ?>
        <meta http-equiv = "refresh" content = "1; url = http://localhost/Library%20Management/display.php"/>
    <?php
  } 
else {
    echo 'Error Deleting record.';
  }
?>