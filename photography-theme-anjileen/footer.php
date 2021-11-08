<footer class="footer"> <!-- Footer -->
		
		<div class="row">
		<div class="footcol1">
		<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
		</div>
		<div class="footcol2">
		<strong>Quick Links</strong><br><br>
		<a href="./about">About</a><br>
		<a href="./pricing">Pricing</a><br>
		<a href="./gallery">Gallery</a><br>
		<a href="./contact">Contact</a>
		</div>
		<div class="footcol3">
		<strong>Contact Info</strong><br><br>
		Email:<br>
		skphotographyauckland@gmail.com
		</div>
		<div class="footcol4">
		<strong>Social media</strong><br><br>
		<a target="_blank" href="https://www.instagram.com"><img id="instaicon" src="<?php echo get_template_directory_uri(); ?>/images/instaicon.png" width="35px"></a>
		<a target="_blank" href="https://www.facebook.com"><img src="<?php echo get_template_directory_uri(); ?>/images/fbicon.png" width="35px"></a>
		</div>
		</div> <!-- end row -->
		
			<p>Copyright &copy; <?php echo date("Y"); ?> SK Photography</p>
		</footer> <!-- End footer-->

<?php wp_footer(); ?>
</body>
</html>