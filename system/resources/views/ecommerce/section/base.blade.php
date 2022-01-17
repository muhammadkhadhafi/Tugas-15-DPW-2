<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
    <title>Tugas-3-DPW-2|SINGLE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Suity Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="{{ url('public') }}/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Custom Theme files -->
    <link href="{{ url('public') }}/css/style.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{ url('public') }}/js/jquery-1.11.1.min.js"></script>
    <script>
        $(document).ready(function(c) {
            $('.alert-close').on('click', function(c) {
                $('.message').fadeOut('slow', function(c) {
                    $('.message').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(c) {
            $('.alert-close1').on('click', function(c) {
                $('.message1').fadeOut('slow', function(c) {
                    $('.message1').remove();
                });
            });
        });
    </script>
    <script>
        $(document).ready(function(c) {
            $('.alert-close2').on('click', function(c) {
                $('.message2').fadeOut('slow', function(c) {
                    $('.message2').remove();
                });
            });
        });
    </script>
    <!----details-product-slider--->
    <!-- Include the Etalage files -->
    <link rel="stylesheet" href="{{ url('public') }}/css/etalage.css">
    <script src="{{ url('public') }}/js/jquery.etalage.min.js"></script>
    <!-- Include the Etalage files -->
    <script>
        jQuery(document).ready(function($) {

            $('#etalage').etalage({
                thumb_image_width: 300,
                thumb_image_height: 400,

                show_hint: true,
                click_callback: function(image_anchor, instance_id) {
                    alert('Callback example:\nYou clicked on an image with the anchor: "' +
                        image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                }
            });
            // This is for the dropdown list example:
            $('.dropdownlist').change(function() {
                etalage_show($(this).find('option:selected').attr('class'));
            });

        });
    </script>
    <!----//details-product-slider--->
    <script src="{{ url('public') }}/js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true // 100% fit in a container
            });
        });
    </script>
</head>

<body>
    {{-- Navbar --}}
    @include('ecommerce.section.navbar')
    {{-- End Navbar --}}

    <div class="about_top">
        <div class="container">
            {{-- Content --}}
            @yield('content')
            {{-- End Content --}}
        </div>
    </div>
    </div>

    {{-- Footer --}}
    @include('ecommerce.section.footer')
    {{-- End Footer --}}
</body>

</html>
