<div class="item story nieuwwerk goedbezig archive post-<?php print( $vars['objects']->ID ); ?>" 
style="background-image: url('<?php print( get_field( 'bg_pattern', $vars['objects']->ID ) ); ?>');">
  <?php include( dirname(__FILE__) . '/partials/sponsor.php' ); ?>
	<h2>Een podium waar verfrissend werk van nieuw Nederlands talent getoond word</h2>
</div>

<style>
  .post-<?php print( $vars['objects']->ID ); ?>:before {
	  background-image: url("<?php echo wp_get_attachment_image_src( get_field( 'logo_l', $vars['objects']->ID ), 'original' )[0]; ?>");
	}
</style>
