<?php
function doLogin($username, $password){
    $db_username = "admin";
    $db_password = "1234";
    // check empty username
    if(empty($username)){
        return "Login failed";
    }
    
    return ($username === $db_username && $password === $db_password)
            ? "Login successfull"
            : "Login failed"; 
}