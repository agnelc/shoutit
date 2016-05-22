<?php

include 'database.php';

//Check if form submitted
if (isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    //Set timezone
    date_default_timezone_set('Asia/Calcutta');
    $time = date('h:i:s:a', time());

    //Validate input
    if (!isset($user) || $user == '' || !isset($message) || $message == '') {

        $error="Please fill in your message";
        header("Location:index.php?error=".urlencode($error));
        exit();
        
    } else {
        $query = "INSERT INTO shouts (user,message,time) VALUES ('$user','$message','$time')";
        
        if(!mysqli_query($conn, $query)){
            die('Error:'.mysqli_error($con));
        }else{
            header("Location:index.php");
            exit();
        }
    }
}


