<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Starbucks html single page site">
    <meta name="author" content="">
    <title>Starbucks html</title>
<link href="css/video-js.css" rel="stylesheet" type="text/css">
 
    <!-- bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	 <script src="js/videojs-ie8.min.js"></script>

    <!-- google font-awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Custom Less CSS -->
    <link href="css/style.less" rel="stylesheet/less" type="text/css" />
    
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body id="page-top" data-spy="scroll" data-offset="105" data-target=".navbar-fixed-top">
    
    <!-- start sbx-card here -->
    <div class="sbx-card">
        
    <!-- navbar -->
    <div class="navbar-wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar top-toggle"></span>
                        <span class="icon-bar middle-toggle"></span>
                        <span class="icon-bar bottom-toggle"></span>
                    </button>
                    <a class="navbar-brand  page-scroll" href="index.html">
                        <img src="images/logo.png" alt="company-logo">
                    </a>
                    <div class="mobile-nav">
                        <ul>
                            <li><a href="#">EN | FR</a></li>
                        </ul>
                    </div>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#benefits" class="page-scroll">Benefits</a></li>
                        <li><a href="#how-to-earn-stars" class="page-scroll">How to Earn Stars</a></li>
                        <li><a href="#member-events" class="page-scroll">Member Events</a></li>
                        <li><a href="#the-app" class="page-scroll">The App</a></li>
                        <li><a href="#star-codes" class="page-scroll">Star Codes</a></li>
                        <li><a href="#tips-tricks" class="page-scroll">Tips & Tricks </a></li>
                    </ul>
                    <ul class="mobile-link">
                        <li><a href="#">View My Account ></a></li>
                        <li><a href="#">JOIN NOW ></a></li>
                    </ul>
                </div>
                <!-- navbar-scroll-navbar -->
                <div class="navbar-scroll-navbar">
                    <a href="#" class="login-btn">login / signup</a>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#benefits" class="page-scroll">Benefits</a></li>
                        <li><a href="#the-app" class="page-scroll">Mobile App</a></li>
                        <li><a href="#card-design" class="page-scroll">View Card Design</a></li>
                        <li><a href="#faq-member" class="page-scroll">Faqs</a></li>
                    </ul>

                </div>
            </div>
        </nav>
        <div class="nav-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">View My Account ></a></li>
                    <li><a href="#">JOIN NOW ></a></li>
                    <li><a href="#">EN | FR</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end navbar warapper -->

    <!-- start banner warapper here -->
    <section id="banner" class="banner-wrapper">
        <div class="container">
            <h2 class="sip-gets-text">ONE SIP GETS YOU</h2>
            <img src="images/gold-hero-text.png" class="hero-text" alt="gold-text">
            <div class="banner-content">
                <p>Make just one purchase by May 2,<br> and you’re golden.<sup>*</sup> Already a Gold member?<br> We’ll extend your Gold status for a year. </p>
                <a href="#" class="offer-text" data-toggle="modal" data-target="#myModal">See offer details</a>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end banner warapper here -->

    <!-- start benefits warapper here -->
    <section id="benefits" class="benefits-wrapper">
        <div class="container">
            <div class="section-head-area">
                <h3 class="section-subtitle">Get to know your</h3>
                <h1 class="section-title">BENEFITS</h1>
                <img src="images/gold-down-arrow.png" alt="gold-down-arrow" class="gold-down-arrow">
            </div>

            <!-- Gold Level Stars area -->
            <div class="gold-level-star-area">
                <div class="star-title">GOLD LEVEL | 300+ Stars</div>
                <ul class="row">
                    <li class="col-md-4 col-sm-4 col-xs-4">
                        <div class="star-level-box">
                            <img src="images/monthly-double-star-days.png" alt="gold-icon" class="star-icon">
                            <p>Monthly Double-Star Days</p>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 col-xs-4">
                        <div class="star-level-box">
                            <img src="images/gold-card.png" alt="gold-icon" class="star-icon">
                            <p>Personalized Gold Card</p>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 col-xs-4">
                        <div class="star-level-box">
                            <img src="images/star-rewards-gold.png" alt="gold-icon" class="star-icon">
                            <p>Star Reward Every 125 Stars</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- end Gold Level Stars area -->

            <!-- Green Level Stars area -->
            <div class="green-level-star-area">
                <div class="star-title">GREEN LEVEL | 0-299 Stars</div>
                <ul class="row">
                    <li class="col-md-4 col-sm-4 col-xs-6">
                        <div class="star-level-box">
                            <img src="images/stars-per-white.png" alt="white-icon" class="star-icon">
                            <p>2 Stars per $1 Spent</p>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 col-xs-6">
                        <div class="star-level-box">
                            <img src="images/birthday-reward-white.png" alt="white-icon" class="star-icon">
                            <p>Free Birthday Reward</p>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 col-xs-6">
                        <div class="star-level-box">
                            <img src="images/pay-phone-white.png" alt="white-icon" class="star-icon">
                            <p>Pay by Phone</p>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 col-xs-6">
                        <div class="star-level-box">
                            <img src="images/order-ahead-white.png" alt="white-icon" class="star-icon">
                            <p>Order Ahead</p>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 col-xs-6">
                        <div class="star-level-box">
                            <img src="images/free-refills-white.png" alt="white-icon" class="star-icon">
                            <p>Free In-Store Refills </p>
                        </div>
                    </li>
                    <li class="col-md-4 col-sm-4 col-xs-6">
                        <div class="star-level-box">
                            <img src="images/member-events-white.png" alt="white-icon" class="star-icon">
                            <p>Member Events & Offers</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- end Green Level Stars area -->

            <div class="find-out-link">Some restrictions apply. <a href="#">Find out more below.</a></div>
            <div class="join-now-link">Not a member? <a href="#">Join now > </a></div>
            <div class="vertical-line">
                <img src="images/gold-vertical-line.png" alt="vertical-line">
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end benefits warapper here -->

    <!-- start how-to-earn-stars warapper here -->
    <section id="how-to-earn-stars" class="how-to-earn-stars-wrapper">
        <div class="container">
            <div class="section-head-area">
                <h3 class="section-subtitle">Learn how to</h3>
                <h1 class="section-title">Earn MORE Stars</h1>
                <img src="images/gold-down-arrow.png" alt="gold-down-arrow" class="gold-down-arrow">
            </div>

            <!-- + -->
            <div class="earn-stars-accordion">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">At Starbucks<sup>&reg;</sup> & Teavana<sup>&reg;</sup> stores<i class="more-less fa fa-plus-square-o"></i></a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                                Don’t miss out on over a billion Bonus Stars sent to Starbucks Rewards™ members throughout the year. <a href="#" class="sub-now-link">Subscribe now ></a>
                            </div>
                        </div>
                    </div>

                    <!-- + -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">ON STARBUCKS.COM<i class="more-less fa fa-plus-square-o"></i></a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                Don’t miss out on over a billion Bonus Stars sent to Starbucks Rewards™ members throughout the year. <a href="#" class="sub-now-link">Subscribe now ></a>
                            </div>
                        </div>
                    </div>

                    <!-- + -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">In grocery stores<i class="more-less fa fa-plus-square-o"></i></a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                Don’t miss out on over a billion Bonus Stars sent to Starbucks Rewards™ members throughout the year. <a href="#" class="sub-now-link">Subscribe now ></a>
                            </div>
                        </div>
                    </div>

                    <!-- + -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">In email<i class="more-less fa fa-plus-square-o"></i></a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        Don’t miss out on over a billion Bonus Stars sent to Starbucks Rewards™ members throughout the year. <a href="#" class="sub-now-link">Subscribe now ></a>
                                    </div>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-4">
                                        <img src="images/msr-email-img.jpg" alt="msr-email-img" class="panel-body-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- + -->
                    <div class="panel panel-default img-panel">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title"><img src="images/60star.png" alt="star-img" class="accordion-title-img">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">By referring friends<i class="more-less fa fa-plus-square-o"></i></a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                            <div class="panel-body">
                                Don’t miss out on over a billion Bonus Stars sent to Starbucks Rewards™ members throughout the year. <a href="#" class="sub-now-link">Subscribe now ></a>
                            </div>
                        </div>
                    </div>

                    <!-- + -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingSix">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">ON DOUBLE STAR DAYS<i class="more-less fa fa-plus-square-o"></i></a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                            <div class="panel-body">
                                Don’t miss out on over a billion Bonus Stars sent to Starbucks Rewards™ members throughout the year. <a href="#" class="sub-now-link">Subscribe now ></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- panel-group -->
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end how-to-earn-stars warapper here -->

    <!-- start member-events warapper here -->
    <section id="member-events" class="member-events-wrapper">
        <div class="container">
            <div class="section-head-area">
                <h3 class="section-subtitle">Check out</h3>
                <h1 class="section-title">Member Events</h1>
                <img src="images/gold-down-arrow.png" alt="gold-down-arrow" class="gold-down-arrow">
            </div>

            <!-- start event slider here -->
            <div id="event-carousel" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <!--<div class="overlay-text">
                            GET YOUR <br> HEADPHONES READY
                        </div>-->
                        <div class="event-caption caption1">
                            <div class="row">
                                <div class="col-md-1 col-sm-12 col-xs-12"></div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="event-img">
                                        <img class="img-responsive media-object" src="images/spotify-event-img.png" alt="event-img">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="event-content">
                                        <div class="event-top-area">
                                            <h3 class="event-title">SPOTIFY<sup>&reg;</sup> OFFER</h3>
                                            <p class="event-info">Get two months free when you sign up for Spotify<sup>&reg;</sup> during Frappuccino<sup>®</sup> Happy Hour.</p>
                                        </div>
                                        <div class="event-date-time">MARCH 7–28 <span>  | </span> 3–6 P.M.</div>
                                        <div class="cta-area">
                                            <a href="#" class="add-calendar"><img src="images/calendar-icon.png" alt="calendar-icon"><span>Add to calendar</span></a>
                                            <a href="#" class="event-share"><img src="images/share-icon.png" alt="share-icon"><span>Share</span></a>
                                            <p>At participating stores. Must pay with your Starbucks<sup>&reg;</sup> App or registered Card.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 col-sm-12 col-xs-12"></div>
                            </div>
                        </div>
                    </div>

                    <!-- -->
                    <div class="item">
                        <!--<div class="overlay-text">
                            JOIN US <br> NEXT TIME
                        </div>-->
                        <div class="event-caption caption2">
                            <div class="row">
                                <div class="col-md-1 col-sm-12 col-xs-12"></div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="event-img">
                                        <img class="img-responsive media-object" src="images/happy-mondays-event-img.png" alt="event-img">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="event-content">
                                        <div class="event-top-area">
                                            <h3 class="event-title">HAPPY MONDAYS</h3>
                                            <p class="event-info">Get Bonus Stars and more every Monday.<a href="#">See all offers ></a></p>
                                        </div>
                                        <div class="event-date-time">MARCH 7–28 <span>  | </span> 2 P.M.–CLOSE</div>
                                        <div class="cta-area">
                                            <a href="#" class="add-calendar"><img src="images/calendar-icon.png" alt="calendar-icon"><span>Add to calendar</span></a>
                                            <a href="#" class="event-share"><img src="images/share-icon.png" alt="share-icon"><span>Share</span></a>
                                            <p>At participating stores. Must pay with your Starbucks<sup>&reg;</sup> App or registered Card.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 col-sm-12 col-xs-12"></div>
                            </div>
                        </div>
                    </div>

                    <!-- -->
                    <div class="item">
                        <div class="event-caption caption3">
                            <div class="row">
                                <div class="col-md-1 col-sm-12 col-xs-12"></div>
                                <div class="col-md-4 col-sm-12 col-xs-12">
                                    <div class="event-img">
                                        <img class="img-responsive media-object" src="images/caramel-ribbon-frapp-event-img.png" alt="event-img">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="event-content">
                                        <div class="event-top-area">
                                            <h3 class="event-title">FRAPPUCCINO HAPPY HOUR</h3>
                                            <p class="event-info">Get half off any Frappuccino<sup>&reg;</sup> blended beverage. </p>
                                        </div>
                                        <div class="event-date-time">MAY 6-15 <span>  | </span> 3–6 P.M.</div>
                                        <div class="cta-area">
                                            <a href="#" class="add-calendar"><img src="images/calendar-icon.png" alt="calendar-icon"><span>Add to calendar</span></a>
                                            <a href="#" class="event-share"><img src="images/share-icon.png" alt="share-icon"><span>Share</span></a>
                                            <p>At participating stores. Must pay with your Starbucks<sup>&reg;</sup> App or registered Card.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-1 col-sm-12 col-xs-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#event-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#event-carousel" data-slide-to="1"></li>
                    <li data-target="#event-carousel" data-slide-to="2"></li>
                </ol>
                <!-- Controls -->
                <a class="left carousel-control" href="#event-carousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
                <a class="right carousel-control" href="#event-carousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
            </div>
            <!-- End event slider here -->
            <div class="vertical-line">
                <img src="images/gold-vertical-line.png" alt="vertical-line">
            </div>
        </div>
        <!-- end container -->
        <img src="images/mobile-top-star.png" alt="mobile-star-top-img" class="mobile-top-star">
        <img src="images/mobile-bottom-star.png" alt="mobile-star-bottom-img" class="mobile-bottom-star">
    </section>
    <!-- end member-events warapper here -->

    <!-- start the-app warapper here -->
    <section id="the-app" class="the-app-wrapper">
        <div class="container">
            <div class="section-head-area">
                <h3 class="section-subtitle">Do it all in </h3>
                <h1 class="section-title">The App</h1>
                <img src="images/gold-down-arrow.png" alt="gold-down-arrow" class="gold-down-arrow">
            </div>
            <div class="the-app-content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="app-video-area">
                                
<!--<video controls preload="none" poster="images/video-poster.png" data-setup="{}" width="100%" height="100%">
<source src="images/Starbucks_Coffee_Perfection.mp4" type="video/mp4" />
<source src="images/Starbucks_Coffee_Perfection.ogv" type="video/ogg; codecs=theora, vorbis" />
<source src="images/Starbucks_Coffee_Perfection.webm" type="video/webm; codecs=vp8, vorbis" />
Your browser does not support the HTML5 video tag. Try updating your browser or using a different one.
</video>-->
<video id="my-video" class="video-js video" controls preload="auto" width="auto" height="auto"
  poster="images/video-poster.png" data-setup="{}">
    <source src="images/Starbucks_Coffee_Perfection.mp4" type='video/mp4'>

    <source src="images/Starbucks_Coffee_Perfection.webm" type='video/webm'>
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a web browser that
      <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
    </p>
  </video>

                               
                        </div>
                        <a href="#" class="download-btn">DOWNLOAD NOW</a>
                    </div>
                    <div class="col-md-6">
                        <div class="app-content-area">
                            <p>Pay with your phone, order ahead, track and redeem Star Rewards and more—all in the Starbucks<sup>&reg;</sup> App.</p>
                            <div class="app-link-area">
                                <a href="#" class="store-btn">
                                    <img src="images/app-store.png" alt="app-store-img">
                                </a>
                                <a href="#" class="store-btn">
                                    <img src="images/google-play.png" alt="app-store-img">
                                </a>
                                <!--<a href="#" class="download-btn">DOWNLOAD NOW</a>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- + -->
            <div class="the-app-accordion">
                <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseOneone" aria-expanded="true" aria-controls="collapseOneone">PAY WITH YOUR PHONE<i class="more-less fa fa-plus-square-o"></i></a>
                            </h4>
                        </div>
                        <div id="collapseOneone" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headOne">
                            <div class="panel-body">
                                Only Starbucks Rewards™ members can pay with their phone using the Starbucks<sup>&reg;</sup> App. Simply tap ‘Pay’ and hold your phone under the scanner.
                            </div>
                        </div>
                    </div>

                    <!-- + -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwotwo" aria-expanded="false" aria-controls="collapseTwotwo">JUMP THE LINE <i class="more-less fa fa-plus-square-o"></i></a>
                            </h4>
                        </div>
                        <div id="collapseTwotwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headTwo">
                            <div class="panel-body">
                                Only Starbucks Rewards™ members can pay with their phone using the Starbucks<sup>&reg;</sup> App. Simply tap ‘Pay’ and hold your phone under the scanner.
                            </div>
                        </div>
                    </div>

                    <!-- + -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseThreethree" aria-expanded="false" aria-controls="collapseThreethree">REDEEM STAR REWARDS FOR FOOD<i class="more-less fa fa-plus-square-o"></i></a>
                            </h4>
                        </div>
                        <div id="collapseThreethree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headThree">
                            <div class="panel-body">
                                Only Starbucks Rewards™ members can pay with their phone using the Starbucks<sup>&reg;</sup> App. Simply tap ‘Pay’ and hold your phone under the scanner.
                            </div>
                        </div>
                    </div>

                    <!-- + -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFourfour" aria-expanded="false" aria-controls="collapseFourfour">RELOAD YOUR CARD IN SECONDS<i class="more-less fa fa-plus-square-o"></i></a>
                            </h4>
                        </div>
                        <div id="collapseFourfour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headFour">
                            <div class="panel-body">
                                Only Starbucks Rewards™ members can pay with their phone using the Starbucks<sup>&reg;</sup> App. Simply tap ‘Pay’ and hold your phone under the scanner.
                            </div>
                        </div>
                    </div>

                    <!-- + -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headFive">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFivefive" aria-expanded="false" aria-controls="collapseFivefive">FIND SPECIAL OFFERS IN THE APP<i class="more-less fa fa-plus-square-o"></i></a>
                            </h4>
                        </div>
                        <div id="collapseFivefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headFive">
                            <div class="panel-body">
                                Only Starbucks Rewards™ members can pay with their phone using the Starbucks<sup>&reg;</sup> App. Simply tap ‘Pay’ and hold your phone under the scanner.
                            </div>
                        </div>
                    </div>

                    <!-- + -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headSix">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseSixsix" aria-expanded="false" aria-controls="collapseSixsix">KEEP TRACK OF PARTIAL STARS<i class="more-less fa fa-plus-square-o"></i></a>
                            </h4>
                        </div>
                        <div id="collapseSixsix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headSix">
                            <div class="panel-body">
                                Only Starbucks Rewards™ members can pay with their phone using the Starbucks<sup>&reg;</sup> App. Simply tap ‘Pay’ and hold your phone under the scanner.
                            </div>
                        </div>
                    </div>

                    <!-- + -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headSeven">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">GET MULTIPLE STARS WITH EVERY ORDER<i class="more-less fa fa-plus-square-o"></i></a>
                            </h4>
                        </div>
                        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headSeven">
                            <div class="panel-body">
                                Only Starbucks Rewards™ members can pay with their phone using the Starbucks<sup>&reg;</sup> App. Simply tap ‘Pay’ and hold your phone under the scanner.
                            </div>
                        </div>
                    </div>
                </div> <!-- panel-group -->
            </div>
            <a href="#" class="visit-faq-link"> Have questions?<span> Visit our FAQs ></span></a>
        </div> <!-- end container -->
    </section>
    <!-- end the-app warapper here -->
    
    <!-- start card-design warapper here -->
    <section id="card-design" class="card-design-wrapper">
        <div class="container">
            <div class="section-head-area">
                <h3 class="section-subtitle">For your everyday needs</h3>
                <h1 class="section-title">Card Design</h1>
                <img src="images/gold-down-arrow.png" alt="gold-down-arrow" class="gold-down-arrow">
            </div>
            
            <!-- festive-collection-area -->
            <div class="festive-collection-area">
                <h2>festive collection</h2>
                <!-- start slider here -->
                <div id="festive-collection-carousel" class="carousel slide slider-a" data-ride="carousel" data-type="multi">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="card-design-img">
                                    <img src="images/sr-twitter.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="card-design-img">
                                    <img src="images/sr-twitter.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="card-design-img">
                                    <img src="images/sr-twitter.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="card-design-img">
                                    <img src="images/sr-twitter.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="card-design-img">
                                    <img src="images/sr-twitter.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="card-design-img">
                                    <img src="images/sr-twitter.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="card-design-img">
                                    <img src="images/sr-twitter.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="card-design-img">
                                    <img src="images/sr-twitter.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#festive-collection-carousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
                    <a class="right carousel-control" href="#festive-collection-carousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
                </div> 
                <!-- End slider here -->
            </div>
            <!-- end festive-collection-area -->
            
            <!-- the-essentials-area -->
            <div class="the-essentials-area">
                <h2>the essentials</h2>
                <!-- start slider here -->
                <div id="essentials-carousel" class="carousel slide slider-a" data-ride="carousel" data-type="multi">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="card-design-img">
                                    <img src="images/sr-twitter.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="card-design-img">
                                    <img src="images/sr-twitter.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="card-design-img">
                                    <img src="images/sr-twitter.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="card-design-img">
                                    <img src="images/sr-twitter.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="card-design-img">
                                    <img src="images/sr-twitter.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="card-design-img">
                                    <img src="images/sr-twitter.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="card-design-img">
                                    <img src="images/sr-twitter.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="card-design-img">
                                    <img src="images/sr-twitter.jpg" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->

                    <!-- Controls -->
                    <a class="left carousel-control" href="#essentials-carousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
                    <a class="right carousel-control" href="#essentials-carousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
                </div> 
                <!-- End slider here -->
            </div>
            <!-- end the-essentials-area -->
            <p class="card-send-link">Starbucks e-gift Card at your fingertips. <a href="#">Send one now ></a></p>
        </div> <!-- end container -->
    </section>
    <!-- end card-design warapper here -->
    
    <!-- start faqs member  wrapper -->
    <section id="faq-member" class="faq-member-wrapper">
        <div class="container">
            <div class="section-head-area">
                <h3 class="section-subtitle">Member</h3>
                <h1 class="section-title">Faqs</h1>
                <img src="images/gold-down-arrow.png" alt="gold-down-arrow" class="gold-down-arrow">
            </div>
            
            <!-- + -->
            <div class="the-app-accordion">
                <div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="head1">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse1" aria-expanded="true" aria-controls="collapse1">starbucks rewards<sup>tm</sup><i class="more-less fa fa-plus-square-o"></i></a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head1">
                            <div class="panel-body">
                                Only Starbucks Rewards™ members can pay with their phone using the Starbucks<sup>&reg;</sup> App. Simply tap ‘Pay’ and hold your phone under the scanner.
                            </div>
                        </div>
                    </div>

                    <!-- + -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="head2">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse2" aria-expanded="false" aria-controls="collapse2"> star <i class="more-less fa fa-plus-square-o"></i></a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headTwo">
                            <div class="panel-body">
                                Only Starbucks Rewards™ members can pay with their phone using the Starbucks<sup>&reg;</sup> App. Simply tap ‘Pay’ and hold your phone under the scanner.
                            </div>
                        </div>
                    </div>

                    <!-- + -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="head3">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse3" aria-expanded="false" aria-controls="collapse3">star rewards<i class="more-less fa fa-plus-square-o"></i></a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head3">
                            <div class="panel-body">
                                Only Starbucks Rewards™ members can pay with their phone using the Starbucks<sup>&reg;</sup> App. Simply tap ‘Pay’ and hold your phone under the scanner.
                            </div>
                        </div>
                    </div>

                    <!-- + -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="head4">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapse4" aria-expanded="false" aria-controls="collapse4">starbucks<sup>&reg; </sup> app<i class="more-less fa fa-plus-square-o"></i></a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="head4">
                            <div class="panel-body">
                                Only Starbucks Rewards™ members can pay with their phone using the Starbucks<sup>&reg;</sup> App. Simply tap ‘Pay’ and hold your phone under the scanner.
                            </div>
                        </div>
                    </div>
                </div> <!-- panel-group -->
            </div>
            
        </div> <!-- end container -->
    </section>
    <!-- end faqs member  wrapper -->
    
    <!-- start star-codes warapper here -->
    <section id="star-codes" class="star-codes-wrapper">
        <div class="container">
            <div class="section-head-area">
                <h3 class="section-subtitle">Pick up</h3>
                <h1 class="section-title">STAR CODES</h1>
                <img src="images/gold-down-arrow.png" alt="gold-down-arrow" class="gold-down-arrow">
            </div>

            <div class="row">
                <div class="col-md-5">
                    <div class="star-codes-content">
                        <p>Star Codes allow us to give you Stars outside Starbucks<sup>&reg;</sup> stores. You can get them a couple of ways:</p>
                        <ul>
                            <li>On specially marked Starbucks<sup>&reg;</sup> products at grocery stores.</li>
                            <li>In email for participating in special promotions like Star Dashes.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="big-vertical-divider">
                        <img src="images/vertical-divider.png" alt="vertical-divider">
                    </div>
                    <div class="big-horizontal-divider">
                        <img src="images/horizontal-divider.png" alt="horizontal-divider">
                    </div>
                    
                </div>
                <div class="col-md-5">
                    <div class="star-codes-submit-area">
                        <h2>Enter Your Star Code </h2>
                        <form class="star-code-form">
                            <input type="text" name="star-code" class="form-control" required>
                            <p class="limit-message">Limit 2 entries per day. No spaces or dashes.</p>
                            <button type="submit" class="submit-btn">submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end star-codes warapper here -->
    
    <!-- start tips-tricks warapper here -->
    <section id="tips-tricks" class="tips-tricks-wrapper">
        <div class="container">
            <div class="section-head-area">
                <h3 class="section-subtitle">Follow us</h3>
                <h1 class="section-title">@STARBUCKSGOLD</h1>
            </div>
            <div class="follow-content">
                <img src="images/glitter-star-scribble.png" alt="star-img" class="star-scribble">
                <!-- start event slider here -->
                <div id="follow-carousel" class="carousel slide slider-a" data-ride="carousel" data-type="multi">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php
                        function callInstagramorFacebook($url)
                        {
                            $ch = curl_init();
                            curl_setopt_array($ch, array(
                                CURLOPT_URL => $url,
                                CURLOPT_RETURNTRANSFER => true,
                                CURLOPT_SSL_VERIFYPEER => false,
                                CURLOPT_SSL_VERIFYHOST => 2
                            ));
                            
                            $result = curl_exec($ch);
                            curl_close($ch);
                            return $result;
                        }
                        $url = '';
                        $inst_stream = callInstagramorFacebook($url);
                        $results = json_decode($inst_stream, true);
                        
                        for($i=0;$i<=9;$i++) {
                        ?>
                        <div class="item <?php echo($i==0) ? 'active' : ''; ?>">
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="card-design-img">
                                    <img src="<?php echo $results['data'][$i]['images']['standard_resolution']['url']; ?>" alt="img">
                                    <p>  <?php echo $results['data'][$i]['caption']['text']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                                                  
                                                  
                                         
                    </div>
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php   for($i=0;$i<=9;$i++) {
                        ?>
                        <li data-target="#follow-carousel" data-slide-to="<?php echo $i; ?>" class="<?php echo($i==0) ? 'active' : ''; ?>"></li>
                        <?php } ?>
                    </ol>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#follow-carousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
                    <a class="right carousel-control" href="#follow-carousel" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
                </div><!-- End event slider here --> 
            </div>
        </div> <!-- end container -->
        <img src="images/follow-top-star.png" alt="follow-top-img" class="follow-top-star">
        <img src="images/follow-bottom-star.png" alt="follow-bottom-img" class="follow-bottom-star">
    </section> 
    <!-- end tips-tricks warapper here -->

    <!-- start email-sign warapper here -->
    <section id="email-sign" class="email-sign-wrapper">
        <div class="container">
            <div class="email-sign-content">
                <div class="row">
                    <div class="col-lg-3 col-md-2"></div>
                    <div class="col-lg-6 col-md-8">
                        <div class="email-sign-area">
                            <p>Don’t forget to <a href="#">sign up for email </a> so you know when Double Star Days are coming.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="email-sign-more-area">
                            <p>See what else has changed in the new Starbucks Rewards<sup>TM</sup> program. <a href="#">Learn more ></a></p>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <!-- end email-sign warapper here -->
    
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="copyright">
                <p>*Must pay with Starbucks<sup>&reg;</sup> App or registered Card. At participating stores. Offer valid: 4/12/16–5/2/16. </p>
                <p>1Some restrictions apply. Rewards may be redeemed at participating stores only and exclude alcoholic beverages and multi-serve food and beverage items. Birthday reward expires one day after your birthday. Stars (including partial Stars) earned toward free food and drink rewards expire 6 months after they are earned. Stars may not be earned on purchases of alcohol and Starbucks Cards. Taxes, tips, donations, and fees (such as delivery fees, shipping and handling fees, gift wrapping fees and bag fees) may also be excluded. Free refills for same day, in-store visit. Must opt-in to receive promotional email from Starbucks to receive special email offers. Personalized Gold Card is gold-colored only, it is not gold metal. Mobile Order & Pay may not be available at all locations. See starbucks.com/terms for additional details.</p>
            </div>
        </div>  <!-- end container -->
    </footer>
    <!-- end footer -->
    
    <!-- Program details Modal popup -->
    <div class="modal fade" id="myModal" role="dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <img src="images/close-accordion.png" alt="close-img">
                </button>
                <h2 class="modal-title">GOLD STATUS OFFER DETAILS</h2>
            </div>
            <div class="modal-body">
                <p>For new and current Green members:</p>
                <ul>
                    <li>You’ll receive Gold status for one year. </li>
                    <li>Your status will be updated within 48 hours of purchase.</li>
                    <li>Any Stars you accumulated at Green level will reset to zero when you receive Gold status.</li>
                    <li>You’ll need to collect 125 Stars to earn your first Star Reward.</li>
                </ul>
                <p>For existing Gold members:</p>
                <ul>
                    <li>You’ll receive an additional year of Gold status.</li>
                    <li>Your status will be updated after the promotion ends. Check your account dashboard in the Starbucks<sup>&reg;</sup> App to see your new extended date.</li>
                    <li>Offer applies to members with Gold status as of 4/12/16</li>
                </ul>
            </div>
            <div class="modal-footer">
                <p>Eligible transactions are those that earn Stars—any purchase made with your Starbucks<sup>&reg;</sup> App or registered Card at Starbucks<sup>&reg;</sup>, Teavana<sup>&reg;</sup> or Evolution Fresh<sup>tm</sup>. Taxes, tips, fees, alcohol, donations or any card-to-card transactions may be excluded. Entering a Star Code from a grocery purchase is also considered an eligible transaction. </p>
            </div>
        </div>
    </div>
    <!-- end Program details Modal popup -->

    </div>
    <!-- end sbx-card here -->
    
    <!-- Js library -->
    <script src="js/jquery.min.js"></script>
    <!-- Less js -->
    <script src="js/less.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- SmoothScroll js-->
    <script src="js/SmoothScroll.js"></script>
    <script src="js/mobile-js.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
	<script src="js/video.js"></script>
    
</body>
</html>