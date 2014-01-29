<time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
<!-- <p class="byline author vcard"><?php echo __('By', 'roots'); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?php echo get_the_author(); ?></a></p> -->
	<?php if( comments_open() ) { ?>
					<span class="the-comment-link">&mdash;&nbsp;<?php comments_popup_link( '<i class="fa fa-comment"></i>', '1 <i class="fa fa-comments"></i>','% <i class="fa fa-comments"></i>', '', '' ); ?></span>
				<?php } // end if ?>