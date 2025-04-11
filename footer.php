<footer>
        <div class="container py-5 bg-success p-4">
            <div class="row">
                <div class="col-md-6">
                    <?php  
                    if(is_active_sidebar( "footer-left" )){
                        dynamic_sidebar("footer-left");
                    }
                    ?>  
                </div>
                <div class="col-md-6">
                <?php  
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footermenu',
                            'menu_id' => 'footermenucontainer',
                            'menu_class' => 'list-inline text-center'
                        )
                    );
                    ?>  
                </div>
            </div>
        </div>
    </footer>
    <?php  wp_footer(); ?>  
</body>
</html>