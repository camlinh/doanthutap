<!DOCTYPE html>
<html lang="en">
        <head>
                <title>thực hành tốt nghiệp</title>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="description" content="Lingua project">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <base href={{asset('')}}>
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
                <link rel="stylesheet" href="sourse/css/bootstrap.css">
                <link rel="icon" href="sourse/img/favicon.png" type="sourse/image/png">
                <title>Seelife Charity</title>
                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="sourse/css/bootstrap.css">
                <link rel="stylesheet" href="sourse/vendors/linericon/style.css">
                <link rel="stylesheet" href="sourse/css/font-awesome.min.css">
                <link rel="stylesheet" href="sourse/vendors/lightbox/simpleLightbox.css">
                <link rel="stylesheet" href="sourse/vendors/nice-select/css/nice-select.css">
                <!-- main css -->
                <link rel="stylesheet" href="sourse/css/style.css">
                <link rel="stylesheet" href="sourse/css/responsive.css">
        </head>
        <body>
                <div class="super_container">
                        <!-- Header -->
                        @include('block/header')
                        <!-- Menu -->
                        
                        @yield('content')
                        <!-- Footer -->
                        @include('block/footer')
                </div>
                <!-- jQuery library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <!-- Latest compiled JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
                </script>
                <script src="sourse/js/jquery-3.2.1.min.js"></script>
                <script src="sourse/js/popper.js"></script>
                <script src="sourse/js/bootstrap.min.js"></script>
                <script src="sourse/js/stellar.js"></script>
                <script src="sourse/vendors/lightbox/simpleLightbox.min.js"></script>
                <script src="sourse/vendors/nice-select/js/jquery.nice-select.min.js"></script>
                <script src="sourse/js/jquery.ajaxchimp.min.js"></script>
                <script src="sourse/js/mail-script.js"></script>
                <script src="sourse/js/countdown.js"></script>
                <!--gmaps Js-->
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
                <script src="sourse/js/gmaps.min.js"></script>
                <script src="sourse/js/theme.js"></script>
        </body>
</html>