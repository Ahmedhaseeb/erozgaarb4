<?php  
$styleSheetUrl = get_template_directory_uri();
?>
<!-- FOOTER
====================================== -->
<footer>
    <div class="container">
        <div class="col-sm-3">
            <p><a href="/_"><img src="assets/img/logo.png" alt="The Programmings"/></a> </p>
        </div> <!-- end col -->
        <div class="col-sm-6">
            <nav>
                <div class="navbar-collapse collapse">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer',
                        // 'add_li_class' => 'nav-item',
                        'menu_id'        => 'footer-menu',
                        'container' => 'ul',
                        'menu_class' => 'nav navbar-nav navbar-right',
                        // 'container_class' => 'collapse navbar-collapse',
                        // 'sort_column' => 'menu_order'
                        ) );
                    ?>
                    <!-- <ul class="nav navbar-nav navbar-right">
                        <li><a href="">Home</a></li>
                        <li class="active"><a href="blog.html">Blog</a></li>
                        <li><a href="blog.html">Resources</a></li>
                        <li><a href="blog.html">Contact</a></li>
                    </ul> -->
                </div>
            </nav>
        </div> <!-- end col -->
        <div class="col-sm-3">
            <p>&copy; 2016 Ahmed Haseeb</p>
        </div> <!-- end col -->
    </div><!-- container -->
</footer>


<!-- BOOTSTRAP CORE JAVASCRIPT
    Placed at the end of the document so the pages load faster
====================================== -->

<!-- jQuery
================== -->
<script src="<?php echo $styleSheetUrl; ?>/assets/jquery/jquery-2.2.0.min.js"></script>
<script src="<?php echo $styleSheetUrl; ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $styleSheetUrl; ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>
