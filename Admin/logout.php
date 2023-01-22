<?php

    session_start();
    // sessoin_unset();
    session_destroy();

    if(!isset($_SESSION['user'])){
        echo "error in session unset";
    }
    else{
        header('location:home.php');
    }

?>