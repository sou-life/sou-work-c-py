<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YANIK</title>
    <link rel="stylesheet" href="user.css">
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
	           <a class="nav-link <?php if ($CURRENT_PAGE == "About") {?>active<?php }?>" href="about.php">About Us</a>
         </div>      
    </nav>
    <main>
        <!-- aside section 1 -->
        <aside class="aside section-1">
            <!-- this is for the carousel -->
            <div class="outer-carousel">
                <div class="animate__animated animate__flipInX carousel">
                    <!-- these are the 3 images in the carousel -->
                    <img src="coral1.jpg">
                    <img src="coral3.webp">
                    <img src="coral2.jpg">
                </div>
               </div>
                <div class="popular-artists">
                <!-- this is the heading of popular artists section -->
                <h1 style="margin-bottom: 12px; font-size:30px; font-family: 'Times New Roman', Times, serif;">
                    TRENDING
                </h1>
                <!-- this contains the content of the popular artists section -->
                <div class="popular-artist-content">
                    <!-- if user clicks on any one artist, it will redirect the user to the second page -->
                    <!-- following is the list of artists -->
                    <!-- first artist -->
                    <a href="tamil playlist.php">
                        <div>
                            <img src="tamil.jpg">
                            <div><i class="fas fa-play"></i></div>
                            <p>
                                TAMIL
                            </p>
                        </div>
                    </a>
                    <!-- second artist -->
                    <a href="english playlist.html">
                        <div>
                            <img src="english.jpg">
                            <div><i class="fas fa-play"></i></div>
                            <p>
                                ENGLISH
                            </p>
                        </div>
                    </a>
                    <!-- third artist -->
                    <a href="malayalam Playlist Screen.html">
                        <div>
                            <img src="malayalam.jpg" width="15vw" height="10vw">
                            <div><i class="fas fa-play"></i></div>
                            <p>
                               MALAYALAM
                            </p>
                        </div>
                    </a>
                    <!-- fourth artist -->
                    <a href="hindi Playlist Screen.html">
                        <div>
                            <img src="hindi.webp">
                            <div><i class="fas fa-play"></i></div>
                            <p>
                              HINDI
                            </p>
                        </div>
                    </a>
                </div>
                
            </div>
            
            <div class="popular-artists">
                <!-- this is the heading of popular artists section -->
                <h1 style="margin-bottom: 12px; font-size:30px; font-family: 'Times New Roman', Times, serif;">
                   POPULAR ARTISTS
                </h1>
                <!-- this contains the content of the popular artists section -->
                <div class="popular-artist-content">
                    <!-- if user clicks on any one artist, it will redirect the user to the second page -->
                    <!-- following is the list of artists -->
                    <!-- first artist -->
                    <a href="tamil playlist.php">
                        <div>
                            <img src="AR.jpg">
                            <div><i class="fas fa-play"></i></div>
                            <p>
                               A. R. Rahman
                            </p>
                        </div>
                    </a>
                    <!-- second artist -->
                    <a href="english playlist.html">
                        <div>
                            <img src="ANI.webp">
                            <div><i class="fas fa-play"></i></div>
                            <p>
                               Anirudh Ravichander
                            </p>
                        </div>
                    </a>
                    <!-- third artist -->
                    <a href="malayalam Playlist Screen.html">
                        <div>
                            <img src="u1.webp" width="15vw" height="10vw">
                            <div><i class="fas fa-play"></i></div>
                            <p>
                            Yuvan Shankar Raja
                            </p>
                        </div>
                    </a>
                    <!-- fourth artist -->
                    <a href="hindi Playlist Screen.html">
                        <div>
                            <img src="hj.jpg">
                            <div><i class="fas fa-play"></i></div>
                            <p>
                            Harris Jayaraj
                            </p>
                        </div>
                    </a>
                    <a href="hindi Playlist Screen.html">
                        <div>
                            <img src="il.jpg">
                            <div><i class="fas fa-play"></i></div>
                            <p>
                            Ilaiyaraaja
                            </p>
                        </div>
                    </a><a href="hindi Playlist Screen.html">
                        <div>
                            <img src="gv.webp">
                            <div><i class="fas fa-play"></i></div>
                            <p>
                            G. V. Prakash
                            </p>
                        </div>
                    </a><a href="hindi Playlist Screen.html">
                        <div>
                            <img src="hc.webp">
                            <div><i class="fas fa-play"></i></div>
                            <p>
                            Haricharan
                            </p>
                        </div>
                    </a><a href="hindi Playlist Screen.html">
                        <div>
                            <img src="pk.webp">
                            <div><i class="fas fa-play"></i></div>
                            <p>
                            Pradeep Kumar
                            </p>
                        </div>
                    </a><a href="hindi Playlist Screen.html">
                        <div>
                            <img src="hip.jpg">
                            <div><i class="fas fa-play"></i></div>
                            <p>
                              Hip hop Tamizha Adhi 
                            </p>
                        </div>
                    </a>
                    </a><a href="hindi Playlist Screen.html">
                        <div>
                            <img src="vd.webp">
                            <div><i class="fas fa-play"></i></div>
                            <p>
                            Vidyasagar
                            </p>
                        </div>
                </div>
                
            </div>
            <div class="music-themes">
                <!-- this div will be the logo of music themes, see the output, the one with 3 squares/rects  -->
                <!-- the logo with orange, green and yellow color -->
                <div class="stations">
                    <div id="div1">
                        <div id="div2">
                            <div id="div3">
                                <img src="stations.jpg">
                                <p>Stations</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- this is the content part of them themes -->
                <!-- the one which changes colors on hover -->
             <div class="theme-main">
                    <div class="theme-content">
                        <img src="vibe.jpg">
                        <p>Vibe</p>
                    </div>
                    <div class="theme-content">
                        <img src="rock.jpg">
                        <p>Rock</p>
                    </div>
                    <div class="theme-content">
                        <img src="love.jpg">
                        <p>Love</p>
                    </div>
                    <div class="theme-content">
                        <img src="pop.jpg">
                        <p>Pop</p>
                    </div>
                    <div class="theme-content">
                        <img src="retro.jpg">
                        <p>Retro</p>
                    </div>
                    <div class="theme-content">
                        <img src="gym.jpg">
                        <p>GYM</p>
                    </div>
                </div>
            </div>
            <!-- this is another themes portion, that electronic, party and road theme -->
            <div class="music-themes-2">
                <!-- 3 divs content -->
                <div class="outer-div">
                    <div class="inner-div">
                        <span>party</span>
                    </div>
                </div>
                <div class="outer-div">
                    <div class="inner-div">
                        <span>Electronic</span>
                    </div>
                </div>
                <div class="outer-div">
                    <div class="inner-div">
                        <span>Travel</span>
                    </div>
                </div>
            </div>
        </aside>
</body>
</html>