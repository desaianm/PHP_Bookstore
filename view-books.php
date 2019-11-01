<?php
require_once 'check_session.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet"  type="text/css" href="css/style.css" >
        
    </head>
    <body>
        
        
        <h2> Books in Store </h2>
        <div id="links">
            <a href="login.php">Login</a> | 
            <a href="register.php"> Register </a> | 
            <a href="add-books.php">Add Book</a> |
            <a href="view-books.php"> View Book </a> |
            <a href="logout.php"> Logout |</a>
            <br>
            <br>
            <form action="" method="post">
            <input type="text" name="search">
            <br>
            <br>
            <input type="submit" name="submit" value="Search">
            </form> 
        </div>    

        <?php
       
        $host = "localhost";
        $user = "desaianm_desaian";
        $password = "Asd&gad200875";
        $db_name = "desaianm_mydatabase";


        $conn = mysqli_connect($host, $user, $password, $db_name);
        
        
        
        
        
        
        if (empty($conn)) {
            die("Connection error: " . mysqli_connect_err());
        }
        
        $query = "SELECT * FROM bookstore";
        $result = mysqli_query($conn, $query);
        $search_value = $_POST["search"];
        
        // if the rows were fetched
        if(mysqli_num_rows($result) > 0)
        {
            // print table and header row
            echo "<table> <td> <th> Book Name</th> <th> Book Price</th> <th> &nbsp;</th> <th> &nbsp;</th> </td>";
            $i=1; // print the number of rows
            while($row = mysqli_fetch_assoc($result))
            {
                if(empty($search_value)){
                echo "<tr> <td> </td>";
                echo "<td>" . $row['book_name'] . "</td>";
                echo "<td>" . $row['book_price']. "</td>";
                }
              
            }
            
            $sql="select * from bookstore where book_name like '$search_value%'";
            $result = mysqli_query($conn, $sql);
            
            
            while($row = mysqli_fetch_assoc($result)){
            if(!empty($search_value)){
                
            
            echo "<tr> <td> </td>";
            echo "<td>" . $row['book_name'] . "</td>";
            echo "<td>" . $row['book_price']. "</td>";
            echo "</table>";
            
            }
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            if(empty($row)){
                echo '<strong> NO Results Found </strong> ';
            
            }  
            
            }
        }
        else
        {
            echo " no rows are detected.";
        }
                
        ?>
    </body>
</html>
