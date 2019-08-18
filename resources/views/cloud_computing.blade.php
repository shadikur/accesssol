@extends('layouts.app')
@section('content')
    <!-- Slider Revolution -->
    <div class="container-fluid" style="padding:0 !important;">
            <ul>
                <li>
                    <!-- MAIN IMAGE -->
                    <img class="img-responsive" style="width:100%;" src="{{asset('img/banner/cloud_technology.jpg')}}" alt="slidebg1">
                </li>
            </ul>
    </div>
    <!-- End Slider Revolution -->

		<div class="content row_spacer no_padding">	
			<div class="rows_container clearfix">
				
				<div class="col-md-12">
					<h2 class="title1 upper">Cloud Technologies</h2>
					<p>The arrival of cloud computing is changing the way we work – for the better. The cloud provides innovative and affordable computing solutions for businesses of all sizes, in any industry, levelling the playing field between the heavy hitters and the little guys.</p>
					    <p>
					        <a class="btn_b color3 large_btn bottom_space" href="{{route('support.specialist')}}" style="color:white !important;">
								<span class="hidden_element" data-text="Speak With Your Central Ohio IT Specialits">Speak With Your Central Ohio IT Specialits</span>
							</a>
						</p>
						<p>Making the move to the cloud allows you the dependability and reliability you need to ensure you are always working at your best, as well as the flexibility and customization needed to enhance the way you operate. You’ll have better control over your IT budget, and be able to ensure all your important information and applications are secure and easily accessible.</p>
					<p><strong>Access Technologies Solution provides extensive experience and expertise in all things cloud related. We have been a player in the cloud since before it was “the cloud”. Don’t settle for less than the best; trust in our experience and knowledge. Contact us at (614) 723-9023 or info@accesssol.com</strong></p>
                    <p>We cover every aspect of cloud computing and provide our clients with access to our privately owned local cloud, which ensures you have the easy access and unbeatable security you need and allows us the direct control necessary to effectively manage your cloud services. There is a multitude of cloud services to answer to your unique needs, including:</p>
                    <ul class="list1 listfullcols clearfix">
					    <li>Email and website hosting solutions</li>
						<li>Co-located servers</li>
						<li>File sharing options</li>
						<li>Cloud-based storage and backup solutions</li>
						<li>Microsoft Office 365</li>
					</ul>
					<p>Access Technologies Solution is proud to bring to you cloud services that are owned and maintained by us personally, so we can ensure you are able to have access to the customized, tailor-fit services you need to succeed. Taking advantage of cloud technologies will provide you the following benefits:</p>
				</div>
	<!-- Features 3-->
								<div class="col-md-12">
									<ul class="list3 clearfix">
										<li><strong>Customizable Services and Solutions </strong><p>We can customize your business-critical services and solutions to support and enhance the important work you do. Take advantage of tools that are specifically designed to enhance mobility, increase productivity, and work smarter, not harder.</p></li>
										<li><strong>A Simplified IT Infrastructure</strong><p>Simple is always better. The cloud allows you to simplify your IT structure, keeping all of your resources, data, and applications in one convenient spot. Processes are streamlined and performance is improved by harnessing the power of the cloud.</p></li>
										<li><strong>Enhanced Operations</strong><p>Technology can positively impact every aspect of the way you operate, especially with the arrival of the cloud. Improved mobility makes remote work and staying connected while outside of the office simple and easy. Your resources are more secured, stored offsite and easily accessible in times of disaster, and your IT expenses are better controlled, with you getting more for your money.</p></li>
										<li><strong>An Affordable Alternative</strong><p>The cloud can save you a considerable amount of investment, eliminating the need for purchasing new hardware. Less software is required, and you save money on maintenance and repair of your technology because it is all covered with our innovative cloud services, and you only pay for what is needed.</p></li>
										<li><strong>Dependable Disaster Recovery</strong><p>Never let an incident or attack slow down your workflow or interrupt your operations. The cloud provides easy and affordable backup and disaster recovery options, ensuring when the unexpected does occur you are able to bounce back quickly, getting on with business as usual.</p></li>
									</ul>
									<p><strong>Aligning yourself with Access Technologies Solution for your cloud services allows you access to our independently owned and maintained cloud. Gain peace of mind knowing you are getting innovative and industry-leading cloud solutions to enhance every aspect of the way you work. Call us at (614) 723-9073 or send an email to info@accesssol.com to get started!</strong></p>
								</div>
								<div class="clear"></div>
        	<!-- End Features 3 -->

			</div>
		</div>
		
@include('includes.footer')
@endsection
