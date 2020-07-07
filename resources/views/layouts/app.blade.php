<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/app.css')}}">
</head>

<body>
    <div class="main-wrapper">
        <div class="top-layout">
            <div class="left-layout">
                <div class="navbar">
                    <div class="logo">
                        <img src="{{asset('/assets/images/icons/werewolf.png')}}" width="64px" height="64px" alt="">
                        <span style="color:white;font-size:16px">Songify</span>
                    </div>
                    <div class="navbar-item">
                        <a href="{{route('home')}}"><img src="/assets/images/icons/home-active.png" width="25px"
                                height="25px" alt="">
                            <span style="padding-left:10px "> Start </span> </a>
                    </div>

                    <div class="navbar-item">
                        <a href="{{route('home')}}"><img src="/assets/images/icons/search.png" width="25px"
                                height="25px" alt="">
                            <span style="padding-left:10px "> Search </span> </a>
                    </div>
                    <div class="navbar-item">
                        <a href="{{route('home')}}"><img src="/assets/images/icons/music-library.png" width="25px"
                                height="25px" alt="">
                            <span style="padding-left:10px "> Library </span> </a>
                    </div>

                </div>
            </div>

            <div class="right-layout">
                <div class="right-content">
                    <h3>Just Listened</h3>
                    <a href="/album/1">
                        <div class="album-grid">
                            <div class="album-card">
                                <img src="/assets/images/artwork/KillAll.jpg" alt="">
                                <p>Kill'm All</p>
                                <span></span>
                            </div>
                        </div>
                    </a>

                    <div class="album-grid">
                        <div class="album-card">
                            <img src="/assets/images/artwork/KillAll.jpg" alt="">
                            <p>Kill'm All</p>
                            <span></span>
                        </div>
                    </div>

                </div>


            </div>


        </div>
        <div class="bottom-layout">
            <div class="playing-bar">
                <div class="info-bar">
                    <img id="album-img-info" src="assets/images/artwork/KillAll.jpg" alt="" width="56px" height="56px">
                    <div class="song-info">
                        <span id="song-name-info">Song asdsadsadsadsadsa</span> <br>
                        <span id="artist-name-info">Artist adasdadsa , sadsadsadsa</span>
                    </div>

                </div>
                <div class="player-buttons-bar">


                    <div class="player-controls-buttons">
                        <button class="player-btn shuffle-btn">
                            <img src="/assets/images/icons/shuffle.png" alt="" width="25px" height="25px">
                        </button>

                        <button class="player-btn previous-btn">
                            <img src="/assets/images/icons/previous.png" alt="" width="25px" height="25px">
                        </button>

                        <button class="player-btn play-btn">
                            <img src="/assets/images/icons/play.png" alt="" width="25px" height="25px">
                        </button>


                        <button class="player-btn pause-btn">
                            <img src="/assets/images/icons/pause.png" alt="" width="25px" height="25px">
                        </button>



                        <button class="player-btn next-btn">
                            <img src="/assets/images/icons/next.png" alt="" width="25px" height="25px">
                        </button>

                        <button class="player-btn repeat-btn">
                            <img src="/assets/images/icons/repeat.png" alt="" width="25px" height="25px">
                        </button>
                    </div>

                    <div class="playback-bar">

                        <span class="time-cursor" id="current-time">0:00</span>
                        <div class="progress-bar">
                            <div class="progress-background">
                                <div class="progress song-progress"></div>
                            </div>
                        </div>

                        <span class="time-cursor" id="current-time">5:36</span>

                    </div>




                </div>
                <div class="volume-bar">
                    <div class="volume-container">
                        <button class="player-btn volume-btn">
                            <img src="/assets/images/icons/volume.png" alt="" width="25px" height="25px">
                        </button>
                        <div class="volume-progress-bar">
                            <div class="progress-background">
                                <div class="volume-progress"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>