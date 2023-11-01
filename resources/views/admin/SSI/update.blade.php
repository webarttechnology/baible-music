<x-adminheader />
<x-navbar />
<div class="wave-three"></div>
<div class="app-content">
				<section class="section">
                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Edit :</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Edit</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit </li>
							</ol>
						</div>
						<!--page-header closed-->

                        <!--row open-->
						
						<!--row closed-->

                        <!--row open-->
				    <div class="row justify-content-center " >
						
					    <div class="col-12">
						    <div class="card" style="style">
									<div class="card-header">
										<h4>Edit Details :</h4>
                                        <div style="color:green; padding-left:5px " id="successmsg">{{ Session::get('successmsg') }}</div>
                                        <div style="color:red; padding-left:5px " id="errmsg">{{ Session::get('errmsg') }}</div>
									</div>
								<div class="card-body">
                                <form class="form-horizontal" onsubmit="return valid();" action="{{route('ssIUpdate', ['id' => $data->id]) }}" method="POST"  enctype="multipart/form-data">
                            @csrf
        
                            <div class="row align-items-center">
                                <div class="col-md-6 col-xs-8">
                                    <div class="form-group">
                                        <label>Song Book</label>
                                        <input type="text" name="songs_name" id="songs_name" class="form-control" placeholder="Song name" value="{{ old('songs_name', $data->songs_name) }}" required  />
                                    </div>
                                </div>
                            </div>
                            <span id="multiplebook"></span>
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <div class="form-group">
                                        <input type="Submit" class="btn btn-primary" 
                                            value="Save" />
                                    </div>
                                </div>
                            </div>
                        </form>
								</div>
							</div>
						</div>
					</div>
					
				</section>
			</div>



<script>
CKEDITOR.replace( 'details' );
CKEDITOR.replace( 'details2' );
CKEDITOR.replace( 'testimonial' );




    


    function valid() {
            if ($("#category_id").val() == '') {
                $("#errmsg").html("Please enter a Categary!!");
                $("#category_id").focus();
                return false;
            }else if ($("#title").val() == '') {
                $("#errmsg").html("Please enter a title!!");
                $("#title").focus();
                return false;
            }else if ($("#song_name").val() == '') {
                $("#errmsg").html("Please enter a song name!!");
                $("#song_name").focus();
                return false;
            }else if ( $("#music_file").val() == '') {
                $("#errmsg").html("Please enter a music file!!");
                $("#music_file").focus();
                return false;
            }else if ($("#details").val() == '') {
                $("#errmsg").html("Please enter album details!!");
                $("#details").focus();
                return false;
            }else if ($("#details2").val() == '') {
                $("#errmsg").html("Please enter album details 2!!");
                $("#details2").focus();
                return false;
            }else if ($("#image").val() == '') {
                $("#errmsg").html("Please Upload a Picture!!");
                $("#image").focus();
                return false;
            }
           
        }

    
</script>

<x-adminfooter />
