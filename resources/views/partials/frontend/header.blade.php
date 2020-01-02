<div class="probootstrap-search" id="probootstrap-search">
    <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
    <form action="#">
    <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
    </form>
</div>

<div class="probootstrap-page-wrapper">
    <!-- Fixed navbar -->
    
    <div class="probootstrap-header-top">
    <div class="container">
        <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
            <span><i class="icon-location2"></i>Brooklyn, NY 10036, United States</span>
            <span><i class="icon-phone2"></i>+1-123-456-7890</span>
            <span><i class="icon-mail"></i>info@uicookies.com</span>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
            <ul>
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-instagram2"></i></a></li>
            <li><a href="#"><i class="icon-youtube"></i></a></li>
            <li><a href="#" class="probootstrap-search-icon js-probootstrap-search"><i class="icon-search"></i></a></li>
            </ul>
        </div>
        </div>
    </div>
    </div>
<nav class="navbar navbar-default probootstrap-navbar">
    <div class="container">
        <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
                <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('welcome') }}" title="uiCookies:Enlight">Enlight</a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
            
                <li  @if (Route::currentRouteName() == 'welcome') class="active" @endif ><a href="{{ route('welcome') }}">Home</a></li>
                <li  @if (Route::currentRouteName() == 'courses') class="active" @endif ><a href="{{ route('courses') }}">Courses</a></li>
                <li @if (Route::currentRouteName() == 'teachers') class="active" @endif ><a href="{{ route('teachers') }}">Teachers</a></li>
                <li @if (Route::currentRouteName() == 'events') class="active" @endif ><a href="{{ route('events') }}">Events</a></li>
                
            
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
                    <ul class="dropdown-menu">
                        <li @if (Route::currentRouteName() == 'about-us') class="active" @endif ><a href="{{ route('about-us') }}">About Us</a></li>
                        <li  @if (Route::currentRouteName() == 'courses') class="active" @endif ><a href="{{ route('courses') }}">Courses</a></li>
                        <li @if (Route::currentRouteName() == 'teachers') class="active" @endif ><a href="{{ route('teachers') }}">Teachers</a></li>
                        <li @if (Route::currentRouteName() == 'events') class="active" @endif ><a href="{{ route('events') }}">Events</a></li>

                        <li class="dropdown-submenu dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span>Sub Menu</span></a>
                            <ul class="dropdown-menu">
                                <li @if (Route::currentRouteName() == 'about-us') class="active" @endif ><a href="{{ route('about-us') }}">About Us</a></li>
                                <li @if (Route::currentRouteName() == 'contact') class="active" @endif ><a href="{{ route('contact') }}">Contact</a></li>
                                <li  @if (Route::currentRouteName() == 'courses') class="active" @endif ><a href="{{ route('courses') }}">Courses</a></li>
                                <li @if (Route::currentRouteName() == 'teachers') class="active" @endif ><a href="{{ route('teachers') }}">Teachers</a></li>
                                <li @if (Route::currentRouteName() == 'events') class="active" @endif ><a href="{{ route('events') }}">Events</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li @if (Route::currentRouteName() == 'contact') class="active" @endif ><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>