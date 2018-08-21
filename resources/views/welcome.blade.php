<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../resources/css/foundation.min.css"/>
        <!--
			Include Resource Javascript

			NOTE: These are for handling things outside of the scope of AmplitudeJS
		-->
		<script type="text/javascript" src="../resources/js/jquery.js"></script>
		<script type="text/javascript" src="../resources/js/foundation.min.js"></script>

		<!-- Include Amplitude JS -->
		<script type="text/javascript" src="../resources/js/amplitude.js"></script>
        <title>DJ</title>

        <link href="{{asset('sass/app.scss')}}" rel="stylesheet"/>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        	<!--
			Include UX functions JS

			NOTE: These are for handling things outside of the scope of AmplitudeJS
    -->
		<script type="text/javascript" src="../resources/js/functions.js"></script>
        <!-- Include Style Sheet -->
		<link rel="stylesheet" type="text/css" href="../resources/css/app.css"/>
        <!-- Styles -->
        <style>
          .brand-images{
            height:30px;
            weight:30px;
          }
            .top-right {
              top:10px;
            right:20px;
            margin:20px;
            }
            .elements{
              display: inline;
            }
        </style>
    </head>
    <body>
    
        <nav class="navbar navbar-expand-md bg-dark" id="navbar">
                <div class="navbar-header">
                   <a class="navbar-brand" href="{{ url('/home') }}" id="text"> <img class="brand-images" src="../resources/Images/headphones.png"/> DJ </a>
                </div>

                <ul class="nav navbar-nav">
                  <li>  <a href="http://laravel-news.com"> News </a> </li>
                  <li> <a href="http://forge.laravel.com"> HOT 100 </a> </li>
                  <li> <a href="http://localhost/DJ/public/random"> RANDOM </a> </li>
                </ul>
            @if (Route::has('login'))
            
                <div class="top-right">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                  <span style="margin:20px;"><a href="{{ route('login') }}">Login</a></span>
                  <span style="margin:20px;"><a href="{{ route('register') }}">Register</a></span>
                    @endauth
                </div>
            @endif
        </nav>
        
                <div class="content">
                @yield('content')
                </div>
                <div>
                        <div class="grid-x" id="blue-playlist-container">
                                <div class="large-10 medium-12 small-11 large-centered medium-centered small-centered cell" id="amplitude-player">
                                    <div class="grid-x">
                                      <div class="large-6 medium-6 small-12 cell" id="amplitude-left">
                                        <img amplitude-song-info="cover_art_url" amplitude-main-song-info="true"/>
                                        <div id="player-left-bottom">
                                          <div id="time-container">
                                            <span class="current-time">
                                              <span class="amplitude-current-minutes" amplitude-main-current-minutes="true"></span>:<span class="amplitude-current-seconds" amplitude-main-current-seconds="true"></span>
                                            </span>
                                            <div id="progress-container">
                                              <input type="range" class="amplitude-song-slider" amplitude-main-song-slider="true"/>
                                              <progress id="song-played-progress" class="amplitude-song-played-progress" amplitude-main-song-played-progress="true"></progress>
                                              <progress id="song-buffered-progress" class="amplitude-buffered-progress" value="0"></progress>
                                            </div>
                                            <span class="duration">
                                              <span class="amplitude-duration-minutes" amplitude-main-duration-minutes="true"></span>:<span class="amplitude-duration-seconds" amplitude-main-duration-seconds="true"></span>
                                            </span>
                                          </div>
                    
                                          <div id="control-container">
                                            <div id="repeat-container">
                                              <div class="amplitude-repeat" id="repeat"></div>
                                              <div class="amplitude-shuffle amplitude-shuffle-off" id="shuffle"></div>
                                            </div>
                    
                                            <div id="central-control-container">
                                              <div id="central-controls">
                                                <div class="amplitude-prev" id="previous"></div>
                                                <div class="amplitude-play-pause" amplitude-main-play-pause="true" id="play-pause"></div>
                                                <div class="amplitude-next" id="next"></div>
                                              </div>
                                            </div>
                    
                                            <div id="volume-container">
                                              <div class="volume-controls">
                                                <div class="amplitude-mute amplitude-not-muted"></div>
                                                <input type="range" class="amplitude-volume-slider"/>
                                                <div class="ms-range-fix"></div>
                                              </div>
                                              <div class="amplitude-shuffle amplitude-shuffle-off" id="shuffle-right"></div>
                                            </div>
                                          </div>
                    
                    
                    
                                          <div id="meta-container">
                                            <span amplitude-song-info="name" amplitude-main-song-info="true" class="song-name"></span>
                    
                                            <div class="song-artist-album">
                                              <span amplitude-song-info="artist" amplitude-main-song-info="true"></span>
                                              <span amplitude-song-info="album" amplitude-main-song-info="true"></span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="large-6 medium-6 small-12 cell" id="amplitude-right">
                                        <div class="song amplitude-song-container amplitude-play-pause" amplitude-song-index="0">
                                          <div class="song-now-playing-icon-container">
                                            <div class="play-button-container">
                    
                                            </div>
                                            <img class="now-playing" src="./Images/now-playing.svg"/>
                                          </div>
                                          <div class="song-meta-data">
                                            <span class="song-title">In my feelings</span>
                                            <span class="song-artist">Drake</span>
                                          </div>
                                          <a href="https://switchstancerecordings.bandcamp.com/track/risin-high-feat-raashan-ahmad" class="bandcamp-link" target="_blank">
                                            <img class="bandcamp-grey" src="../resources/Images/bandcamp-grey.svg"/>
                                            <img class="bandcamp-white" src="../resources/Images/bandcamp-white.svg"/>
                                          </a>
                                          <span class="song-duration">3:30</span>
                                        </div>
                                        <div class="song amplitude-song-container amplitude-play-pause" amplitude-song-index="1">
                                          <div class="song-now-playing-icon-container">
                                            <div class="play-button-container">
                    
                                            </div>
                                            <img class="now-playing" src="../resources/Images/now-playing.svg"/>
                                          </div>
                                          <div class="song-meta-data">
                                            <span class="song-title">Girls Like you</span>
                                            <span class="song-artist">Maroon 5</span>
                                          </div>
                                          <a href="https://lorn.bandcamp.com/" class="bandcamp-link" target="_blank">
                                            <img class="bandcamp-grey" src="../resources/Images/bandcamp-grey.svg"/>
                                            <img class="bandcamp-white" src="../resources/Images/bandcamp-white.svg"/>
                                          </a>
                                          <span class="song-duration">3:16</span>
                                        </div>
                                        <div class="song amplitude-song-container amplitude-play-pause" amplitude-song-index="2">
                                          <div class="song-now-playing-icon-container">
                                            <div class="play-button-container">
                    
                                            </div>
                                            <img class="now-playing" src="../resources/Images/now-playing.svg"/>
                                          </div>
                                          <div class="song-meta-data">
                                            <span class="song-title">I like it</span>
                                            <span class="song-artist">Cardi B</span>
                                          </div>
                                          <a href="https://lorn.bandcamp.com/" class="bandcamp-link" target="_blank">
                                            <img class="bandcamp-grey" src="../resources/Images/bandcamp-grey.svg"/>
                                            <img class="bandcamp-white" src="../resources/Images/bandcamp-white.svg"/>
                                          </a>
                                          <span class="song-duration">3:32</span>
                                        </div>
                                        <div class="song amplitude-song-container amplitude-play-pause" amplitude-song-index="3">
                                          <div class="song-now-playing-icon-container">
                                            <div class="play-button-container">
                    
                                            </div>
                                            <img class="now-playing" src="../resources/Images/now-playing.svg"/>
                                          </div>
                                          <div class="song-meta-data">
                                            <span class="song-title">Sicko Mode</span>
                                            <span class="song-artist">Travis Scott</span>
                                          </div>
                                          <a href="https://switchstancerecordings.bandcamp.com/track/i-came-running" class="bandcamp-link" target="_blank">
                                            <img class="bandcamp-grey" src="../resources/Images/bandcamp-grey.svg"/>
                                            <img class="bandcamp-white" src="../resources/Images/bandcamp-white.svg"/>
                                          </a>
                                          <span class="song-duration">3:30</span>
                                        </div>
                                        <div class="song amplitude-song-container amplitude-play-pause" amplitude-song-index="4">
                                          <div class="song-now-playing-icon-container">
                                            <div class="play-button-container">
                    
                                            </div>
                                            <img class="now-playing" src="../resources/Images/now-playing.svg"/>
                                          </div>
                                          <div class="song-meta-data">
                                            <span class="song-title">FEFE</span>
                                            <span class="song-artist">Nicki Minnaj</span>
                                          </div>
                                          <a href="https://emancipator.bandcamp.com" class="bandcamp-link" target="_blank">
                                            <img class="bandcamp-grey" src="../resources/Images/bandcamp-grey.svg"/>
                                            <img class="bandcamp-white" src="../resources/Images/bandcamp-white.svg"/>
                                          </a>
                                          <span class="song-duration">5:12</span>
                                        </div>
                                        <div class="song amplitude-song-container amplitude-play-pause" amplitude-song-index="5">
                                          <div class="song-now-playing-icon-container">
                                            <div class="play-button-container">
                    
                                            </div>
                                            <img class="now-playing" src="../resources/Images/now-playing.svg"/>
                                          </div>
                                          <div class="song-meta-data">
                                            <span class="song-title">Better Now</span>
                                            <span class="song-artist">Post Malone</span>
                                          </div>
                                          <a href="https://pglost.bandcamp.com/track/terrain" class="bandcamp-link" target="_blank">
                                            <img class="bandcamp-grey" src="../resources/Images/bandcamp-grey.svg"/>
                                            <img class="bandcamp-white" src="../resources/Images/bandcamp-white.svg"/>
                                          </a>
                                          <span class="song-duration">5:29</span>
                                        </div>
                                        <div class="song amplitude-song-container amplitude-play-pause" amplitude-song-index="6">
                                          <div class="song-now-playing-icon-container">
                                            <div class="play-button-container">
                    
                                            </div>
                                            <img class="now-playing" src="../resources/Images/now-playing.svg"/>
                                          </div>
                                          <div class="song-meta-data">
                                            <span class="song-title">Lucid Dreams</span>
                                            <span class="song-artist">Juice WRLD</span>
                                          </div>
                                          <a href="https://russiancircles.bandcamp.com/track/vorel" class="bandcamp-link" target="_blank">
                                            <img class="bandcamp-grey" src="../resources/Images/bandcamp-grey.svg"/>
                                            <img class="bandcamp-white" src="../resources/Images/bandcamp-white.svg"/>
                                          </a>
                                          <span class="song-duration">5:29</span>
                                        </div>
                                        <div class="song amplitude-song-container amplitude-play-pause" amplitude-song-index="7">
                                          <div class="song-now-playing-icon-container">
                                            <div class="play-button-container">
                    
                                            </div>
                                            <img class="now-playing" src="../resources/Images/now-playing.svg"/>
                                          </div>
                                          <div class="song-meta-data">
                                            <span class="song-title">Stargazing</span>
                                            <span class="song-artist">Travis Scott</span>
                                          </div>
                                          <a href="http://jimkata.bandcamp.com/track/intro-sweet-glory" class="bandcamp-link" target="_blank">
                                            <img class="bandcamp-grey" src="../resources/Images/bandcamp-grey.svg"/>
                                            <img class="bandcamp-white" src="../resources/Images/bandcamp-white.svg"/>
                                          </a>
                                          <span class="song-duration">2:39</span>
                                        </div>
                                        <div class="song amplitude-song-container amplitude-play-pause" amplitude-song-index="8">
                                          <div class="song-now-playing-icon-container">
                                            <div class="play-button-container">
                    
                                            </div>
                                            <img class="now-playing" src="../resources/Images/now-playing.svg"/>
                                          </div>
                                          <div class="song-meta-data">
                                            <span class="song-title">Taste</span>
                                            <span class="song-artist">Tygga ft Offset</span>
                                          </div>
                                          <a href="https://littlepeople.bandcamp.com/track/offcut-6" class="bandcamp-link" target="_blank">
                                            <img class="bandcamp-grey" src="../resources/Images/bandcamp-grey.svg"/>
                                            <img class="bandcamp-white" src="../resources/Images/bandcamp-white.svg"/>
                                          </a>
                                          <span class="song-duration">1:00</span>
                                        </div>
                                        <div class="song amplitude-song-container amplitude-play-pause" amplitude-song-index="9">
                                          <div class="song-now-playing-icon-container">
                                            <div class="play-button-container">
                    
                                            </div>
                                            <img class="now-playing" src="../resources/Images/now-playing.svg"/>
                                          </div>
                                          <div class="song-meta-data">
                                            <span class="song-title">Boo'd Up</span>
                                            <span class="song-artist">Ella Mai</span>
                                          </div>
                                          <a href="https://emancipator.bandcamp.com/track/dusk-to-dawn-2" class="bandcamp-link" target="_blank">
                                            <img class="bandcamp-grey" src="../resources/Images/bandcamp-grey.svg"/>
                                            <img class="bandcamp-white" src="../resources/Images/bandcamp-white.svg"/>
                                          </a>
                                          <span class="song-duration">5:25</span>
                                        </div>
                                        <div class="song amplitude-song-container amplitude-play-pause" amplitude-song-index="10">
                                          <div class="song-now-playing-icon-container">
                                            <div class="play-button-container">
                    
                                            </div>
                                            <img class="now-playing" src="../resources/Images/now-playing.svg"/>
                                          </div>
                                          <div class="song-meta-data">
                                            <span class="song-title">Anthem</span>
                                            <span class="song-artist">Emancipator</span>
                                          </div>
                                          <a href="https://emancipator.bandcamp.com/track/anthem" class="bandcamp-link" target="_blank">
                                            <img class="bandcamp-grey" src="../resources/Images/bandcamp-grey.svg"/>
                                            <img class="bandcamp-white" src="../resources/Images/bandcamp-white.svg"/>
                                          </a>
                                          <span class="song-duration">5:40</span>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                </div>

       </body>
       <script type="text/javascript">
		Amplitude.init({
			"songs": [
				{
					"name": "In my feelings",
					"artist": "Drake",
					"album": "Scorpion",
					"url": "../resources/Uploads/In my feelings.mp3",
					"cover_art_url": "../resources/Images/drake.jpg"
				},
				{
					"name": "Girl Like you",
					"artist": "Maroon 5",
					"album": "Ask The Dust",
					"url": "../resources/Uploads/.mp3",
					"cover_art_url": "../resources/Images/6ix9ine-dc4-87x87.jpg"
				},
				{
					"name": "I like it",
					"artist": "Cardi B",
					"album": "Anvil",
					"url": "../resources/Uploads/I like It.mp3",
					"cover_art_url": "../resources/Images/cardi-b-n38-i-like-it-ppy-106x106.jpg"
				},
				{
					"name": "Sicko Mode",
					"artist": "Travis Scott",
					"album": "UNKNOWN",
					"url": "../resources/Uploads/Sicko Mode.mp3",
					"cover_art_url": "../resources/Images/travis-scott-jll-174x174.jpg"
				},
				{
					"name": "FEFE",
					"artist": "Nicki Minaj ft ",
					"album": "UNKNOWN",
					"url": "../resources/Uploads/FEFE.mp3",
					"cover_art_url": "../resources/Images/6ix9ine-dc4-87x87.jpg"
				},
				{
					"name": "Better Now",
					"artist": "Malone",
					"album": "Key",
					"url": "../resources/Uploads/Better Now.mp3",
					"cover_art_url": "../resources/Images/post-malone-tp6-87x87.jpg"
				},
				{
					"name": "Lucid Dreams",
					"artist": "Russian Circles",
					"album": "Guidance",
					"url": "../resources/Uploads/Lucid Dreams.mp3",
					"cover_art_url": "..resources/Images/juice-wrld-000-lucid-dreams-zso-87x87.jpg"
				},
				{
					"name": "Stargazing",
					"artist": "Jimkata",
					"album": "Die Digital",
					"url": "../resources/Uploads/Stargazing.mp3",
					"cover_art_url": "../resources/Images/travis-scott-jll-174x174.jpg"
				},
				{
					"name": "Taste",
					"artist": "Little People",
					"album": "We Are But Hunks of Wood Remixes",
					"url": "../resources/Uploads/Taste.mp3",
					"cover_art_url": "../resources/Images/tyga-ofy-87x87"
				},
				{
					"name": "Boo'd Up",
					"artist": "Emancipator",
					"album": "Dusk To Dawn",
					"url": "../resources/Uploads/Boo'd Up.mp3",
					"cover_art_url": "../resources/Images/ella-mai-4oz-87x87.jpg"
				},
				{
					"name": "Anthem",
					"artist": "Emancipator",
					"album": "Soon It Will Be Cold Enough",
					"url": "../songs/Anthem-Emancipator.mp3",
					"cover_art_url": "../resources/Images/.jpg"
				}
			]
		});
	</script>
</html>
