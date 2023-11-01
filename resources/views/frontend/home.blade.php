<x-header page="home" active="home"/>
     <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="{{ asset('frontend/img/a-book-2710453_1920.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__text">
                        <!-- <span>New single</span> -->
                        <h1>Walk with God all Day Long, Meditating on His Word in Song.</h1>
                        <!-- <p>Are you looking for KJV Bible songs that will elevate your thoughts to the courts of heaven?</p> -->
                        <!-- <a href="https://www.youtube.com/watch?v=K4DyBUG242c" class="play-btn video-popup"><i class="fa fa-play"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="linear__icon">
            <i class="fa fa-angle-double-down"></i>
        </div>
    </section>
    <hr class="dotted">
    <!-- Hero Section End -->

    <!-- Event Section Begin -->
    <!-- <section class="event spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Upcoming Events</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="event__slider owl-carousel">
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="img/events/event-1.jpg">
                                <div class="tag-date">
                                    <span>Dec 15, 2019</span>
                                </div>
                            </div>
                            <div class="event__item__text">
                                <h4>David Guetta Miami Ultra</h4>
                                <p><i class="fa fa-map-marker"></i> Funkhaus Berlin, Berlin, Germany</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="img/events/event-2.jpg">
                                <div class="tag-date">
                                    <span>Dec 15, 2019</span>
                                </div>
                            </div>
                            <div class="event__item__text">
                                <h4>David Guetta Miami Ultra</h4>
                                <p><i class="fa fa-map-marker"></i> Funkhaus Berlin, Berlin, Germany</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="img/events/event-3.jpg">
                                <div class="tag-date">
                                    <span>Dec 15, 2019</span>
                                </div>
                            </div>
                            <div class="event__item__text">
                                <h4>David Guetta Miami Ultra</h4>
                                <p><i class="fa fa-map-marker"></i> Funkhaus Berlin, Berlin, Germany</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="event__item">
                            <div class="event__item__pic set-bg" data-setbg="img/events/event-2.jpg">
                                <div class="tag-date">
                                    <span>Dec 15, 2019</span>
                                </div>
                            </div>
                            <div class="event__item__text">
                                <h4>David Guetta Miami Ultra</h4>
                                <p><i class="fa fa-map-marker"></i> Funkhaus Berlin, Berlin, Germany</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Event Section End -->

    <!-- About Section Begin -->
    <section class="about spad aboutysec pt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about__picmain">
                        <img src="{{ asset('frontend/img/abtimg.jpg') }}" style="margin: 0 auto; display: block;" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__text">
                        <!-- <div class="section-title">
                            <h2>Walk with God all day long, meditating on His Word in Song.</h2>
                            <h1>Walk with God</h1>
                        </div> -->
                        <p>  Are you looking for KJV Bible Music that will elevate your thoughts to the courts of heaven? Bible Songs that give great peace and joy? Folk Bible Songs that your children will love and memorize for a lifetime of blessing!</p>
                        <p>Then you have come to the right place.</p>
                        
                        <ul>
                            <li>KJV Bible passages sung to beautiful music.</li>
                            <li>Peaceful folk songs.</li>
                            <li>Bible promises come alive.</li>
                            <li>Excellent lead vocals.</li>
                            <li>Enjoyed by the entire family.</li>
                            <li>Simple, powerful, and extremely spiritual.</li>
                        </ul>
                        <p>Thousands of families have been drawn closer to God through this music, Yours can too. </p>
                    </div>
                      <div class="col-md-12 text-center">
			        <a href="{{ url('bible-music-free') }}" class="primary-btn">Bible Music Order Page</a>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <section class="about-services servicethumb spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2><em>Bible Music</em></h2>
                        <audio controls="">
                  <source src="https://biblemusic.com/uploads/music/3 Ye Shall Not Need To Fight   II Chron. 20_17, 15.mp3" type="audio/mpeg">
                     Your browser does not support the audio tag.
                   </audio>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($album as $item)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="servcblck mb-5">
                     <a href="service-details.php">
                    <div class="about__pic">
                       <a href="{{ url('bible-music-free/'.$item->slug_name) }}"> <img src="{{ asset($item->image) }}" style="margin: 0 auto; display: block;" alt=""></a>
                    </div>
                    <div class="track__content mb-5" style="height: auto;">
                        <div class="single_player_container">
                            <a href="{{ url('bible-music-free/'.$item->slug_name) }}"> <h5>{{$item->title }}</h5></a>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_1" data-url="{{$item->song[0]->music_file }}" id="jp_jplayer_0" style="width: 0px; height: 0px;"><img id="jp_poster_0" style="width: 0px; height: 0px; display: none;"><audio id="jp_audio_0" preload="metadata" src="{{$item->song[0]->music_file }}"></audio></div>
                            <div class="jp-audio jp_container_1 jp-state-playing" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <!-- <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                     </div>
                     </a>
                   </div>
                </div>
                @endforeach
                <div class="col-md-12 text-center">
			        <a href="{{ url('bible-music-free') }}" class="primary-btn">View More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section Begin -->
    <!-- <section class="services">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="services__left set-bg" data-setbg="img/services/service-left.jpg">
                        <a href="https://www.youtube.com/watch?v=JGwWNGJdvx8" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="row services__list">
                        <div class="col-lg-6 p-0 order-lg-1 col-md-6 order-md-1">
                            <div class="service__item deep-bg">
                                <img src="img/services/service-1.png" alt="">
                                <h4>Wedding</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-2 col-md-6 order-md-2">
                            <div class="service__item">
                                <img src="img/services/service-2.png" alt="">
                                <h4>Clubs and bar</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-4 col-md-6 order-md-4">
                            <div class="service__item deep-bg">
                                <img src="img/services/service-4.png" alt="">
                                <h4>DJ lessons</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0 order-lg-3 col-md-6 order-md-3">
                            <div class="service__item">
                                <img src="img/services/service-3.png" alt="">
                                <h4>Corporate events</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Services Section End -->

    <!-- Track Section Begin -->
    <!-- <section class="track spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="section-title">
                        <h2>Latest tracks</h2>
                        <h1>Music podcast</h1>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="track__all">
                        <a href="#" class="primary-btn border-btn">View all tracks</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 p-0">
                    <div class="track__content nice-scroll">
                        <div class="single_player_container">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_1"
                                data-url="music-files/1.mp3"></div>
                            <div class="jp-audio jp_container_1" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_player_container">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_2"
                                data-url="music-files/2.mp3"></div>
                            <div class="jp-audio jp_container_2" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_player_container">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_3"
                                data-url="music-files/3.mp3"></div>
                            <div class="jp-audio jp_container_3" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_player_container">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_4"
                                data-url="music-files/4.mp3"></div>
                            <div class="jp-audio jp_container_4" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_player_container">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_5"
                                data-url="music-files/5.mp3"></div>
                            <div class="jp-audio jp_container_5" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_player_container">
                            <h4>David Guetta Miami Ultra</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_6"
                                data-url="music-files/6.mp3"></div>
                            <div class="jp-audio jp_container_6" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 p-0">
                    <div class="track__pic">
                        <img src="img/track-right.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Track Section End -->

    <!-- Youtube Section Begin -->
    <!-- <section class="youtube spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Youtube feed</h2>
                        <h1>Latest videos</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="youtube__item">
                        <div class="youtube__item__pic set-bg" data-setbg="img/youtube/youtube-1.jpg">
                            <a href="https://www.youtube.com/watch?v=yJg-Y5byMMw?autoplay=1" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="youtube__item__text">
                            <h4>David Guetta Miami Ultra Music Festival 2019</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="youtube__item">
                        <div class="youtube__item__pic set-bg" data-setbg="img/youtube/youtube-2.jpg">
                            <a href="https://www.youtube.com/watch?v=K4DyBUG242c?autoplay=1" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="youtube__item__text">
                            <h4>Martin Garrix (Full live-set) | SLAM!Koningsdag</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="youtube__item">
                        <div class="youtube__item__pic set-bg" data-setbg="img/youtube/youtube-3.jpg">
                            <a href="https://www.youtube.com/watch?v=S19UcWdOA-I?autoplay=1" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="youtube__item__text">
                            <h4>Dimitri Vegas, Steve Aoki & Like Mike’s “3 Are Legend”</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Youtube Section End -->

    <!-- Countdown Section Begin -->
    <section class="countdown spad set-bg" data-setbg="{{ asset('frontend/img/expression-5040708_1920.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="countdown__text">
                        <h1>What People Are Saying</h1>
                        <h4>About Bible Songs</h4>
                    </div>
                    <div id="tstimnl_Slider" class="testmnlsSection">
                        <article>
                            "I have about 50 Bible Song albums in my collection, from searching all over the internet, and your Bible Songs are BY FAR the BEST." <strong>LA</strong>
                        </article>
                        <article>
                            “I just absolutely love your music. I think it is the best kept secret in the Christian community. I can’t say enough good things about it. I am telling everyone I know.”  <strong>PA</strong>
                        </article>
                        <article>
                            These are my very, very, favorite CDs. I have bought other music and was usually disappointed. When I heard these I knew I found what I was looking for. Thank you so much.”     <strong>TX</strong>
                        </article>
                        <article>This is the most beautiful music I have heard. I sense the Holy Spirit when I play them. They really make me relaxed and calm. Thank you. <strong>NJ</strong>
                        </article>
                        <article>My family loves Bible Songs I-V. I hope you do more in the future. They are the best Bible Songs we have found. Well done. <strong>MO</strong>
                        </article>
                        <article>We LOVE your music! Thank you.” <strong>CA</strong>
                        </article>
                    </div>
                    <div class="buy__tickets">
                        <a href="{{ url('testimonial') }}" class="primary-btn">More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Countdown Section End -->


<x-footer  page="home"/>
