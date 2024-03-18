<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MALAYALAM</title>
    <link rel="stylesheet" href="malayalamplay.css">
    <script src="https://kit.fontawesome.com/2d9b67a497.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navigation-bar">
        <div class="title-combo">
            <div class="website-logo">
                <img src="logo3.png">
            </div>
            <div class="website-name">
                <h2>
                    YANIK
                </h2>
            </div>
        </div>
         <div class="search-bar">
            <div>
                <i class="fas fa-search search-ico"></i>
            </div>
            <input type="text" name="search" placeholder="Search">
            <div>
                <i class="fas fa-microphone mic-ico"></i>
            </div>
        </div>
        <div>
            <a href="user.php">back</a>
        </div>
        <div>
	           <a class="nav-link <?php if ($CURRENT_PAGE == "About") {?>active<?php }?>" href="about.php">About Us</a>
         </div>      
    </nav>
    <h1>MALAYALAM TRENDINGS</h1>
    <?php include 'malayalamview.php'; ?>
</body>
</html>