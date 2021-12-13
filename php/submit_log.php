<?php
include 'valFunction.php';
include 'config.php';


$msg = array(
    "status" => 0,
    "mesage" => ""
);

if(isset($_POST['email']) and isset($_POST['password'])){
    $email = mysqli_real_escape_string($db, trim($_POST['email']));
    $password = md5(mysqli_real_escape_string($db, trim($_POST['password'])));

    if(emailVal($email) and passVal($password)){
        $pass = trim($password); 
        $sql = "SELECT * FROM client WHERE email = '$email' AND parola = '$password'";
        $result = mysqli_query($db, $sql);
    
        if(mysqli_num_rows($result) == 1){
           $msg['status'] = 1;
           $msg['mesage'] = "Login succesful!";

        }else{
    $msg['mesage'] = "Email or password is wrong!";

        }
}
}else{
    $msg['mesage'] = "The fields are empty!";
}

echo json_encode($msg);
?>