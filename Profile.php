<?php
    session_start();
?>
    
    
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script type="module" src="printProfi.js"></script>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="styles.css?v=<?php echo time(); ?>">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Carter+One&family=Raleway:wght@300;600&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/2d53ba5abb.js" crossorigin="anonymous"></script>
            <title>Profile</title>
        </head>

        <body>
            <img class="banner" src="https://i.ibb.co/c195rgH/thin-Banner.png" alt="Carpool Header" width="100%">
            <div class="filler"></div>
            <div class="topnav">
                <a href="LoginHome.php">My Trips</a>
                <a href="FindTrips.php">Find Trips</a>
                <a href="FriendList.php">Friends</a>
                <a href="Notif.php">Notifications</a>
                <a class="active" href="Profile.php">Profile</a>
            </div>
            
            <button class="btn-save">Save</button>

            <div class="filler-3"></div>
            <img class="profile-img" src="https://img.webmd.com/dtmcms/live/webmd/consumer_assets/site_images/article_thumbnails/slideshows/is_my_cat_normal_slideshow/1800x1200_is_my_cat_normal_slideshow.jpg" alt="Your profile picture.">
            <img class="active-dot" src="https://miro.medium.com/max/512/1*nZ9VwHTLxAfNCuCjYAkajg.png" alt="This user is active.">
            <div class="prof-box">
                <p><i class="fas fa-edit"> </i>	<b>Username:     </b> <?php echo $_SESSION["userName"] ?> </p>
                <p id="targetUname"></p>
                <p><i class="fas fa-edit"></i>	<b>Email:        </b> <?php echo $_SESSION["userMail"] ?> </p>
                <p><i class="fas fa-edit"></i>	<b>Bio:          </b> Hi! This is my default Carpool bio.</p>
                <p><i class="fas fa-edit"></i>	<b>Password:     </b> *******</p>
            </div>

        </body>

    </html>