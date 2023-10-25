<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>
    <h1>Sign Up</h1>
    <form action="register.php" method="post">
        



        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <label for="contact">Contact:</label>
        <input type="contact" id="contact" name="contact" required><br>

        <input type="submit" value="Sign Up">
    </form>
    <p>Already have an account? <a href="login.html">Login here</a></p>
</body>
</html>
