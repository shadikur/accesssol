@extends('layouts.app')
@section('content')
    <!-- Slider Revolution -->
    <div class="container-fluid" style="padding:0 !important;">
            <ul>
                <li>
                    <!-- MAIN IMAGE -->
                    <img class="img-responsive" style="width:100%;" src="{{asset('img/banner/referral.jpg')}}" alt="slidebg1">
                </li>
            </ul>
    </div>
    <!-- End Slider Revolution -->

		<div class="content row_spacer no_padding">	
			<div class="rows_container clearfix">
				
				<div class="col-md-12 text-center">
					<p><strong>AT ACCESS TECHNOLOGIES SOLUTION WE BELIEVE THAT REFERRAL’S ARE THE GREATEST FORM OF FLATTERY.</strong></p>
					<p>Access Technologies Solution is always looking for new companies to help achieve maximum business outcomes. Do you know a friend, business colleague or someone close to you who needs a reliable IT company? Send Them Our Way. As one of our valued customers, you already know the benefits you get from our services.</p>
				</div>
				<div class="col-md-12">
					<!--<h2 class="title1 upper"><i class="ico-envelope3"></i>Get On Touch</h2>-->
					<form class="hm_contact_form text-center" id="contact-us-form" name="contact-us-form" action="#" method="post">
                        <div class="row bordered_content ">
                            <h2 class="bordered_content">Your INFORMATION</h2>
                            <div class="col-md-6 bordered_content">
        						<div class="form_row clearfix">
        							<label for="contact-us-name">
        								<span class="hm_field_name">Your Name</span>
        								<span class="hm_requires_star">*</span>
        							</label>
        							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-name" id="contact-us-name" placeholder="Your Name" required>
        						</div>
                            </div>
                            <div class="col-md-6 bordered_content">
        						<div class="form_row clearfix">
        							<label for="contact-us-mail">
        								<span class="hm_field_name">Email</span>
        								<span class="hm_requires_star">*</span>
        							</label>
        							<input class="form_fill_fields hm_input_text" type="email" name="contact-us-mail" id="contact-us-mail" placeholder="Your Email" required>
        						</div>
                            </div>
                            <div class="col-md-6 bordered_content">
        						<div class="form_row clearfix">
        							<label for="contact-us-name">
        								<span class="hm_field_name">Company Name</span>
        								<span class="hm_requires_star">*</span>
        							</label>
        							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-name" id="contact-us-name" placeholder="Company Name" required>
        						</div>
                            </div>
                            <div class="col-md-6 bordered_content">
        						<div class="form_row clearfix">
        							<label for="contact-us-mail">
        								<span class="hm_field_name">Phone</span>
        								<span class="hm_requires_star">*</span>
        							</label>
        							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-mail" id="contact-us-mail" placeholder="Phone Number" required>
        						</div>
                            </div>
                        </div>
                        <div class="row bordered_content ">
                            <h2 class="bordered_content">Your Referral's Program</h2>
                            <div class="col-md-6 bordered_content">
        						<div class="form_row clearfix">
        							<label for="contact-us-phone">
        								<span class="hm_field_name">Full Name</span>
        							</label>
        							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-phone" placeholder="Full Name" id="contact-us-phone">
        						</div>
                            </div>
                            <div class="col-md-6 bordered_content">
        						<div class="form_row clearfix">
        							<label for="contact-us-subject">
        								<span class="hm_field_name">Website Address</span>
        							</label>
        							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-subject" placeholder="Website Address" id="contact-us-subject">
        						</div>
                            </div>
                            <div class="col-md-6 ">
        						<div class="form_row clearfix bordered_content">
        							<label for="contact-us-option">
        								<span class="hm_field_name">Company Name</span>
        							</label>
        							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-subject" plaaceholder="Comlany Name" id="contact-us-subject">
        						</div>
        						<div class="row bordered_content">
        						    <div class="col-md-12 bordered_content">
                						<div class="form_row clearfix">
                							<label for="contact-us-option">
                								<span class="hm_field_name">Email</span>
                							</label>
                							<input class="form_fill_fields hm_input_text" type="email" name="contact-us-subject" placeholder="Email" id="contact-us-subject">
                						</div>
        						    </div>
        						    <div class="col-md-12 bordered_content">
                						<div class="form_row clearfix">
                							<label for="contact-us-option">
                								<span class="hm_field_name">Phone</span>
                							</label>
                							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-subject" placeholder="Phone" id="contact-us-subject">
                						</div>
        						    </div>
        						</div>
                            </div>
                            <div class="col-md-6 bordered_content">
        						<div class="form_row clearfix">
        							<label for="contact-us-message">
        								<span class="hm_field_name">Description</span>
        								<span class="hm_requires_star">*</span>
        							</label>
        							<textarea class="form_fill_fields hm_textarea" name="contact-us-message" placeholder="Description of Clients" id="contact-us-message" required></textarea>
        						</div>
                            </div>
                        </div>
                        <div class="col-md-12 ">
    						<div class="form_row col-md-12 text-center clearfix">
    							<button type="submit" class="send_button" style="margin-left:0 !important" name="contact-us-submit" id="contact-us-submit" value="submit">
    								<i class="ico-check3"></i>
    								<span>Send Your Message</span>
    							</button>
    						</div>
                        </div>
                        
						<!--<div class="form_row clearfix">-->
						<!--	<div id="form-messages"></div>-->
						<!--</div>-->
						<!--<div class="form_loader"></div>-->
					</form>
				</div><!-- Grid -->
				
			</div>
		</div>
		
@include('includes.footer')
@endsection
