<?php 
    if(isset($_POST["submit"]) && ($_POST["pwd"] === $_POST["pwd-conf"])) {
        $uname = $_POST["uname"];
        $email = $_POST["email"];
        $pwd = $_POST["pwd"];

        require_once 'dbh_inc.php';
        require_once 'functions_inc.php';

        if(unameExists($conn, $uname) !== false) {
            header("location: ../Signup.php?error=unameinuse");
            exit();
        }

        createUser($conn, $uname, $email, $pwd);

    } else {
        if($_POST["pwd"] !== $_POST["pwd-conf"]) {
            header("location: ../Signup.php?error=incorrect_pwdconf");
            exit();
        } else {
            header("location: ../Signup.php");
            exit();
        }
        

    }