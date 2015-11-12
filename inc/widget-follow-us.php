<?php
/**
 * Adds Foo_Widget widget.
 */
class Follow_Us_Widget extends WP_Widget {

  /**
   * Register widget with WordPress.
   */
  function __construct() {
      parent::__construct(
          'follow_us_widget', // Base ID
          __( '&#x2605; Follow Us &#x2605;', 'unityrepair' ), // Name
          array( 'description' => __( 'A Follow Us Widget', 'unityrepair' ), ) // Args
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
          echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
      }
      
      ?>
      <!-- follow us widget -->
      <ul class="widget-follow-us">
        <li><a href="https://www.facebook.com/pages/Unity-Repair-and-Remedy-Sdn-Bhd/552456664830022" class="uk-icon-button uk-icon-facebook"></a></li>
        <li><a href="https://www.twitter.com" class="uk-icon-button uk-icon-twitter"></a></li>
        <li><a href="https://www.instagram.com" class="uk-icon-button uk-icon-instagram"></a></li>
        <li>
          <!-- BEGIN: Powered by Supercounters.com -->
          <center><script type="text/javascript" src="http://widget.supercounters.com/hit.js"></script><script type="text/javascript">sc_hit(1137673,0,5);</script><br><noscript><a href="http://www.supercounters.com">Tumblr Hit Counter</a></noscript>
          </center>
          <!-- END: Powered by Supercounters.com -->
        </li>
      </ul>
      
      <?php
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
      $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'unityrepair' );
      ?>
      <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
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

      return $instance;
  }

} // class Foo_Widget

// register Foo_Widget widget
function register_follow_us_widget() {
  register_widget( 'Follow_Us_Widget' );
}
add_action( 'widgets_init', 'register_follow_us_widget' );