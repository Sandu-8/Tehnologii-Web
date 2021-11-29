<!DOCTYPE html>
<html lang="en">
<head>

    <title>Login Form </title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="logo"><img src="../img/logo1.png" alt="Logo Andrei Gavrilita" class="main_logo"></div>
    <form action="../php/config.php" method="post" id="formValidation" class="all_forms margin">
        <h3>ACCOUNT LOGIN</h3>

        <label for="email">Email</label>
        <input type="email" placeholder="Email" id="email" name="email">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <button name="submit_log" type="submit" class="btn">Log In</button>
        <a href="reset.html" class="forgot_ps">Forgot your password?</a>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="../js/formValidation.js"></script>


</body>
</html>
