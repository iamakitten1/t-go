<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package starter
 */

?>

<footer id="colophon" class="site-footer travel-footer">

<div class="image-in-corner">

	<a href="#">
		<img src=" <?php echo get_template_directory_uri() . '/assets/images/Group-77.png' ?>" alt="Arrow">
	</a>

</div>

<div class="footer-form-email">

	<div class="footer-form-text">
		<p> Subscribe to get information, latest news and other
			interesting offers about Cobham </p>
	</div>

		<?php

			//  echo do_shortcode('[contact-form-7 id="72d8ac8" title="Contact form 1" html_class="travel-contact-form" ]');
		
		?>

		<div class="contact-form-main">

			<div class="travel-contact-form">
				
				<a href="#">
					<img src=" <?php echo get_template_directory_uri() . '/assets/images/Group-46.png' ?>" alt="Email">
				</a>

				<p> Your email </p>
			
			</div>

			<div class="subscribe-button">

				<button> Subscribe </button>

			</div>

		</div>

	

</div>



<div class="container">
	<div class="footer-content">
		<div class="logo-column">

			<div class="logo">
				<?php
				the_custom_logo();
				?>
			</div>
			
			<div class="logo-column-text">
				<p> Book your trip in minute, get full
					Control for much longer. </p>
			</div>
			
		</div>
		

		<nav class="footer-navigation">
			<div class="column">
				<a href="#" class="footer-nav-links-main">
					Company
				</a>
				<a href="#" class="footer-nav-links"> 
					About
				</a>
				<a href="#" class="footer-nav-links">
					Careers
				</a>
				<a href="#" class="footer-nav-links">
					Mobile
				</a>
			</div>
			<div class="column">
				<a href="#" class="footer-nav-links-main"> 
					Contact
				</a>
				<a href="#" class="footer-nav-links"> 
					Help/FAQ
				</a>
				<a href="#" class="footer-nav-links"> 
					Press
				</a>
				<a href="#" class="footer-nav-links"> 
					Affilates
				</a>
			</div>
			<div class="column">
				<a href="#" class="footer-nav-links-main"> 
					More
				</a>
				<a href="#" class="footer-nav-links"> 
					Airlinefees
				</a>
				<a href="#" class="footer-nav-links"> 
					Airline
				</a>
				<a href="#" class="footer-nav-links"> 
					Low fare tips
				</a>
			</div>
		</nav>

		<div class="footer-apps">

			<div class="hero-socials">
				<a href="#">
					<img src=" <?php echo get_template_directory_uri() . '/assets/images/Social.png' ?>" alt="Facebook">
				</a>
				<a href="#">
					<img src=" <?php echo get_template_directory_uri() . '/assets/images/Social1.png' ?>" alt="Instagram">
				</a>
				<a href="#">
					<img src=" <?php echo get_template_directory_uri() . '/assets/images/Social2.png' ?>" alt="Twitter">
				</a>
			</div>

			<div class="hero-socials-text">
				<p> Discover our app </p>
			</div>

			<div class="hero-stores">
				<a href="#">
						<img src=" <?php echo get_template_directory_uri() . '/assets/images/GooglePlay.png' ?>" alt="GooglePlay">
					</a>
				<a href="#">
					<img src=" <?php echo get_template_directory_uri() . '/assets/images/PlayStore.png' ?>" alt="PlayStore">
				</a>
			</div>
			
		</div>
	</div>
	<div class="footer-text">
			<p> All rights reserved@travelgoo.co </p>
		</div>
</div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
