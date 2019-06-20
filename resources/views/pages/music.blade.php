@extends('layouts.main')

@section('title','| Music')

@section('posts')

@foreach ($comments as $comment)
    <li class="g1-collection-item">
        
        <article id="post-271" class="entry-tpl-stream post-271 post type-post status-publish format-standard has-post-thumbnail category-bimber-funny tag-bimber-dogs tag-bimber-dont-miss tag-bimber-food tag-bimber-home snax_format-text" itemscope="" itemtype="http://schema.org/Article">
            <header class="entry-header">
                <div class="entry-before-title"></div>
                <h2 class="g1-alpha g1-alpha-1st entry-title" itemprop="headline">
                <img alt='' src='https://bimber-ssl.bringthepixel.com/gagster/wp-content/uploads/sites/3/2016/11/author_04_v01-30x30.jpg' 
                srcset='https://bimber-ssl.bringthepixel.com/gagster/wp-content/uploads/sites/3/2016/11/author_04_v01-60x60.jpg 2x' 
                class='avatar avatar-30 photo' height='30' width='30' />
                <h3>{{ $comment->subject }}</h3>
                </h2>
                <div class="entry-after-title"></div>
            </header>
            
            <figure class="entry-featured-media "  itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
                <div class="g1-frame-inner">
                
                    <p>{{ $comment->body }}</p>
                
                    <span class="g1-frame-icon g1-frame-icon-"></span>
                </div>
                </a>

                <meta itemprop="url" content="" />
                <meta itemprop="width" content="1152" /><meta itemprop="height" content="1152" />
            </figure>
            
            <div class="entry-body">
                <p class="g1-meta entry-meta entry-byline entry-byline-with-avatar"> 
                    <span class="entry-author" itemscope="" itemprop="author" 
                    itemtype="http://schema.org/Person">
                        <img src="{{asset('uploads/' . $comment->uploads)}}" alt="">
                        <span class="entry-meta-label">by</span> 
                        <a href="https://bimber.bringthepixel.com/gagster/buddypress/members/charles_gagster/profile/home/" title="Posts by Charles Wellington" 
                        rel="author">
                            <img alt='' src='https://bimber-ssl.bringthepixel.com/gagster/wp-content/uploads/sites/3/2016/11/author_02_v01-30x30.jpg' 
                            srcset='https://bimber-ssl.bringthepixel.com/gagster/wp-content/uploads/sites/3/2016/11/author_02_v01-60x60.jpg 2x' 
                            class='avatar avatar-30 photo' height='30' width='30' /> 
                            <strong itemprop="name">Maggie Mull</strong> 
                        </a> 
                    </span> 
                    <time class="entry-date" datetime="2019-05-03T15:10:43" itemprop="datePublished">May 3, 2019, 3:10 pm</time>
                </p>
            </div>
            <div class="entry-todome g1-dropable snax"><div class="snax-voting snax-voting-positive snax-voting-s" data-snax-item-id="271">
                <div class="snax-voting-score"> <strong>675</strong> points</div> 
                <a href="#" class="snax-voting-upvote snax-guest-voting" title="Upvote" data-snax-item-id="271" data-snax-author-id="0" data-snax-nonce="05973a0f70">Upvote</a> 
                <a href="#" class="snax-voting-downvote snax-guest-voting" title="Downvote" data-snax-item-id="271" data-snax-author-id="0" 
                data-snax-nonce="05973a0f70">Downvote</a></div><aside class="mashsb-container mashsb-compact mashsb-stretched">
                <div class="mashsb-box">
                    <div class="mashsb-buttons"><a  class="mashicon-facebook mash-large mash-center mashsb-noshadow" 
                    href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fbimber.bringthepixel.com%2Fgagster%2Fwe-make-it-easy%2F" target="_blank" 
                    rel="nofollow">
                        <span class="icon"></span><span class="text">Facebook</span></a><a  
                        class="mashicon-twitter mash-large mash-center mashsb-noshadow" 
                        href="https://twitter.com/intent/tweet?text=We make it easy&url=https://bimber.bringthepixel.com/gagster/?p=271" target="_blank" 
                        rel="nofollow"><span class="icon"></span><span class="text">Twitter</span></a><div class="onoffswitch mash-large mashsb-noshadow">
                        </div>
                        <div class="secondary-shares" style="display:none;"><a  class="mashicon-subscribe mash-large mash-center mashsb-noshadow" 
                        href="#" target="_blank" rel="nofollow"><span class="icon"></span><span class="text">Subscribe</span></a>
                        <a  class="mashicon-pinterest mash-large mash-center mashsb-noshadow" href="#" 
                        data-mashsb-url="https://www.pinterest.com/pin/create/button/?url=https%3A%2F%2Fbimber.bringthepixel.com%2Fgagster%2Fwe-make-it-easy%2F&media=https://bimber.bringthepixel.com/gagster/wp-content/uploads/sites/3/2015/12/funny_02_v01-300x300.jpg&description=We make it easy" 
                        target="_blank" rel="nofollow"><span class="icon"></span><span class="text">Pinterest</span></a>
                        <div class="onoffswitch2 mash-large mashsb-noshadow" style="display:none;"></div>
                        </div>
                    </div>
                </div>
                <div style="clear:both;"></div></aside>
            </div>
            @auth
            @if (Auth::user()->role == 0)
            <div class="actionBox">
                <form action="{{ route('Comments.store') }}" method="POST" class="pb5" class="form-inline" role="form">
                    @csrf
                    <div class="form-group">
                        <input class="form-control" name="commentId" type="hidden" value="{{ $comment->id }}"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" name="category" type="hidden" value="{{ $comment->category }}" />
                    </div>
                    <div class="form-group">
                        <input required class="form-control" name="post" type="text" placeholder="Comment ..." />
                    </div>
                    <div style="position:relative; margin-top:-2%;" class="form-group">
                        <button class="btn btn-primary">Post</button>
                    </div>
                </form>
            </div>
            
            <div class="dropdown">
                <button style="width:100% !important;" class="btn btn-primary btn-block dropdown-toggle" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                View All Comments
                <span class="caret"></span>
                </button>
                <ul class="dropdown-menu btn-block" aria-labelledby="about-us">
                    @foreach ($posts as $post)
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">{{$post->user->name}}</li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">{{$post->post}}</a></li>
                    <li role="separator" class="divider"></li>
                    @endforeach
                </ul>
            </div>
            @elseif(Auth::user()->role == 1)
            <div class="dropdown">
                <button style="width:100% !important;" class="btn btn-primary btn-block dropdown-toggle" type="button" id="about-us" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                View All Comments
                <span class="caret"></span>
                </button>
                <ul class="dropdown-menu btn-block" aria-labelledby="about-us">
                    @foreach ($posts as $post)
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">{{$post->user->name}}</li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">{{$post->post}}</a></li>
                    <li role="separator" class="divider"></li>
                    @endforeach
                </ul>
            </div>
            <form action="{{ route('Comments.delete', $comment->id)}}" method="delete">
                    {{ csrf_field() }}
                <button type="sumit" class="btn btn-danger btn-block" data-toggle="modal" data-target="#exampleModalCenter" style="width:100% !important;" >
                <a style="text-decoration:none !important; color:whitesmoke !important;"><b style="font-size:15px">DELETE THIS POST</b></a>
                </button>
            </form>
            @endif
            @endauth
        </article>
    </li>
@endforeach

@endsection

@section('mostviewed')
<aside id="bimber_widget_posts-8" class="widget widget_bimber_widget_posts">
        <header>
        <h2 class="g1-delta g1-delta-2nd widgettitle">
            <span>Most Viewed</span>
        </h2>
       </header>
       <div id="g1-widget-posts-1" class=" g1-widget-posts">
       <div class="g1-collection g1-collection-columns-1">
       <div class="g1-collection-viewport">
       <ul class="g1-collection-items">
            
       <li class="g1-collection-item">
           <article class="entry-tpl-grid-fancy post-305 post type-post status-publish format-standard has-post-thumbnail category-bimber-funny tag-bimber-bimber tag-bimber-sidebar tag-bimber-update">
               <figure class="entry-featured-media " >
               <a title="Another Bimber update" class="g1-frame" href="https://bimber.bringthepixel.com/gagster/another-bimber-update/">
                   <div class="g1-frame-inner" style="padding-bottom: 42.85714286%;">
                   <img width="364" height="156" src="https://bimber.bringthepixel.com/gagster/wp-content/plugins/media-ace/includes/lazy-load/images/blank.png" 
                   class="attachment-bimber-grid-fancy size-bimber-grid-fancy lazyload wp-post-image" alt="" 
                   data-src="images/gaming.jpg" data-expand="600" />
                   <span class="g1-frame-icon g1-frame-icon-"></span></div></a>
               </figure>
                   <div class="entry-counter"></div>
                   <div class="entry-body">
                       <header class="entry-header">
                       <div class="entry-before-title"></div>
                       <h3 class="g1-delta g1-delta-1st entry-title">
                       <a href="images/gaming.jpg" rel="bookmark">FIFA 2020 will be FIRE!</a>
                       </h3>
                       </header>
                   </div>
           </article>
       </li>
   
       <li class="g1-collection-item">
           <article class="entry-tpl-grid-fancy post-208 post type-post status-publish format-standard has-post-thumbnail category-bimber-wow tag-bimber-hardcore tag-bimber-home tag-bimber-jump tag-bimber-parkour tag-bimber-sidebar">
               <figure class="entry-featured-media " >
                   <a title="Hardcore parkour&#8230;" class="g1-frame" href="images/AI.jpg">
                   <div class="g1-frame-inner" style="padding-bottom: 42.85714286%;">
                   <img width="364" height="156" src="images/AI.jpg" 
                   class="attachment-bimber-grid-fancy size-bimber-grid-fancy lazyload wp-post-image" alt="" 
                   data-src="images/AI.jpg" data-expand="600" 
                   data-sizes="(max-width: 364px) 100vw, 364px" />
                   <span class="g1-frame-icon g1-frame-icon-"></span></div></a>
               </figure>
                   <div class="entry-counter"></div>
                   <div class="entry-body">
                       <header class="entry-header">
                           <div class="entry-before-title"></div>
                           <h3 class="g1-delta g1-delta-1st entry-title">
                           <a href="images/AI.jpg" rel="bookmark">PHP is highly marketable</a></h3>
                       </header>
                   </div>
           </article>
       </li>
                           
       {{-- <li class="g1-collection-item">
           <article class="entry-tpl-grid-fancy post-202 post type-post status-publish format-standard has-post-thumbnail category-bimber-nfsw category-bimber-wow tag-bimber-dude tag-bimber-girl tag-bimber-muscle tag-bimber-selfie tag-bimber-sidebar">
               <figure class="entry-featured-media entry-media-nsfw " >
                   <a title="Yo, check out my stuff" class="g1-frame" href="images/got.jpg">
                   <div class="g1-frame-inner" style="padding-bottom: 42.85714286%;">
                   <img width="364" height="156" src="images/got.jpg" 
                   class="attachment-bimber-grid-fancy size-bimber-grid-fancy lazyload wp-post-image" alt="" 
                   data-src="images/got.jpg" data-expand="600" 
                   data-sizes="(max-width: 364px) 100vw, 364px" />
                   <span class="g1-frame-icon g1-frame-icon-"></span>
                   <div class="g1-nsfw">
                       <div class="g1-nsfw-inner"><i class="g1-nsfw-icon"></i>
                       <div class="g1-nsfw-title">Game of Thrones Season 8 was a fail</div>
                      
               </figure>
                   <div class="entry-counter"></div>
                       <div class="entry-body">
                           <header class="entry-header"><div class="entry-before-title"></div>
                           <h3 class="g1-delta g1-delta-1st entry-title">
                           <a href="https://bimber.bringthepixel.com/gagster/yo-check-stuff/" rel="bookmark">Yo, check out my stuff</a></h3>
                           </header>
                       </div>
           </article>
       </li> --}}
   
       <li class="g1-collection-item">
           <article class="entry-tpl-grid-fancy post-194 post type-post status-publish format-standard has-post-thumbnail category-bimber-wow tag-bimber-balloons tag-bimber-sidebar">
               <figure class="entry-featured-media " >
                   <a title="The Best Balloons of 2017" class="g1-frame" href="images/got.jpg">
                   <div class="g1-frame-inner" style="padding-bottom: 42.85714286%;">
                   <img width="364" height="156" src="images/got.jpg" 
                   class="attachment-bimber-grid-fancy size-bimber-grid-fancy lazyload wp-post-image" alt="" 
                   data-src="images/got.jpg" data-expand="600" 
                   data-sizes="(max-width: 364px) 100vw, 364px" />
                   <span class="g1-frame-icon g1-frame-icon-"></span></div></a>
               </figure>
                   <div class="entry-counter"></div>
                   <div class="entry-body">
                       <header class="entry-header">
                           <div class="entry-before-title"></div>
                           <h3 class="g1-delta g1-delta-1st entry-title">
                           <a href="images/got.jpg" rel="bookmark">Game of Thrones Season 8 was a total fail</a></h3>
                       </header>
                   </div>
           </article>
       </li>
   
       <li class="g1-collection-item">
           <article class="entry-tpl-grid-fancy post-188 post type-post status-publish format-standard has-post-thumbnail category-bimber-wtf tag-bimber-driver tag-bimber-scream tag-bimber-sidebar">
               <figure class="entry-featured-media " >
                   <a title="23 Of The Most WTF Nails You Won&#8217;t Be Able To Forget" class="g1-frame" href="https://bimber.bringthepixel.com/gagster/wtf-nails-wont-able-forget/">
                   <div class="g1-frame-inner" style="padding-bottom: 42.85714286%;">
                   <img width="364" height="156" src="images/smartphone.jpg" 
                   class="attachment-bimber-grid-fancy size-bimber-grid-fancy lazyload wp-post-image" alt="" 
                   data-src="images/smartphone.jpg" data-expand="600" 
                   data-sizes="(max-width: 364px) 100vw, 364px" />
                   <span class="g1-frame-icon g1-frame-icon-"></span></div></a>
               </figure>
                   <div class="entry-counter"></div>
                   <div class="entry-body">
                       <header class="entry-header"><div class="entry-before-title"></div><h3 class="g1-delta g1-delta-1st entry-title">
                       <a href="images/smartphone.jpg" rel="bookmark">Smartphone that changes the age of a person</a></h3>
                       </header>
                   </div>
           </article>
       </li>
   
       <li class="g1-collection-item">
           <article class="entry-tpl-grid-fancy post-184 post type-post status-publish format-standard has-post-thumbnail category-bimber-wtf tag-bimber-bicycle tag-bimber-sidebar">
               <figure class="entry-featured-media " >
                   <a title="25 Things That Will Change Your Mind About Eating Meat" class="g1-frame" href="https://bimber.bringthepixel.com/gagster/things-will-change-mind-eating-meat/">
                   <div class="g1-frame-inner" style="padding-bottom: 42.85714286%;">
                   <img width="364" height="156" src="images/minions.gif" 
                   class="attachment-bimber-grid-fancy size-bimber-grid-fancy lazyload wp-post-image" alt="" 
                   data-src="images/minions.gif" data-expand="600" 
                    data-sizes="(max-width: 364px) 100vw, 364px" />
                   <span class="g1-frame-icon g1-frame-icon-"></span></div></a>
               </figure>
                   <div class="entry-counter"></div>
                   <div class="entry-body">
                       <header class="entry-header">
                       <div class="entry-before-title"></div><h3 class="g1-delta g1-delta-1st entry-title">
                       <a href="images/minions.gif" rel="bookmark">10 exciting ways to celebrate your birthday</a></h3>
                       </header>
                   </div>
           </article>
       </li>
   </ul>
   </div>
   </div>
   </div>
</aside>

<aside id="mc4wp_form_widget-13" class="widget widget_mc4wp_form_widget">
        <header><h2 class="g1-delta g1-delta-2nd widgettitle">
        <span>Newsletter</span></h2>
        </header>
        <script>(function() {
        if (!window.mc4wp) {
            window.mc4wp = {
                listeners: [],
                forms    : {
                    on: function (event, callback) {
                        window.mc4wp.listeners.push({
                            event   : event,
                            callback: callback
                        });
                    }
                }
            }
        }
       })();</script>
       
       <form id="mc4wp-form-2" class="mc4wp-form mc4wp-form-313" method="post" data-id="313" data-name="Default sign-up form" >
           <p class="g1-alpha g1-alpha-1st">Get the best viral stories straight into your inbox!</p>
           <div class="mc4wp-form-fields"><p> 
               <label>Email address: </label> 
               <input type="email" name="EMAIL" placeholder="Your email address" required /></p><p> 
               <input type="submit" value="Subscribe" /></p>
            </div>
            <label style="display: none !important;">Leave this field empty if you're human: 
                <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off" />
            </label>
            <input type="hidden" name="_mc4wp_timestamp" value="1556896243" /><input type="hidden" name="_mc4wp_form_id" value="313" />
            <input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-2" /><div class="mc4wp-response"></div>
            <p class="g1-meta g1-newsletter-privacy">Don't worry, we don't spam</p>
        </form>
</aside>
   @endsection