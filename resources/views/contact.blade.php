@extends('includes.master')

@section('title')
Contact Us | Debt-in
@endsection


@section('style')

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

.list-group-item{
  border: .0625rem solid white;
  padding: 0rem 1rem;
}


.media .fa {
  width: 55px;
font-size: 20px;
height: 55px;
line-height: 55px;
border-radius: 50%;
border: 1px dashed #535353;
text-align: center;
margin-right: 20px;
}

.media{
  padding: 15px 0px;
}


.debtin-topbar-wrapper.debtin-textcolor-white, .debtin-topbar-wrapper.debtin-textcolor-white a {
    color:
    rgba(255,255,255,.95);
}
.debtin-topbar-wrapper {
    line-height: 49px;
}

.debtin-bgcolor-darkgrey{
  background-color: #32325d;
}
.debtin-topbar-wrapper .top-contact.text-left {
    position: relative;
    float: left;
    line-height: 50px;
}
.top-contact.debtin-highlight-left {
    margin-right: 15px;
    padding-right: 5px;
}
.top-contact {
    list-style: none;
    margin: 0;
        margin-right: 0px;
    padding: 0;
        padding-right: 0px;
    font-size: 13px;
    display: inline-block;
    position: relative;
}



/* Absolute Center Spinner */
.loading {
  position: fixed;
  z-index: 999;
  height: 2em;
  width: 2em;
  overflow: show;
  margin: auto;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
}

/* Transparent Overlay */
.loading:before {
  content: '';
  display: block;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
    background: radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0, .8));

  background: -webkit-radial-gradient(rgba(20, 20, 20,.8), rgba(0, 0, 0,.8));
}

/* :not(:required) hides these rules from IE9 and below */
.loading:not(:required) {
  /* hide "loading..." text */
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}

.loading:not(:required):after {
  content: '';
  display: block;
  font-size: 10px;
  width: 1em;
  height: 1em;
  margin-top: -0.5em;
  -webkit-animation: spinner 150ms infinite linear;
  -moz-animation: spinner 150ms infinite linear;
  -ms-animation: spinner 150ms infinite linear;
  -o-animation: spinner 150ms infinite linear;
  animation: spinner 150ms infinite linear;
  border-radius: 0.5em;
  -webkit-box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
box-shadow: rgba(255,255,255, 0.75) 1.5em 0 0 0, rgba(255,255,255, 0.75) 1.1em 1.1em 0 0, rgba(255,255,255, 0.75) 0 1.5em 0 0, rgba(255,255,255, 0.75) -1.1em 1.1em 0 0, rgba(255,255,255, 0.75) -1.5em 0 0 0, rgba(255,255,255, 0.75) -1.1em -1.1em 0 0, rgba(255,255,255, 0.75) 0 -1.5em 0 0, rgba(255,255,255, 0.75) 1.1em -1.1em 0 0;
}

/* Animation */

@-webkit-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-o-keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spinner {
  0% {
    -webkit-transform: rotate(0deg);
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -o-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
  }
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
                                          <li><a href="about">ABOUT</a>
                                          </li>
                                          <li><a href="solutions">SOLUTIONS</a>
                                          </li>
                                          <li><a href="careers">CAREERS</a>
                                          </li>

                                          <li class="active"><a href="contactus">CONTACT US</a>
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


 <div class="loading" id="loading" style="display: none;">Loading&#8230;</div>

        <div class="debtin-page-title-row">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <div class="title-box debtin-textcolor-white">
                              <div class="page-title-heading">
                                  <h1 class="title">Contact Us</h1>
                              </div><!-- /.page-title-captions -->
                              <div class="breadcrumb-wrapper">
                                  <span>
                                      <a title="Homepage" href="index-2.html">We have the best solutions to elevate your business to the next level.
Contact us below</a>
                                  </span>

                              </div>
                          </div>
                      </div><!-- /.col-md-12 -->
                  </div><!-- /.row -->
              </div><!-- /.container -->
          </div>

    <!--site-main start-->
    <div class="site-main">















        <!-- client-section -->
        <div class="debtin-row client-section clearfix" style="padding-top: 120px;">
            <div class="container">
              <div class="row">
                  <div class="col-md-3 col-sm-2"></div>
                  <div class="col-md-6 col-sm-8">
                      <!-- section title -->
                      <div class="section-title text-center with-desc clearfix">
                          <div class="title-header">
                              <h2>CONTACT</h2>

                          </div>
                      </div><!-- section title end -->
                  </div>
                  <div class="col-md-3 col-sm-2"></div>
              </div>
                <div class="row">
                  <div class="col-lg-7">

  <div class="loading" id="loading" style="display: none;">Loading…</div>

           <form style="width: 100%;" id="contactform">

               <div class="row" style=" padding-top: 20px;">

                    <input type="hidden" name="_token" value="120pt2EqyvCHitqPiXRGFpbaHjl3MuVr2rY6Z12F">
                 <div class="col-md-6">
                   <div class="form-group">
                     <input type="text" class="form-control" name="fname" id="fname" placeholder="Your FirstName">
                     <div class="fname-feedback"></div>
                   </div>
                 </div>
                 <div class="col-md-6">
                   <div class="form-group">
                     <input type="text" class="form-control" name="lname" id="lname" placeholder="Your LastName">
                        <div class="lname-feedback"></div>
                   </div>
                 </div>

                 <div class="col-md-12">
                   <div class="form-group">
                     <input type="text" class="form-control" name="cell" id="cell" placeholder="Your CellPhone">
                        <div class="cell-feedback"></div>
                   </div>
                 </div>

                 <div class="col-md-12">
                   <div class="form-group">
                     <input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
                        <div class="email-feedback"></div>
                   </div>
                 </div>

               </div>
               <div class="row">
                 <div class="col-md-12">
                   <div class="form-group">
                     <div class="input-group mb-4">

                       <textarea id="actual_message" name="actual_message" class="form-control" placeholder="Your Message" style="height: 155px;"></textarea>
                          <div class="actual_message-feedback"></div>

                     </div>
                   </div>
                 </div>

               </div>

               <div class="row">
                 <div class="col-md-12">
                   <div class="form-group">
                     <div class="input-group mb-4">
                       <div id="message" class="text-center" style="width: 100%;"></div>
                     </div>
                   </div>
                 </div>

               </div>


               <div class="row">
                 <div class="col-lg-12">
                   <div class="form-group">
                     <button type="button" style="background-color: #302744;

         border: 1px solid #302744;" id="send_mail" class="btn btn-block btn-success">Send</button>

                   </div>
               </div>
               </div>
             </form>
              </div>
              <div class="col-lg-4 offset-lg-1">

              <h3 class="" style="font-weight: 600; line-height: 1.2; ">Contact Info</h3>
              <div class="wrapp_con" style="padding-top: 11px;">
                <div class="media">
                        <i class="fa fa-phone"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Phone Number</h5>
                            <p>Office<a href="tel:2787351 5109">: +27 87 351 5109</a> </p>

                        </div>
                    </div>

                    <div class="media mrg-btn-0">
                                            <i class="fa fa-envelope"></i>
                                            <div class="media-body">
                                                <h5 class="mt-0">Email Address</h5>
                                                <p><a href="mailto:info@debt-in.co.za">info@debt-in.co.za</a></p>

                                            </div>
                                        </div>
                <div class="media">
                        <i class="fa fa-map-marker"></i>
                        <div class="media-body">
                            <h5 class="mt-0">Office Address</h5>
                            <p>26th Floor, Delta Towers, 303, Dr Pixley Kaseme Street, Durban, 4001</p>
                        </div>


                    </div>





              </div>




            </div>
                </div>
            </div>
        </div>
        <!-- client-section end-->

    </div><!--site-main end-->
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3460.2061041187662!2d31.021939715609502!3d-29.858329381950416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ef7a9c83830babf%3A0xa412e7f95c6f67a!2s311-20%20Dr%20Pixley%20Kaseme%20St%2C%20Durban%20Central%2C%20Durban%2C%204001!5e0!3m2!1sen!2sza!4v1568622917521!5m2!1sen!2sza" style="border: 0px none; pointer-events: none;" allowfullscreen="" width="100%" height="325" frameborder="0"></iframe>



    <!--footer start-->
    <footer class="footer widget-footer clearfix" style=" padding: 0rem 0;">

        <div class="second-footer debtin-textcolor-white">
            <div class="container">
                <div class="row">



                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 widget-area">
                        <div class="widget widget_text  clearfix">
                            <h3 class="widget-title">About Debt-in</h3>
                            <div class="textwidget widget-text">
                                Debt-IN is registered with the Debt Collections Council (030355/08) as well as with the Financial Services Board and hold a Level 3 BBBEE verification rating.
                                <br><br>
                                <div class="social-icons circle social-hover">
                                    <ul class="list-inline">
                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-linkedin"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <br/>


                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                           <h3 class="widget-title">Quick Links</h3>
                            <ul id="menu-footer-services">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Solutions</a></li>
                                <li><a href="#">The Team</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Debtors Portal</a></li>
                                <li><a href="#/contactus">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 widget-area">
                        <div class="widget flicker_widget clearfix">
                           <h3 class="widget-title">Business Hours</h3>
                           <div class="textwidget widget-text">


                                <ul class="debtin-our-location-list">
                                    <li>Monday-Friday: 07H00 - 20H00</li>
                                    <li>Saturday: 08H00 - 13H00</li>
                                </ul>
                            </div>
                            <br/>
                            <br/><br/>
                             <h3 class="widget-title">Holidays:</h3>
                             <div class="textwidget widget-text">

                                  <ul class="debtin-our-location-list">
                                      <li>Monday-Friday: Closed</li>

                                  </ul>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text debtin-textcolor-white">
            <div class="container">
                <div class="row copyright">

                    <div class="col-md-12">
                        <div class="">
                            <span>Copyright © 2019&nbsp;<a href="#">Debt-in</a>. All rights reserved.</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="">
                            <span>Debtin Consultants (PTY) Reg no. 2008/003683/07</span>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->

@endsection

@section('script')
<script type="text/javascript">
$("#send_mail").click(function(){
  $("#loading").show();
   let name = $("#fname").val();
   let last_name = $("#lname").val();
   let cell = $("#cell").val();
   let email = $("#email").val();
   let message = $("#actual_message").val();

   if(name == "" || last_name == "" || cell == "" || email == "" || message == ""){
       $("#message").html("<div class='alert alert-danger'>Some fields are empty</div>");
         $("#loading").hide();
   }else{
     $.ajax({
    type: "POST",
    url: "{{ route('contactform') }}",
    data: $("#contactform").serialize(),
    success: function(response){
         if(response == "success"){
            $("#message").html("<div class='alert alert-success'>Message Sent successfully</div>");
            $("#send_mail").hide();
              $("#loading").hide();
         }
        },error: function(data){
               $("#loading").hide();
               $("#message").html("<div class='alert alert-danger'>Ooops, Please try again later</div>");
           var errors = data.responseJSON;
           $.each(errors, function(key,message){
              $("."+key+"-feedback").html("<div style='color:red;'>"+message+"</div>");
           });

        }
      });

   }

})
</script>

@endsection
