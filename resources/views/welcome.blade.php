@extends('layouts.thor')

@section('content')
<div id="all" class="animsition">
           

            <div class="container warp">

                <!-- ////////////////////// start   main slider /////////////////////// -->
                <div class="main-slider-container">

                    <ul class="main-slider">
                        <li>
                            <img src="theme/thor/img/slider1.jpg" alt="" /> 

                        </li>
                        <li>
                            <img src="theme/thor/img/slider2.jpg" alt="" /> 

                        </li>

                    </ul>
                </div><!--end main slider -->


                <!-- ////////////////////// end   main slider /////////////////////// -->

                <!-- ////////////////////// start    our services /////////////////////// -->
                <div class="section our-services" id="our-services">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-blck block">
                                <div class="block-title">
                                    <h3>OUR SERVICES</h3>
                                </div><!--end title -->
                                <p>Build your own website <span>NO HTML NEEDED</span>...</p>
                            </div><!--end text-block --> 
                        </div>


                        <div class="col-md-4">
                            <div class="img-blck ">
                                <img src="theme/thor/img/front1.jpg" alt="" class="img-responsive" />

                            </div><!--end text-block --> 
                        </div>


                        <div class="col-md-4">
                            <div class="follow-blck block">
                                <div class="block-title">
                                    <h3>follow us on</h3>
                                </div><!--end title -->

                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                </ul>

                                <h4>address</h4>

                                <p>SOHO@KLCC Suite Kuala Lumpur</p>
                            </div><!--end text-block --> 
                        </div>

                    </div><!--end row -->

                    <div class="row">
                        <div class="services-items">
                            <div class="col-md-3">
                                <div class="services-item">
                                    <span><i class="fa fa-folder-open-o"></i></span>
                                    <p>STOCK PHOTO (CC0) INCLUDED</p>
                                </div><!--end services-item-->
                            </div>

                            <div class="col-md-3">
                                <div class="services-item">
                                    <span><i class="fa fa-laptop"></i></span>
                                    <p>WEB FONT</p>
                                </div><!--end services-item-->
                            </div>

                            <div class="col-md-3">
                                <div class="services-item">
                                    <span><i class="fa fa-pencil-square-o"></i></span>
                                    <p>EASY TO CUSTOMIZE</p>
                                </div><!--end services-item-->
                            </div>


                            <div class="col-md-3">
                                <div class="services-item">
                                    <span><i class="fa fa-lightbulb-o"></i></span>
                                    <p>CLEAN & MODERN DESIGN</p>
                                </div><!--end services-item-->
                            </div>
                        </div><!--end services-items-->
                    </div><!--end row -->

                </div><!--end our services -->

                <!-- ////////////////////// end   our services /////////////////////// -->


                <!-- ////////////////////// start testimonial/////////////////////// -->
                <div class="section testimoniol">
                    <ul class="testimoniol-slider">

                        <li>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
                            <a href="">RAYMOND DOE, <span>CO-FOUNDER & CEO</span></a>
                        </li>


                        <li>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
                            <a href="">RAYMOND DOE, <span>CO-FOUNDER & CEO</span></a>
                        </li>

                    </ul>


                </div><!--end testimoniol-->

                <!-- ////////////////////// end    testimonial /////////////////////// -->

                
                <!-- ////////////////////// start contact us/////////////////////// -->
                <div class="section-top-line contact-us" id="contact-us">
                    <div class="block-title text-center">
                        <h3>contact us</h3>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-form">
                                <form method="post" action="php/contact.php" id="cform" autocomplete="on">
                                    <input type="text" id="name" name="name" placeholder="NAME"/>

                                    <input type="email" id="email" name="email" placeholder="Email"/>

                                    <textarea id="message" name="message" placeholder="enter your message"></textarea>

                                    <button type="submit" class="success-btn">send message</button>
                                </form>
                            </div><!--contact-form-->
                        </div>

                        <div class="col-md-6">
                            <div class="contact-details">
                                <h4>LOCATION</h4>
                                <p>815 Sunset Boulevard Ca 70079</p>

                                <h4>TELEPHONE</h4>
                                <p>+1 800 123 4567</p>


                                <h4>E-MAIL</h4>
                                <p><a href="#">thor@example.com</a></p>

                                <ul class="social-links">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>

                                </ul>
                            </div><!-- contact-details-->
                        </div>
                    </div><!--end from-->

                    <div id="map"></div>
                </div><!--end contact us-->

                <!-- ////////////////////// end    contact us /////////////////////// -->
            </div><!--end warp-->


            <!-- ////////////////////// START FOOTER /////////////////////// -->
            <div id="the-footer">
                <p><a href="#">THOR</a> © 2015. All Right Reserved.</p>
            </div>
            <!-- ////////////////////// END FOOTER /////////////////////// -->
            <!-- //////////////////////START GO UP////////////////////// -->

            <div class="go-up">
                <a href="" ><i class="fa fa-chevron-up"></i></a>    
            </div>

            <!-- //////////////////////END GO UP////////////////////// -->

        </div>
@endsection
