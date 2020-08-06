@extends('includes.master')

@section('title')
About | Debt-in
@endsection
@section('style')
<link href="css/argon-design-system.min0ff5.css?v=1.0.2" rel="stylesheet" />
<style>
.our-experience {
    position: relative;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.sp-two {
    padding: 120px 0 90px;
}
.pr-lg-5, .px-lg-5 {
    padding-right: 3rem !important;
}
.pl-lg-5, .px-lg-5 {
    padding-left: 3rem !important;
}
.sec-title {
    position: relative;
    margin-bottom: 50px;
    margin-top: -5px;
}
.sec-title h1 {
    font-size: 42px;
    font-weight: 700;
    line-height: 1.1em;
    text-transform: capitalize;
}
.mb-30 {
    margin-bottom: 30px !important;
}
.our-experience .tab-list {
    margin-bottom: 30px;
    border-bottom: 1px solid
    #d9d7d8;
}
.tab-list {
    position: relative;
    margin-top: 30px;
}
.our-experience .tab-list li {
    position: relative;
    margin-right: 30px;
    margin-bottom: 0px;
}
.tab-list li {
    position: relative;
    margin-bottom: 20px;
    display: inline-block;
}
.our-experience .tab-list li a {
    position: relative;

    font-size: 18px;
    font-weight: 600;
    padding-bottom: 15px;
    display: inline-block;
}
.tab-list li a.active-btn {

    -webkit-transition: .5s ease;
    -o-transition: .5s ease;
    transition: .5s ease;
}
.our-experience .tab-list li a::before {
    position: absolute;
    content: '';
    width: 0%;
    height: 2px;
    background-color:
    #a3c53b;
    left: 0;
    bottom: 0;
    -webkit-transition: .5s ease;
    -o-transition: .5s ease;
    transition: .5s ease;
}
.our-experience .tab-list li a.active-btn::before {
    width: 100%;
}
.our-experience .tab-list li a::before {
    position: absolute;
    content: '';
    width: 0%;
    height: 2px;
    background-color:
    #a3c53b;
    left: 0;
    bottom: 0;
    -webkit-transition: .5s ease;
    -o-transition: .5s ease;
    transition: .5s ease;
}


/** Style **/
#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 370px;
}

.backside .card a {
    font-size: 18px;
    color: #007b5e !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #a3c53a !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}

.card-text{
  margin-bottom: 0px;
}


.sp-two {
    padding: 120px 0 90px;
}
.grey-bg {
    background-color: #f7f8f9 !important;
}
.sec-title.style-two {
    margin-top: 20px;
}
.sec-title {
    position: relative;
    margin-bottom: 50px;
    margin-top: -5px;
}

.sec-title.style-two .big-title {
    bottom: 30px;
}

.sec-title h1 {
    font-size: 42px;

    font-weight: 700;
    line-height: 1.1em;
    text-transform: capitalize;
}
.mb-80 {
    margin-bottom: 80px !important;
}
.text {
    font-size: 16px;

}
.timeline-container {
    position: relative;
    overflow: hidden;
}
.timeline-container .timeline-block {
    position: relative;
    margin-bottom: 30px;
}
.timeline-container .timeline-block::before {
    content: '';
    position: absolute;
    left: 10px;
    top: 34px;
    height: 150%;
    border-right: 3px solid
    #d4d6d9;
}
.timeline-container .timeline-block::after {
    content: '';
    position: absolute;
    left: 1.2px;
    top: 10px;
    height: 20px;
    width: 20px;
    border-radius: 50%;
    background-color:
    #4e81b6;
}
.timeline-container .timeline-block .inner-box {
    position: relative;
    padding-left: 70px;
    min-height: 144px;
    z-index: 1;
}
.timeline-container .timeline-block .inner-box .left-info {
    position: absolute;
    left: 0px;
    top: 15px;
    width: 200px;
    padding-left: 70px;
}
.timeline-container .timeline-block .date {
    position: absolute;
    left: 0px;
    top: 50%;
    margin-top: -15px;
    line-height: 30px;
    color:
    #4e81b6;
    font-size: 14px;
    font-weight: 500;
    font-family: 'Montserrat', sans-serif;
    text-transform: uppercase;
}
.timeline-container .timeline-block .date strong {
    font-size: 30px;
    font-weight: 700;
    display: block;
}
.timeline-container .timeline-block .text-content {
    position: relative;
    line-height: 2em;
}
.timeline-container .timeline-block h4 {
    font-size: 20px;
    font-weight: 600;
    text-transform: capitalize;
    margin-bottom: 5px;

}

.btn-success_btn {
    color:
#fff;
border-color:
#32325d;
background-color:
#32325d;
box-shadow: 0 4px 6px
rgba(50, 50, 93, .11), 0 1px 3px
    rgba(0, 0, 0, .08);
}

.dropdown.active a{
  color: rgba(0, 0, 0, .9);
}

.media-comment-text {
    border-radius: .3rem;
        border-top-left-radius: 0.3rem;
    border-top-left-radius: 0;
    position: relative;
    background-color: #f6f9fc;
    padding: 1rem 1.25rem 1rem 2.5rem;
}
</style>
@endsection



@section('body')
<!--page start-->
<div class="page">

    <!-- preloader start -->

    <!-- preloader end -->

    <!--header start-->
    <header id="masthead" class="header debtin-header-style-classic">
        <!-- debtin-topbar-wrapper -->
        <div class="debtin-topbar-wrapper debtin-bgcolor-darkgrey debtin-textcolor-white clearfix">
            <div class="container">
                <div class="debtin-topbar-content">
                    <ul class="top-contact debtin-highlight-left text-left">
                        <li><i class="fa fa-clock-o"></i><strong>Working Hours:</strong> Mon - Fri 07:00 - 20:00 | Sat 09:00 - 12:00 </li>
                    </ul>
                    <div class="topbar-right text-right">
                        <ul class="top-contact">
                            <li><i class="fa fa-envelope-o"></i><a href="mailto:info@debt-in.co.za">info@debt-in.co.za</a></li>
                            <li><i class="fa fa-phone"></i>087 351 5109</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div><!-- debtin-topbar-wrapper end -->
        <!-- debtin-header-wrap -->
        <div class="debtin-header-wrap">
            <!-- debtin-stickable-header-w -->
            <div id="debtin-stickable-header-w" class="debtin-stickable-header-w clearfix">
                <div id="site-header-menu" class="site-header-menu">
                    <div class="site-header-menu-inner debtin-stickable-header">
                        <div class="container">
                            <!-- site-branding -->
                            <div class="site-branding">
                                <a class="home-link" href="index-2.html" title="Fondex" rel="home">
                                    <img id="logo-img" class="img-center" src="images/logo.jpg" alt="logo-img">
                                </a>
                            </div><!-- site-branding end -->
                            <!--site-navigation -->
                            <div id="site-navigation" class="site-navigation">
                                <div class="header-btn">
                                    <a class="btn btn-success_btn" href="/portal">CLIENT PORTAL</a>
                                </div>

                                <div class="debtin-menu-toggle">
                                    <input type="checkbox" id="menu-toggle-form" />
                                    <label for="menu-toggle-form" class="debtin-menu-toggle-block">
                                        <span class="toggle-block toggle-blocks-1"></span>
                                        <span class="toggle-block toggle-blocks-2"></span>
                                        <span class="toggle-block toggle-blocks-3"></span>
                                    </label>
                                </div>
                                <nav id="menu" class="menu">
                                    <ul class="dropdown">
                                       <li><a href="/">HOME</a>

                                        </li>
                                        <li class="active"><a href="about">ABOUT</a>
                                        </li>
                                        <li><a href="solutions">SOLUTIONS</a>
                                        </li>
                                        <li><a href="careers">CAREERS</a>
                                        </li>

                                        <li><a href="contactus">CONTACT US</a>
                                        </li>

                                    </ul>
                                </nav>
                            </div><!-- site-navigation end-->
                        </div>
                    </div>
                </div>
            </div><!-- debtin-stickable-header-w end-->
        </div><!--debtin-header-wrap end -->
    </header><!--header end-->


    <div class="debtin-page-title-row">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="title-box debtin-textcolor-white">
                          <div class="page-title-heading">
                              <h1 class="title">Demo</h1>
                          </div><!-- /.page-title-captions -->
                          <div class="breadcrumb-wrapper">


                          </div>
                      </div>
                  </div><!-- /.col-md-12 -->
              </div><!-- /.row -->
          </div><!-- /.container -->
      </div>

<!--site-main start-->
<div class="site-main">



    <!-- about-section -->
    <section class="debtin-row about-section clearfix">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class=" res-991-pr-0">
                        <!-- section title -->
                        <div class="section-title res-991-pr-0 clearfix">
                          <div class="title-header">
                                                   <h5>DEBT-IN/CAPABILITYBPO 21 Days if Motivation</h5>
                                                   <h2 class="title">Which memories are you <df class="color" style="color: #03a2dc;">color</df> for? How have they <df class="another_color" style="color: #a4ce3a;">shaped</df> your life?</h2>
                                               </div>
                              <img src="index.jpg" class="img-responsive" style="width: 100%;margin: 0px auto;display: block;">


                              <p style="padding-top: 60px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac volutpat est. In nec venenatis sapien. Fusce in nulla eleifend, congue libero non, consectetur erat. Morbi iaculis sem sed tempus ultricies. Duis condimentum, sapien ac dictum dignissim, lorem metus efficitur odio, ac cursus sem nisi eget metus. Quisque feugiat at turpis at porttitor. Vivamus et gravida dolor. Mauris nunc diam, ullamcorper et semper ac, ultrices in dui. Quisque sit amet lorem porta lacus congue mollis. In accumsan elit condimentum, vehicula mi sed, elementum diam. Aenean ut condimentum mauris, sit amet finibus risus. Curabitur sed purus nec nisi tincidunt porta.  </p>

                              <p>
                                <audio controls>
 <source src="1.mp4" type="audio/mp4">

 Your browser does not support the audio tag.
</audio>

</p>
<p>
  ~ Nonhlanhla Biyela
</p>

<p style="padding-top: 60px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac volutpat est. In nec venenatis sapien. Fusce in nulla eleifend, congue libero non, consectetur erat. Morbi iaculis sem sed tempus ultricies. Duis condimentum, sapien ac dictum dignissim, lorem metus efficitur odio, ac cursus sem nisi eget metus. Quisque feugiat at turpis at porttitor. Vivamus et gravida dolor. Mauris nunc diam, ullamcorper et semper ac, ultrices in dui. Quisque sit amet lorem porta lacus congue mollis. In accumsan elit condimentum, vehicula mi sed, elementum diam. Aenean ut condimentum mauris, sit amet finibus risus. Curabitur sed purus nec nisi tincidunt porta.  </p>

<p>



  <p style="padding-top: 120px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac volutpat est. In nec venenatis sapien. Fusce in nulla eleifend, congue libero non, consectetur erat. Morbi iaculis sem sed tempus ultricies. Duis condimentum, sapien ac dictum dignissim, lorem metus efficitur odio, ac cursus sem nisi eget metus. Quisque feugiat at turpis at porttitor. Vivamus et gravida dolor. Mauris nunc diam, ullamcorper et semper ac, ultrices in dui. Quisque sit amet lorem porta lacus congue mollis. In accumsan elit condimentum, vehicula mi sed, elementum diam. Aenean ut condimentum mauris, sit amet finibus risus. Curabitur sed purus nec nisi tincidunt porta.  </p>

  <p>

      <img src="indgex.png" style="padding-top: 60px; width: 100%;margin: 0px auto;display: block;" class="img-responsive" style="width: 100%;margin: 0px auto;display: block;">


<p style="padding-top: 50px;">
  <audio controls>
<source src="1.mp4" type="audio/mp4">

Your browser does not support the audio tag.
</audio>
</p>
<p style="padding-bottom: 13px;position: relative;bottom: 20px;">
  ~ Zola




</p>


  <audio controls>
<source src="1.mp4" type="audio/mp4">

Your browser does not support the audio tag.
</audio>

</P>

<p style="padding-bottom: 30px;position: relative;bottom: 20px;">

  ~ Charity

</p>




<h3 style="margin: 0px auto;padding-bottom: 30px;">Comments</h3>
<div class="media media-comment">

                    <div class="media-body">
                      <div class="media-comment-text">
                        <h6 class="h5 mt-0">Siyabonga Sithole</h6>
                        <p class="text-sm lh-160">Thanks you for the updates, these articles have been fun to read and listen to. keep it up.</p>
                        <div class="icon-actions">
                          <a href="javascript:;" class="like active">
                            <i class="fa fa-heart"></i>
                            <span class="text-muted">10 likes</span>
                          </a>

                        </div>
                      </div>
                    </div>
                  </div>

                  	<div class="widget-area no-padding blank" style="padding-top: 60px;">
								<div class="status-upload">
									<form>
                    <div class="form-group">
										<textarea class="form-control" placeholder="What are you doing right now?" ></textarea>
                  </div>

										<button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Comment</button>
									</form>
								</div><!-- Status Upload  -->
							</div><!-- Widget Area -->

                        </div><!-- section title end -->


                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- about-section end -->



<!--back-to-top start-->
<a id="totop" href="#top">
    <i class="fa fa-angle-up"></i>
</a>
<!--back-to-top end-->

</div><!-- page end -->


<!-- Javascript -->
@endsection


@section('script')

  <script src="js/plugins/glide.js" type="text/javascript"></script>
<script>
//Tabs
if($('.tab-box').length){
  //Tabs
  $('.tab-box .tab-list .tab-btn').on('click', function(e) {
    e.preventDefault();
    var target = $($(this).attr('href'));
    $('.tab-box .tab-list .tab-btn').removeClass('active-btn');
    $(this).addClass('active-btn');
    $('.tab-content .tab-item').fadeOut(0);
    $('.tab-content .tab-item').removeClass('active-tab');
    $(target).fadeIn(300);
    $(target).addClass('active-tab');
  });
}
</script>

<script>
  // Carousel
  new Glide('.glide', {
    type: 'carousel',
    startAt: 0,
    focusAt: 2,
    perTouch: 1,
    perView: 4
  }).mount();
</script>
@endsection
