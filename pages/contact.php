
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Contact</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>   
    <div class="logo"><img src="../img/logo1.png" alt="Logo Andrei Gavrilita" class="main_logo"></div>
    <form  method="post" id="formValidation" class="all_forms margin_reg">
        <h3>CONTACT</h3>

        <label for="fname">Nume</label>
        <input type="text" placeholder="Nume" id="fname" name="fname" >

        <label for="email">Email</label>
        <input type="email" placeholder="Email" id="email" name="email" >

        <label for="textarea">Mesaj</label>
        <textarea class="textarea" name="comment" id="comment" placeholder="Mesajul dumneavoastră..."></textarea>

        <button name="submit_con" type="submit" class="btn" id="send">SEND</button>       
            <div class="msg" id="msg">

            </div>
 
    </form>

    <script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"  src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="../js/submit_con.js"></script>

</body>
</html>
