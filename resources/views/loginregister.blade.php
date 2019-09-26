<html>
<head><title>Login</title>
</head>
<body>
    <form action="/loginsuccess" method="POST">
    @csrf
        <table border="1">
            <tr>
                <td>
                    Email<td><input type="email" name=email ></td>
                </td>
            </tr> 
                <td>
                    password<td><input type="password" name="password" ></td>
                </td>
            <tr>
                <td style="align:center">
                <input type="submit" value="login" name="login">
                </td>
                <td style="align:center">
                <input type="submit" value="register" name="register">
                
            </tr>                
        </table>
    </form>
        
</body>
</html>