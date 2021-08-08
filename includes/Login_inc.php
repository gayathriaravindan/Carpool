<?php 
    if(isset($_POST["submit"])) {

        $uName = $_POST["uname"];
        $Pwd = $_POST["pwd"];

        require_once 'dbh_inc.php';
        require_once 'functions_inc.php';

        

        loginUser($conn, $uName, $Pwd);

        // header("location: ../LoginHome.php");
    } else {
        header("location: ../Login.php");
        exit();
    } 