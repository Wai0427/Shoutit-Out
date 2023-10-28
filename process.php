<?php
include 'database.php';


// Check if form submitted
if(isset($_POST['submit'])) {
    
    $user = mysqli_real_escape_string($connect, $_POST['user']);
    $message = mysqli_real_escape_string($connect, $_POST['message']);

    //Set time zone
    date_default_timezone_set('Asia/Kuala_Lumpur');
    $time = date('h:i:s:= a', time());

    //validate input
    if(!isset($user) || $user == '' || !isset($message) || $message == '' ){
        $error = "Please fill in your name and a message";
        header("Location: index.php?error=".urlencode($error));
        exit();

    }else {
        $query = "INSERT INTO shouts (user, message, time)
                    VALUE ('$user', '$message', '$time')";

        if(!mysqli_query($connect, $query)){
            die('Error: '. mysqli_error($connect));

        } else {
            header("Location: index.php");
            exit();
        }

    }


}
