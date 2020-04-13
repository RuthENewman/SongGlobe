<?php 
    ob_start();
    session_start();

    $timezone = date_default_timezone_set("Europe/London");

    $con = mysqli_connect("localhost", "root", "", "songglobe");

    if (mysqli_connect_errno()) {
        echo "Failed to connect to DB: " . mysqli_connect_errno();
    }