<?php
 include('db.php');
 
//insert email and password into database
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users (email,password) VALUES ('$email','$password')";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "Data inserted successfully";
    }else{
        echo "Data not inserted";
    }
}
?>