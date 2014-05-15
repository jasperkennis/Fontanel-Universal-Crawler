<div class="rsContent item story nieuwwerk label floating header carousel post-<?php print( $vars['objects']->ID ); ?>" <?php include( dirname(__FILE__) . '/partials/carousel-colors.php' ); ?> data-id="<?php print_r( $vars['id'] ); ?>">
  <div class="carousel-wrapper">
  	<a href="<?php print( get_permalink( $vars['objects']->ID ) ); ?>">
        <div style="background-color:<?php the_field( 'eerste_kleur', $vars['objects']->ID ); ?>">
            <span class="helper"></span>
            <div>
                <figure class="logo"></figure>
                <h2><?php print( $vars['objects']->post_title ); ?></h2>
                <h3><?php print( $vars['objects']->post_excerpt ); ?></h3>
            </div>
        </div>
        <div style="background-color:<?php the_field( 'tweede_kleur', $vars['objects']->ID ); ?>">
            <span class="helper"></span>
            <img src="<?php the_field( 'achtergrondafbeelding', $vars['objects']->ID ); ?>" alt="" />
        </div>
	</a>
  </div>
</div>
