<div class="header-bg-box">

<header id="masthead" class="notout-header notout-inline-menu">
		<nav id="site-navigation" class="notout-navbar">
		    <div class="container">
				<div class="notout-menu-wrap">
					<div class="notout-brand-wrap">
						<?php  
							/**
							 * notout_before_logo hook
							 */
							do_action( 'notout_before_logo' );
						?>
						<a class="notout-navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<?php notout_custom_logo(); ?>
						</a>
						<?php  
							/**
							 * notout_after_logo hook
							 */
							do_action( 'notout_after_logo' );
						?>
						<span class="notout-navbar-toggler js-show-nav">
							<i class="fas fa-bars"></i>
						</span>
					</div>
					<?php
						if( has_nav_menu( 'primary' ) ) :
							wp_nav_menu( array(
								'theme_location'	=> 'primary',
								'container'			=> false,
								'menu_class'		=> 'notout-main-menu notout-inline-menu',
								'menu_id'			=> false,
							) );
						endif;
					?>
				</div>
				  <div class="search-box">
						<form role="search" method="get" class="search-form" action="http://localhost/notout/">
							<div class="search-box-wrap">
							<input type="submit" class="search-submit" value="Search" />
							 <label>
							<span class="screen-reader-text">Search for:</span>
							<input type="search" class="search-field" placeholder="এজেন্ট খুঁজুন..." value="" name="s" />
						   </label>
						   </div>
						</form>
				  
				   </div>
		    </div>
			
		</nav>
		
	</header><!-- #masthead -->
	</div>