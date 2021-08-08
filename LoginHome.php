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
            <title>My Trips</title>
        </head>
        
        <body>
            <!--<div class="banner">-->
                <!--<a href= "loggedOut">Log Out</a>   uhh it logs you out yeah-->
                <!--<h1 id="title">CARPOOL</h1>-->
            <!--</div>-->
            <img class="banner" src="https://i.ibb.co/c195rgH/thin-Banner.png" alt="Carpool Header" width="100%">
            <div class="filler"></div>
            <div class="topnav">
                <a class="active" href="LoginHome.php">My Trips</a>
                <a href="FindTrips.php">Find Trips</a>
                <a href="FriendList.php">Friends</a>
                <a href="Notif.php">Notifications</a>
                <a href="Profile.php">Profile</a>
            </div>
    
            <div class="rubbermaid">
                <div class="trip-box" id="plan-trip">
                    <p><b>Plan a Trip</b></p>
                    <button class="btn-cancel" id="special-cancel">New Trip!</button>
                </div>
            </div>

            <div class="rubbermaid">
                <div class="trip-box">
                    <p><b>Sky Zone</b></p>
                    <p>Tom Buchanan         12:00 PM</p>
                    <button class="btn-cancel">Cancel</button>
                </div>
                <div class="trip-box">
                    <p><b>Bank of America</b></p>
                    <p>Elizabeth L.         2:00 PM</p>
                    <button class="btn-cancel">Cancel</button>
                </div>
    
                <div class="trip-box">
                    <p><b>JFK Airport</b></p>
                    <p>Lisa Reynolds         4:35 PM</p>
                    <button class="btn-cancel">Cancel</button>
                </div>
            </div>
    
            <div class="rubbermaid">
                <div class="trip-box">
                    <p><b>McDonalds</b></p>
                    <p>Colonel Sanders         5:00 PM</p>
                    <button class="btn-cancel">Cancel</button>
                </div>
                <div class="trip-box">
                    <p><b>Home Depot</b></p>
                    <p>Penelope         6:20 PM</p>
                    <button class="btn-cancel">Cancel</button>
                </div>
    
                <div class="trip-box">
                    <p><b>Retro Fitness</b></p>
                    <p>Athena         8:50 PM</p>
                    <button class="btn-cancel">Cancel</button>
                </div>
            </div>

            
    
        <!--<script src="/__/firebase/8.9.0/firebase-app.js"></script>
        <script src="/__/firebase/8.9.0/firebase-analytics.js"></script>
        <script src="/__/firebase/init.js"></script>-->
        </body>
    </html>
    OUTPUT;
    echo $output;