<?php
    ob_start();
    // start the session
    session_start();
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login To the Book Store </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>
    <body>
        <div id="login">

            <?php
                require_once 'index.php';
            ?>

            <h2>Login</h2>

            <form action="login1.php" method="post">
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" required autofocus></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Login"></td>
                    </tr>
                </table>
            </form>

            <?php
                // to display the message back to the user
                if (isset($_REQUEST['result']))
                {
                    if ($_REQUEST['result'] == "fail")
                    {
                        echo "<br><div id='msg'>";
                        echo "<strong>Login failed!</strong> Either username or password is incorrect. Please try again.";
                        echo "</div>";
                    }
                }
            ?>
        </div>
    </body>
</html>
