<?php
include 'dbconnect.php';
if (isset($_GET['sn'])) {
    $sn = $_GET['sn'];
    $sql = "DELETE FROM `forumpractice` WHERE `sn` = $sn  ";
    $result= mysqli_query($conn,$sql);
   
    if ($result) {
       header ('location:/forum2/index.php');
    }
   else {
       echo "failed";
   }
    
}

    
?>