<section class="container-fluid bg-dark">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 col-sm-12 text-white opacity-50 text-md-left text-center ">
                info@eco-cabins.com
            </div>
            <div class="col-md-4 col-sm-12 text-center py-md-0 py-4">
                <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if ( has_custom_logo() ) {
                    echo '<a href="'.esc_url( home_url( '/' ) ).'">
                            <img src="'. esc_url( $logo[0] ) .'" class="img-responsive logo">
                            </a>';
                } else {
                    echo '<a class="navbar-brand" href="'.esc_url( home_url( '/' ) ).'">'.get_bloginfo( 'name' ).'</a>';
                }
                ?>
            </div>
            <div class="col-md-4 col-sm-12">
                <ul class="nav justify-content-md-end justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link text-white opacity-50" href="#">Cookies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white opacity-50" href="#">Privacybeleid</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php wp_footer(); ?>
<script>
    AOS.init();
</script>
</body>
</html>