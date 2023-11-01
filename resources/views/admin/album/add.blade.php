<x-adminheader />
<x-navbar />
<div class="wave-three"></div>
<div class="app-content">
				<section class="section">
                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">ADD {{$title}} :</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Add</a></li>
								<li class="breadcrumb-item active" aria-current="page">ADD {{ $title }}</li>
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
										<h4>ADD {{$title}} Details :</h4>
                                        <div style="color:green; padding-left:5px " id="successmsg">{{ Session::get('successmsg') }}</div>
                                        <div style="color:red; padding-left:5px " id="errmsg">{{ Session::get('errmsg') }}</div>
									</div>
								<div class="card-body">
                                <form    class="form-horizontal" onsubmit="return valid();" action="{{ url('/author/album/add') }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Categary :<span style="color:red"> *</span></label>
                                        <select type="text" name="category_id" id="category_id" class="form-control" required >
                                            <option value="">Select A Categary</option>
                                            @foreach($category as $item)
                                               <option value="{{ $item ->id }}" {{ $item ->id == old('category_id')?"Selected":''}} >{{ $item ->name }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('category_id'))
                                                                <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-xs-6">
                                    <div class="form-group">
                                        <label>Tittle :<span style="color:red"> *</span></label>
                                        <input type="text" name="title" id="title" class="form-control" placeholder="Title" value="{{ old('title') }}" required >
                                        @if ($errors->has('title'))
                                                                <span class="text-danger">{{ $errors->first('title') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 col-xs-6">
                                    <div class="form-group">
                                        <label>Page Heading :<span style="color:red"> *</span></label>
                                        <input type="text" name="pageheading" id="pageheading" class="form-control" placeholder="Page Heading" value="{{ old('pageheading') }}" required >
                                        @if ($errors->has('pageheading'))
                                                                <span class="text-danger">{{ $errors->first('pageheading') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-6 col-xs-8">
                                    <div class="form-group">
                                        <label>Song name(minimum 3 song upload)</label>
                                        <input type="text" name="song_name[]" id="song_name" class="form-control" placeholder="Song name" value="{{ old('song_name') }}" required  />
                                    </div>
                                </div>
                              
                                <div class="col-md-4 col-xs-6">
                                    <div class="form-group">
                                        <label>Music file Upload</label>
                                        <input type="file" name="music_file[]" id="music_file" class="form-control" placeholder="Size" value="{{ old('size') }}"  required />
                                    </div>
                                </div>
                               

                                <div class="col-md-2 col-xs-12 rope-chan">
                                        <span class="btn btn-primary py-2" id="addrow" style="float: left;"><i class="fa fa-plus"
                                        aria-hidden="true"></i></span>
                                </div>
                                
                            </div>
                            <span id="multipleimage"></span>

                            <h3>Download Product Details</h3>
                            <div class="row">
                                <div class="col-md-6 col-xs-6">
                                    <div class="form-group">
                                        <label>Zip file of Download :</label>
                                        <input type="file" name="file[]" id="file" class="form-control" required >
                                        @if ($errors->has('file'))
                                        <span class="text-danger">{{ $errors->first('file') }}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <div class="form-group">
                                        <label>Amount :</label>
                                         <input type="number" name="amount[]" id="amount" step="0.01" class="form-control" placeholder="$12.98" value="{{ old('amount') }}" required >
                                         <input type="hidden" name="type[]" value="Download" >
                                        @if ($errors->has('amount'))
                                        <span class="text-danger">{{ $errors->first('amount') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                          
                             <h3>Guitar Chords Details</h3>
                            <div class="row">
                                 <div class="col-md-6 col-xs-6">
                                    <div class="form-group">
                                        <label>Guitar Chords PDF :</label> 
                                         <input type="file" name="file[]" id="file" class="form-control" >
                                        @if ($errors->has('file'))
                                        <span class="text-danger">{{ $errors->first('file') }}</span>
                                        @endif
                                    </div>
                                </div>
                                 <div class="col-md-6 col-xs-6">
                                    <div class="form-group">
                                        <label>Amount :</label>
                                         <input type="number" name="amount[]" id="amount" step="0.01" class="form-control" placeholder="$12.98" value="{{ old('amount') }}" >
                                          <input type="hidden" name="type[]" value="Guitar Chords" >
                                        @if ($errors->has('amount'))
                                        <span class="text-danger">{{ $errors->first('amount') }}</span>
                                        @endif
                                    </div>
                                </div>
                                
                            </div> 

                               <h3>CD Product Details</h3>
                            <div class="row">
                                <div class="col-md-3 col-xs-6">
                                    <div class="form-group">
                                        <label>CD Amount :<span style="color:red"> *</span></label>
                                        <input type="number" name="amount[]" id="amount" step="0.01" class="form-control" placeholder="$12.98" value="{{ old('amount') }}" required >
                                        <input type="hidden" name="type[]" value="CD" >
                                        @if ($errors->has('amount'))
                                            <span class="text-danger">{{ $errors->first('amount') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            
                            <div class="row align-items-center">
                                <div class="col-md-6 col-xs-8">
                                    <div class="form-group">
                                        <label>Song Book</label>
                                        <input type="text" name="song_book[]" id="song_book" class="form-control" placeholder="Song name" value="{{ old('song_name') }}" required  />
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
                                        <label>Album Description :<span style="color:red"> *</span></label>
                                        <textarea type="text" name="details" id="details" class="form-control"placeholder="categary Name" required >{{ old('details') }}</textarea>
                                        @if ($errors->has('details'))
                                         <span class="text-danger">{{ $errors->first('details') }}</span>
                                        @endif
                                    </div>
                                </div>

                                 <div class="col-md-6 col-xs-6">
                                    <div class="form-group">
                                        <label>Album Description 2 :<span style="color:red"> *</span></label>
                                        <textarea type="text" name="details2" id="details2" class="form-control"placeholder="categary Name" required >{{ old('details2') }}</textarea>
                                        @if ($errors->has('details2'))
                                         <span class="text-danger">{{ $errors->first('details2') }}</span>
                                        @endif
                                    </div>
                                </div>

                                  <div class="col-md-6 col-xs-6">
                                    <div class="form-group">
                                        <label>Testimonial :<span style="color:red"> *</span></label>
                                        <textarea type="text" name="testimonial" id="testimonial" class="form-control"placeholder="categary Name" required >{{ old('testimonial') }}</textarea>
                                        @if ($errors->has('testimonial'))
                                         <span class="text-danger">{{ $errors->first('testimonial') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 col-xs-6">
                                    <div class="form-group">
                                        <label>Image :<span style="color:red"> *</span></label>
                                        <input type="file" name="image" id="image" class="form-control" required />
                                        @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                    
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
                    markup = '<div class="row"   id="deleterow'+ lineNo +'"><div class="col-md-6 col-xs-8" ><div class="form-group"><input type="text" class="d-inline-block form-control"  name="song_name[]" id="song_name'+ lineNo +'"  placeholder="Song name" style="width: 100%;"></div></div><div class="col-md-4 col-xs-6"><div class="form-group"><input type="file" name="music_file[]" id="music_file'+ lineNo +'" class="form-control" placeholder="Ex 14k"  /></div></div><div class="fv-plugins-message-container d-inline-block"> <button class="btn btn-danger m-b-5 ml-2 py-2"  onclick="deleteRow('+ lineNo +')"><i class="fa fa-trash-o" aria-hidden="true"></i></button></div></div>' ;
                    tableBody = $("#multipleimage");
                    tableBody.append(markup);
                    lineNo++;
                });
                
                 $("#addbook").click(function () {                   
                    markup = '<div class="row"   id="deletebookrow'+ blineNo +'"><div class="col-md-6 col-xs-8" ><div class="form-group"><input type="text" class="d-inline-block form-control"  name="song_book[]" id="song_book'+ blineNo +'"  placeholder="Song name" style="width: 100%;"></div></div><div class="col-md-2 col-xs-12"><button class="btn btn-danger m-b-5 ml-2 py-2" onclick="deletebookrow('+ blineNo +')"><i class="fa fa-trash-o" aria-hidden="true"></i></button></div></div></div>' ;
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
