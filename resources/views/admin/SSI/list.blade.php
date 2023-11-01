<x-adminheader />
<x-navbar />

<div class="app-content">
    <div class="section">
        <!--page-header open-->
        <div class="page-header">
            <h4 class="page-title"> List</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-light-color">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"> List</li>
            </ol>
        </div>
        <!--page-header closed-->
        <!--row open-->
        <div class="row">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4> List
                            <a href="{{ route('ssIAdd') }}" 
                                class="btn btn-primary m-b-5 m-t-5 pull-right"><i class="fa fa-plus"
                                    aria-hidden="true"></i></a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <!-- @foreach($errors -> all() as $errvalue)
                        <span style="color:red">{{ $errvalue }}</span>
                        @endforeach -->

                        <div style="color:green; padding-left:50px ">{{ Session::get('successmsg') }}</div>
                        <div style="color:red; padding-left:50px ">{{ Session::get('errmsg') }}</div>
                        <table id="customers2" class="table datatable">
                            <thead>
                                <tr>
                                    <th width="5%">ID</th>
                                    <th width="15%">Album Name</th>                          
                                    <th width="5%">Action</th>
                                </tr>
                                <tbody>
                                @foreach($data as $item)
                                <tr>
                                    <td style="color: black;">{{ $loop -> index + 1 }}</td>
                                    <td style="color: black;">{{ $item ->songs_name }}</td>
                                    <td style="color: black;">
                                        <a  href="{{ URL('/author/ssi-songs-edit/'.$item -> id) }}"><i
                                             class="fa fa-pencil-square" aria-hidden="true"></i></a> |
                                        <a href="{{ URL('/author/album/delete/'.$item -> id) }}"
                                            onclick="return confirm('Do you really want to delete this data?')"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td> 
                                </tr>
                                @endforeach
                            </tbody>
                            </thead>
                            <tbody>
                               
                            </tbody>
                        </table>

                        <div class="text-center py-4">
				
			</div>
                    </div>
                </div>
            </div>
        </div>
        <!--row closed-->
    </div>
</div>

<script>

CKEDITOR.replace( 'description' );

    function getSubCategary(){
            var data =$('#categary_id').val();
            $.ajax({
            type: "GET",
            url: "/author/product/getSubCategary",
            data: {
                categary_id: data
            },
            success: function(response) {
               $("#subcategary_id").html(response);
                
            }
        });
    }


    function getdiscountprice(){
        var price =$('#price').val();
        var disprice = $('#discount_percentage').val();
        var finalamount = price - (price * disprice / 100);
        var discountAmt = (price * disprice / 100);
        $('#final_price').val(finalamount);
        $('#discount_amt').val(discountAmt);

    }



   function valid() {
            if ($("#categary_id").val() == '') {
                $("#errmsg").html("Please Enter A Categary");
                //$("#email").css("border-color", "red");
                return false;
            }else if ($("#subcategary_id").val() == '') {
                $("#errmsg").html("Please Enter A Sub Categary Name");
                //$("#email").css("border-color", "red");
                return false;
            } else if ($("#tittle").val() == '') {
                $("#errmsg").html("Please Enter A Tittle");
                //$("#email").css("border-color", "red");
                return false;
            }else if ($("#price").val() == '') {
                $("#errmsg").html("Please Enter Product Price");
                //$("#email").css("border-color", "red");
                return false;
            }else if ($("#discount_percentage").val() == '') {
                $("#errmsg").html("Please Enter Discount Percentage");
                //$("#email").css("border-color", "red");
                return false;
            }else if ($("#final_price").val() == '') {
                $("#errmsg").html("Please Enter Final Price");
                //$("#email").css("border-color", "red");
                return false;
            }else if ($("#discount_amt").val() == '') {
                $("#errmsg").html("Please Enter Discount Amount");
                //$("#email").css("border-color", "red");
                return false;
            } else if ($("#description").val() == '') {
                $("#errmsg").html("Please Enter A Descriptuon");
                //$("#email").css("border-color", "red");
                return false;
            } 
            else if ($("#image").val() == '') {
                $("#errmsg").html("Please Upload a Picture");
                //$("#email").css("border-color", "red");
                return false;
            }
            //else{
            //     var form = $('#form')[0];
            //     console.log(form)
            //     var data = new FormData(form);
            //     console.log(data);
            //     $.ajax({
            //         url: "/author/product/add",
            //         enctype: 'multipart/form-data',
            //         type: "POST",
            //         data:data,
            //         processData: false, // Importent
            //         contentType: false, // Importent
            //         cache: false,
            //         timeout: 600000,
            //         success: function(response){
            //             if(response == 1){
            //                 console.log(response);
            //             }
            //         }

            //     });
            // }
        }

    function multipleimage1(){
        if($("#image").val() != ''){
         //   alert($("#image").val());
            $('#mulimage1').show();
            return false;
        }if($("#image1").val() != ''){
            alert($("#image1").val());
            $('#mulimage2').show();
            return false;
        }
    }

    function multipleimage2(){
        if($("#image1").val() != ''){
            $('#mulimage2').show();
            return false;
        } 
    }
</script>
<x-adminfooter />