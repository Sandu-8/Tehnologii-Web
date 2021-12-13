<!DOCTYPE html>
<html lang="en">
<head>

    <title>Register</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    
</head>
<body>
    <div class="logo"><img src="../img/logo1.png" alt="Logo Andrei Gavrilita" class="main_logo"></div>
    <form  method="post" id="formValidation" class="all_forms margin_reg">
        <h3>REGISTER</h3>

        <label for="email">Email</label>
        <input type="email" placeholder="Email" id="email" name="email">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <label for="confirmpassword">Confirm Password</label>
        <input type="password" placeholder="Confirm Password" id="confirmpassword" name="confirmpassword">

        <button name="submit_reg" type="submit" class="btn" id="send">REGISTER</button>
        <span id="response"></span>
            <div class="msg" id="msg">
                
            </div>
    
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="../js/formValidation.js"></script>

</body>
</html>