<?php
/**
 * Created by PhpStorm.
 * User: MinhMan.Tran
 * Date: 9/5/2016
 * Time: 4:47 PM
 */

/**
 * Adds History_Widget widget.
 */
class Featured_Video_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'featured_video_widget', // Base ID
            __( 'Featured Video', 'ability' ), // Name
            array( 'description' => __( 'Show featured video', 'ability' ), ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
//        echo get_all_history();
        echo '<div class="video-wrapper">
                <a class="site-video--mute-toggle unmute" href="javascript:void(0);"><i class="fa fa-volume-up"></i></a>
                <div class="site-video" data-id="' . $instance['video_id'] . '"></div>
            </div>';
        echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : '';
        $video_id = ! empty( $instance['video_id'] ) ? $instance['video_id'] : '8ALls6Gx76Q';
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( esc_attr( 'Title:' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'video_id' ) ); ?>"><?php _e( esc_attr( 'Video ID:' ) ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'video_id' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'video_id' ) ); ?>" type="text" value="<?php echo esc_attr( $video_id ); ?>">
        </p>
        <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['video_id'] = ( ! empty( $new_instance['video_id'] ) ) ? strip_tags( $new_instance['video_id'] ) : '';

        return $instance;
    }

} // class Testimonials_Widget

// register Testimonials_Widget widget
function register_featured_video_widget() {
    register_widget( 'Featured_Video_Widget' );
}
add_action( 'widgets_init', 'register_featured_video_widget' );