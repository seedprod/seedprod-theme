<div class="well">
<article <?php post_class(); ?>>
  <header>
    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-content">
    <?php the_content(); ?>
  </div>
        <div class="post-meta clearfix">
      <div class="meta-date-cat-tags pull-left">
      
        <?php $category_list = get_the_category_list( __( ', ', 'standard' ) ); ?>
        <?php if( $category_list ) { ?>
          <?php printf( '<span class="the-category">' . __( '<i class="fa fa-tags"></i> %1$s', 'standard' ) . '</span>', $category_list ); ?>
        <?php } // end if ?>
        
        <?php $tag_list = get_the_tag_list( '', __( ', ', 'standard' ) ); ?>
        <?php if( $tag_list ) { ?>
          <?php printf( '<span class="the-tags">' . __( '%1$s', 'standard' ) . '</span>', $tag_list ); ?>
        <?php } // end if ?>
        
      </div><!-- /meta-date-cat-tags -->
      
      <div class="meta-comment-link pull-right">
        <!-- <a class="pull-right post-link" href="<?php the_permalink(); ?>" title="<?php esc_attr_e( 'permalink ', 'standard' ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/icn-permalink.png' ); ?>" alt="<?php esc_attr_e( 'permalink ', 'standard' ); ?>" /></a> -->
        <?php if ( '' != get_post_format() ) { ?>
          <span class="the-comment-link"><?php comments_popup_link( __( 'Leave a comment', 'standard' ), __( '1 Comment', 'standard' ), __( '% Comments', 'standard' ), '', ''); ?></span>
        <?php } // end if ?>
      </div><!-- /meta-comment-link -->

  </div><!-- /.post-meta -->
</article>
</div>
