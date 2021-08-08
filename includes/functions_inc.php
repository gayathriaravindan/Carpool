<?php

function unameExists($conn, $uname) {
    $sql = "SELECT * FROM users WHERE usersUName='".$uname."'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_row($result);
    $inArr = false;

    // foreach($row as &$value) {
    //     if($value === $inArr) {
    //         $inArr = true;
    //     }
    // }

    for($x = 0; $x < 4; $x++) {
        if($row[$x] === $uname) {
            $inArr = true;
        }
      }

    if($inArr) {
        return $row;
    } else {
        return false;
    }
    
    
    

    // if(mysqli_num_rows($result) > 0) {
    //     while($row = mysqli_fetch_assoc($result)) {
    //         return $row;
    //     }
    // } else {
    //     return false;
    // }

    // if(!mysqli_stmt_prepare($stmt, $sql)) {
    //     header("location: ../Signup.php?error=stmtfailed");
    //     exit();
    // }

    // mysqli_stmt_bind_param($stmt, "s", $uname);
    // mysqli_stmt_execute($stmt);

    // $resultData = mysqli_stmt_get_result($stmt);

    // $row = mysqli_fetch_assoc($resultData);

    // return $row;
    
    // if(count($row) !== 0) {
    //     return $row;
    // } else {
    //     return false;
    // }
    
    mysqli_close($stmt);

}

function createUser($conn, $uname, $email, $pwd) {
    $sql = "INSERT INTO users (usersUName, usersEmail, usersPwd) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    //niyu's edits
    //uName();
    //end edits

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../Signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $uname, $email, $pwd);
    mysqli_stmt_execute($stmt);
    
    mysqli_stmt_close($stmt);

    $sql2 = "SELECT * FROM users WHERE usersUName='".$uname."'";
    $result = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_row($result);

    session_start();
    $_SESSION["userid"] = $row[0];      //<--- useful//
    $_SESSION["userName"] = $row[2];
    $_SESSION["userMail"] = $row[1];

    header("location: ../Profile.php");
    exit();
}

function loginUser($conn, $uname, $pwd) {
    $uexists = unameExists($conn, $uname);



    if($uexists === false) {
        header("location: ../Login.php?error=wronglogin");
        exit();
    }


    $pwdconf = $uexists[3];
    // $checkPwd = password_verify($pwd, $pwdconf);    

    if($pwd !== $pwdconf) {
        header("location: ../Login.php?error=wrongpassword");
        exit();
    } else {
        session_start();
        $_SESSION["userid"] = $uexists[0];      //<--- useful//
        $_SESSION["userName"] = $uexists[2];
        $_SESSION["userMail"] = $uexists[1];

        header("location: ../LoginHome.php");
        exit();
    }
}