<?php
include 'valFunction.php';
include 'config.php';


$msg = array(
    "status" => 0,
    "mesage" => "Nu ati intronus toate datele"
);

    if(isset($_POST['email']) and isset($_POST['password']) and isset($_POST['confirmpassword'])){
    $email = mysqli_real_escape_string($db, trim($_POST['email']));
    $password = mysqli_real_escape_string($db, trim($_POST['password']));
    $conpassword = mysqli_real_escape_string($db, trim($_POST['confirmpassword']));
    
    if(emailVal($email) and passVal($password) and $password === $conpassword){
        $pass = md5($password);
        $sql = "INSERT INTO client (email, parola) VALUES('$email','$pass')";
        mysqli_query($db, $sql); 
        $msg["mesage"] = "Datele au fost introduse in baza!";
        $msg["status"] = 1;
    }else{
        $msg['mesage'] = 'Email or password is wrong!';
    }
    }else{
        $msg['mesage'] = "The fields are empty!";
    }

echo json_encode($msg);
?>