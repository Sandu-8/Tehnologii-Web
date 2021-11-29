<?php
session_start();

$db = mysqli_connect('localhost','root','','photo_app_db');

if(isset($_POST['submit_reg'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conpassword = $_POST['confirmpassword'];

    if (empty($email)) {
        $emailErr = "Email is required";
      } 
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      

    else {
        if ($password === $conpassword) {
            $sql = "INSERT INTO client (email, parola) VALUES('$email','$password')";
            mysqli_query($db, $sql); 
            $_SESSION['message'] = "Success!";
            header("location: ../pages/register.php");
         }
         else {
            $conpasswordErr = "Parola incorecta!";
         }      
      }
     
}


if(isset($_POST['submit_log'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM client WHERE email = '$email' AND parola = '$password'";
    $result = mysqli_query($db, $sql);

    if(mysqli_num_rows($result) == 1){
        header("location: ../index.html");
    }
}



if(isset($_POST['submit_con'])){
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $comment = $_POST['textarea'];

    if (empty($email)) {
        $emailErr = "Email is required";
      } 
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      

    elseif(empty($fname)) {  
        $fnameErr = "Nu ati introdus emailul";  
    } 
    elseif (strlen($comment) < 20){
           $commentErr = "Sunt prea putine cuvinte";
      }
      else{

    $sql = "INSERT INTO client (nume,email, prenume) VALUES('$fname','$email','$comment')";
    mysqli_query($db, $sql);
    $_SESSION['message'] = "Success!";
    header("location: ../pages/contact.php");

}

}
?>



