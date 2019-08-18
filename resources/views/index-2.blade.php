@extends('layouts.app')
@section('content')
    <!-- Slider Revolution -->
    <div class="container-fluid" style="padding:0 !important;">
            <!--<ul>-->
            <!--    <li>-->
                    <!-- MAIN IMAGE -->
            <!--        <img class="img-responsive" style="width:100%;" src="{{asset('img/banner/bannerm.jpg')}}" alt="slidebg1">-->
            <!--    </li>-->
            <!--</ul>-->
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                      <li data-target="#myCarousel" data-slide-to="1"></li>
                      <li data-target="#myCarousel" data-slide-to="2"></li>
                      <li data-target="#myCarousel" data-slide-to="3"></li>
                      <li data-target="#myCarousel" data-slide-to="4"></li>

                    </ol>
                
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                      <div class="item active">
                        <img src="{{asset('img/banner/index_main_banner.png')}}" alt="Inovation Ideas" style="width:100%;">
                      </div>
                
                      <div class="item">
                        <img src="{{asset('img/banner/it_services.jpg')}}" alt="It Services" style="width:100%;">
                      </div>
                    
                      <div class="item">
                        <img src="{{asset('img/banner/cloud_technology.jpg')}}" alt="Cloud Technologies" style="width:100%;">
                      </div>

                      <div class="item">
                        <img src="{{asset('img/banner/network_security.jpg')}}" alt="Network Security" style="width:100%;">
                      </div>

                      <div class="item">
                        <img src="{{asset('img/banner/data_backup.jpg')}}" alt="Data Backup" style="width:100%;">
                      </div>

                    </div>
                
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="hover:opacity" >
                      <span class="glyphicon glyphicon-chevron-left fas fa-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right fas fa-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
    </div>
    <!-- End Slider Revolution -->

    <!-- Icon Boxes Style 2 A -->
    <section class="content_section">
        <div class="title_banner t_b_color1 upper centered">
            <div class="content">
                <h2>Our Services</h2>
            </div>
        </div>
        <div class="container icons_spacer">
            <!-- <div class="main_title centered upper">
                <h2><span class="line"><span class="dot"></span></span>Our Services</h2>
            </div> -->
            <div class="icon_boxes_con style2 clearfix medium_icon clearfix">
                <div class="col-md-4">
                    <div class="service_box clearfix">
                        <span class="icon circle" style="background:none !important;">
                            <!--<i class="ico-check3"></i>-->
                            <img src="{{asset('enra/images/icon-1.png')}}" class="img-responsive">
                        </span>
                        <div class="service_box_con">
                            <h3>DATA BACKUP & DISASTAR RECOVERY</h3>
                            <span class="desc">Having proper backup procedures and processes in place is crucial to ensure business continuity and protect yourself against cyber-attacks.</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_box clearfix">
                        <span class="icon circle" style="color:none; background:none !important;">
                            <!--<i class="ico-monitor"></i>-->
                            <img src="{{asset('enra/images/icon-2.png')}}" class="img-responsive">
                        </span>
                        <div class="service_box_con">
                            <h3>MANAGEMENT IT SERVICES</h3>
                            <span class="desc">We are committed to providing the innovative and industry-leading tools and services you need, all wrapped up neatly into our managed services offering.</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_box clearfix">
                        <span class="icon circle" style="color:none !important; background:none !important;">
                            <!--<i class="ico-heart3"></i>-->
                            <img src="{{asset('enra/images/icon-3.png')}}" class="img-responsive">
                        </span>
                        <div class="service_box_con">
                            <h3>CLOUD TECHNOLOGIES</h3>
                            <span class="desc">The arrival of cloud computing is changing the way we work – for the better. The cloud provides innovative and affordable computing solutions.</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_box clearfix">
                        <span class="icon circle" style="background:none !important;">
                            <!--<i class="ico-umbrella2"></i>-->
                            <img src="{{asset('enra/images/icon-4.png')}}" class="img-responsive">
                        </span>
                        <div class="service_box_con">
                            <h3>COMPUTER SECURITY</h3>
                            <span class="desc">Keeping your business-critical information and applications secure is vital. You can’t afford to have your important data compromised.</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_box clearfix">
                        <span class="icon circle" style="background:none !important;">
                            <!--<i class="ico-toggle"></i>-->
                            <img src="{{asset('enra/images/icon-5.png')}}" class="img-responsive">
                        </span>
                        <div class="service_box_con">
                            <h3>IT SUPPORT</h3>
                            <span class="desc">Access Technologies Solution provides a broad range of IT consulting & IT support for small- to mid-sized businesses.</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service_box clearfix">
                        <span class="icon circle" style="background:none !important;">
                            <!--<i class="ico-eye3"></i>-->
                            <img src="{{asset('enra/images/icon-1.png')}}" class="img-responsive">
                        </span>
                        <div class="service_box_con">
                            <h3>IT CONSULTING</h3>
                            <span class="desc">Access Technologies Solution provides strategic planning and guidance, as well as much needed IT leadership, serving as your CIO when in need.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Icon Boxes Style 2 A -->

    <!-- Features Slider 1-->
    <section class="content_section bg_fixed white_section bg2">
        <span class="section_icon"><i class="ico-tools"></i></span>
        <div class="bg_overlay1">
            <div class="content row_spacer_t clearfix">
                <div class="png_slider">

                    <div class="png_slide">
                        <h2>Our Goal</h2>
                        <p>
                            <span>Our goal is to help you be successful in your business, bridging the gap between you and your technology. We fully support you in strategically planning your technology roadmap, guiding you every step of the way to ensure your IT is working to your advantage at all times.</span>
                        </p>
                        <img class="img-responsive" style="width:100%" src="{{asset('img/ourgoals.jpg')}}" alt="Device1">
                    </div>
                    <div class="png_slide">
                        <h2>Why you work with us</h2>
                        <p>
                            <span>There are a million IT providers out there, but Access Technologies Solution is different. We aren’t your typical technology service provider, pushing the same solutions and tools off on every business owner. We understand no two businesses are the same, and you need customized IT services to meet your unique needs and requirements to achieve the success you deserve.</span>
                        </p>
                        <img class="img-responsive" style="width:100%" src="{{asset('img/whyus.jpg')}}" alt="Device1">
                    </div>
                    <div class="png_slide">
                        <h2>How your business benefits</h2>
                        <p><span>The technology is an obvious benefit, but technology is not the only advantage you get when you align yourself with Access Technologies Solution as your IT partner. We are committed to making certain you have everything you need to succeed, not just innovative solutions, but strategic guidance, unbeatable support, and a dependable partnership helping you to bridge the gap between you and your technology.</span></p>
                        <img class="img-responsive" style="width:100%" src="{{asset('img/businessbenefits.jpg')}}" alt="Device1">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Features Slider 1 -->

    <!-- Tabs 1 -->
    <section class="content_section bg_gray border_t_n">
        <div class="content row_spacer">
            <div class="main_title centered upper">
                <h2><span class="line"><span class="dot"></span></span>About Us</h2>
            </div>
            <div class="hm-tabs tabs2 upper_title">
                <ul class="tabs-body">
                    <li data-content="vission" class="selected clearfix">

                        <div class="tab_img">
                            <a class="magnific-popup img_popup" href="images/home2.jpg">
                                <span><i class="ico-maximize"></i></span>
                                <img class="popup_img" src="{{asset('enra/images/home-2.jpg')}}" alt="vission">
                            </a>
                        </div>
                        <h6>About Us</h6>
                        <p>Access Technologies Solution Is Your Trusted IT Solutions Company in Central Ohio and Surrounding States

                            Access Technologies is your one stop IT solutions shop, proving the innovative computer and IT solutions, comprehensive services, and dependable support you need to use your technology to thrive.</p>
                        <p>At Access Technologies Solutions, we believe that the best Information Technology is invisible and give each customer the priceless peace of mind that their systems are working at the highest level possible every single day. Our customers deserve security, prompt action and response and the most trouble-free IT possible.</p>
                    </li>
                </ul>
                <!-- Tabs Content -->
            </div>
            <!-- End Tabs Container -->
        </div>
    </section>
    <!-- End Tabs 1 -->
    <!-- Tweets -->
    <section class="content_section white_section bg_color4 bg12 bg_fixed">
        <span class="section_icon"><i class="ico-star"></i></span>
        <div class="bg_overlay">
            <div class="content row_spacer">
                <div class="main_title centered upper">
                    <h2><span class="line"></span>Testimonial</h2>
                </div>

                <div class="normal_text_slider centered">
                    <div class="text_slide">
						<span class="desc">
							Access Technologies Solution advanced proactive monitoring of my network has ensured that my business is always under close surveillance. In my field information security is essential. Access Technologies Solution neutralizes any potential threats that can negatively impact our business productivity.
						</span>
                        <h3>All Unity Home Health, LLC Columbus Ohio</h3>
                    </div>

                    <div class="text_slide">
						<span class="desc">
                            Time and time again, Access Technologies Solution has proven to be an asset to our business. Their technical support has ensured that I am able to provide my customers with the services they require. Minimizing down time is critical in our industry especially during tax season.</span>
                        <h3>Bulsho Financial Services LLC Columbus Ohio</h3>
                    </div>

                    <div class="text_slide">
						<span class="desc">
                            Access Technologies Solution has been a vital partner of ours when it comes to expanding and improving our IT network. Their quality of service has exceeded our expectations throughout the years. Access keeps us one step ahead of the competition when it comes to our technical needs.
                        </span>
                        <h3>Ohio Based Law Firm</h3>
                    </div>

                    <div class="text_slide">
						<span class="desc">
                            Omaar, Johnson, Da'ar, Abdisamad and their crew were phenomenal. Their ability to work on off hours (which was a must in our business) and their amazing work is a testament to their professionalism. Simply spectacular work.
                        </span>
                        <h3>Comfort Ride Transportation, Grove City Ohio</h3>
                    </div>


                </div>

            </div>
        </div>
    </section>
    <!-- End Tweets -->



    <!-- Features Icons-->
    <section class="content_section bg_fixed white_section bg3">

        <div class="bg_overlay">
            <div class="content row_spacer clearfix">
                <div class="content row_spacer no_padding">
                    <div class="rows_container clearfix">

                        <div class="col-md-6">
                            <h2 class="title1 upper">Locate Us on Map</h2>
                            <span class="spacer20"></span>

                            <div class=" with_text ">
                               <div>
                                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3053.6777925649544!2d-82.98145138468907!3d40.06029088516405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88388b76d3d20549%3A0xc7168a917f82c6a4!2s1495+Morse+Rd+%23306%2C+Columbus%2C+OH+43229%2C+USA!5e0!3m2!1sen!2ssg!4v1545067101293" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                               </div>
                            </div>
                            <span class="spacer10"></span>

                            <h2 class="title1 upper">Contact Information</h2>
                            <span class="c_detail">
                                <span class="c_name" style="color:white;">Address :</span>
                                <span class="c_desc"> 1495 Morse Rd, Suite: 306 Columbus Ohio 43229</span>
		        			</span>
                            <span class="c_detail">
				        		<span class="c_name" style="color:white;">Phone :</span>
						        <span class="c_desc"> 614-723-9073</span>
        					</span>
                            <span class="c_detail">
						        <span class="c_name" style="color:white;">Fax :</span>
						        <span class="c_desc"> 614-845-5024</span>
					        </span>
                            <span class="c_detail">
		        				<span class="c_name" style="color:white;">Email :</span>
				        		<span class="c_desc"> info@accesssol.com</span>
					        </span>

                        </div><!-- Grid -->

                        <div class="col-md-6">
                            <h2 class="title1 upper">Get On Touch</h2>
                            <span class="spacer20"></span>

                            <form class="hm_contact_form" id="contact-us-form" name="contact-us-form" action="http://www.enar.ideal-theme.com/html5/php/phpmailer/sendemail.php" method="post">
                                <div class="form_row clearfix">
                                    <label for="contact-us-name">
                                        <span class="hm_field_name" style="color:white;">Name</span>
                                        <span class="hm_requires_star">*</span>
                                    </label>
                                    <input class="form_fill_fields hm_input_text" type="text" name="contact-us-name" id="contact-us-name" placeholder="Full Name" required>
                                </div>
                                <div class="form_row clearfix">
                                    <label for="contact-us-mail">
                                        <span class="hm_field_name"style="color:white;">Email</span>
                                        <span class="hm_requires_star">*</span>
                                    </label>
                                    <input class="form_fill_fields hm_input_text" type="email" name="contact-us-mail" id="contact-us-mail" placeholder="mail@sitename.com" required>
                                </div>
                                <div class="form_row clearfix">
                                    <label for="contact-us-subject">
                                        <span class="hm_field_name" style="color:white;">Subject</span>
                                    </label>
                                    <input class="form_fill_fields hm_input_text" type="text" name="contact-us-subject" id="contact-us-subject">
                                </div>
                                <div class="form_row clearfix">
                                    <label for="contact-us-message">
                                        <span class="hm_field_name" style="color:white;">Message</span>
                                        <span class="hm_requires_star">*</span>
                                    </label>
                                    <textarea class="form_fill_fields hm_textarea" name="contact-us-message" id="contact-us-message" required></textarea>
                                </div>
                                <div class="form_row clearfix">
                                    <button type="submit" class="send_button full_button" name="contact-us-submit" id="contact-us-submit" value="submit">
                                        <i class="ico-check3"></i>
                                        <span>Send Your Message</span>
                                    </button>
                                </div>
                                <div class="form_row clearfix">
                                    <div id="form-messages"></div>
                                </div>
                                <div class="form_loader"></div>
                            </form>
                        </div><!-- Grid -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Features Icons -->
@endsection
