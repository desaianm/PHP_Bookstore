<?php
    ob_start();
    require_once 'config.php';

    // start the session
    session_start();
// read values from the form
$book_name = $_REQUEST['book_name'];
$book_price = $_REQUEST['book_price'];

$host = "localhost";
$user = "desaianm_desaian";
$password = "Asd&gad200875";
$db_name = "desaianm_mydatabase";

// create connection
$conn = mysqli_connect($host, $user, $password, $db_name);

// check connection
if(empty($conn))
{
    die("Connection error : " . mysqli_connect_err());
}


// query to insert into table inentory
$query = "INSERT INTO bookstore(book_name, book_price) VALUES ('$book_name', '$book_price')";
// execute query
$result = mysqli_query($conn, $query);


// check if 1 record was added
if($result > 0)
{
    // sucess
    header("Location:add-books.php?result=success");
}else
{
    // fail
    header("Location:add-books.php?result=fail");
}

?>