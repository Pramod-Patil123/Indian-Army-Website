<?php 
$servername="localhost";//Server Name
$username="root";//User Name
$password="";//Password
$database="contact_db";//Database Name
$conn=mysqli_connect($servername,$username,$password,$database);
if (!$conn) {
    // die("Fail TO Connect with Database ! Due to this Error".mysqli_connect_error());
    die("Fail TO Connect with Database ! Due to this Error");
}
?>