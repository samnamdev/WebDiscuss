<?php
    $Alert = false;
    $showAlert = false;
    $showError = false;
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        include 'dbconnect.php';

        $name = $_POST['name'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $existsql = "SELECT * FROM `forumsignup` where name = '$name'";
        $result = mysqli_query($conn,$existsql);
        $numrows = mysqli_num_rows($result);

        if ($numrows>0) {
            $Alert="Name already exist";
        }
        else {
            if ($password==$cpassword) {
                $hash=password_hash($password,PASSWORD_DEFAULT);
                $sql = "INSERT INTO `forumsignup` ( `name`, `password`, `date`) VALUES ( '$name', '$hash', current_timestamp())";
                $result = mysqli_query($conn,$sql);
                if ($result) {
                    $showAlert=true;
                    
                    header ('location:/forum2/index.php');
                }
                else {
                    $showError="Password do not match";
                    header ('location:/forum2/index.php');
                }

            }

        }


    }
   


?>