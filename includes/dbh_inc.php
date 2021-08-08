<?php

$serverName = "localhost";
$dBUname = "root";
$dBPwd = "";
$dBName = "carpoolinfo";

$conn = mysqli_connect($serverName, $dBUname, $dBPwd, $dBName);

if(!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}