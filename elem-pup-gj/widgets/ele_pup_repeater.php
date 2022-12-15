<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


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
		return [ 'general' ];
	}

	public function get_keywords() {
		return [ 'hello', 'world' ];
	}






	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Options', self::$slug ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'price',
			[
				'label' => esc_html__( 'Price', 'elementor-currency-control' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'default' => 100,
			]
		);

	
		$this->end_controls_section();
	}








	protected function render() {
		
// Check rows existexists.
if( have_rows('gallery') ):

    // Loop through rows.
    while( have_rows('gallery') ) : the_row();

        // Load sub field value.
        $sub_value = get_sub_field('title');
		echo the_sub_field('title');
		echo 'hello'; 
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