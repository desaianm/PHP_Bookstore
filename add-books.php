<?php
    // check if the session exists, otherwise redirect back to login page
    require_once 'check_session.php';
    ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Adding Books </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        
            <h2> Add Books </h2>
            <a href="login.php">Login</a> | 
            <a href="register.php"> Register </a> | 
            <a href="add-books.php">Add Book</a> |
            <a href="view-books.php"> View Book </a> |
            <a href="logout.php"> Logout |</a>

            
            <form action="add-books1.php" method="post">
        <table>
            <tr>
            <td> Book Name : </td>
            <td> <input type="text" name="book_name"> </td>
            </tr><br>
            
            <tr>
            <td> Book Price : </td>
            <td> <input type="text" name="book_price"> </td>
            </tr> <br>
            
            <tr colspan="4" style="text-align: center">
                <td><input type="Submit" value="Add">  </td>
            </tr>
            
            <tr>
                <td colspan="2">
                    <?php
                    
                    
                    if(isset($_REQUEST['result']))
                    {
                        if(isset($_REQUEST['result']) == "success")
                        {
                            echo "book return sucessfully";
                        }elseif(isset($_REQUEST['result']) == "fail")
                        {
                            echo "something went wrong. product is not added.";
                        }
                    }
                    ?>
                </td>
            </tr>
            
        </table> 
        </form>
    
    </body>
</html>
