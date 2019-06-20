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
                <div class="card profile">
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

            <!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    {{-- <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
      </ul> --}}
    <!--/.Indicators-->
    <!--Slides-->
    @foreach ($user_posts as $user_post)
    <div class="carousel-inner" role="listbox">
      
      <div class="carousel-item active">
        <div class="view">
          <img class="d-block w-100" src="{{asset('uploads/' . $user_post->uploads)}}"
            alt="First slide">
          <div class="mask rgba-black-light"></div>
        </div>
        
        <div class="carousel-caption">
          <h3 style="color:#fff;" class="h3-responsive">{{ $user_post->subject }}</h3>
          <p style="color:#fff;">{{ $user_post->body }}</p>
        </div>
      </div>
      
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
          <img class="d-block w-100" src="{{asset('uploads/' . $user_post->uploads)}}"
            alt="First slide">
          <div class="mask rgba-black-strong"></div>
        </div>
        <div class="carousel-caption">
          <h3 style="color:#fff;" class="h3-responsive">{{ $user_post->subject }}</h3>
          <p style="color:#fff;">{{ $user_post->body }}</p>
        </div>
      </div>
      <div class="carousel-item">
        <!--Mask color-->
        <div class="view">
            <img class="d-block w-100" src="{{asset('uploads/' . $user_post->uploads)}}"
            alt="First slide">
          <div class="mask rgba-black-slight"></div>
        </div>
        <div class="carousel-caption">
          <h3 style="color:#fff;" class="h3-responsive">{{ $user_post->subject }}</h3>
          <p style="color:#fff;">{{ $user_post->body }}</p>
        </div>
      </div>
    </div>
    @endforeach
    <!--/.Slides-->
    <!--Controls-->
    {{-- <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a> --}}
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->
           
            

        </div>
    </div>
</body>
</html>