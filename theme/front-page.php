<?php get_header();?>
<section class="about">
	<div class="container">
		<div class="row">
			<h2 class="h2 col-xs-12">About Olynk</h2>
			<div class="col-md-4 col-xs-12 about-block">
				<img src="<?php echo get_template_directory_uri()?>/img/about-1.png" alt="Complete your Lynk">
				<p class="about-text">
					<span class="header-about">Complete your Lynk</span>
					<span class="description-about">Don't forget to add your photo & company logo. Click to upload a photo to help people in your proximity recognize you before they can Lynk with you.</span>
				</p>
			</div>
			<div class="col-md-4 col-xs-12 about-block">
				<img src="<?php echo get_template_directory_uri()?>/img/about-2.png" alt="Set Global Filters">
				<p class="about-text">
					<span class="header-about">Set Global Filters</span>
					<span class="description-about">Targeted search will help find professionals based on desired job functions, in your proximity - to enable personalized professional networking.</span>
				</p>
			</div>
			<div class="col-md-4 col-xs-12 about-block">
				<img src="<?php echo get_template_directory_uri()?>/img/about-3.png" alt="Connect">
				<p class="about-text">
					<span class="header-about">Connect</span>
					<span class="description-about">Share your Lynk for in-person networking. Build your personal and professional network organically. Feel free to add as many connections as you like.</span>
				</p>
			</div>
		</div>
	</div>
</section>
<section class="sub">
	<div class="container">
		<div class="row flex-column">
			<form class="sub-form col-xs-12">
				<h2 class="h2 col-xs-12">Get notified about launching</h2>
				<p  class="input-email">
					<input type="email" required="" name="user_email">
					<input name="theme-url" class="hidden" value="<?php echo get_template_directory_uri()?>">
					<input name="subject" class="hidden" value="Get notified about launching">
					<label class="place">Enter your email here</label>
				</p>
				<input type="submit" value="Submit">
			</form>
			<div class="success">
				<p class="h2 col-xs-12">Thank you for your interest in Olynk!</p>
				<p>You will know our news first.</p>
			</div>
		</div>
	</div>
</section>
<section class="team">
	<div class="container">
		<h2 class="h2 col-xs-12">Our Team</h2>
		<div class="col-md-4 col-xs-12 team-block">
			<img src="<?php echo get_template_directory_uri()?>/img/team-1.png" alt="Gaurav Saraf">
			<p class="team-text">
				<span class="header-team">Gaurav Saraf</span>
				<span class="description-team">Product leader</span>
			</p>
		</div>
		<div class="col-md-4 col-xs-12 team-block">
			<img src="<?php echo get_template_directory_uri()?>/img/team-2.png" alt="">
			<p class="team-text">
				<span class="header-team">Ankur Saraogi</span>
				<span class="description-team">Product & Program Management</span>
			</p>
		</div>
		<div class="col-md-4 col-xs-12 team-block">
			<img src="<?php echo get_template_directory_uri()?>/img/team-2.png" alt="Ankur Saraogi">
			<p class="team-text">
				<span class="header-team">Piyush Gupta</span>
				
			</p>
		</div>
	</div>
</section>

<?php get_footer();?>