<?php 
$output = <<<OUTPUT
    <!DOCTYPE html>
    <html lang="en">
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
            <title>Notifications</title>
        </head>
        
        <body>
            <img class="banner" src="https://i.ibb.co/c195rgH/thin-Banner.png" alt="Carpool Header" width="100%">
            <div class="filler"></div>
            <div class="topnav">
                <a href="LoginHome.php">My Trips</a>
                <a href="FindTrips.php">Find Trips</a>
                <a href="FriendList.php">Friends</a>
                <a class="active" href="Notif.php">Notifications</a>
                <a href="Profile.php">Profile</a>
            </div>
    
            <div class="filler-2"></div>
    
            <div class="notif">
                <p><i class="fas fa-bell"></i>  Tom Buchanan is going to Walmart at 4:00 PM</p>
            </div>
    
            <div class="filler-3"></div>
    
            <div class="notif">
                <p><i class="fas fa-bell"></i>  Victorina Fraunnsteena is going to Rehoboth Beach at 8:00 AM</p>
            </div>
    
            <div class="filler-3"></div>
    
            <div class="notif">
                <p><i class="fas fa-bell"></i>  Lisa Reynolds is going to Greenwood Park at 7:30 AM</p>
            </div>
    
            <div class="filler-3"></div>
    
            <div class="notif">
                <p><i class="fas fa-bell"></i>  Tom Buchanan is going to Bank of America at 6:00 AM</p>
            </div>
    
        </body>
    </html>
    OUTPUT;
    echo $output;