<?php
require_once 'db_connection.php';
$name= $_POST["fullName"];
$password=$_POST["aadharNumber"];
$dob= $_POST["DOB"];
$mno=$_POST["phoneNumber"];
$mail= $_POST["gmail"];
$city=$_POST["city"];
$address=$_POST["address"];
$job=$_POST["job"];
$lang=$_POST["languages"];
/*echo "$name";
echo "$password";
echo "$dob";
echo "$mno";
echo "$mail";
echo "$city";
echo "$address";
echo "$job";
echo "$lang";*/
$insert="INSERT INTO job(name,aadhar,dob,mno,mail,city,address,job,language) VALUES('$name','$password','$dob','$mno','$mail','$city','$address','$job','$lang')";
        $insertuser=mysqli_query($conn, $insert);
        if($insertuser){
            echo '<script>';
            echo 'alert("admin checks your details");';
            echo 'window.location.href = "./index.html";'; 
            echo '</script>';
            // header("Location: index.html");
            exit(); 
        }
        else{
            echo "<script>alert('data not send to admin')</script>";
        }
?>