@extends('layouts.app')
@section('content')
    <!-- Slider Revolution -->
    <div class="container-fluid" style="padding:0 !important;">
            <ul>
                <li>
                    <!-- MAIN IMAGE -->
                    <img class="img-responsive" style="width:100%;" src="{{asset('img/banner/data_backup.jpg')}}" alt="slidebg1">
                </li>
            </ul>
    </div>
    <!-- End Slider Revolution -->

		<div class="content row_spacer no_padding">	
			<div class="rows_container clearfix">
				
				<div class="col-md-12">
                    <h2 class="title1 upper">Data Backup & Disaster Recovery</h2>
            			<div class="rows_container clearfix">
            			    <div class="row">
                				<div class="col-md-8">
                					<p>Having proper backup procedures and processes in place is crucial to ensure business continuity and protect yourself against cyber-attacks and other incidents that can leave your important information and resources compromised.</p>
                					<p>Having proper online data backup and offline (cloud or external storage) backup procedures and processes in place, is crucial to ensure business continuity and protect yourself against data loss, security events and any other data incidents. Data loss is the number one reason many Portland and Vancouver area businesses go out of business. We don’t want that to happen to you. Take the steps to protect your company’s most asset with Access Technologies Solution remote data backup, online data backup, and secure data backup solutions.</p>            				
            					</div>
    
                				<div class="col-md-4">
                					<span class="spacer30"></span>
                					<img src="{{asset('enra/images/device.png')}}" alt="Image Title">
                				</div>
            			    </div>
                				<p><strong>Donot Take The Unnecessary Risk That Can Leave Your Important Information And Resources Compromised.</strong></p>

            			</div>
                    <p><strong>Avoid falling victim to a damaging cyber-attack. Reach out to the experts at Access Technologies Solution to help you protect all your valuable resources and data. Contact us at (614) 723-9073 or info@accesssol.com to learn more.</strong></p>
				</div>
				<div class="col-md-12">
    	            <p>
    	               Unfortunately, many people don’t realize the importance of having a proper backup routine established, until it is too late. Don’t let your operations be derailed because you don’t have access to your business-critical resources. Access Technologies Solution has a remote data backup offering that ensures your information and applications can be easily retrieved and business can continue as usual. 
    	            </p>
                    <p>Do not be left to scramble when an unfortunate event or attack compromises your data. Get remote backup solutions that keep your information safe and within reach by calling Access Technologies Solution at (614) 723-9073 or sending an email to info@accesssol.com.</p>
    			    <p>Access Technologies Solution makes remote data backup easy by providing backup services at our own secure data center, with space, power and cooling necessary to deploy our mission-critical cloud applications. This gives you peace of mind, knowing that you’re working with a fully secure, “local cloud” so you know your important information is close by and exactly where it is being housed.</p>
    		        <p>Our backup software package, called Ahsay, offers two client backup agents. AhsayOBM is for backing up servers, databases, and virtual machines, and AhsayACB provides backup for workstations. Benefits of these data backup solutions include:</p>
				</div>
	<!-- Features 3-->
				<div class="col-md-12">
					<ul class="list3 clearfix">
    					<li><strong>Support any Cloud Configuration</strong><p>Our client backup agents support local, cloud and hybrid backup solutions.</p></li>
						<li><strong>Fast and Reliable Performance</strong><p>Our independent backup solutions are fast and offer reliable performance. They are equipped with a variety of dedicated database and virtual machine modules to allow you to properly back up your databases, VMs, and email applications.</p></li>
						<li><strong>Individual Encryption Keys</strong><p> Each client has their own 256-bit AES encryption key for secure data backup.</p></li>
						<li><strong>Quick Restore Capabilities</strong><p>You can quickly restore file level and image backups, with full replication to a secondary, secure location offering an additional level of data backup security.</p></li>
					</ul>
					<p><strong>Don’t wait until it’s too late to make a smart decision about backups. Reach out to the experts at Access Technologies Solution for backup and recovery solutions that keep you working. Contact us at (614) 723-9073 or info@accesssol.com to hear more about our independent backup solutions.</strong></p>
				</div>
				<div class="clear"></div>
        	<!-- End Features 3 -->
			
			</div>
		</div>
		
@include('includes.footer')
@endsection
