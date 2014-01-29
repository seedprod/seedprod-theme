<?php while (have_posts()) : the_post(); ?>
  <div class="well">
  <article <?php post_class(); ?>>
    <header class="post-header-meta">
      <h1 class="entry-title"><?php the_title(); ?></h1>
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
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    
  </article>

  </div>

<?php global $wp_query,$paged; ?>

<?php if( is_single() && 'post' == get_post_type() ) { ?>

  <div id="single-post-nav">
    <ul class="pager">
    
      <?php $trunc_limit = 30; ?>
      
      <?php if( '' != get_previous_post() ) { ?>
        <li class="previous">
          <?php previous_post_link( '<span class="previous-page">%link</span>', __( '&larr; ', 'standard' ) . '&nbsp;' . standard_truncate_text( get_previous_post()->post_title, $trunc_limit ) ); ?>
        </li>
      <?php } // end if ?>
      
      <?php if( '' != get_next_post() ) { ?>
        <li class="next">
        <?php next_post_link( '<span class="no-previous-page-link next-page">%link</span>', '&nbsp;' . standard_truncate_text( get_next_post()->post_title, $trunc_limit ) . __( ' &rarr;', 'standard' ) ); ?>
        </li>
      <?php } // end if ?>
    </ul> 
  </div><!-- /#single-post-nav -->

<?php } elseif ( $wp_query->max_num_pages > 1 && ( is_home() || is_archive() || is_search() ) ) { ?>

  <div id="post-nav">
    <ul class="pager">
    
      <?php if( get_next_posts_link() ) { ?>
        <li class="previous">
          <?php next_posts_link( __( '<span class="nav-previous meta-nav">&larr; Older</span>', 'standard' ) ); ?>
        </li>     
      <?php } // end if ?>
      
      <?php if( get_previous_posts_link() ) { ?>
        <li class="next">
          <?php previous_posts_link( __( '<span class="nav-next meta-nav">Newer  &rarr;</span>', 'standard' ) ); ?>
        </li>
      <?php } // end if ?>
    
    </ul><!-- /.pager -->
  </div><!-- /#post-nav -->

<?php } // end if/else ?>
  
  <?php comments_template('/templates/comments.php'); ?>
<?php endwhile; ?>
