<!DOCTYPE html> 
<html>
<head>
    <meta charset="UTF-8"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    

    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One|Nunito" rel="stylesheet"> 
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="https://bimber.bringthepixel.com/gagster/xmlrpc.php"/>
    <link type="text/css" media="all" href="https://bimber.bringthepixel.com/gagster/wp-content/cache/autoptimize/3/css/autoptimize_ae396ce2662ed383d7c106ee0b76562b.css" rel="stylesheet" />
    <link type="text/css" media="screen" href="https://bimber.bringthepixel.com/gagster/wp-content/cache/autoptimize/3/css/autoptimize_fe7dae6e5ce091a81e59eeef557c68a7.css" rel="stylesheet" />
    <title>Voat @yield('title')</title>
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="Bimber Gagster Demo &raquo; Feed" href="https://bimber.bringthepixel.com/gagster/feed/" />
    <link rel="alternate" type="application/rss+xml" title="Bimber Gagster Demo &raquo; Comments Feed" href="https://bimber.bringthepixel.com/gagster/comments/feed/" />
    <style type="text/css">

    .carousel {
    width:50%;
    height:50%;
    margin: auto;
    width: 50%;
    border: 3px solid blue;
    padding: 10px;
    }
    .profile{
        width:50%; 
        margin: auto; 
        font-family: 'Open Sans'; 
        font-size:20px;
        color:#000;
        text-decoration: none !important;
    }

    *{
        text-decoration: none !important;
    }
    html{
        margin-top: 0% !important;
        
    }
    .g1-sticky-top-wrapper {
        top: 0px;
    }
    img.wp-smiley,
   img.emoji {
       display: inline !important;
       border: none !important;
       box-shadow: none !important;
       height: 1em !important;
       width: 1em !important;
       margin: 0 .07em !important;
       vertical-align: -0.1em !important;
       background: none !important;
       padding: 0 !important;
   }</style><style id='mashsb-styles-inline-css' type='text/css'>.mashsb-count {color:#cccccc;}</style><link crossorigin="anonymous" rel='stylesheet' id='bimber-google-fonts-css'  href='//fonts.googleapis.com/css?family=Roboto%3A400%2C300%2C500%2C600%2C700%2C900%7CPoppins%3A400%2C300%2C500%2C600%2C700&#038;subset=latin%2Clatin-ext&#038;ver=7.0.1' type='text/css' media='all' /> 
   <script type='text/javascript' src='https://bimber.bringthepixel.com/gagster/wp-includes/js/jquery/jquery.js?ver=1.11.3'></script> 
   <script type='text/javascript'>var mejsL10n = {"language":"en","strings":{"mejs.install-flash":"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen-off":"Turn off Fullscreen","mejs.fullscreen-on":"Go Fullscreen","mejs.download-video":"Download Video","mejs.fullscreen":"Fullscreen","mejs.time-jump-forward":["Jump forward 1 second","Jump forward %1 seconds"],"mejs.loop":"Toggle Loop","mejs.play":"Play","mejs.pause":"Pause","mejs.close":"Close","mejs.time-slider":"Time Slider","mejs.time-help-text":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.","mejs.time-skip-back":["Skip back 1 second","Skip back %1 seconds"],"mejs.captions-subtitles":"Captions\/Subtitles","mejs.captions-chapters":"Chapters","mejs.none":"None","mejs.mute-toggle":"Mute Toggle","mejs.volume-help-text":"Use Up\/Down Arrow keys to increase or decrease volume.","mejs.unmute":"Unmute","mejs.mute":"Mute","mejs.volume-slider":"Volume Slider","mejs.video-player":"Video Player","mejs.audio-player":"Audio Player","mejs.ad-skip":"Skip ad","mejs.ad-skip-info":["Skip in 1 second","Skip in %1 seconds"],"mejs.source-chooser":"Source Chooser","mejs.stop":"Stop","mejs.speed-rate":"Speed Rate","mejs.live-broadcast":"Live Broadcast","mejs.afrikaans":"Afrikaans","mejs.albanian":"Albanian","mejs.arabic":"Arabic","mejs.belarusian":"Belarusian","mejs.bulgarian":"Bulgarian","mejs.catalan":"Catalan","mejs.chinese":"Chinese","mejs.chinese-simplified":"Chinese (Simplified)","mejs.chinese-traditional":"Chinese (Traditional)","mejs.croatian":"Croatian","mejs.czech":"Czech","mejs.danish":"Danish","mejs.dutch":"Dutch","mejs.english":"English","mejs.estonian":"Estonian","mejs.filipino":"Filipino","mejs.finnish":"Finnish","mejs.french":"French","mejs.galician":"Galician","mejs.german":"German","mejs.greek":"Greek","mejs.haitian-creole":"Haitian Creole","mejs.hebrew":"Hebrew","mejs.hindi":"Hindi","mejs.hungarian":"Hungarian","mejs.icelandic":"Icelandic","mejs.indonesian":"Indonesian","mejs.irish":"Irish","mejs.italian":"Italian","mejs.japanese":"Japanese","mejs.korean":"Korean","mejs.latvian":"Latvian","mejs.lithuanian":"Lithuanian","mejs.macedonian":"Macedonian","mejs.malay":"Malay","mejs.maltese":"Maltese","mejs.norwegian":"Norwegian","mejs.persian":"Persian","mejs.polish":"Polish","mejs.portuguese":"Portuguese","mejs.romanian":"Romanian","mejs.russian":"Russian","mejs.serbian":"Serbian","mejs.slovak":"Slovak","mejs.slovenian":"Slovenian","mejs.spanish":"Spanish","mejs.swahili":"Swahili","mejs.swedish":"Swedish","mejs.tagalog":"Tagalog","mejs.thai":"Thai","mejs.turkish":"Turkish","mejs.ukrainian":"Ukrainian","mejs.vietnamese":"Vietnamese","mejs.welsh":"Welsh","mejs.yiddish":"Yiddish"}};</script> <script type='text/javascript'>var _wpmejsSettings = {"pluginPath":"\/gagster\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};</script> <script type='text/javascript'>var wpp_params = {"sampling_active":"0","sampling_rate":"100","ajax_url":"https:\/\/bimber.bringthepixel.com\/gagster\/wp-json\/wordpress-popular-posts\/v1\/popular-posts\/","ID":"","token":"9b81f75b66","debug":""};</script> <link rel='https://api.w.org/' href='https://bimber.bringthepixel.com/gagster/wp-json/' /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://bimber.bringthepixel.com/gagster/xmlrpc.php?rsd" /><link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://bimber.bringthepixel.com/gagster/wp-includes/wlwmanifest.xml" /><style>.lazyload, .lazyautosizes, .lazybuffered {
               opacity: 0;
           } 
           .icon::before { 
            font-family: "FontAwesome";
            font-size: 18px;
            }
            .moon::before { 
            content: "\f186";
            font-size: 22px !important;
            margin-right: 19px;
            }
            .search::before { 
            content: "\f002";
            font-size: 22px !important;
            margin-right: 20px;
            }
            .login::before { 
            content: "\f007";
            font-size: 24px !important;
            margin-right: 12px;
            color:white;
            }
           .meme::before { 
            content: "\f066";
            }
            .image::before { 
            content: "\f03e";
            }
            .story::before { 
            content: "\f066";
            }
            .backtotop::before { 
            content: "\f30c";
            }
            :hover {
            color:#45b7e0 !important;
            } 
            .g1-primary-nav-menu{
             padding-top: 20px;
            }
            
            
      /* * {
          font-family: '';
      }
      div {
          font-family: '';
      } */
       
            

           .lazyloaded {
               opacity: 1;
               transition: opacity 0.175s ease-in-out;
           }
   
           iframe.lazyloading {
               opacity: 1;
               transition: opacity 0.375s ease-in-out;
               background: #f2f2f2 no-repeat center;
           }
           iframe.lazyloaded {
               opacity: 1;
           }</style> <script type="text/javascript">var ajaxurl = 'https://bimber.bringthepixel.com/gagster/wp-admin/admin-ajax.php';</script> 
           {{-- <style>@font-face {
           font-family: "bimber";
            src:url("https://bimber.bringthepixel.com/gagster/wp-content/themes/bimber/css/theme_ver/bimber/fonts/bimber.eot");
               src:url("https://bimber.bringthepixel.com/gagster/wp-content/themes/bimber/css/theme_ver/bimber/fonts/bimber.eot?#iefix") format("embedded-opentype"),
               url("https://bimber.bringthepixel.com/gagster/wp-content/themes/bimber/css/theme_ver/bimber/fonts/bimber.woff") format("woff"),
               url("https://bimber.bringthepixel.com/gagster/wp-content/themes/bimber/css/theme_ver/bimber/fonts/bimber.ttf") format("truetype"),
               url("https://bimber.bringthepixel.com/gagster/wp-content/themes/bimber/css/theme_ver/bimber/fonts/bimber.svg#bimber") format("svg");
            font-weight: normal;
           font-style: normal;
       }</style> --}}
       <style type="text/css" media="screen" id="g1-dynamic-styles">body.g1-layout-boxed .g1-body-inner {
   background-color: #e6e6e6;
   }
   
   .g1-layout-boxed .g1-row-layout-page {
   max-width: 1212px;
   }
   
   /* Global Color Scheme */
   a,
   .entry-title > a:hover,
   .entry-meta a:hover,
   .menu-item > a:hover,
   .current-menu-item > a,
   .mtm-drop-expanded > a,
   .g1-nav-single-prev > a > span:before,
   .g1-nav-single-next > a > span:after,
   .g1-nav-single-prev > a:hover > strong,
   .g1-nav-single-prev > a:hover > span,
   .g1-nav-single-next > a:hover > strong,
   .g1-nav-single-next > a:hover > span,
   .mashsb-count,
   .archive-title:before,
   .snax .snax-item-title > a:hover {
   color: #45b7e0;  /* #00dba3  */
   }
   
   input[type="submit"],
   input[type="reset"],
   input[type="button"],
   button,
   .g1-button-solid,
   .g1-button-solid:hover,
   .g1-arrow-solid,
   .entry-categories .entry-category:hover, .author-link,
   .author-info .author-link,
   .g1-box-icon,
   .wyr-reaction:hover .wyr-reaction-button,
   .wyr-reaction-voted .wyr-reaction-button,
   .wyr-reaction .wyr-reaction-bar {
   border-color: #45b7e0;
   background-color: #45b7e0;
   color: #ffffff;
   }
   
   .entry-counter:before {
   border-color: #45b7e0;
   background-color: #45b7e0;
   color: #ffffff;
   }
   
   
   .g1-quick-nav-tabs .menu-item-type-g1-trending > a,
   .entry-flag-trending {
   border-color: #bf0029;
   background-color: #bf0029;
   color: #ffffff;
   }
   
   .g1-quick-nav-tabs .menu-item-type-g1-hot > a,
   .entry-flag-hot {
   border-color: #ff0036;
   background-color: #ff0036;
   color: #ffffff;
   }
   
   .g1-quick-nav-tabs .menu-item-type-g1-popular > a,
   .entry-flag-popular {
   border-color: #ff577b;
   background-color: #ff577b;
   color: #ffffff;
   }
   
   .entry-flag-members_only {
   border-color: #ff0036;
   background-color: #ff0036;
   color: #ffffff;
   }
   
   .entry-flag-coupon {
   border-color: #ff0036;
   background-color: #ff0036;
   color: #ffffff;
   }
   

   .member-header .mycred-my-rank:after {
       content:"Rank";
   }
   /*customizer_preview_margins*/
   
   
   
   @media only screen and ( min-width: 801px ) {
       .g1-hb-row-normal  .g1-id ,
       .g1-header .g1-id {
           margin-top: 7px;
           margin-bottom: 7px;
       }
   
       .g1-hb-row-normal  .g1-quick-nav ,
       .g1-header .g1-quick-nav {
           margin-top: 22px;
           margin-bottom: 15px;
       }
   }
   
   .g1-hb-row-mobile  .g1-id ,
   .g1-header .g1-id {
       margin-top: 10px;
       margin-bottom: 10px;
   }
   
   .g1-hb-row-mobile  .g1-id ,
   .g1-header .g1-id {
       margin-top: 10px;
       margin-bottom: 10px;
   }
   
   .g1-hb-row-normal  .g1-primary-nav {
       margin-top: 0px;
       margin-bottom: 0px;
       height: 70px;       /* HEIGHT OF NAV BAR */
   }
   
   /*customizer_preview_margins_end*/
   
   .g1-header .menu-item > a,
   .g1-header .g1-hamburger,
   .g1-header .g1-drop-toggle,
   .g1-header .g1-socials-item-link {
   color: #ffffff;
   }
   
   .g1-header .menu-item:hover > a,
   .g1-header .current-menu-item > a,
   .g1-header .menu-item-object-post_tag > a:before,
   .g1-header .g1-socials-item-link:hover {
   color: #00dba3;
   }
   
   .g1-header > .g1-row-background {
       
   
       background-color: #23282d; 
   
       }
   
   .g1-header .g1-link-toggle {
   color: #ffffff;
   }
   
   .g1-header .sub-menu .menu-item:hover > a,
   .g1-header .sub-menu .current-menu-item > a,
   .g1-header .sub-menu .current-menu-ancestor > a {
   color: #45b7e0;
   }
   
   
       /*customizer_preview_ax_row*/
   
       :root {
           --g1-hba-itxt-color:#666666;
           --g1-hba-atxt-color:#ff0036;
           --g1-hba-bg-color:#ffffff;
           --g1-hba-border-color:#ff0000;
       }
   
       .g1-hb-row-a .menu-item > a,
       .g1-hb-row-a .g1-hamburger,
       .g1-hb-row-a .g1-drop-toggle,
       .g1-hb-row-a .g1-socials-item-link{
           color:#666666;
           color:var(--g1-hba-itxt-color);
       }
   
       .g1-hb-row-a .g1-row-background {
           
   
           background-color: #ffffff;
           background-color: var(--g1-hba-bg-color);
   
               }
   
       .g1-hb-row-a .menu-item:hover > a,
       .g1-hb-row-a .current-menu-item > a,
       .g1-hb-row-a .current-menu-ancestor > a,
       .g1-hb-row-a .menu-item-object-post_tag > a:before,
       .g1-hb-row-a .g1-socials-item-link:hover {
           color:#ff0036;
           color:var(--g1-hba-atxt-color);
       }
   
       .g1-hb-row-a .g1-drop-toggle-badge,
       .g1-hb-row-a .snax-button-create,
       .g1-hb-row-a .snax-button-create:hover {
           border-color: #45b7e0;
           background-color: #45b7e0;
           color: #ffffff;
       }
       /*customizer_preview_a_row_end*/
   
       .g1-skinmode {
           --g1-hba-itxt-color:#ffffff;
           --g1-hba-atxt-color:#808080;
           --g1-hba-bg-color:#000000;
           --g1-hba-border-color:#1a1a1a;
       }
       /*customizer_preview_bx_row*/
   
       :root {
           --g1-hbb-itxt-color:#ffffff;
           --g1-hbb-atxt-color:#45b7e0;
           --g1-hbb-bg-color:#24243e;  /* #23282d */ /* WHERE NAV BAR COLOR IS*/ 
           --g1-hbb-border-color:#ff0000;
       }
   
       .g1-hb-row-b .menu-item > a,
       .g1-hb-row-b .g1-hamburger,
       .g1-hb-row-b .g1-drop-toggle,
       .g1-hb-row-b .g1-socials-item-link{
           color:#ffffff;
           color:var(--g1-hbb-itxt-color);
       }
   
       .g1-hb-row-b .g1-row-background {
           
   
           background-color: #23282d;
           background-color: var(--g1-hbb-bg-color);
   
               }
   
       .g1-hb-row-b .menu-item:hover > a,
       .g1-hb-row-b .current-menu-item > a,
       .g1-hb-row-b .current-menu-ancestor > a,
       .g1-hb-row-b .menu-item-object-post_tag > a:before,
       .g1-hb-row-b .g1-socials-item-link:hover {
           color:#45b7e0;
           color:var(--g1-hbb-atxt-color);
       }
   
       .g1-hb-row-b .g1-drop-toggle-badge,
       .g1-hb-row-b .snax-button-create,
       .g1-hb-row-b .snax-button-create:hover {
           border-color: #45b7e0;
           background-color: #45b7e0;
           color: #ffffff;
       }
       /*customizer_preview_b_row_end*/
   
       .g1-skinmode {
           --g1-hbb-itxt-color:#ffffff;
           --g1-hbb-atxt-color:#808080;
           --g1-hbb-bg-color:#000000;
           --g1-hbb-border-color:#1a1a1a;
       }
       /*customizer_preview_cx_row*/
   
       :root {
           --g1-hbc-itxt-color:#ffffff;
           --g1-hbc-atxt-color:#45b7e0;
           --g1-hbc-bg-color:#393d42;
           --g1-hbc-border-color:#ff0000;
       }
   
       .g1-hb-row-c .menu-item > a,
       .g1-hb-row-c .g1-hamburger,
       .g1-hb-row-c .g1-drop-toggle,
       .g1-hb-row-c .g1-socials-item-link{
           color:#ffffff;
           color:var(--g1-hbc-itxt-color);
       }
   
       .g1-hb-row-c .g1-row-background {
           
   
           background-color: #393d42;
           background-color: var(--g1-hbc-bg-color);
   
               }
   
       .g1-hb-row-c .menu-item:hover > a,
       .g1-hb-row-c .current-menu-item > a,
       .g1-hb-row-c .current-menu-ancestor > a,
       .g1-hb-row-c .menu-item-object-post_tag > a:before,
       .g1-hb-row-c .g1-socials-item-link:hover {
           color:#45b7e0;
           color:var(--g1-hbc-atxt-color);
       }
   
       .g1-hb-row-c .g1-drop-toggle-badge,
       .g1-hb-row-c .snax-button-create,
       .g1-hb-row-c .snax-button-create:hover {
           border-color: #45b7e0;
           background-color: #45b7e0;
           color: #ffffff;
       }
       /*customizer_preview_c_row_end*/
   
       .g1-skinmode {
           --g1-hbc-itxt-color:#ffffff;
           --g1-hbc-atxt-color:#808080;
           --g1-hbc-bg-color:#000000;
           --g1-hbc-border-color:#1a1a1a;
       }
   
   :root {
       --g1-canvas-itxt-color:#666666;
       --g1-canvas-atxt-color:#45b7e0;
       --g1-canvas-bg-color:#ffffff;
   }
   
   /*customizer_preview_canvas*/
   .g1-canvas-content,
   .g1-canvas-toggle,
   .g1-canvas-content .menu-item > a,
   .g1-canvas-content .g1-hamburger,
   .g1-canvas-content .g1-drop-toggle,
   .g1-canvas-content .g1-socials-item-link{
       color:#666666;
       color:var(--g1-canvas-itxt-color);
   }
   
   .g1-canvas-content .menu-item:hover > a,
   .g1-canvas-content .current-menu-item > a,
   .g1-canvas-content .current-menu-ancestor > a,
   .g1-canvas-content .menu-item-object-post_tag > a:before,
   .g1-canvas-content .g1-socials-item-link:hover {
       color:#45b7e0;
       color:var(--g1-canvas-atxt-color);
   }
   
   .g1-canvas-global {
       background-color:#ffffff;
       background-color:var(--g1-canvas-bg-color);
   
       }
   
   .g1-canvas-background {
                   opacity: 1;
   }
   
   .g1-canvas-content .snax-button-create {
       border-color: #45b7e0;
       background-color: #45b7e0;
       color: #ffffff;
   }
   /*customizer_preview_canvas_end*/
   
   .g1-skinmode {
       --g1-canvas-itxt-color:#ffffff;
       --g1-canvas-atxt-color:#ff0036;
       --g1-canvas-bg-color:#000000;
   }
   
   
   :root {
       --g1-submenu-bg-color: #ffffff;
       --g1-submenu-rtxt-color: #666666;
       --g1-submenu-atxt-color: #45b7e0;
   }
   
   /*customizer_preview_submenu*/
   .g1-hb-row .sub-menu {
   border-color: #ffffff;
   border-color: var(--g1-submenu-bg-color);
   background-color: #ffffff;
   background-color: var(--g1-submenu-bg-color);
   }
   
   .g1-hb-row .sub-menu .menu-item > a {
   color: #666666;
   color: var(--g1-submenu-rtxt-color);
   }
   
   .g1-hb-row .g1-link-toggle {
   color:#ffffff;
   color:var(--g1-submenu-bg-color);
   }
   
   .g1-hb-row .sub-menu .menu-item:hover > a,
   .g1-hb-row .sub-menu .current-menu-item > a,
   .g1-hb-row .sub-menu .current-menu-ancestor > a {
   color: #45b7e0;
   color: var(--g1-submenu-atxt-color);
   }
   /*customizer_preview_submenu_row_end*/
   
   .g1-skinmode {
       --g1-submenu-bg-color: #000000;
       --g1-submenu-rtxt-color: #999999;
       --g1-submenu-atxt-color: #ff0036;
   }
   
   
   
   .g1-header-simplified > .g1-row-background {
       background-color:#23282d;
       background-color:var(--g1-hbb-bg-color, #23282d);
   }
   
   :root {
   --g1-footer-itxt-color:#000000;
   --g1-footer-rtxt-color:#666666;
   --g1-footer-mtxt-color:#999999;
   --g1-footer-atxt-color:#ff0036;
   --g1-footer-bg-color:#f2f2f2;
   }
   
   
   /* Prefooter Theme Area */
   .g1-prefooter > .g1-row-background,
   .g1-prefooter .g1-current-background {
       background-color:#f2f2f2;
       background-color:var(--g1-footer-bg-color);
   }
   
   .g1-prefooter h1,
   .g1-prefooter h2,
   .g1-prefooter h3,
   .g1-prefooter h4,
   .g1-prefooter h5,
   .g1-prefooter h6,
   .g1-prefooter .g1-mega,
   .g1-prefooter .g1-alpha,
   .g1-prefooter .g1-beta,
   .g1-prefooter .g1-gamma,
   .g1-prefooter .g1-delta,
   .g1-prefooter .g1-epsilon,
   .g1-prefooter .g1-zeta,
   .g1-prefooter blockquote,
   .g1-prefooter .widget_recent_entries a,
   .g1-prefooter .widget_archive a,
   .g1-prefooter .widget_categories a,
   .g1-prefooter .widget_meta a,
   .g1-prefooter .widget_pages a,
   .g1-prefooter .widget_recent_comments a,
   .g1-prefooter .widget_nav_menu .menu a {
   color:#000000;
   color:var(--g1-footer-itxt-color);
   }
   
   .g1-prefooter {
   color:#666666;
   color:var(--g1-footer-rtxt-color);
   }
   
   .g1-prefooter .entry-meta {
   color:#999999;
   color:var(--g1-footer-mtxt-color);
   }
   
   .g1-prefooter input,
   .g1-prefooter select,
   .g1-prefooter textarea {
   border-color: #bfbfbf;
   }
   
   .g1-prefooter input[type="submit"],
   .g1-prefooter input[type="reset"],
   .g1-prefooter input[type="button"],
   .g1-prefooter button,
   .g1-prefooter .g1-button-solid,
   .g1-prefooter .g1-button-solid:hover,
   .g1-prefooter .g1-box-icon {
   border-color: #ff0036;
   background-color: #ff0036;
   color: #ffffff;
   }
   
   .g1-prefooter .g1-button-simple {
       border-color: #000000;
       color: #000000;
   }
   
   
   /* Footer Theme Area */
   .g1-footer > .g1-row-background,
   .g1-footer .g1-current-background {
   background-color:#f2f2f2;
   background-color:var(--g1-footer-bg-color);
   }
   
   
   .g1-footer {
   color:#666666;
   color:var(--g1-footer-rtxt-color);
   }
   
   .g1-footer-text {
   color: #999999;
   color:var(--g1-footer-mtxt-color);
   }
   
   .g1-footer a:hover,
   .g1-footer-nav a:hover {
   color:#ff0036;
   color:var(--g1-footer-atxt-color);
   }
   
   
   /*customizer_preview_footer*/
   /*customizer_preview_footer_end*/
   
   
   .g1-skinmode {
   --g1-footer-itxt-color:#ffffff;
   --g1-footer-rtxt-color:#999999;
   --g1-footer-mtxt-color:#666666;
   --g1-footer-atxt-color:#ff0036;
   --g1-footer-bg-color:#000000;
   }
   .g1-dark { color: rgba(255, 255, 255, 0.8); }
   
   .g1-dark h1,
   .g1-dark h2,
   .g1-dark h3,
   .g1-dark h4,
   .g1-dark h5,
   .g1-dark h6,
   .g1-dark .g1-mega,
   .g1-dark .g1-alpha,
   .g1-dark .g1-beta,
   .g1-dark .g1-gamma,
   .g1-dark .g1-delta,
   .g1-dark .g1-epsilon,
   .g1-dark .g1-zeta {
       color: #fff;
   }
   
   
   .g1-dark .g1-meta { color: rgba(255, 255, 255, 0.6); }
   .g1-dark .g1-meta a { color: rgba(255, 255, 255, 0.8); }
   .g1-dark .g1-meta a:hover { color: rgba(255, 255, 255, 1); }
   
   .g1-dark .archive-title:before {
       color: inherit;
   }
   
   
   .g1-dark [type=input],
   .g1-dark [type=email],
   .g1-dark select {
       border-color: rgba(255,255,255, 0.15);
   }
   
   .g1-dark [type=submit] {
       border-color: #fff;
       background-color: #fff;
       color: #1a1a1a;
   }
   
   .g1-dark .g1-button-solid {
       border-color: #fff;
       background-color: #fff;
       color: #1a1a1a;
   }
   
   .g1-dark .g1-button-simple {
       border-color: #fff;
       color: #fff;
   }
   
   .g1-dark .g1-newsletter-avatar {
       background-color: #fff;
       color: #1a1a1a;
   }</style>
   

   <!-- LOGO ICON -->
   <link rel="icon" src="images/voatname.png" sizes="192x192" />
   <meta name="g1:switch-skin-css" content="https://bimber.bringthepixel.com/gagster/wp-content/themes/bimber/css/theme_ver/styles/mode-dark.min.css" />
   <meta name="g1:skin-item-id" content="g1_skin_gagster" /> 
   <script>if("undefined"!=typeof localStorage){
       var skinItemId=document.getElementsByName("g1:skin-item-id");
       skinItemId=skinItemId.length>0?skinItemId[0].getAttribute("content"):"g1_skin",window.g1SwitchSkin=function(e,t){
           if(e){var n=document.getElementById("g1-switch-skin-css");
           if(n){n.parentNode.removeChild(n),document.documentElement.classList.remove("g1-skinmode");
           try{localStorage.removeItem(skinItemId)
           }catch(e){}
           }else{t?document.write('<link id="g1-switch-skin-css" rel="stylesheet" type="text/css" media="all" href="'+document.getElementsByName("g1:switch-skin-css")[0].getAttribute("content")+'" />'):((n=document.createElement("link")).id="g1-switch-skin-css",
           n.href=document.getElementsByName("g1:switch-skin-css")[0].getAttribute("content"),
           n.rel="stylesheet",n.media="all",document.head.appendChild(n)),
           document.documentElement.classList.add("g1-skinmode");
           try{localStorage.setItem(skinItemId,e)}catch(e){}}}};
           try{var mode=localStorage.getItem(skinItemId);window.g1SwitchSkin(mode,!0)}catch(e){}}
   </script> 
   <meta name="g1:nsfw-item-id" content="g1_nsfw_off_gagster" /> 

   <script>if("undefined"!=typeof localStorage){
       var nsfwItemId=document.getElementsByName("g1:nsfw-item-id");nsfwItemId=nsfwItemId.length>0?nsfwItemId[0].getAttribute("content"):"g1_nsfw_off",
       window.g1SwitchNSFW=function(e){e?(localStorage.setItem(nsfwItemId,1),
       document.documentElement.classList.add("g1-nsfw-off")):(localStorage.removeItem(nsfwItemId),
       document.documentElement.classList.remove("g1-nsfw-off"))};
       try{var nsfwmode=localStorage.getItem(nsfwItemId);window.g1SwitchNSFW(nsfwmode)}catch(e){}}
   </script>  
   <script>/* global document */
   
   // This code must be in <head> to hide iframe as fast as possible
   (function () {
   
       'use strict';
   
       // load live site without Envato iframe
       if (window.self !== window.top) {
           removeCookie('g1_tf_iframe_closed');
           top.location.href = window.location.href;
       }
   
       var iframeClosed = readCookie('g1_tf_iframe_closed');
   
       if (iframeClosed) {
           document.getElementsByTagName('html')[0].className += ' g1-no-iframe-bar';
       }
   
       function closeIframe () {
           document.getElementsByTagName('html')[0].className += ' g1-no-iframe-bar';
           createCookie('g1_tf_iframe_closed', 1);
       }
   
       function createCookie (name,value,time) {
           var expires;
   
           if (time) {
               var date = new Date();
               var ms = time;
   
               if (typeof time === 'object') {
                   ms = time.value;
   
                   switch (time.type) {
                       case 'days':
                           ms = ms * 24 * 60 * 60 * 1000;
                           break;
                   }
               }
   
               date.setTime(date.getTime() + ms);
               expires = '; expires=' + date.toGMTString();
           }
           else {
               expires = '';
           }
   
           document.cookie = name + '=' + value + expires + '; path=/';
       }
   
       function readCookie (name) {
           var nameEQ = name + '=';
           var ca = document.cookie.split(';');
   
           for(var i = 0; i < ca.length; i += 1) {
               var c = ca[i];
               while (c.charAt(0) === ' ') {
                   c = c.substring(1,c.length);
               }
   
               if (c.indexOf(nameEQ) === 0) {
                   return c.substring(nameEQ.length,c.length);
               }
           }
   
           return null;
       }
   
       function removeCookie (name) {
           createCookie(name, '', -1);
       }
   
       // live namespace
       window.g1Iframe = {};
   
       g1Iframe.isClosed = iframeClosed;
       g1Iframe.close = closeIframe;
   })();</script>
</head>