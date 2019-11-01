     
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> User Registration for Book Store </title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
            
    </head>
    <body>
        <div id="wrapper">
            <?php
                require_once 'index.php';
            ?>

            <h2>Register</h2>

            <form action="register1.php" method="post">
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
                        <td colspan="2"><input type="submit" value="Register"></td>
                    </tr>
                </table>
            </form>

            <?php
                if (isset($_REQUEST['result']))
                {
                    if ($_REQUEST['result'] == "success")
                    {
                        echo "<br><div id='msg'>";
                        echo "<strong>Success!</strong> New user was registered.";
                        echo "</div>";
                    }
                    else if ($_REQUEST['result'] == "fail")
                    {
                        echo "<br><div id='msg'>";
                        echo "<strong>Fail!</strong> New user was not registered.";
                        echo "</div>";
                    }
                    else if ($_REQUEST['result'] == "userexists")
                    {
                        echo "<br><div id='msg'>";
                       echo "<strong>Fail!</strong> This username is already taken up. Please try again.";
                        echo "</div>";
                    }
                }
            ?>
        </div>
    </body>
</html>
