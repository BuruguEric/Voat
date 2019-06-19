@include('partials._head')

<body class="home-page bp-legacy home blog wp-embed-responsive snax-hoverable g1-layout-stretched g1-hoverable g1-has-mobile-logo g1-sidebar-normal no-js" itemscope itemtype="http://schema.org/WebPage">
    <div class="g1-body-inner">
        <div id="page">
            <div class="g1-row g1-row-layout-page g1-hb-row g1-hb-row-normal g1-hb-row-a g1-hb-row-1 g1-hb-full g1-hb-sticky-off g1-hb-shadow-off">
            <div class="g1-row-inner"><div class="g1-column g1-dropable"><div class="g1-bin-1 g1-bin-grow-off">
            <div class="g1-bin g1-bin-align-left"></div></div><div class="g1-bin-2 g1-bin-grow-off">
            <div class="g1-bin g1-bin-align-center"></div></div>
            <div class="g1-bin-3 g1-bin-grow-off"><div class="g1-bin g1-bin-align-right"></div></div></div></div>
            <div class="g1-row-background"></div></div>
            <div class="g1-sticky-top-wrapper g1-hb-row-2">
            <div class="g1-row g1-row-layout-page g1-hb-row g1-hb-row-normal g1-hb-row-b g1-hb-row-2 g1-hb-full g1-hb-sticky-on g1-hb-shadow-off">
            
            @include('partials._navbar')
            
            <div class="g1-row-background"></div></div></div>

            <div class="container">
                <div class="card">
                    <div class="card-header">{{Auth::user()->name}}</div>
                    <div class="card-body">{{Auth::user()->email}}</div>
                </div>
                

                {{-- @foreach ($user_posts as $user_post)
                <div class="card" style="width:400px">
                    <img src="{{asset('uploads/' . $user_post->uploads)}}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{$user_post->subject}}</h4>
                        <p class="card-text">{{$user_post->body}}</p>
                    </div>
                </div><br>
                @endforeach --}}
            </div>

            
            <div class="container" id="myCarousel" class="carousel slide" data-interval="500" data-ride="carousel">
                    <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
               
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    @foreach ($user_posts as $user_post)
                    <div class="item active">
                        <img height="40%"src="{{asset('uploads/' . $user_post->uploads)}}" alt="">
                        <div class="carousel-caption">
                            
                        </div>
                    </div>
                    <h3>{{$user_post->subject}}</h3>
                    <p>{{$user_post->body}}</p>
                    @endforeach
                </div>
               
                
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            

        </div>
    </div>
</body>