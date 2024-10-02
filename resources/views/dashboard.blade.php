<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/part1.css">
    <link rel="stylesheet" href="css/media.css">
    <title>Music Website</title>
</head>

<body>
    <header>
        <div class="menu_side">
            <h6 id="menu_list_active_button"><i class="bi bi-music-note-list"></i></h6>
            <h1>Pulse Playlist</h1>
            <div class="playlist">
                <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i> Playlist</h4>
                <h4><span></span><i class="bi bi-music-note-beamed"></i> Recommended</h4>
            </div>
        </div>


        <div class="song_side">
            <nav>
                <ul>
                    <li>Discover <span></span></li>
                    <a href="library.php"><li>MY LIBRARY</li></a>
                </ul>
                <div class="search">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search Music...">
                    <div class="search_results">
                        <!-- <a href="" class="card">
                            <img src="img/png" alt="">
                            <div class="content">
                                On My Way
                                <div class="subtitle">Alan Walker</div>
                            </div>
                        </a> -->
                        
                    </div>
                </div>
                <div class="user">
                    <button><img src="img/logo.jpg" alt=""></button>
                    <div class="dropdown-content">
                        <a href="dashboard.php"><i class="fa fa-fw fa-home"></i> Home</a>
                        <a href="profile.php"><i class="fa fa-fw fa-wrench"></i>Profile</a>
                        <a href="#"><i class="fa fa-fw fa-user"></i> Logout</a>
                    </div>
                </div>
            </nav>
            <div class="content">
                <h1>Pulse Beat</h1>
                <p><br>Lorem ipsum dolor sit amet.</p>
                <div class="buttons">
                    
                </div>
            </div>

            <div class="popular_song">
                <div class="h4">
                    <h4>Popular Song</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-up-short" id="pop_song_left"></i>
                        <i class="bi bi-arrow-down-short" id="pop_song_right"></i>
                    </div>
                </div>
                <div class="pop_song">
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="1"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="2"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="3"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="4"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="5"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="6"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="13"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="14"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="15"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="16"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="17"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="18"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="19"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="20"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="songItem">
                        <div class="img_play">
                            <img src="img/2.png" alt="">
                            <i class="bi playListPlay bi-play-circle-fill" id="21"></i>
                        </div>
                        <h5>On My Way<br>
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                </div>
            </div>
            <div class="popular_artists">
                <div class="h4">
                    <h4>Popular Artists</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left-short" id="pop_art_left"></i>
                        <i class="bi bi-arrow-right-short" id="pop_art_right"></i>
                    </div>
                </div>
                <div class="item Artists_bx">
                    <li>
                        <a href=""><img src=" img/logo.jpg" alt=""></a>
                    </li>
                    <li>
                        <img src="img/logo.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/logo.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/logo.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/logo.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/logo.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/logo.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/logo.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/logo.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/logo.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/logo.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/logo.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/logo.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/logo.jpg" alt="">
                    </li>
                    <li>
                        <img src="img/logo.jpg" alt="">
                    </li>
                </div>
            </div>
        </div>



        <div class="master_play">
            <div class="wave" id="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="img/bg.jpg" alt="" id="poster_master_play">
            <h5 id="title">
                
                <div class="subtitle"></div>
            </h5>
            <div class="icon">
                <i class="bi shuffle bi-music-note-beamed">next</i>
                <i class="bi bi-skip-start-fill" id="back"></i>
                <i class="bi bi-play-fill" id="masterPlay"></i>
                <i class="bi bi-skip-end-fill" id="next" accesskey="n"></i>
                <a href="" download id="download_music"><i class="bi bi-cloud-arrow-down-fill" ></i></a>
            </div>
            <span id="currentStart">0:00</span>
            <div class="bar">
                <input type="range" id="seek" min="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentEnd">0:00</span>
            <div class="vol">
                <i class="bi bi-volume-up-fill" id="vol_icon"></i>
                <input type="range" min="0" max="100" id="vol">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>
        </div>

    </header>
    <script src="js/part1.js"></script>
</body>

</html>