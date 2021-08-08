
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script type="module" src="printProfile.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Raleway:wght@300;600&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/2d53ba5abb.js" crossorigin="anonymous"></script>
            <script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?key=ApHK2evHmArX_HTF7YKzYmITE44phNu9GrcWOQRAgILnTzCu6UZ2v_9YSbXa5xpR'></script>
            <script type='text/javascript'>
                var map;
                function loadMapScenario() {
                    map = new Microsoft.Maps.Map(document.getElementById('myMap'), {});
                } 
            </script>
            <title>Find Trips</title>
        </head>
        
        <body onload='loadMapScenario();'>
            <img class="banner" src="https://i.ibb.co/c195rgH/thin-Banner.png" alt="Carpool Header" width="100%">
            <div class="filler"></div>
            <div class="topnav">
                <a href="LoginHome.php">My Trips</a>
                <a class="active" href="FindTrips.php">Find Trips</a>
                <a href="FriendList.php">Friends</a>
                <a href="Notif.php">Notifications</a>
                <a href="Profile.php">Profile</a>
            </div>
    
            <div class="filler-2"></div>
            <div class="input-group centered">
                <div class="form-outline wide">
                <input type="search" placeholder="Type your destination." id="form1" class="form-control" />
                </div>
                <button type="button" class="btn btn-primary" id="search">
                    <i class="fas fa-search-location"></i>
                </button>
            </div>
    
            <div class="filler-3"></div>
    
            <div class="myContainer">
                <div class="find-trips-cards">
                    <div class="card text-center" id="remove1">
                        <div class="card-header">Lisa Reynolds is going to...</div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Greenwood Park</b></h5>
                            <p class="card-text">
                            20.2 miles away from your destination!
                            <br>Today @ 7:30 AM
                            </p>
                            <a href="#" class="btn btn-primary">Carpool!</a>
                        </div>
                    </div>

                    <div class="filler-3"></div>
    
                    <div class="card text-center">
                        <div class="card-header">Lilith is going to...</div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Zatar Cafe & Bistro</b></h5>
                            <p class="card-text">
                            0.6 miles away from your destination!
                            <br>Today @ 8:45 AM
                            </p>
                            <a href="#" class="btn btn-primary">Carpool!</a>
                        </div>
                    </div>
    
                    <div class="filler-3"></div>
    
                    <div class="card text-center" id="remove2">
                        <div class="card-header">Caroline B. is going to...</div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Rainbow Playground</b></h5>
                            <p class="card-text">
                            9.7 miles away from your destination!
                            <br>Today @ 4:20 PM
                            </p>
                            <a href="#" class="btn btn-primary">Carpool!</a>
                        </div>
                    </div>
    
                    <div class="filler-3"></div>
    
                    <div class="card text-center">
                        <div class="card-header">Jay Gatsby is going to...</div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Liberty Island</b></h5>
                            <p class="card-text">
                            2.3 miles away from your destination!
                            <br>Today @ 6:00 PM
                            </p>
                            <a href="#" class="btn btn-primary">Carpool!</a>
                        </div>
                    </div>
                        
                    <div class="filler-3"></div>
    
                    <div class="card text-center" id="remove3">
                        <div class="card-header">Beo Wolfe is going to...</div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Medieval Times</b></h5>
                            <p class="card-text">
                            11.7 miles away from your destination!
                            <br>Tomorrow @ 3:30 PM
                            </p>
                            <a href="#" class="btn btn-primary">Carpool!</a>
                        </div>
                    </div>

                    <div class="filler-3"></div>
    
                    <div class="card text-center">
                        <div class="card-header">Edipus Odyssue is going to...</div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Harbor Bay</b></h5>
                            <p class="card-text">
                            4.9 miles away from your destination!
                            <br>Tomorrow @ 12:00 PM
                            </p>
                            <a href="#" class="btn btn-primary">Carpool!</a>
                        </div>
                    </div>
    
                    <div class="filler-3"></div>
                </div>
                <div id="myMap"></div>
            </div>
            
        
        </body>
    </html>