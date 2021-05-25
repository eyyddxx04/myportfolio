<?php
/**
 * Template Name: Prev Work
 *
 */
get_header(); ?>
<section class="recent-work padding-top-bottom-default text-center">
	<div class="container">
		<div class="row align-middle">
                <?php //get custom post type
                    $args = array( 'post_type' => 'projects', 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'DESC');
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                    $get_post_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                    $logo_url = get_post_meta($post->ID, 'logo-url', true); 
                    $site_url = get_post_meta($post->ID, 'site-url', true); 
            ?>
            <div class="col-md-4">

             <a href="<?php echo $site_url; ?>" target="_blank">

             <div class="border-default port-container">

                        <img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive">

                        <i class="fas fa-link"></i>

                </div>

                </a>

        </div>

                <?php endwhile; wp_reset_query(); ?>
       	</div>
	</div>		
</section>		
<?php
get_footer();
