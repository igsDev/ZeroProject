<?php

// data connection
$hostdb = "localhost";
$userdb = "root";
$passwdb = "";
$namedb = "zeroproject";

//  connect
$conn = mysqli_connect($hostdb, $userdb, $passwdb, $namedb);

//  check connection
if(!$conn) {
    die("Connessione Fallita: ". mysqli_connect_error());
}
else {
    //  connection successfully
}