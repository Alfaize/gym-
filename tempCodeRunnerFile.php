<?php
if($username == 'admin' && $password == 'password'){
        header("Location: Billing.php");
    }
    else{
        echo "Username or Password is incorrect!";
    }