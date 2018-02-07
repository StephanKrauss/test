<?php
    // error_reporting(E_ERROR | E_WARNING | E_PARSE);

    // $username = 'joe';        // in real life this would be from $_SESSION

    // and then much further down in the code...

    if ($username) {            // typo, $usernmae expands to null
        echo "Logged in";
    }
    else {
        echo "Please log in...";
    }
