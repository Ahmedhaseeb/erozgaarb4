<?php 

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
    return;
}


 ?>

<aside id="secondary" class="col-sm-4">
    <?php dynamic_sidebar( 'right-sidebar' ); ?>
</aside><!-- #secondary -->

