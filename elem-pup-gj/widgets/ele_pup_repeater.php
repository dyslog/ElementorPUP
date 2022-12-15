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





	protected function _register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => __( 'Options', self::$slug ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
	
		$this->add_control(
			'widget_value',
			[
				'label' => __( 'value', self::$slug ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'value', self::$slug ),
				'placeholder' => __( 'Value Attribute', self::$slug ),
			]
		);
	
		$this->add_control(
			'widget_contents',
			[
				'label' => __( 'contents', self::$slug ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'contents', self::$slug ),
				'placeholder' => __( 'Option Contents', self::$slug ),
			]
		);
	
		$this->end_controls_section();
	}






}
?>