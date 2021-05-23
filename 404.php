<?php
get_header();
?>

    <section class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="display-1 py-4">404</h1>
                    <a href="<?=esc_url( home_url( '/' ) );?>" class="btn btn-text btn-lg"> Back to home </a>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();