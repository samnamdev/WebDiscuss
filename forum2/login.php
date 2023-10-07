<?php


$showError = "false";
if ($_SERVER['REQUEST_METHOD']=="POST") {
    include 'dbconnect.php';
    $name=$_POST['name'];
    $password=$_POST['password'];
      
    $sql="SELECT * FROM `forumsignup` where name = '$name'";
    $result = mysqli_query($conn,$sql);
    $numrows = mysqli_num_rows($result);

    if ($numrows==1) {
        $row=mysqli_fetch_assoc($result);
        if (password_verify($password,$row['password'])) {
            session_start();
            $_SESSION['loggedin']= true;
            $_SESSION['sn']= $row['sn'];
            $_SESSION['name']= $name;
             echo "logged in". $name;         
        }
      header("Location: /forum2/index.php");
    }
    header("Location: /forum2/index.php");
}
 





?>