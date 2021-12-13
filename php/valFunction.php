<?php
$db = mysqli_connect('localhost','root','','photo_app_db');

//Functii register
function emailVal($email) {
    
    if (empty($email)) {
        $msg["mesage"] = "Email is required";
      } 
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg["mesage"] = "Invalid email format";
        }
        else{
            return true;
        }
  }

function passVal($password){
    if (empty($password)) {
        $msg["mesage"] = "Password is required";
      } 

    elseif(strlen($password)<8){
        $msg["mesage"] = "Password must have at least 8 characters!";
    }
    else{
            return true;
        }
    }


//Functii Contact
function nameVal($fname){
    if(empty($fname)){
      $msg['mesage'] = "The name is missing!";
    }else{
      return true;
    }
  }
  
  
  function commentVal($comment){
    if(empty($comment)){
      $msg["mesage"] = "Campul este gol!";
    }
    elseif (strlen($_POST['comment']) < 20){
      $msg["mesage"] = "Sunt prea putine cuvinte";
  }else{
    return true;
  }
  }

?>