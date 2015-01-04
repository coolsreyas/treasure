<?php
$connection = null;
if (($connection = mysqli_connect("localhost", "sreyas", "unnisree")) === false)
    die("Could not connect to database");

// select database
if (mysqli_select_db($connection, "treasure") === false)
    die("Could not select database");
 ?>