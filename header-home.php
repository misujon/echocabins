<div class="container-fluid echocabin-header-front" style="background-image: url('<?php echo get_template_directory_uri().'/images/IMG.png'; ?>');">
    <div class="container">
        <header>
            <nav class="navbar navbar-expand-lg bg-transparent py-4">
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

            <div class="row py-5">
                <div class="col-md-7 col-sm-12 echocabin-header-left p-4 text-white" data-aos="fade-right">
                    <h4>Duurzame tiny huisje</h4>
                    <h1>Een ecologisch tiny huisje is zoveel mogelijk opgebouwd uit duurzame natuurlijke materialen</h1>
                </div>
                <div class="col-md-5 col-sm-12 echocabin-header-right p-4 d-flex" data-aos="fade-left" data-aos-duration="1500">
                    <button class="btn m-auto text-white">
                        <img src="<?php echo get_template_directory_uri().'/images/BTN_Play.png'; ?>" alt="">
                        <label>Bekijk de film</label>
                    </button>
                </div>
            </div>
        </header>
    </div>
</div>