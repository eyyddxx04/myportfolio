<?php
/**
 * Template Name: My Site - Index Page
 */
get_header(); ?>
<section class="profile">

    <div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="profile-pic">

                <img src="./wp-content/uploads/2021/05/24273476_167926710470247_1564046955874155173_o.jpg" class="img-responsive">

                </div>

            </div>

        </div>

    </div>

</section>

<section id="about-content" class="padding-120 about">

    <div class="container">

        <div class="row">

        <div class="col-md-6">

                <div class="about-img">

                    <div class="img-design">

                    <img src="./wp-content/uploads/2021/05/wordpress-923188_1280.jpg" class="img-responsive border-default">

                    </div>

                </div>

            </div>

        <div class="col-md-6">

                <div class="right-content">

                    <?php the_content(); ?>

                </div>

            </div>

        </div>  

    </div>   

</section>


<section class="skill-section padding-120" style="background-image: linear-gradient(#00000069, #00000069), url(./wp-content/uploads/2021/05/work-731198_1280.jpg);">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <h2 class="text-center text-white heading-line">WHAT IM BEST AT</h2>

            </div>

                <div class="col-md-6">

                <div class="progress-label">HTML</div>

                <div class="progress">

                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>

                </div>

                <div class="progress-label">CSS</div>

                <div class="progress">

                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>

                </div>

                <div class="progress-label">Bootstrap</div>

                <div class="progress">

                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>

                </div>

                <div class="progress-label">Wordpress</div>

                <div class="progress">

                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>

                </div>

            </div>

            <div class="col-md-6">

                <div class="progress-label">Woocommerce</div>

                <div class="progress">

                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>

                </div>

                <div class="progress-label">PHP</div>

                <div class="progress">

                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>

                </div>

                <div class="progress-label">jQuery</div>

                <div class="progress">

                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>

                </div>

                <div class="progress-label">Javascript</div>

                <div class="progress">

                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="recent-work bg-grey padding-top-bottom-default text-center">

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <h2 class="text-center heading-line">MY RECENT WORK</h2>

                </div>

                <?php
                $page_slug = 'new-project';
        $tax_query = array(
            array(
            'taxonomy' => 'project_categories',
            'field'    => 'slug',
            'terms'    => $page_slug
                    ),
                );

            //get custom post type
            $args = array( 'post_type' => 'projects', 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC', 'tax_query' => $tax_query);
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            $get_post_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            ?>

            <div class="col-md-4">

                <a href="<?php echo get_post_meta($post->ID, 'site-url', true); ?>" target="_blank">

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
