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
          <title>Login</title>
        </head>
    
        <body>
            <div class="container">
                <form action="includes/Login_inc.php" method="post" class="needs-validation">
                    <!-- page name -->
                        <h3 class="login-signup-header">LOGIN</h3>
                    <!--username-->
                        <div class="form-group">
                            <label for="uname">Username:</label>
                            <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
            
                        <!-- password -->
                        <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
            
                        <!-- checkbox -->
                        <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me!
                            <div class="valid-feedback">Cool!</div>
                        </label>
                        </div>
            
                        <div id="creds-confirm">
                        <p>Your name & password don't match :(</p>
                        </div>
            
                        <!-- submit -->
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
    
        <!-- back button -->
        <div class="filler-3"></div>
            <button class="back-button" onclick="document.location='index.php'">Back</button>
        </body>
    
    </html>
    OUTPUT;
    echo $output;