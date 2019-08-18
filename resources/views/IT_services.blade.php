@extends('layouts.app')
@section('content')
    <!-- Slider Revolution -->
    <div class="container-fluid" style="padding:0 !important;">
            <ul>
                <li>
                    <!-- MAIN IMAGE -->
                    <img class="img-responsive" style="width:100%;" src="{{asset('img/banner/it_services.jpg')}}" alt="slidebg1">
                </li>
            </ul>
    </div>
    <!-- End Slider Revolution -->

		<div class="content row_spacer no_padding">	
			<div class="rows_container clearfix">
				
				<div class="col-md-12">
					<h2 class="title1 upper">Managed IT Services</h2>
					<p>We are committed to providing the innovative and industry-leading tools and services you need, all wrapped up neatly into our managed services offering, with the flexibility and customization necessary to address your individual needs and unique requirements.</p>
					    <p>
					        <a class="btn_b color3 large_btn bottom_space" href="{{route('support.specialist')}}" style="color:white !important;">
								<span class="hidden_element" data-text="Speak With Your Central Ohio IT Specialits">Speak With Your Central Ohio IT Specialits</span>
							</a>
						</p>
					<p><strong>Managed IT Services & IT Support – Helping Your Central Ohio & Surrounding States Business Overcome IT Issues.</strong></p>
                    <p>It seems these days business owners are scrambling to get their hands on the dependable and reliable IT services and solutions needed to succeed, and managed IT services offered by Access Technologies Solution are a great way to get the tools and solutions you need, in one convenient package.</p>                    
                    <p>We are committed to providing the innovative and industry-leading tools and services you need, all wrapped up neatly into our managed services offering, with the flexibility and customization necessary to address your individual needs and unique requirements. Our managed IT services ensure you have access to a complete suite of IT services and solutions, as well as complete management and oversight of your entire IT infrastructure to make certain you are always able to do your best work.</p>
                    <p><strong>You need an IT partner that cares about YOU first and technology second. We take the time to know you and your business so we can cater to your specific needs and requirements. Managed IT services from Access Technologies Solution help you get the most out of your technology so you can overcome obstacles and reach your goals. Contact us at (614) 723-9073 or info@accesssol.com to talk more about how we can help you.</strong></p>
				    <p>When you decide to go with a managed services plan from Access Technologies Solution you have access to an all-inclusive suite of services, expertly managed and supported by our team of professionals, at one predictable monthly price point.</p>
                    <ul class="list1 listfullcols clearfix">
					    <li>Comprehensive security services</li>
						<li>Help Desk services and support</li>
						<li>Business continuity and backup solutions</li>
						<li>Access to innovative business applications</li>
						<li>Complete monitoring and maintenance of your IT infrastructure</li>
						<li>Access to industry-leading cloud technologies</li>
					</ul>
					<p>Our managed services allow us not only to provide great oversight and monitoring of your systems, but also to give you all the resources necessary to enhance your operations and positively impact your day-to-day work when you need them. You can benefit from:</p>
				</div>
	<!-- Features 3-->
								<div class="col-md-12">
									<ul class="list3 clearfix">
										<li><strong>Dependable Assistance and Support</strong><p>Get the answers and assistance you need, when you need it. We are always there to provide the support you need to resolve any issues you may be confronted with, and oftentimes we are on the case within mere minutes.</p></li>
										<li><strong>A Single Point of Contact</strong><p>Makes it easy to get the answers you need and keep things running smoothly. Having a single point of content makes overseeing your technology simple and effective.</p></li>
										<li><strong>Predictable, Affordable Budgeting </strong><p>Gain better control over your IT expenses by choosing managed services. Every service and solution you need is conveniently and affordably packaged into one fixed rate, meaning there will never be an IT bill that catches you off guard.</p></li>
										<li><strong>Strategic Planning and Expert Guidance</strong><p>We work as your IT partner, helping you navigate your technology roadmap to lead you to success. Get the strategic planning you need, backed by the expert guidance and support necessary to ensure you are always using your tools to your advantage.</p></li>
									</ul>
									<p><strong>You need a fully managed set of services and solutions to take the worry out of your technology. Access Technologies Solutions can help. Call us at (614) 723-9073 or send an email to info@accesssol.com to hear more about how we can make a difference in the way you work.</strong></p>
								</div>
								<div class="clear"></div>
        	<!-- End Features 3 -->

			</div>
		</div>
		
@include('includes.footer')
@endsection
