<!DOCTYPE html>
<html>
<head>
        <title>register</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>
    <h3 align="center">SIGN UP YANIK</h3>
    <form name="register" action="reg.php" method="POST" autocomplete="off">
        <div class="container">
            <img src="user.jpg" height="70" width="-70">
            <div class="card">
        <input type="text" name="username" placeholder="username" id="name"><br>
        <input type="email" name="email" placeholder="email id" id="name"><br>
        <input type="password" name="password" placeholder="password" id="name"><br>
        <input type="password" name="password1" placeholder="Re-type password" id="name"><br>
        <input type="submit" name="submit" value="Sign In" id="button">
        <p>
            Already have an account? <a href="index.php">Login here</a>
        </p>
        </div>
        </div>
    </form>
</body>
</html>