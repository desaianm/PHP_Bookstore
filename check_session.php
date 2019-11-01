<?php
    // start the session
    session_start();
    
    
    if (!isset($_SESSION['username']))
    {
        
        header('location:login.php');
    }
 