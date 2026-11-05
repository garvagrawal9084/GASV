<div class="bottom-footer dsfdsf">
	<div class="container">
		<div class="row align-items-center">
			<!-- social links area -->
			<?php 
			$socialEmptyClass = 'col-lg-12 text-center';
			if( !get_theme_mod( 'disable_footer_social_links', false ) && bosa_has_social() ){
				$socialEmptyClass = 'col-lg-8';
				echo '<div class="col-lg-4">';
					echo '<div class="social-profile">';
						bosa_social();
					echo '</div>'; 
				echo '</div>'; 
			} ?> <!-- social links area -->
			<div class="<?php echo esc_attr( $socialEmptyClass ) ?>">
				<div class="footer-desc-wrap">
					Copyright &copy; 2024 GASVS. Site Design and Maintained by <a href="https://www.nagpurwebdesign.com/" target="_blank" style="text-decoration:underline;">Nagpur Web Design</a>
				</div>
			</div>
		</div>
	</div>
</div>