<div class="container-fluid echocabin-header bg-dark">
    <div class="container">
        <header>
            <nav class="navbar navbar-expand-lg py-4 navbar-dark">
                <div class="container-fluid">
                    <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                        echo '<a class="navbar-brand" href="'.esc_url( home_url( '/' ) ).'">
                            <img src="'. esc_url( $logo[0] ) .'" class="img-responsive logo">
                            </a>';
                    } else {
                        echo '<a class="navbar-brand" href="'.esc_url( home_url( '/' ) ).'">'.get_bloginfo( 'name' ).'</a>';
                    }
                    ?>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'echocabins-menu',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'navbarSupportedContent',
                        'container' => 'div',
                        'menu_class' => 'navbar-nav ms-auto mb-2 mb-lg-0 navbar-right',
                        'add_li_class' => 'nav-item'
                    ));
                    ?>
                </div>
            </nav>
        </header>
    </div>
</div>