<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\myweb\CSS\login.css">
    <title>Login page</title>
</head>
<body>
    <div class="logform">
        <form action="reglogchk.php" method="post">
            <div class="h1">
                <h1>Login Here</h1>
            </div>
            <div class="email">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="pass">
                <label for="pass">Password</label>
                <input type="password" name="password" id="pass">
            </div>
            <div class="log-btn">
                <button type="submit">Login</button>
            </div>
            <div class="regpage">
                <p>Doesn't have a account?</p>
                <a href="registrationform.php">Register</a>
            </div>
        </form>
    </div>
</body>
</html>