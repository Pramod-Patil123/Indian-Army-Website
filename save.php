<?php

    @$cname=$_POST['name'];
    @$cemail=$_POST['email'];
    @$cmobile=$_POST['mobile'];
    @$cmessage=$_POST['message'];

    $conn= mysqli_connect("localhost","root","","contact_db") or die("connection failed..!");
    echo("connet successfuly");

    $sql ="INSERT INTO tblcon(cname,cemail,cmobile,cmessage)VALUES('{$cname}',
    '{$cemail}','{$cmobile}','{$cmessage}')";
    $result= mysqli_query($conn,$sql) or die("query error..!");
    echo("success");
?>