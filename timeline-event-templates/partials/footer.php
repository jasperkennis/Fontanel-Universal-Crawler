<?php
	$permalink = get_permalink( get_page_by_title( 'notes' ) ) . '?u='. $vars['objects'][0]->pretty_url;
  $title;
  $title = substr( strip_tags( json_decode( $vars['objects'][0]->object)->caption), 0, 25 );
?>
<footer class="timeline-footer">
	<div class="fb-share icon-facebook-1" data-url="<?php echo $permalink; ?>" data-title="Like"></div>
	<div class="tw-share icon-twitter" data-url="<?php echo $permalink; ?>" data-title="Tweet" data-text="Check <?php print( $title ); ?>"></div>
	<time class="icon-clock"><a href="<?php echo $permalink; ?>"><?php print( fontanel_time_ago( $vars['created_at'] ) ); ?></a></time>
</footer>
