<?php
    ob_start();
    
    require_once 'config.php';

    $username = $_REQUEST['username'];
    $hashed_password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);

    
    $query = "Select username from bookstore where username = '$username';";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0)
    {
        header('location:register.php?result=userexists');
        ob_end_flush();
        die();
    }
    else
    {
        
        $query = "Insert into bookstore (username, password) Values ('" . $username . "', '" . $hashed_password . "');";

        $result = mysqli_query($conn, $query);

        if ($result == 1)
        {
            header('location:register.php?result=success');
        }
        else
        {
            header('location:register.php?result=fail');
        }
    }
?>
