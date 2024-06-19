<?php
require_once 'db_connection.php';
$name= $_POST["myname"];
$password=$_POST["mypassword"];
$select="SELECT * FROM users WHERE username='$name'";
$get_user=mysqli_query($conn,$select);
while($row = mysqli_fetch_array($get_user)){
    $dbpassword=$row["password"];
    if($password===$dbpassword){
        echo '<script>';
             echo 'alert("login successful!");';
            echo 'window.location.href = "./index.html";'; 
            echo '</script>';
            // header("Location: index.html");
            exit(); 
               }
    else{
        echo '<script>';
            echo 'alert("your password is wrong");';
            echo '</script>';
            // header("Location: index.html");
            exit(); 
              }
}
// }
/*else
{
    echo '<script>';
            echo 'alert("you are not registered");';
            echo 'window.location.href = "./register.html";'; 
            echo '</script>';
            // header("Location: index.html");
            exit(); 
}*/

?>