<?php
/**
 * Created by PhpStorm.
 * User: MinhMan.Tran
 * Date: 11/8/2016
 * Time: 6:30 PM
 */


add_action( 'widgets_init', 'register_my_sidebars' );
function register_my_sidebars() {
    register_sidebar( array(
        'name' => __( 'Right Hand Rail Sidebar', 'ability' ),
        'id' => 'right-hand-rail-sidebar',
        'description' => __( 'Widgets in this area will be shown on right hand rail.', 'ability' ),
        'before_widget' => '<div id="%1$s" class="module %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="module--title">',
        'after_title'   => '</h3>',
    ) );
}
