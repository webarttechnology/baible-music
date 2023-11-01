<x-header page="contact" active="christian"/>


    <section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="content text-center">
                    <h1 class="mb-3 text-capitalize">Bible Music</h1>
                </div>
            </div>
        </div>
    </div>
 </section>
    <!-- Breadcrumb End -->

@foreach($category as $item)

<section class="about-services servicethumb spad">
    <div class="container-fluid px-md-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-title">
                    <h2>
                        <em>{{ $item->name }}</em>
                    </h2>                    
                      @if(count($item->album) > 1)
                          Full Albums
                      @else
                            Full Album
                      @endif
                </span></h4>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($item->album as $albums)
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="albumBox">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="about__pic">
                               <a href="{{ url('bible-music-free/'.$albums->slug_name) }}"> <img src="{{ asset($albums->image) }}" style="margin: 0 auto; display: block;" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_player_container">
                               <a href="{{ url('bible-music-free/'.$albums->slug_name) }}"> <h3>{{$albums->title }}</h3></a>
                            </div>
                            @if($albums->category_id != 5)
                            <div class="single_player_container">
                                <div class="jp-audio jp_container_1 jp-state-playing">
                                    <div class="jp-gui jp-interface">
                                        <div class="player_controls_box">
                                            <audio id="player{{ $albums->song[0]->id }}" src="{{ asset($albums->song[0]->music_file) }}"> </audio>
                                            <button class="palyButtpn" id="audio-button{{ $albums->song[0]->id }}" title="button" onclick="paybutton({{$albums->song[0]->id }})"><i class="bi bi-play-fill"></i></button>
                                            <!-- <button class="jp-play player_button" id="song_{{$albums->song[0]->id }}" tabindex="0" ></button> -->
                                             <!-- <button class="jp-play player_button " tabindex="0" onclick="pauseAudio()"></button> -->
                                        </div>
                                    </div>
                                </div>
                                <h4>{{ $albums->song[0]->name }}</h4>
                            </div>

                           <div class="single_player_container">
                                <div class="jp-audio jp_container_1 jp-state-playing">
                                    <div class="jp-gui jp-interface">
                                        <div class="player_controls_box">
                                            <audio id="player{{ $albums->song[1]->id }}" src="{{ asset($albums->song[1]->music_file) }}"> </audio>
                                            <button class="palyButtpn" id="audio-button{{ $albums->song[1]->id }}" title="button" onclick="paybutton({{$albums->song[1]->id }})"><i class="bi bi-play-fill"></i></button>
                                            <!-- <button class="jp-play player_button" id="song_{{$albums->song[0]->id }}" tabindex="0" ></button> -->
                                             <!-- <button class="jp-play player_button " tabindex="0" onclick="pauseAudio()"></button> -->
                                        </div>
                                    </div>
                                </div>
                                <h4>{{ $albums->song[1]->name }}</h4>
                            </div>
                        

                            <div class="single_player_container">
                                <div class="jp-audio jp_container_1 jp-state-playing">
                                    <div class="jp-gui jp-interface">
                                        <div class="player_controls_box">
                                            <audio id="player{{ $albums->song[2]->id }}" src="{{ asset($albums->song[2]->music_file) }}"> </audio>
                                            <button class="palyButtpn" id="audio-button{{ $albums->song[2]->id }}" title="button" onclick="paybutton({{$albums->song[2]->id }})"><i class="bi bi-play-fill"></i></button>
                                            <!-- <button class="jp-play player_button" id="song_{{$albums->song[2]->id }}" tabindex="0" ></button> -->
                                             <!-- <button class="jp-play player_button " tabindex="0" onclick="pauseAudio()"></button> -->
                                        </div>
                                    </div>
                                </div>
                                <h4>{{ $albums->song[2]->name }}</h4>
                            </div>
                           @else
                                  <div class="single_player_container">
                                <div class="jp-audio jp_container_1 jp-state-playing">
                                    <div class="jp-gui jp-interface">
                                        <div class="player_controls_box">
                                            <audio id="player{{ $albums->song[0]->id }}" src="{{ asset($albums->song[0]->music_file) }}"> </audio>
                                            <button class="palyButtpn" id="audio-button{{ $albums->song[0]->id }}" title="button" onclick="paybutton({{$albums->song[0]->id }})"><i class="bi bi-play-fill"></i></button>
                                            <!-- <button class="jp-play player_button" id="song_{{$albums->song[0]->id }}" tabindex="0" ></button> -->
                                             <!-- <button class="jp-play player_button " tabindex="0" onclick="pauseAudio()"></button> -->
                                        </div>
                                    </div>
                                </div>
                                <h4>{{ $albums->song[0]->name }}</h4>
                            </div>
                            
                           @endif
                        </div>
                    </div>
                    
                    <div class="row">
                       
                        @if(count($albums->product) == 3)
                        <div class="col-md-6 pl-3 pr-4">
                                    <div class="buy-cd">
                                        <h4>{{ $albums->product[0]->type}} - <span>$ {{$albums->product[0]->amount}}</span></h4>
                                         <button onclick="addtocartprodect({{$albums->product[0]->id}})" class="primary-btn">add to cart</button>
                                    </div>
                                </div>
                                 <div class="col-md-6 pl-3 pr-4">
                                    <div class="buy-cd">
                                        <h4>{{ $albums->product[1]->type}} - <span>$ {{$albums->product[1]->amount}}</span></h4>
                                            <button onclick="addtocartprodect({{$albums->product[1]->id}})" class="primary-btn">add to cart</button>
                                       
                                    </div>
                                </div>

                                
                                
                                <div class="col-md-12 pl-3 pr-4">
                                    <div class="buy-cd1 justify-content-end">
                                        <h4>{{ $albums->product[2]->type}} - <span>$ {{$albums->product[2]->amount}}</span></h4>
                                    
                                            <button onclick="addtocartprodect({{$albums->product[2]->id}})" class="primary-btn">add to cart</button>
                                       
                                    </div>
                                </div>

                        @elseif(count($albums->product) == 2)
                                 <div class="col-md-6 pl-3 pr-4">
                                    <div class="buy-cd">
                                        <h4>{{ $albums->product[0]->type}} - <span>$ {{$albums->product[0]->amount}}</span></h4>
                                            <button onclick="addtocartprodect({{$albums->product[0]->id}})" class="primary-btn">add to cart</button>
                                       
                                    </div>
                                </div>

                                <div class="col-md-6 pl-3 pr-4">
                                    <div class="buy-cd">
                                        <h4>{{ $albums->product[1]->type}} - <span>$ {{$albums->product[1]->amount}}</span></h4>
                                         <button onclick="addtocartprodect({{$albums->product[1]->id}})" class="primary-btn">add to cart</button>
                                    </div>
                                </div>

                         @elseif(count($albums->product) == 1)
                                 <div class="col-md-12 pl-3 pr-4">
                                    <div class="buy-cd2">
                                        <h4>{{ $albums->product[0]->type}} - <span>$ {{$albums->product[0]->amount}}</span></h4>
                                            <button onclick="addtocartprodect({{$albums->product[0]->id}})" class="primary-btn">add to cart</button>
                                    </div>
                                </div>
                        @endif  
                    </div>
                    <div class="row">
                        <div class="col-md-12 my-md-4 my-2 text-center">
                            <a href="{{ url('bible-music-free/'.$albums->slug_name) }}" class="primary-btn">More Info</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section>

@endforeach
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
                        "I have about 50 Scripture Song albums in my collection, from searching all over the internet, and your Bible Songs are BY FAR the BEST." <strong>LA</strong>
                    </article>
                    <article>
                        “I just absolutely love your music. I think it is the best kept secret in the Christian community. I can’t say enough good things about it. I am telling everyone I know.” <strong>PA</strong>
                    </article>
                    <article>
                        These are my very, very, favorite CDs. I have bought other music and was usually disappointed. When I heard these I knew I found what I was looking for. Thank you so much.” <strong>TX</strong>
                    </article>
                    <article>This is the most beautiful music I have heard. I sense the Holy Spirit when I play them. They really make me relaxed and calm. Thank you. <strong>NJ</strong>
                    </article>
                    <article>My family loves Bible Songs I-V. I hope you do more in the future. They are the best Bible Songs we have found. Well done. <strong>MO</strong>
                    </article>
                    <article>Thank you for your beautiful music! I enjoy playing the flute with the songs. Your music is different and inspiring. My sister can’t stop listening <strong>CA</strong>
                    </article>
                </div>
                <div class="buy__tickets">
                    <a href="{{url('testimonial') }}" class="primary-btn">More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Countdown Section End -->



<x-footer page="home"/>

<script>


    jQuery(document).ready(function() {
        var playing = false;

        jQuery("#audio-button").click(function() {
            jQuery(this).toggleClass("down");
            if (playing == false) {
            document.getElementById("player").play();
            playing = true;
            jQuery(this).text("Stop Sound");
            } else {
            document.getElementById("player").pause();
            playing = false;
            jQuery(this).text("Play Sound");
            }
        });
        });

        var playing = false;
       function paybutton(id){
            console.log("playing", playing);
            jQuery(this).toggleClass("down");
            if (playing == false) {
                document.getElementById("player"+id).play();
                playing = true;
                $("#payornot").val(1);
                $("#audio-button"+id).html('<i class="bi bi-pause-fill"></i>');
            } else {
                document.getElementById("player"+id).pause();
                playing = false;
                $("#payornot").val(0);
                $("#audio-button"+id).html('<i class="bi bi-play-fill"></i>');
            }
        }



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

 