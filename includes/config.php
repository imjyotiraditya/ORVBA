<?php
// Turn off all error reporting
error_reporting(0);

// make a mysql database connection and save it to a variable named $conn
$db_host  = "localhost"; // database hostname
$db_user  = "root"; // database username
$db_pass  = ""; // database password
$db_name  = "panda"; // database name

// make the connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    // print out the error if failed to connect to database
    die("Connection failed: " . $conn->connect_error);
}

// start session for managing login session
session_start();
function isLoggedIn() {
    if(isset($_SESSION['login'])) {
        return true;
    } else {
        return false;
    }
}
function isMechanic() {
    if(isset($_SESSION['mechanic'])) {
        return true;
    } else {
        return false;
    }
}