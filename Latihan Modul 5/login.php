<!DOCTYPE html>
<html>
    <head>
        <title>Form Login</title>
    </head>
    <body>
        <form method="POST" action="loginAct.php">
            <h3 align="center">LOGIN</h3>
            <table width="300" align="center" cellpadding="2" cellspacing="2">
                <tr>
                    <td width="100">Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td width="100">Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="btnLogin" value="Login">
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>