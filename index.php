<?php 
$output = <<<OUTPUT
    <!DOCTYPE html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script type="module" src="script.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Raleway:wght@300;600&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/2d53ba5abb.js" crossorigin="anonymous"></script>
            <title>Carpool</title>
        </head>
        
        <body>
            <!-- logo -->
            <!-- <img class="logo" src="/assets/Carpool.png" alt="Carpool Logo"> -->
            
            <!--<div class="banner">-->
            <!-- <h1 id="title">Carpool</h1> -->
            
            <img class="banner" src="https://i.ibb.co/BBq06FS/Carpool-Banner-digital-art-x4.png" alt="Carpool Header" width="100%">
    
            <div class="direct-to-login">
                <br>
                <button class="login" onclick="document.location='Login.php'">Log-In</button>
                <br>
                <button class="login" onclick="document.location='Signup.php'">Sign-Up</button>
            </div>
            <script src="/__/firebase/8.9.0/firebase-app.js"></script>
            <script src="/__/firebase/8.9.0/firebase-analytics.js"></script>
            <script src="/__/firebase/init.js"></script>
            <script>
                // TODO: Replace the following with your app's Firebase project configuration
                // For Firebase JavaScript SDK v7.20.0 and later, `measurementId` is an optional field
                const firebaseConfig = {
                    apiKey: "AIzaSyAzXMk6WafgGkCOlJjOVYNYT2mwDkwL6Pw",
                    authDomain: "carpool-cfd54.firebaseapp.com",
                    projectId: "carpool-cfd54",
                    storageBucket: "carpool-cfd54.appspot.com",
                    messagingSenderId: "639351505676",
                    appId: "1:639351505676:web:b1970097aba6f7dbcfbf29",
                    measurementId: "G-SDPBZC3L0Z"
                };
                // Initialize Firebase
                firebase.initializeApp(firebaseConfig);
              </script>
            
        </body>
    </html>
    OUTPUT;
    echo $output;