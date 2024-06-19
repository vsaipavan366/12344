<?php
error_reporting(0);
require_once 'db_connection.php';
    $name= $_POST["username"];
    $mail= $_POST["email"];
    $pass =$_POST["npass"];
    $number= $_POST["mno"];
    $gender= $_POST["gender"];
    $select="SELECT * FROM users WHERE email='$mail'";
    $getuser=mysqli_query($conn, $select);  
    if(mysqli_num_rows($getuser)==1){
        //header("Location: register.html");
        echo '<script>';
        echo 'alert("already registered");';
        echo 'window.location.href = "./login.html";'; 
        echo '</script>';
        // header("Location: index.html");
        exit(); 
    }
    else{
        $insert="INSERT INTO users(username,email,password,mobile_no,gender) VALUES('$name','$mail','$pass','$number','$gender')";
        $insertuser=mysqli_query($conn, $insert);
        if($insertuser){
            echo '<script>';
            echo 'alert("Registration successful!");';
            echo 'window.location.href = "./index.html";'; 
            echo '</script>';
            // header("Location: index.html");
            exit(); 
        }
        else{
            echo "<script>alert('registeration failed')</script>";
        }
    }
    
 ?>


