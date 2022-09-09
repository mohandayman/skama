<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $email =    mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);
    
    if (isset($_POST['submit']))
    
    $sql=" INSERT INTO suser(email, password) VALUES('$email','$password')";
    
    if (filter_var($email,FILTER_VALIDATE_EMAIL))
    
    {
    if (mysqli_query($conn , $sql))
    header('location: index.php');
    
    else 
    echo "error : " . mysqli_error($conn);
    }else echo "enter the valid email";
}
?>    