<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- SEO Meta description -->
    <meta name="description" content="Pylcom est une solution de gestion commerciale basée sur le cloud complète, sécurisée, facile à utiliser et abordable pour tous les types d’entreprises (Unité de production et de fabrication, Distributeur, Restaurants, Magasin, Multi-Magasin, Multipoint de vente, Vente en Gros et au Détail ...).">
    <meta name="author" content="ThemeTags">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!--favicon icon-->
    <link rel="icon" href="{{asset('img/pylcom/pylcom_logo.png')}}" type="image/png" >

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!--title-->
    <title>Pylcom votre logiciel de gestion commerciale</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- endbuild -->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <style>
        .order_list{
            display: table;
            margin: 0 auto;
            text-align: left;
        }
    </style>

    @yield('css')
</head>

<body>

<!--loader start-->
@include('layouts.loader')
<!--loader end-->
<!--header section start-->
<header id="header" class="header-main">
    <!--topbar start-->
    {{--@include('layouts.topbar')--}}
    <!--topbar end-->

    <!--main header menu start-->
    @include('layouts.header_menu')
    <!--main header menu end-->
</header>
<!--header section end-->

<div class="main">

    @yield('content')


</div>
@include('layouts.partners')
<!--footer section start-->
@include('layouts.footer')
<!--footer section end-->
<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-rocket"></span>
</button>
<!--bottom to top button end-->
<!--build:js-->
<script src="{{asset('js/vendors/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('js/vendors/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/vendors/bootstrap-slider.min.js')}}"></script>
<script src="{{asset('js/vendors/jquery.countdown.min.js')}}"></script>
<script src="{{asset('js/vendors/jquery.easing.min.js')}}"></script>
<script src="{{asset('js/vendors/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/vendors/validator.min.js')}}"></script>
<script src="{{asset('js/vendors/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('js/vendors/jquery.rcounterup.js')}}"></script>
<script src="{{asset('js/vendors/magnific-popup.min.js')}}"></script>
<script src="{{asset('js/vendors/hs.megamenu.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script>
    $( document ).ready(function() {
        var currentLocation = window.location.href.split('/');
        var lastSegment = currentLocation.pop() || currentLocation.pop();
        console.log(lastSegment);
         if(lastSegment=="fonctionnalites")
             document.getElementById("main_nav").classList.add("active");
        else{
            if(lastSegment=="Qui_sommes_nous")
                document.getElementById("about_nav").classList.add("active");
            else{
                if(lastSegment=="contact")
                    document.getElementById("contact_nav").classList.add("active");
                else{
                    if (lastSegment=="tarifs")
                         document.getElementById("procing_nav").classList.add("active");
                    else
                        document.getElementById("home_nav").classList.add("active");
                }

            }

         }
    })
</script>
@yield('js')
<!--endbuild-->
</body>

</html>
