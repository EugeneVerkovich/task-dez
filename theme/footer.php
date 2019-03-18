<footer>
	<div class="container">
		<div class="row flex-column aic">
			<div class="col-md-7 col-xs-12 flex-column aic">
				<h2 class="h2">
					Targeted Search for Professionals in your Proximity
				</h2>
				<button class="beta-form open-form">
                    Try Beta Version
                </button>
			</div>
			<div class="col-xs-12 copyr">
				<p>
					All right reserved / Olynk / <?php echo date('Y')?>
				</p>
				<p>
					Website and Mobile App Development - <a href="https://www.dizzain.com/" target="_blank">Dizzain.com</a></p>
			</div>
		</div>
	</div>
</footer>
<section class="form-beta">
	<div class="container">
		<div class="row flex-column aic">
			<button class="close-form"></button>
			<div class="logo-form col-md-2 col-xs-6">
				<img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="Get Olynk beta version">
			</div>
			<form class="get-beta flex-wrap col-md-9 col-xs-12">
				<h2 class="h2 col-xs-12">
					Request Beta Version
				</h2>
				<div class="col-md-6 col-xs-12">
					<input type="text" name="user_name" placeholder="Full Name">
					<input type="email" name="user_email" required="" placeholder="Email Address">
					<input type="text" name="user_phone" placeholder="Phone Number">
					<input name="platform" class="hidden" placeholder="Select Platform">
					<input name="subject" class="hidden" value="Request Beta Version">
					<input name="theme-url" class="hidden" value="<?php echo get_template_directory_uri()?>">
					<div class="select-holder">
						<label class="like-select">Select Platform</label>
						<div class="drop-option">
							<span data-value="Android" class="like-option">Android</span>
							<span data-value="IOS" class="like-option">IOS</span>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-12">
					<textarea name="message" placeholder="Message (optional)"></textarea>
				</div>
				<div class="col-md-6 col-xs-12">
					<input class="beta-form float-r m0" type="submit" value="Get Beta of Olynk">
				</div>
			</form>
			<div class="success">
				<p class="h2 col-xs-12">
					Request successfully sent.
				</p>
				<p>Thank you for your interest in Olynk. We will contact you shortly. </p>
			</div>
		</div>
	</div>
	
</section>
<?php wp_footer();?>

</body>

</html>