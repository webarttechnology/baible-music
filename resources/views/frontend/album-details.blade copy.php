<x-header/>

  <section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="content text-center">
                    <h1 class="mb-3 text-capitalize">Service-Details</h1>
                    <div class="divider mx-auto mb-4"></div>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="index.php">Home</a></li>
                        <li class="list-inline-item">/</li>
                        <li class="list-inline-item"><a href="javascript:void(0)">Service-Details</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 </section>

      <!-- Header Section End -->
      <section class="about spad servdetailspg">
         <div class="container">
            <div class="row pt-5">
               <div class="col-lg-6">
                  <div class="about__pic">
                     <img src="{{ asset($album->image) }}" style="margin: 0 auto; display: block;" alt="">
                  </div>
                   @foreach($album->song as $item)
                  <div class="track__content mb-5" style="height: auto;">
                     
                        <div class="single_player_container">
                            <h4>{{ $item->name }}</h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_1"
                                data-url="{{ $item->music_file }}"></div>
                            <div class="jp-audio jp_container_1" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
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
                                    <!-- Volume Controls -->
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
                     @endforeach
               </div>
               <div class="col-lg-6">
                  <div class="about__text">
                     <div class="section-title">
                        <h2>{{ $album->title }}</h2>
                     </div>
                     <?php echo htmlspecialchars_decode($album->details) ?>
                      <div class="row">
                        <div class="col-md-7">
                            <div class="buy-cd">
                                <h4> Buy CD - <span>$ {{$album->cd_amt}} U.S.</span></h4>
                                <?php echo $album->buy_cd ?>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="buy-cd">
                                <h4>Cass.</h4>
                               <?php echo htmlspecialchars_decode($album->cass_code) ?>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-12">
                            <div class="buy-cd1">
                                <h4>Song Book - <span> Lyrics and Guitar Chords</span> </h4>
                                <?php echo htmlspecialchars_decode($album->pdf_code) ?>
                            </div>
                        </div>
                    </div>
                     <div class="listsec">
                         <ul>                       
                             <li><a href="#">I</a></li>
                             <li><a href="#">II</a></li>
                             <li><a href="#">III</a></li>
                             <li><a href="#">IV</a></li>
                             <li><a href="#">V</a></li>
                             <li><a href="#">SotS</a></li>
                             <li><a href="#">SoZ</a></li>
                             <li><a href="#">SoS</a></li>
                             <li><a href="#">THWP</a></li>
                             <li><a href="#">Fehr</a></li>
                             <li><a href="#">TH</a></li>
                             <li><a href="#">CTH</a></li>
                             <li><a href="#">LH</a></li>
                             <li><a href="#">LS</a></li>
                         </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="songslistbg py-5">
        <div class="container">
            <h2>Song Listing</h2>
            <h4>All songs are from the King James Bible.</h4>
           <div class="row justify-content-center">
               <div class="col-md-10">
                   <ul>
                    @foreach($songs as $item)
                        <li><i class="fa fa-music pr-2" aria-hidden="true"></i>{{ $item->name }}</li>
                    @endforeach
                     </ul>
               </div>
           </div>
        </div>    
      </section>    

      <section class="parasec py-5">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <h5>The Scriptures, clothed in simple melody, are a source of strength, comfort, and peace; truly a spiritual feast. Scripture Songs I is the result of God's work of restoration in our lives. It's genesis represents the start of a ministry, and an opportunity to share God's blessings with others. Through song, the simplicity of the Gospel message can be easily taught to each member of the family. May God richly bless you as you endeavor to bind these songs of faith in your heart. Psalm 119:11</h5>
                  </div>
              </div>
          </div>
      </section>

      <section class="countdown spad set-bg" data-setbg="{{ asset('frontend/img/expression-5040708_1920.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="countdown__text">
                        <h1>What People Are Saying</h1>
                        <h4>About Scripture Songs</h4>
                    </div>
                    <div id="tstimnl_Slider" class="testmnlsSection">
                        <article>
                            "I have about 50 Scripture Song albums in my collection, from searching all over the internet, and your Scripture Songs are BY FAR the BEST." <strong>LA</strong>
                        </article>
                        <article>
                            “I just absolutely love your music. I think it is the best kept secret in the Christian community. I can’t say enough good things about it. I am telling everyone I know.”  <strong>PA</strong>
                        </article>
                        <article>
                            These are my very, very, favorite CDs. I have bought other music and was usually disappointed. When I heard these I knew I found what I was looking for. Thank you so much.”     <strong>TX</strong>
                        </article>
                        <article>This is the most beautiful music I have heard. I sense the Holy Spirit when I play them. They really make me relaxed and calm. Thank you. <strong>NJ</strong>
                        </article>
                        <article>My family loves Scripture Songs I-V. I hope you do more in the future. They are the best Scripture Songs we have found. Well done. <strong>MO</strong>
                        </article>
                        <article>Thank you for your beautiful music! I enjoy playing the flute with the songs. Your music is different and inspiring. My sister can’t stop listening <strong>CA</strong>
                        </article>
                    </div>
                    <div class="buy__tickets">
                        <a href="#" class="primary-btn">More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



<x-footer/>