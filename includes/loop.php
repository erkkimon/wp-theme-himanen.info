<?php if(!is_single()) : global $more; $more = 0; endif; //enable more link ?>

<article id="post-<?php the_ID(); ?>" <?php post_class("post clearfix $class"); ?>>

	<h1 class="post-title"><?php if (is_category() || is_home()) { ?>
	  <a href="<?php the_permalink()?>"><?php } ?>
	    <?php the_title(); ?> <span style="font-size: 70%">(<?php the_time('j.n.Y'); ?>)</span>
	  <?php if (is_category() || is_home()) { ?></a><?php } ?>
	</h1>

	<p class="post-meta">
		<?php // the_tags(' <span class="post-tag">', ', ', '</span>'); ?>
		<?php if ( comments_open() ) : ?>
			<!--<span class="post-comment"><?php comments_popup_link( __( '0 kommenttia', 'themify' ), __( '1 kommentti', 'themify' ), __( '% Comments', 'themify' ) ); ?></span>-->
		<?php endif; //post comment ?>
	</p>

	<?php
	  the_content();
	?>
	<!--<span class="post-author">&ndash; <?php the_author_posts_link() ?></span>-->
	<!--<br /><time datetime="<?php the_time('o-m-d') ?>" class="post-date" pubdate>[<?php the_time('M j, Y'); ?>]</time>-->
	<?php if (is_category()) { ?>| [<a href="<?php the_permalink()?>#fb-comments">Kommentoi</a>]<?php } ?>
	<!--<span class="post-category"><?php the_category(', ') ?></span>-->

	<!--<?php edit_post_link(__('Muokkaa', 'themify'), '[', ']'); ?>-->

</article>
<!-- /.post -->
