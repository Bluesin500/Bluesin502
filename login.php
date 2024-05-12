<?php

var_dump($_POST);


    if ((isset($_POST['username']) && $_POST['username'] == "user")) {
        if ((isset($_POST['password']) && $_POST['password'] == "password")) {
            echo "sikeres belépés!";
            die();
        }
    } else {
        echo "sikertelen belépés!";
        die();
    }


die();