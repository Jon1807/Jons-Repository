<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Essential_Elementor_Card_Widget extends \Elementor\Widget_Base { 
   /**
	 * Get widget name.
	 *
	 * Retrieve Card widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'card';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve Card widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget title.
	 */
	public function get_title() {
		return esc_html__( 'Essential Card', 'essential-elementor-widget' );
	}

    /**
	 * Get widget icon.
	 *
	 * Retrieve Card widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-code-bold';
	}

    /**
	 * Get custom help URL.
	 *
	 * Retrieve a URL where the user can get more information about the widget.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return string Widget help URL.
	 */
	public function get_custom_help_url() {
		return 'https://essentialwebapps.com/category/elementor-tutorial/';
	}

    /**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Card widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget categories.
	 */
	public function get_categories() {
		return [ 'general' ];
	}

    /**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the Card widget belongs to.
	 *
	 * @since 1.0.0
	 * @access public
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'card', 'service', 'highlight', 'essential' ];
	}

	public function get_link() {
		return 'link';
	}
    /**
	 * Register Card widget controls.
	 *
	 * Add input fields to allow the user to customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function register_controls() { 
		// our control function code goes here.

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'essential-elementor-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'card_title',
			[
				'label' => esc_html__( 'Card title', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => esc_html__( 'Your card title here', 'essential-elementor-widget' ),
			]
		);


		$this->add_control(
			'card_description',
			[
				'label' => esc_html__( 'Card Description', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block'   => true,
				'placeholder' => esc_html__( 'Your card description here', 'essential-elementor-widget' ),
			]
		);	

		$this->add_control(
			'card_details',
			[
				'label' => esc_html__( 'Card Details', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block'   => true,
				'placeholder' => esc_html__( 'Your card details here', 'essential-elementor-widget' ),
			]
		);	

		$this->add_control(
			'card_link',
			[
				'label' => __( 'Link', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'www.w3schools.com', 'essential-elementor-widget' ),
				'default' => [
					'url' => '',
				]
			]
		);	

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style',
			[
				'label' => esc_html__( 'Style', 'essential-elementor-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		//Code for style options//
		$this->add_control(
			'title_options',
			[
				'label' => esc_html__( 'Title options', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);	

		$this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Color', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} h3' => 'color: {{VALUE}}',
				],
			]
		);	

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'selector' => '{{WRAPPER}} h3',
			]
		);

		$this->add_control(
			'description_options',
			[
				'label' => esc_html__( 'Description Options', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);		

		$this->add_control(
			'description_color',
			[
				'label' => esc_html__( 'Color', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} .card__description' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'description_typography',
				'selector' => '{{WRAPPER}} .card__description',
			]
		);	

		$this->add_control(
			'border_options',
			[
				'label' => esc_html__( 'Border Options', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);		

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', 'plugin-name' ),
				'selector' => '{{WRAPPER}} .border-class',
			]
		);

		$this->add_control(
			'background_options',
			[
				'label' => esc_html__( 'Background Options', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);		

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => esc_html__( 'Background', 'plugin-name' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .background-class',
			]
		);

		$this->end_controls_section();
	}

    /**
	 * Render Card widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() { 

		// get our input from the widget settings.
		$settings = $this->get_settings_for_display();

		// get the individual values of the input
		$card_title = $settings['card_title'];
		$card_description = $settings['card_description'];
		$card_details = $settings['card_details'];
		$card_link = $settings['card_link'];

		?>

        <!-- Start rendering the output -->
		<div class="background-class">
        <div class="card">
			<div class="border-class">
            <h3 class="card_title"><?php echo $card_title;  ?></h3>
            <p class= "card__description"><?php echo $card_description;  ?></p>
			<p class="card_details"><?php echo $card_details;  ?></p>
			</div>
		 </div>
        </div>
        <!-- End rendering the output -->

        <?php
		
	}						
}