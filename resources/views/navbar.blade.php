<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>




<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <span>
                    <img style="height: 50px; width: 50px;"
                        src="images/logo2.jpeg"
                        alt="Image"
                        class="img-fluid"
                    />
                </span>
                <a href="{{route('landingpage')}}" class="logo m-0">Planwell Homes</a>

                <ul
                    class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
                >
                    <li class="active"><a href="{{route('landingpage')}}">Home</a></li>
                    <li class="has-children">
                        <a href="#">Properties</a>
                        <ul class="dropdown">
                            <li><a href="#">Buy Property</a></li>
                            <li><a href="#">Sell Property</a></li>
{{--                            <li class="has-children">--}}
{{--                                <a href="#">Dropdown</a>--}}
{{--                                <ul class="dropdown">--}}
{{--                                    <li><a href="#">Sub Menu One</a></li>--}}
{{--                                    <li><a href="#">Sub Menu Two</a></li>--}}
{{--                                    <li><a href="#">Sub Menu Three</a></li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                        </ul>
                    </li>
{{--                    <li><a href="services.html">Services</a></li>--}}
                    <li><a href="{{route('aboutUs')}}">About</a></li>
                    <li><a href="{{route('contactUs')}}">Contact Us</a></li>
                </ul>

                <a
                    href="#"
                    class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                    data-toggle="collapse"
                    data-target="#main-navbar"
                >
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</nav>
