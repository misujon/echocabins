<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 *
 * @package WordPress
 * @subpackage Curotec
 * @since Curotec 1.0
 */

get_header();
?>

    <section class="container-fluid">
        <div class="container">
            <?php if (have_posts()) :
                while(have_posts()) : the_post();?>

                    <div class="col">
                        <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?></a></h2>
                        <br>
                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                            <img src="<?php the_post_thumbnail_url(); ?>" width="100%"/>
                        </a>
                        <div class="col post-content-2 text-justify">

                            <?php the_content();?>

                        </div>

                        <div class="col">
                            <div class="Comment_Box">
                                <?php comments_template(); ?>
                            </div>
                        </div>
                    </div>

                <?php endwhile;
            endif;?>
        </div>
    </section>

<?php
get_footer();