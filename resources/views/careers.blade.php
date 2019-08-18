@extends('layouts.app')
@section('content')
    <!-- Slider Revolution -->
    <div class="container-fluid" style="padding:0 !important;">
            <ul>
                <li>
                    <!-- MAIN IMAGE -->
                    <img class="img-responsive" style="width:100%;" src="{{asset('img/banner/careers.jpg')}}" alt="slidebg1">
                </li>
            </ul>
    </div>
    <!-- End Slider Revolution -->

		<div class="content row_spacer no_padding">	
		    <div class="row">
		        <div class="col-md-6 col-sm-12">
                    <h2 class="title1 upper">Rewarding Technology Careers</h2>
    				<p>We are always looking for great people. Our staff is comprised about a passionate group of IT professionals with the common goal of bringing unsurpassed technology services and solutions to business across Central Ohio and surrounding areas.</p>
                    <p>Access Technologies Solution offers challenging technology careers for individuals with the drive to succeed in a new age IT world. Please call us or email us to find out more!</p>
                    <p>Please the form on the right to submit your resume to Access Technologies Solution.</p>
                    <p>Here is Contentinfo of the form. Please attach Employment application as "writtable PDF format" then attach it to the form so people will be able to download. DOWNLOAD FORM</p>
		        </div>
		        <div class="col-md-6 col-sm-12">
		            <div class="col-md-12 text-center">
					<h2 class="title1 upper">I am looking for a rewarding IT career in Central Ohio</h2>
					<form class="hm_contact_form" id="contact-us-form" name="contact-us-form" action="#" method="post" novalidate="novalidate">
						<div class="form_row clearfix">
							<label for="contact-us-name">
								<span class="hm_field_name">Name</span>
								<span class="hm_requires_star">*</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-name" id="contact-us-name" placeholder="Full Name" required="" aria-required="true">
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-mail">
								<span class="hm_field_name">Email</span>
								<span class="hm_requires_star">*</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="email" name="contact-us-mail" id="contact-us-mail" required="" aria-required="true">
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-phone">
								<span class="hm_field_name">Phone</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-phone" id="contact-us-phone" placeholder="Phone">
						</div>
						<div class="form_row clearfix">
							<label for="contact-us-subject">
								<span class="hm_field_name">Postion</span>
							</label>
							<input class="form_fill_fields hm_input_text" type="text" name="contact-us-subject" placeholder="Position" id="contact-us-subject">
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
				</div>
		        </div>
		    </div>
		</div>
		
@include('includes.footer')
@endsection
