<x-header page="contact" active="christian"/>
  <section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="content text-center">
                    <h1 class="mb-3 text-capitalize">{{ $album->pageheading }}</h1>
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
               </div>
               <div class="col-lg-6">
                  <div class="about__text albumBox">
                     <div class="section-title">
                        <h2>{{ $album->title }}</h2>
                     </div>
                     <?php echo htmlspecialchars_decode($album->details) ?>
                      <div class="row">
                         @foreach($album->product as $products)
                        <div class="col-md-12">
                            <div class="{{ $products->type == 'Guitar Chords'?'buy-cd1':'buy-cd'}}">
                                <h4> {{$products->type}} - <span>$ {{$products->amount}}</span></h4>                               
                                   <button onclick="addtocartprodect({{$products->id}})" class="primary-btn">add to cart</button>
                            </div>
                        </div>
                        @endforeach
                       
                    </div>
                    
                     <div class="listsec">
                         <ul>                       
                             <li><a href="{{ url('bible-music-free/scripture-songs-i') }}">I</a></li>
                             <li><a href="{{ url('bible-music-free/scripture-songs-ii') }}">II</a></li>
                             <li><a href="{{ url('bible-music-free/scripture-songs-iii') }}">III</a></li>
                             <li><a href="{{ url('bible-music-free/scripture-songs-iv') }}">IV</a></li>
                             <li><a href="{{url('bible-music-free/scripture-songs-v') }}">V</a></li>
                             <li><a href="{{url('bible-music-free/songs-of-the-shepherd') }}">SoTH</a></li>
                             <li><a href="{{url('bible-music-free/songs-of-zion') }}">SoZ</a></li>
                             <li><a href="{{url('bible-music-free/song-of-songs') }}">SoS</a></li>
                             <li><a href="{{url('bible-music-free/thorns-on-his-head') }}">Thorns</a></li>
                             <li><a href="{{url('bible-music-free/to-hymn-with-praise') }}">THWP</a></li>
                             <li><a href="{{url('bible-music-free/call-to-him') }}">CTH</a></li>
                             <li><a href="{{url('bible-music-free/la-harpe') }}">LH</a></li>
                             <li><a href="{{url('bible-music-free/life-story-series-james-harris') }}">LSS(JH)</a></li>
                             <li><a href="{{url('bible-music-free/life-story-series-cecil-williams') }}">LSS(CW)</a></li>
                             <li><a href="{{url('bible-music-free/life-story-series-zimmer') }}">LSS(GZ)</a></li>
                           
                         </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
    
<!--------Table Section Start------------>    
      
      <section class="songlistsec py-5">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-10">
                  <table class="table text-center table-striped table-borderless">
                     <thead>
                        <tr>
                           <th scope="col">Action</th>
                           <th scope="col">Song Title</th>
                           <!-- <th scope="col">Artist</th> -->
                        </tr>
                     </thead>
                     <tbody>
                         @foreach($album->song as $item)
                        <tr>
                           <td>
                              <a id="ppbutton{{$item->id }}" class="ppbutton fa fa-play" data-src="{{ asset($item->music_file) }}"></a>
                           </td>
                           <td>{{ $item->name }}</td>
                           <!-- <td>JOSHUA</td> -->
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </section>
      
<!--------Table Section End------------>       

<section class="songslistbg py-5">
    <div class="container">
        <h2>Song Listing</h2>
        <h4>All songs are from the King James Bible.</h4>
        <div class="row justify-content-center">
            <div class="col-md-10 d-flex" id="songs_list">
                 @php
                    $columnSize = ceil(count($album->songbook)/2);
                    $rowStarted = false;
                @endphp
                    <ul>
                        @foreach($album->songbook as $key => $item)
                            <li>{{ $key + 1 }}. {{ $item->name }}</li>

                            @if( $key >= $columnSize && !$rowStarted )
                            @php
                                $rowStarted = true;
                            @endphp
                                </ul>
                                <ul>
                            @endif
                        @endforeach
                    </ul>
            </div>
            
            <!--<div class="col-md-10" id="songs_list">-->
            <!--   <ul>-->
            <!--        @foreach($album->songbook as $key => $item)-->
            <!--            <li>{{ $key + 1 }}. {{ $item->name }}</li>-->
            <!--        @endforeach-->
            <!--    </ul>-->
            <!--</div>-->
        </div>
    </div>
</section>
  

      <section class="parasec py-5">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <h5> <?php echo htmlspecialchars_decode($album->details2) ?></h5>
                  </div>
              </div>
          </div>
      </section>

      <section class="countdown specount spad set-bg" data-setbg="{{ asset('frontend/img/expression-5040708_1920.jpg') }}">
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
                        <article>Thank you for your beautiful music! I enjoy playing the flute with the songs. Your music is different and inspiring. My sister can’t stop listening <strong>CA</strong>
                        </article>
                    </div>
                    <div class="buy__tickets">
                        <a href="{{ url('testimonial') }}" class="primary-btn">More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-tab">
        <div class="container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Testimonial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                Additional information</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h2>Testimonial</h2>
                     <?php echo htmlspecialchars_decode($album->testimonial)  ?>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h2>Additional information</h2>
                        <div class="addi-tab">
                            <p><strong>Order</strong></p>CD  {{$album->category_id == 1?", Guitar Chords":" "}}
                        </div>
                </div>
            </div>
        </div>
    </section>

     <section class="about-services servicethumb spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2><em>Related products</em></h2>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($related_song as $item)
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
            </div>
        </div>
    </section>


    



<x-footer page="contact"/>
   <script type="text/javascript">
         var clicked_id;
         var audio_var = new Audio();
         
         
         $('.ppbutton').on("click",function(){
         var datasrc = $(this).attr('data-src');
         clicked_id= $(this).attr('id');
         console.log(clicked_id);
         audio_var.pause();
         
         $('.ppbutton').not(this).each(function(){
         $(this).removeClass('fa-pause');
         $(this).addClass('fa-play');
         });
         
         if($(this).hasClass('fa-play')){
         console.log('play_click');
         audio_var.src=datasrc;
         $(this).removeClass('fa-play');
         $(this).addClass('fa-pause');
         console.log(audio_var);
         audio_var.play();
         } else {
         console.log('pause_click');
         $(this).removeClass('fa-pause');
         $(this).addClass('fa-play');
         console.log(audio_var);
         audio_var.pause();
         //audio_var.src='';
         //audio_var.load();
         console.log(audio_var);
         }
         
         
         });
         
         audio_var.onended = function() {
         $("#"+clicked_id).removeClass('fa-pause');
         $("#"+clicked_id).addClass('fa-play');
         };




          function addtocartprodect(productId){
           // alert(productId);
             $.ajax({
                type: "get",
                url: "/add-cart",
                data: {
                    product_id : productId,
                    quantatity:"1"
                },
                success: function(response) {
                    console.log(response);
                    toastr.success('Product added successfully');
                    $('#courtcount').html(response);	
                    // location.replace(window.location.origin +"/add-to-cart")      
                }
            });
        }
</script>