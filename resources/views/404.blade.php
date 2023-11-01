<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ config('app.name') }}: Login</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/toggle-menu/sidemenu.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script>
        function valid() {
            if ($("#email_id").val() == '') {
                $("#errmsg").html("Please enter a valid Email ID!!");
                $("#email_id").css("border-color", "red");
                return false;
            } else if ($("#password").val() == '') {
                $("#errmsg").html("Please enter your password!!");
                $("#password").css("border-color", "red");
                return false;
            }
        }
        </script>
    </head>
    <body class="bg-info">
        <div id="app" class="page">
            <section class="section">
                <div class="container">
                    <div class="row justify-content-around">
                        <div class="col-lg-8">
                            <div class="not_found">
                                <h1>404</h1>
                                <h5>OPPS! Page not found</h5>
                                <p>Sorry, the page you're looking for does not exist.</p>
                                <div class="button_section">
                                    <a href="{{ url('author') }}" class="not_found_button">Visit Home Page</a>
                                </div>
                            </div>
                        </div>
                       

                    </div>
                </div>
            </section>

            <script src="{{ asset('assets/js/toastr.min.js') }}" type=""></script>
            <script src="{{ asset('assets/js/popper.js') }}"></script>
            <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('assets/js/tooltip.js') }}"></script>
            <script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>
            <script src="{{ asset('assets/plugins/toggle-menu/sidemenu.js') }}"></script>
            <script src="{{ asset('assets/plugins/othercharts/jquery.knob.js') }}"></script>
            <script src="{{ asset('assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>
            <script src="{{ asset('assets/plugins/Chart.js/dist/Chart.min.js') }}"></script>
            <script src="{{ asset('assets/plugins/Chart.js/dist/Chart.extension.js') }}"></script>
            <script src="{{ asset('assets/plugins/morris/morris.min.js') }}"></script>
            <script src="{{ asset('assets/plugins/morris/raphael.min.js') }}"></script>
            <script src="{{ asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
            <script src="{{ asset('assets/js/dashboard2.js') }}"></script>
            <script src="{{ asset('assets/js/jquery.showmore.js') }}"></script>
            <script src="{{ asset('assets/js/sparkline.js') }}"></script>
            <script src="{{ asset('assets/js/barcharts.js') }}"></script>
            <script src="{{ asset('assets/js/othercharts.js') }}"></script>
            <script src="{{ asset('assets/js/scripts.js') }}"></script>

</html>