@extends('layouts.app')
@section('content')
    <!-- Slider Revolution -->
    <div class="container-fluid" style="padding:0 !important;">
            <ul>
                <li>
                    <!-- MAIN IMAGE -->
                    <img class="img-responsive" style="width:100%;" src="{{asset('img/banner/it_support.jpg')}}" alt="slidebg1">
                </li>
            </ul>
    </div>
    <!-- End Slider Revolution -->

		<div class="content row_spacer no_padding">	
			<div class="rows_container clearfix">
				
				<div class="col-md-offset-2 col-md-8 col-sm-12 text-center">
				    <div class="col-md-12">
					<h2 class="title1 upper"><i class="ico-envelope3"></i> Request Free Consultation Form for potential clients.</h2>
					<form class="hm_contact_form" id="contact-us-form" name="contact-us-form" action="" method="post">
						<div class="form_row clearfix">
							<label for="contact-us-name">
								<span class="hm_field_name">Name</span>
								<span class="hm_requires_star">*</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-name" id="contact-us-name" placeholder="Full Name" required>
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-mail">
								<span class="hm_field_name">Email</span>
								<span class="hm_requires_star">*</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="email" name="contact-us-mail" id="contact-us-mail" placeholder="mail@sitename.com" required>
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-subject">
								<span class="hm_field_name">Subject</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-subject" id="contact-us-subject">
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-message">
								<span class="hm_field_name">Message</span>
								<span class="hm_requires_star">*</span>
							</label>
							<textarea class="form_fill_fields hm_textarea" name="contact-us-message" id="contact-us-message" required></textarea>
						</div>
						<div class="form_row clearfix">
							<button type="submit" class="send_button full_button" name="contact-us-submit" id="contact-us-submit" value="submit">
								<i class="ico-check3"></i>
								<span>Send Your Request</span>
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
		
@include('includes.footer')
@endsection
