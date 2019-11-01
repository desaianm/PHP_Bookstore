<?php
    // connect to the database
    $host = 'localhost';                    // database server name
    $user = 'desaianm_desaian';                  // your database username
    $pswd = 'Asd&gad200875';                  // your database password
    $dbName = 'desaianm_mydatabase';                    // database name

    $conn = mysqli_connect($host, $user, $pswd, $dbName);

    if (empty($conn))
    {
        die("Connection failed: " . mysqli_connect_error());
    }
