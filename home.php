<?php
get_header();
?>

    <section class="container-fluid">
        <div class="container">
            <div class="row">

                <?php if (have_posts()) :
                    while(have_posts()) : the_post();?>
                        <div class="col" style="margin-top: 5%">

                            <div class="wp-block-columns">
                                <?php if (has_post_thumbnail()){?>
                                    <div class="wp-block-column" style="max-width: 300px">
                                        <a href="<?php the_permalink(); ?>">
                                            <figure class="wp-block-image size-large">
                                                <img loading="lazy" style="max-width: 300px;max-height: 300px" src="<?php the_post_thumbnail_url(); ?>" alt="" class="wp-image-16" srcset="<?php the_post_thumbnail_url(); ?> 510w" sizes="(max-width: 510px) 100vw, 510px">
                                            </figure>
                                        </a>
                                    </div>
                                <?php }?>

                                <div class="wp-block-column">
                                    <p>
                                        <strong>
                                            <span class="has-inline-color has-vivid-cyan-blue-color"><?php the_time('F jS, Y'); ?> | <?php the_author_posts_link(); ?></span>
                                        </strong>
                                    </p>

                                    <p><strong><?php the_title();?></strong></p>

                                    <?php the_excerpt();?>

                                    <div class="row">
                                        <div class="col">
                                            <a class="btn btn-outline-primary" href="<?php the_permalink(); ?>">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; endif;?>

            </div>
        </div>
    </section>

<?php
get_footer();