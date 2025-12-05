<?php 
    $title = "DAV College";
    $address = "Lalitpur, Nepal";
    $email = "contact@davnepal.edu.np";
    $contact = "+977-51-520345";
    $website = "www.davnepal.edu.np";

    $username = "admin"; // change username to 'guest' to test the other condition
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session Day One</title>
</head>
<body>
    <?php
        if(isset($_GET['user'])){
            echo "<h2>User: " . htmlspecialchars($_GET['user']) . "</h2>";
        }
        if ($username == "admin"){
        echo "<h1>Welcome! $username</h1>";
        echo "<hr>";
        echo "<h1>Welcome to the first PHP Session of SL - BCA!</h1>";
        echo "<h2>$title</h2>";
        echo "<a href='https://$website' target='_blank'>Visit DAV's Website</a><br>";
        echo "<a href='http://localhost/sl_php_demo/index.php?user=$username' target='_blank'>Visit our Website</a><br>";
        echo "Address: $address<br>";
        echo "Email: $email<br>";
        echo "Contact: $contact<br>";
        echo "<hr>";
        } else if ($username == "guest"){
            echo "Welcome! $username";
            echo "<a href='http://localhost/sl_php_demo/index.php?user=$username' target='_blank'>Visit our Website</a><br>";
        }
    ?>
</body>
</html>