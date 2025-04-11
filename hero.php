<div class="header">
    <div class="container mx-auto">
        <div class="row">
            <div class="col-md-12 text-center">
                <h3 class="tagline">
                    <?php  bloginfo( "description" ) ?>  
                </h3>
                <h1>
                    <a href="<?php echo site_url( ); ?>"><?php  bloginfo("name"); ?></a>  
                </h1>
            </div>
            <div class="col-md-12">
                <div class="navigation">
                    <?php  
                    wp_nav_menu(
                        array(
                            'theme_location' => 'topmenu',
                            'menu_id' => 'topmenucontainer',
                            'menu_class' => 'list-inline text-center'
                        )
                    );
                    ?>  
                </div>
            </div>
        </div>
    </div>
</div>