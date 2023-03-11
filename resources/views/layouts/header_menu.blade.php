<div id="logoAndNav" class="main-header-menu-wrap white-bg border-bottom">
    <div class="container">
        <nav class="js-mega-menu navbar navbar-expand-md header-nav">

            <!--logo start-->
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('img/pylcom/pylcom_logo.png')}}" width="120" alt="logo" class="img-fluid" /></a>
            <!--logo end-->

            <!--responsive toggle button start-->
            <button type="button" class="navbar-toggler btn" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
                        <span id="hamburgerTrigger">
                          <span class="fas fa-bars"></span>
                        </span>
            </button>
            <!--responsive toggle button end-->

            <!--main menu start-->
            <div id="navBar" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto main-navbar-nav" id="active_nav">
                    <!--home start-->
                    <li class="nav-item submenu-item is_active_nav_link" data-position="left" id="home_nav">
                        <a class="nav-link custom-nav-link" href="{{route('home')}}" aria-haspopup="true" aria-expanded="false">Home</a>
                    </li>
                    <!--home end-->

                    <!--pages start-->
                    <li class="nav-item submenu-item" id="main_nav">
                        <a class="nav-link custom-nav-link is_active_nav_link" href="{{route('main')}}" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Fonctionnalités</a>
                    </li>
                    <!--pages end-->


                    <!--hosting start-->
                   {{-- <li class="nav-item hs-has-mega-menu custom-nav-item" data-max-width="720px" data-position="right">
                        <a class="nav-link custom-nav-link" href="{{route('additional')}}" aria-haspopup="true" aria-expanded="false">Fonctionnalités supplémentaires</a>

                    </li>--}}
                    <!--hosting end-->

                    <!--elements start-->
                    <li class="nav-item submenu-item " data-max-width="600px" data-position="right" id="about_nav">
                        <a class="nav-link custom-nav-link" href="{{route('about')}}" aria-haspopup="true" aria-expanded="false"> À propos</a>
                    </li>
                    <!--elements end-->

                    <!--support start-->
                    <li class="nav-item submenu-item is_active_nav_link" id="contact_nav" data-max-width="360px" data-position="right">
                        <a class="nav-link custom-nav-link" href="{{route('estimate')}}" aria-haspopup="true" aria-expanded="false" >Contact</a>
                    </li>
                    <!--support end-->

                    <!--button start-->
                    {{--<li class="nav-item header-nav-last-item d-flex align-items-center">
                        <a class="btn primary-solid-btn animated-btn" href="#" target="_blank">
                            Get Started
                        </a>
                    </li>--}}
                    <!--button end-->
                </ul>
            </div>
            <!--main menu end-->
        </nav>
    </div>
</div>
