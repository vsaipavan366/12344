<?php
require_once 'db_connection.php';
$name= $_POST["username"];
 $mail= $_POST['email'];
$desc =$_POST['desc'];
    //echo "$name";
    //echo "$mail";
        $insert="INSERT INTO contact(name,email,description) VALUES('$name','$mail','$desc')";
        $insertuser=mysqli_query($conn, $insert);
        if($insertuser){
            echo '<script>';
            echo 'alert("message had sent to admin");';
            echo 'window.location.href = "./index.html";'; 
            echo '</script>';
            // header("Location: index.html");
            exit(); 
        }
        else{
            echo "<script>alert('message not sent')</script>";
        }
    
    
 ?>


