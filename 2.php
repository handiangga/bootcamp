<?php

    function is_username_valid($username) {
        if (!preg_match("/^[a-z]{5,}$/",$username)) {
            echo "false"; 
        } else{
            echo "true";
        }
    }

    function is_password_valid($password) {
        if (!preg_match("/^([0-9]{2}+@+[A-Z]{4})$/",$password)) {
            echo "false"; 
        } else {
            echo "true";
        }
    }

    echo 'febria &emsp;'; is_username_valid("febria");
    echo '<br>';
     
    echo '<br><br>';
    echo '29@PASS &emsp;'; is_password_valid("29@PASS");
    echo '<br>';
    echo '234&Agan &emsp;'; is_password_valid("234&Agan");
    echo '<br>';

?>