<div class="g1-row-inner">
    <div class="g1-column g1-dropable">
        <div class="g1-bin-1 g1-bin-grow-off">
            <div class="g1-bin g1-bin-align-left">
                <div class="g1-id">
                    {{-- LOGO ON THE NAVBAR --}}
                <h1 class="g1-mega g1-mega-1st site-title"> <a class="g1-logo-wrapper" href="{{route('index')}}" rel="home"> 
                        <img class="g1-logo g1-logo-default" width="138" height="43" src="images/voatname.png" /> </a>
                    </h1>
                </div>
                
                <nav id="g1-primary-nav" class="g1-primary-nav">
                    <ul id="g1-primary-nav-menu" class="g1-primary-nav-menu">
                    <li id="menu-item-1000000" class="menu-item menu-item-type-g1-top menu-item-object-page menu-item-g1-standard menu-item-1000000">
                    <a href="{{route('top10')}}">Top<strong>10</strong></a></li>

                    <li id="menu-item-1870" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-g1-standard menu-item-1870">
                        <a href="{{route('technology')}}" style="font-size:15px;">Technology</a></li>

                        <li id="menu-item-1871" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-g1-standard menu-item-1871">
                        <a href="{{route('science')}}" style="font-size:15px;" >Science</a></li>

                        <li id="menu-item-1872" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-g1-standard menu-item-1872">
                        <a href="{{route('programming')}}" style="font-size:15px;">Programming</a></li>

                        <li id="menu-item-1873" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-g1-standard menu-item-1873">
                        <a href="{{route('music')}}" style="font-size:15px;">Music</a></li>

                        <li id="menu-item-1874" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-g1-standard menu-item-1874">
                        <a href="{{route('gaming')}}" style="font-size:15px;">Gaming</a></li>

                        <li id="menu-item-1875" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-g1-standard menu-item-1875">
                        <a href="{{route('aww')}}" style="font-size:15px;">Aww</a></li>

                        <li id="menu-item-1876" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-g1-standard menu-item-1876">
                        <a href="{{route('books')}}" style="font-size:15px;">Books</a></li>

                        <li id="menu-item-1877" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-g1-standard menu-item-1877">
                        <a href="{{route('gif')}}" style="font-size:15px;">GIFs</a></li>
                        
                        <li id="menu-item-1878" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-g1-standard menu-item-1878">
                        <a href="{{route('sports')}}" style="font-size:15px;">Sports</a></li>

                        <li id="menu-item-1879" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-g1-standard menu-item-1879">
                        <a href="{{route('tv')}}" style="font-size:15px;">TV</a></li>

                    </ul>
                </nav>
                <div class="g1-bin-3 g1-bin-grow-off">
                        <div class="g1-bin g1-bin-align-right">
                            <div class="g1-drop g1-drop-nojs g1-drop-before g1-drop-the-skin g1-drop-the-skin-light g1-drop-m g1-drop-icon"> 
                                <button class="g1-button-none g1-drop-toggle"> 
                                <span class="moon icon"></span>
                                <span class="g1-drop-toggle-text"></span> 
                                <span class="g1-drop-toggle-arrow"></span> 
                                </button>
                            </div>
            
                        @guest
                            <div class="g1-drop g1-drop-before g1-drop-the-search  g1-drop-m g1-drop-icon "> 
                                <a class="g1-drop-toggle" href="#"> 
                                {{-- <span class="g1-drop-toggle-icon"></span> --}}
                                <span class="search icon">{{--Search--}}</span> 
                                <span class="g1-drop-toggle-arrow"></span> </a>
                                <div class="g1-drop-content"><div role="search" class="search-form-wrapper">
                                <form method="get" class="g1-searchform-tpl-default g1-searchform-ajax search-form" action="#"> 
                                    <label> <span class="screen-reader-text">Search for:</span> 
                                    <input type="search" class="search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" /> </label> 
                                    {{-- <button class="search-submit ">Search</button> --}}
                                </form>
                            
                                <div class="g1-searches g1-searches-ajax"></div></div></div>
                            </div>
                            <nav class="g1-drop g1-drop-before g1-drop-the-user  g1-drop-m g1-drop-icon "> 
                                <a class="g1-drop-toggle snax-login-required" > 
                                <a href="{{ route('login')}}"><span class="login icon"></span></a>
                                <span class="g1-drop-toggle-text">{{-- Login  --}}</span> 
                                <span class="g1-drop-toggle-arrow"></span> </a>
                            </nav>
                        @endguest
            
                        @auth
                            
                        @if (Auth::user()->role == 0)
                        <div>
                            <div aria-labelledby="navbarDropdown">
                                <span class="btn btn-default dropdown-toggle" data-toggle="dropdown"><i style="color:ghostwhite" class="fas fa-user-cog"></i></span>
                                <div style="min-width: 118px; max-width: 50px;" class="dropdown-menu" >
                                    <a class="dropdown-header"><b>{{ Auth::user()->name }}</b></a>
                                    <a class="dropdown-header" href="{{ route('userProfile') }}">Account details</a>
                                    <a style="margin-top:-5px !important;" class="dropdown-header" href="{{ route('userPosts') }}">My Posts</a></span>
                                    <a class="dropdown-header" href="{{ route('user.logout') }}" onclick="event.preventDefault(); 
                                        document.getElementById('user-logout-form').submit();"><i class="fas fa-power-off"></i>
                                        {{ __('Logout') }}
                                    </a>                                                                        
                                </div>
                                <form id="user-logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
                                @csrf
                                </form>
                            </div>
                        </div>
            
                        @elseif(Auth::user()->role == 1)
                        <div class="dropdown">
                            <div aria-labelledby="navbarDropdown">
                                <span class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></span>
                                <div class="dropdown-menu" style="min-width: 118px; max-width: 118px;">
                                    <a class="dropdown-header"><b>{{ Auth::user()->name }}</b></a>
                                    <a class="dropdown-header" href="{{ route('userProfile') }}">Account details</a>
                                    <a style="margin-top:-5px !important;" class="dropdown-header" href="{{ route('userPosts') }}">My Posts</a></span>
                                    <a class="dropdown-header" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); 
                                        document.getElementById('user-logout-form').submit();"><i class="fas fa-power-off"></i>
                                        {{ __('Logout') }}
                                    </a>
                                </div>
                                <form class="dropdown-item" id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                @csrf
                                </form>
                            </div>
                        </div>
                        @endif
                        @endauth
                        </div>
                    </div>
            </div>
        </div>
    
    </div>
</div>