@extends('layouts.app')
@section('content')
    <!-- Slider Revolution -->
    <div class="container-fluid" style="padding:0 !important;">
            <ul>
                <li>
                    <!-- MAIN IMAGE -->
                    <img class="img-responsive" style="width:100%;" src="{{asset('img/banner/our_purpose.jpg')}}" alt="slidebg1">
                </li>
            </ul>
    </div>
    <!-- End Slider Revolution -->

		<div class="content row_spacer no_padding">	
			<div class="rows_container clearfix">
				
				<div class="col-md-12">
					<h2 class="title1 upper">Our Purpose</h2>
					<p><strong>Our purpose is simple: To provide an exceptional client experience by providing industry-leading services and solutions to help business owners use their technology as a tool for success.</strong></p>
					<p>We do that by building a relationship with you, our client and playing the role of your IT partner. We take care of your technology needs, whatever they might be so that your time and energy is freed up to focus on what you do best. We do this by taking the time to understand your business, use of technology, and expectations and then we thrive to “do what we said we’d do”.</p>
                    <p>
                        Access Technologies Solution understands that technology can be complicated, and we want to simplify things for you.
                    </p>                    
                    <p><strong>For an IT partner that is committed to making a difference in your business reach out to the experts at Access Technologies. Contact us at (614) 723-9073 or info@accesssol.com</strong></p>
				</div>
	<!-- Features 3-->
	<section class="content_section">
		<div class="container row_spacer clearfix">
			<div class="content">
				<div class="main_title centered upper">
					<h2><span class="line"><span class="dot"></span></span>Our Features</h2>
				</div>
			</div>
			<!-- Rows Container -->
			<div class="icon_boxes_con style2 icon_box_no_border upper_title clearfix">
				<div class="col-md-12">
					<div class="service_box custom-a">
						<a href="#"><span class="icon circle custom-icon"><i class="ico-key4"></i></span></a>
						<div class="service_box_con">
							<h3>Expert Guidance and Advice</h3>
							<span class="desc">You know you are making wise IT decisions when you are given the advantage of our expert guidance and advice.</span>
						</div>
					</div>
					<div class="service_box custom-a">
						<a href="#"><span class="icon circle custom-icon"><i class="ico-tools-2"></i></span></a>
						<div class="service_box_con">
							<h3>Innovative Services and Solutions</h3>
							<span class="desc">Take advantage of the best services and tools the industry must offer.</span>
						</div>
					</div>
					<div class="service_box custom-a">
						<a href="#"><span class="icon circle custom-icon"><i class="ico-envelope2"></i></span></a>
						<div class="service_box_con">
							<h3>Reliable Support</h3>
							<span class="desc">You are never left to deal with an issue alone. Phoenix Technology is there to help you resolve any issues you may be presented with and work with you quickly and effectively to make sure you’re running at 100%.</span>
						</div>
					</div>
					<div class="service_box custom-a">
						<a href="#"><span class="icon circle custom-icon"><i class="ico-heart5"></i></span></a>
						<div class="service_box_con">
							<h3>A long-term Partnership</h3>
							<span class="desc">We are with you for the long haul, building a relationship as your technology partner so we can better understand your needs and how to meet them. Our commitment to an excellent client experience means years of working together successfully, making sure your business benefits.</span>
						</div>
					</div>
                        <p>
                            We are committed to making sure you have the services and solutions necessary to overcome your obstacles and reach your goals. Let us help you achieve the success you deserve. Call us at (614) 723-9073 or send an email info@accesssol.com to talk more.
                        </p>
				</div>
				<!--<div class="col-md-6">-->
				<!--	<img src="images/looking1.jpg" alt="Image Title">-->
				<!--</div>-->
			</div>
			<!-- End Rows Container -->
		</div>
	</section>
	<!-- End Features 3 -->
				
			</div>
		</div>
		
@include('includes.footer')
@endsection
