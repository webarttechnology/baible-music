<x-header page="contact" active="contact"/>


    <section class="page-header">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="content text-center">
                    <h1 class="mb-3 text-capitalize">Contact</h1>
                </div>
            </div>
        </div>
    </div>
 </section>
    <!-- Breadcrumb End -->
 
    <!-- Contact Section Begin -->
    
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact__address">
                        <div class="section-title">
                            <h2>Contact info</h2>
                        </div>
                        <p> When you add up the blessings of listening to Scripture Songs you will wonder how you ever got along without them. Wonderful home schooling music.</p>
                      
                        <ul>
                            <li>
                                <div>
                                <i class="fa fa-map-marker"></i>
                                </div>
                                <div>
                                <h5>Address</h5>
                                <p>{{ $detail->address }}</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                <i class="fa fa-phone"></i>
                                </div>
                                <div>
                                <h5>Hotline</h5>
                                <span><a href="tel:403-789-2000">403-789-2000</a></span>
                                </div>
                            </li>
                            <li>
                                <div>
                                <i class="fa fa-envelope"></i>
                                </div>
                                <div>
                                <!--<h5>Email</h5>-->
                                <p><a href="mailto:{{ $detail->email_id }}">contactbiblemusic</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="contact__form">
                        <div class="section-title">
                            <h2>Get in touch</h2>
                        </div>
                        <p> You don't even have to try to memorize Bible passages. All you do is press play and let the music do the work. There is something about putting words and music together. When a melody comes to mind so do the words. It's really amazing! </p>
                        <span style="color:green;">{{ Session::get('errmsg') }}</span>
                        <form action="{{ url('send-msg') }}" method="post">
                            @csrf
                            
                            <div class="input__list">
                                <input type="text" name="name" placeholder="Name" required>
                                <input type="text" name="email" placeholder="Email" required>
                                <input type="text" name="website" placeholder="Website">
                            </div>
                            <textarea placeholder="Comment" name="comment" required></textarea>
                            <button type="submit" class="site-btn">SEND MESSAGE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

      <!-- Map Begin -->
    <!-- <div class="map">
        <div class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2942.5524090066037!2d-71.10245469994108!3d42.47980730490846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3748250c43a43%3A0xe1b9879a5e9b6657!2sWinter%20Street%20Public%20Parking%20Lot!5e0!3m2!1sen!2sbd!4v1577299251173!5m2!1sen!2sbd"
                height="585" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div> -->
    <!-- Map End -->




<x-footer page="contact" />