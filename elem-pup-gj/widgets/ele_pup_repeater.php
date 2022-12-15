<?php
class Ele_Pup_Repeater extends \Elementor\Widget_Base {

	public function get_name() {
		return 'hello_world_widget_1';
	}

	public function get_title() {
		return esc_html__( 'Pup Repeater', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'hello', 'world' ];
	}

	protected function render() {
		?>

		<p> Hello World1 </p>

		<?php

// Check rows existexists.
if( have_rows('gallery') ):

    // Loop through rows.
    while( have_rows('gallery') ) : the_row();

        // Load sub field value.
        $sub_value = get_sub_field('title');
		echo the_sub_field('title');
		echo "hello"; 
        // Do something...

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;


	}
}
?>