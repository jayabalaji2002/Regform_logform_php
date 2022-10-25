<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/myweb/css/registrationform.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <title>Registration Page</title>
</head>
<body>
    <div class="h1">
        <h1>Registration Form</h1>
    </div>
    <div class="regform">
        <form action="sqlcondata.php" method="POST" class="form" autocomplete="off">
            <div class="name">
                <label for="name">Name</label>
                <input type="text" name="usname" id="name" required>
            </div>

            <div class="gender">
                <label for="gender">Gender</label> 
                <select name="gender" id="gender" required>
                    <option>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="age">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" required>
            </div>
        
            <div class="email">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="password">
                <label for="password">Password</label>
                <input type="password" name="uspassword"  id="password" required>
            </div>
            <div class="reg-btn">
                <button type="submit">Register</button>
            </div>
            <div class="login">
                <p>Already have an Account?</p>
                <a href="login.php">Login here</a>
            </div>
        </form>
    </div>
</body>
</html>