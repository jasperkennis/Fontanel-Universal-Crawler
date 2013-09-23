<?php
  $post = json_decode( $vars['objects'][0]->object );
  if( !$vars['skip_readmore_wrap'] ) {
    $article_parts = preg_split( "/<p>.*?<!-- more -->.*?\/p>|<!-- more -->/", $post->body );
  } else {
    $article_parts = array( $post->body );
  }
?>
<article class="note text<?php include( dirname(__FILE__) . '/partials/author-tag.php' ); ?>" data-id="<?php print_r( $vars['id'] ); ?>" <?php include( dirname(__FILE__) . '/partials/origin-pretty-url.php' ); ?>>
	<?php include( dirname(__FILE__) . '/partials/author.php' ); ?>
	<div class="article-body">
  	<div class="text">
    	<?php if( !empty( $post->title ) ): ?>
        <h2><?php print( $post->title ); ?></h2>
      <?php endif; ?>
      <?php print( $article_parts[0] ); ?>
      <?php include( dirname(__FILE__) . '/partials/read-more.php' ); ?>
    </div>
		<?php include( dirname(__FILE__) . '/partials/footer.php' ); ?>
	</div>

  <?php
    if( $vars['large_author_block'] ):
      include( dirname(__FILE__) . '/partials/large-author-block.php' );
    endif;
  ?>
</article>
