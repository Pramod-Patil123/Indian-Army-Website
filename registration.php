<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Registration Page</title>
<style>

</style>
</head>

<body>

<?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            include ('_dbconnect.php');
            $fname=$_POST['fname'];
            $email=$_POST['email'];
            $mno=$_POST['mobile'];
            $msg=$_POST['message'];
            $existSql="SELECT * FROM `user` WHERE email='$email'";
            $result=mysqli_query($conn,$existSql);
            $numExistRows=mysqli_num_rows($result);
            if($numExistRows > 0){
                $ShowError="Email Already Exist";
                echo "<script>alert('$ShowError');</script>";
            }
            else{
                
                $sql="INSERT INTO `user` (`fname`,`email`,`mobile_no`, `message`) VALUES ('$fname','$email', '$mno', '$msg');";
                $res=mysqli_query($conn,$sql);
                if ($res) {
                    echo "<script>
                    alert('Registrition is Completed ');
                    </script>";

                }
            }
            
        }
    ?>
</body>
</html>