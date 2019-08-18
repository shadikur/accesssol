@extends('layouts.app')
@section('content')
    <!-- Slider Revolution -->
    <div class="container-fluid" style="padding:0 !important;">
            <ul>
                <li>
                    <!-- MAIN IMAGE -->
                    <img class="img-responsive" style="width:100%;" src="{{asset('img/banner/network_security.jpg')}}" alt="slidebg1">
                </li>
            </ul>
    </div>
    <!-- End Slider Revolution -->

		<div class="content row_spacer no_padding">	
			<div class="rows_container clearfix">
				
				<div class="col-md-12">
					<h2 class="title1 upper">Computer Security</h2>
					<p>Keeping your business-critical information and applications secure is vital. You can’t afford to have your important data compromised, and Access Technologies Solution provides the dependable security solutions you need to make sure that does not happen.</p>
					    <p>
					        <a class="btn_b color3 large_btn bottom_space" href="{{route('support.specialist')}}" style="color:white !important;">
								<span class="hidden_element" data-text="Speak With Your Central Ohio IT Specialits">Speak With Your Central Ohio IT Specialits</span>
							</a>
						</p>
						<p>The Internet has changed the way we work, allowing us to communicate more effectively, enhance our operations, and broaden our horizons in ways never possible, but these benefits do not come without risks. Malware and viruses can threaten your productivity and compromise sensitive information. You need comprehensive security that will allow you to work safely, and protect your digital assets.</p>
					<p><strong>Avoid falling victim to a damaging cyber-attack. Reach out to the experts at Access Technologies Solution to help you protect all your valuable resources and data. Contact us at (614) 723-9073 or info@accesssol.com to learn more.</strong></p>
				</div>
	<!-- Features 3-->
								<div class="col-md-12">
									<ul class="list3 clearfix">
										<li><strong>Experience and Expertise</strong><p>Our security professionals are well experienced and hold countless security technology certifications to ensure we are providing industry-leading services.</p></li>
										<li><strong>Industry Leading Services and Solutions</strong><p>We provide industry-leading services and solutions to give you peace of mind knowing your security needs are under control, and you are benefitting from the best solutions and services the industry must offer.</p></li>
										<li><strong> Updating and Patching</strong><p>We make sure your hardware is kept up to date with the latest patches and available updates.</p></li>
										<li><strong>Reliable Protection</strong><p> Make sure risks are mitigated and eliminate vulnerabilities in your network. We can keep your IT system, workstations, and mobile devices safe from external threats.</p></li>
										<li><strong> Compliant Operations</strong><p> It is important to make sure your operations are compliant and you are meeting the standards of any regulatory guidelines. We are experienced in ensuring compliance with the regulatory agencies of your industry.</p></li>
									</ul>
									<p>You need effective security measures in place to ensure your technology is always working to your advantage, and not as a detriment. We can provide the flexible and customizable security solutions you need to custom-fit your business.</p>
									<p><strong>Take advantage of a company that understands the importance of security and can help keep your important information safe and secure. Give us a call at (614) 723-9073 or send an email to info@accesssol.com to talk to us about your unique security concerns.

Quick Links</strong></p>
								</div>
								<div class="clear"></div>
        	<!-- End Features 3 -->

			</div>
		</div>
		
@include('includes.footer')
@endsection
