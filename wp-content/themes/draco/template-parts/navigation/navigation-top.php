<?php
/**
 * Displays top navigation
 *
 * @package Draco
 */

?>
	<!-- Mobile Bar & Menu Icon -->
	
	<input type="checkbox" class="menu-toggle" id="menu-toggle">
	<div class="mobile-bar">
		<label for="menu-toggle" class="menu-icon">
				<span></span>
			</label>
	</div>
	<div class="header-menu">	  		
		<nav id="nav" class="top-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'draco' ); ?>">
			<span id="draco-menu-back"><span class="dashicons dashicons-arrow-left-alt2"></span></span>
			<span id="draco-menu-home"><span class="dashicons dashicons-admin-home"></span></span>
			
			<?php wp_nav_menu( array(
				'theme_location' => 'top',
				'menu_id'        => '',
				'menu_class'	 => '',
				'container_id' 	 => 'top-menu',
				'container_class' 	 => 'menu',
			) ); ?>
		</nav><!-- #site-navigation -->
	</div>
