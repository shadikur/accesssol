@extends('layouts.app')
@section('content')
    <!-- Slider Revolution -->
    <div class="container-fluid" style="padding:0 !important;">
            <ul>
                <li>
                    <!-- MAIN IMAGE -->
                    <img class="img-responsive" style="width:100%;" src="{{asset('img/banner/it_strategic.jpg')}}" alt="slidebg1">
                </li>
            </ul>
    </div>
    <!-- End Slider Revolution -->

		<div class="content row_spacer no_padding">	
			<div class="rows_container clearfix">
				
				<div class="col-md-12">
					<h2 class="title1 upper">Strategic IT Consulting</h2>
					<p>Access Technologies Solution provides strategic planning and guidance, as well as much needed IT leadership, serving as your CIO when in need and bridging the gap between your technology and your success</p>
					    <p>
					        <a class="btn_b color3 large_btn bottom_space" href="{{route('speak.ohio')}}" style="color:white !important;">
								<span class="hidden_element" data-text="Speak With Your Central Ohio IT Specialits">Speak With Your Central Ohio IT Specialits</span>
							</a>
						</p>
					<p><strong>Your Business Must Have An IT Partner That Offers Strategic IT Consulting…Allow You To Make The Right Business Decisions.</strong></p>
                    <p>We understand you need technology to work better, but it is not your area of expertise. Luckily, it’s ours. We provide more than just services and solutions: we can be your trusted IT advisor, providing you the experience and expertise you need to make technology decisions that will positively impact your operations.</p>                    
                    <p>Access Technologies Solution provides strategic planning and guidance, as well as much needed IT leadership, serving as your Chief Information Officer (CIO) when in need and bridging the gap between your technology and your success.</p>
                    <p><strong>A trusted IT advisor can make all the difference in how you use your technology, helping you overcome obstacles and achieve your goals. Call Access Technologies Solution at (614) 723-9073 or send us an email at info@accesssol.com to learn more.</strong></p>
				    <p>Access Technologies Solution is happy to play the role of your IT advisor, and can provide several advantages, such as:</p>
				</div>
	<!-- Features 3-->
								<div class="col-md-12">
									<ul class="list3 clearfix">
										<li><strong>Close the Gap </strong><p>Whether you have an in-house IT staff or are trying to navigate your technology roadmap alone we offer valuable advice and guidance to help you close the gap between you and your technology, or even help you better understand what your IT staff is telling you.</p></li>
										<li><strong> Enhanced Operations</strong><p>Your processes are streamlined, mobility enhanced, and overall operations are improved thanks to the expert guidance we provide. Our extensive experience with the newest and most innovative solutions allow us to help you use technology to maximize productivity and reach your full potential.</p></li>
										<li><strong>Maintain Your Competitive Edge</strong><p>You can stay ahead of the crowd thanks to Access Technologies Solution and the knowledgeable insight on your IT infrastructure we provide. We make sure you always know about the latest innovations and help you determine which solutions will allow you to work most efficiently and effectively.</p></li>
										<li><strong>A True Partnership</strong><p>Access Technologies Solution is about building a relationship. We value our clients and are always working hard to bring you the best services and solutions available. We take the time to get to know you personally and use that relationship to customize our offerings to meet your needs.</p>
										    <p>When needed, our highly capable and experienced team of professionals is there to support you and your IT team. We are proud to carry a toolbox full of industry-leading solutions and the know-how to help you get the most out of them. Never be left to stumble through important technology decisions alone ever again; we are here to help.</p>
										</li>
									</ul>
									<p><strong>Is your IT partner providing you the expert guidance and advice you need to get the most out of your technology? Reach out to Access Technologies Solution at (614) 723-9073 or info@accesssol.com to hear how we can help!</strong></p>
								</div>
								<div class="clear"></div>
        	<!-- End Features 3 -->

			</div>
		</div>
		
@include('includes.footer')
@endsection
