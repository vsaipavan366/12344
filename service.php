<?php
 require_once 'db_connection.php';
$name= $_POST["username"];
$mail= $_POST["email"];
$ser=$_POST["service"];
$address=$_POST["address"];
/*echo "$name";
echo "$mail";
echo "$ser";
echo "$address";*/
$insert="INSERT INTO service(name,email,service,address) VALUES('$name','$mail','$ser','$address')";
        $insertuser=mysqli_query($conn, $insert);
        if($insertuser){
            echo '<script>';
            echo 'alert("admin checks your details and provides service");';
            echo 'window.location.href = "./index.html";'; 
            echo '</script>';
            // header("Location: index.html");
            exit(); 
        }
        else{
            echo "<script>alert('data not send to admin')</script>";
        }
?>