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
            <title>Friends List</title>
        </head>
        
        <body>
            <!--<div class="banner">-->
                <!--<a href= "loggedOut">Log Out</a>   uhh it logs you out yeah-->
                <!--<h1 id="title">CARPOOL</h1>-->
            <!--</div>-->
            <img class="banner" src="https://i.ibb.co/c195rgH/thin-Banner.png" alt="Carpool Header" width="100%">
            <div class="filler"></div>
            <div class="topnav">
                <a href="LoginHome.php">My Trips</a>
                <a href="FindTrips.php">Find Trips</a>
                <a class="active" href="FriendList.php">Friends</a>
                <a href="Notif.php">Notifications</a>
                <a href="Profile.php">Profile</a>
            </div>
          
            <div class="filler-2"></div>
            
            <div class="friend-cards">
                <div class="friend-box">
                <img class="friend-img-1" src="https://images.pexels.com/photos/3758104/pexels-photo-3758104.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Your friend's profile photo.">
                <p>	<b>Victorina Fraunnsteena</b></p>
                <p>Ballerina & mom.</p>
                </div>    
    
                <div class="friend-box">
                <img class="friend-img-2" src="https://images.pexels.com/photos/5329759/pexels-photo-5329759.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Your friend's profile photo.">
                <p>	<b>Lisa Reynolds</b></p>
                <p>Bold & Gold!</p>
                </div>
    
                <div class="friend-box">
                <img class="friend-img-3" src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Your friend's profile photo.">
                <p>	<b>Tom Buchanan</b></p>
                <p>Engineer @ Sego Lily</p>
                </div>
            </div>
            
        </body>
    </html>
    OUTPUT;
    echo $output;