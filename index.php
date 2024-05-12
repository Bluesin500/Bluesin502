<?php

    if ((isset($_POST['username']) && $_POST['username'] != "user")) {
        echo "hibás felhasználónév!";
        die();
    }
    if ((isset($_POST['password']) && $_POST['password'] != "password")) {
        echo "hibás jelszó!";
        die();
    }
    echo "sikeres belépés!";

die();