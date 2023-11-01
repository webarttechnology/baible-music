<x-adminheader />
<x-navbar />
<div class="wave-three"></div>
<div class="app-content">
				<section class="section">
                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">ADD :</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Add</a></li>
								<li class="breadcrumb-item active" aria-current="page">ADD </li>
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
										<h4>ADD Details :</h4>
                                        <div style="color:green; padding-left:5px " id="successmsg">{{ Session::get('successmsg') }}</div>
                                        <div style="color:red; padding-left:5px " id="errmsg">{{ Session::get('errmsg') }}</div>
									</div>
								<div class="card-body">
                                <form class="form-horizontal" onsubmit="return valid();" action="{{route('ssIstore') }}" method="POST"  enctype="multipart/form-data">
                            @csrf
        
                            <div class="row align-items-center">
                                <div class="col-md-6 col-xs-8">
                                    <div class="form-group">
                                        <label>Song Book</label>
                                        <input type="text" name="songs_name[]" id="songs_name" class="form-control" placeholder="Song name" value="{{ old('songs_name') }}" required  />
                                    </div>
                                </div>
                              
                                <div class="col-md-2 col-xs-12 rope-chan">
                                        <span class="btn btn-primary py-2" id="addbook" style="float: left;"><i class="fa fa-plus"
                                        aria-hidden="true"></i></span>
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


$(document).ready(function () {
                let lineNo = 2;
                let blineNo = 2;
                $("#addrow").click(function () {                   
                    markup = '<div class="row"   id="deleterow'+ lineNo +'"><div class="col-md-6 col-xs-8" ><div class="form-group"><input type="text" class="d-inline-block form-control"  name="songs_name[]" id="song_name'+ lineNo +'"  placeholder="Song name" style="width: 100%;"></div></div><div class="col-md-4 col-xs-6"><div class="form-group"><input type="file" name="music_file[]" id="music_file'+ lineNo +'" class="form-control" placeholder="Ex 14k"  /></div></div><div class="fv-plugins-message-container d-inline-block"> <button class="btn btn-danger m-b-5 ml-2 py-2"  onclick="deleteRow('+ lineNo +')"><i class="fa fa-trash-o" aria-hidden="true"></i></button></div></div>' ;
                    tableBody = $("#multipleimage");
                    tableBody.append(markup);
                    lineNo++;
                });
                
                 $("#addbook").click(function () {                   
                    markup = '<div class="row"   id="deletebookrow'+ blineNo +'"><div class="col-md-6 col-xs-8" ><div class="form-group"><input type="text" class="d-inline-block form-control"  name="songs_name[]" id="songs_name'+ blineNo +'"  placeholder="Song name" style="width: 100%;"></div></div><div class="col-md-2 col-xs-12"><button class="btn btn-danger m-b-5 ml-2 py-2" onclick="deletebookrow('+ blineNo +')"><i class="fa fa-trash-o" aria-hidden="true"></i></button></div></div></div>' ;
                    tableBody = $("#multiplebook");
                    tableBody.append(markup);
                    blineNo++;
                });
            }); 

     function deleteRow(lineno){
        $("#deleterow"+lineno).click(function () {   
            $('#deleterow'+lineno).remove();
        });
     }
     
      function deletebookrow(lineno){
        $("#deletebookrow"+lineno).click(function () {   
            $('#deletebookrow'+lineno).remove();
        });
     }

    


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
