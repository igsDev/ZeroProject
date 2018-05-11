<?php

// data connection
$hostdb = "localhost";
$userdb = "root";
$passwdb = "";

//  connect
$conn = mysqli_connect($hostdb, $userdb, $passwdb);

//  check connection
if(!$conn) {
    die("Connessione Fallita: ". mysqli_connect_error());
}
else {
    //  connection successfully
}