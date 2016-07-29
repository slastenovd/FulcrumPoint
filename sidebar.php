<div class="side-bar">

    <?php
    /**
     * The sidebar containing the main widget area.
     *
     *
     * @package FulcrumPoint
     */

    if ( is_active_sidebar( 'sidebar-1' ) ) {
    ?>

    <aside id="secondary" class="widget-area" role="complementary">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </aside><!-- #secondary -->
<?php } ?>

</div>
