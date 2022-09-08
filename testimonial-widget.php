<!--CSS-->
<style>

.mt-testimonials-img-holder {
    display: inline-block;
    float: left;
    width: 50px;
    margin-right: 10px;
}

.mt-testimonials-stars i{
	margin-right:4px;
}
.mt-testimonials-stars{
	position: absolute;
    transform: translate(-20px,10px);
}

</style>

<!--PHP-->

<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
class Essential_Elementor_Testimonial_Widget extends \Elementor\Widget_Base { 
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
		return 'testimonial';
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
		return esc_html__( 'Testimonial Widget', 'essential-elementor-widget' );
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
		return 'eicon-checkbox';
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
		return [ 'testimonial', 'opinion', 'people' ];
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
				'label' => esc_html__( 'Testimonial Content', 'essential-elementor-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// $this->add_control(
		// 	'mt_testimonials_icon_holder',
		// 	[
		// 		'label' => esc_html__( 'Icon holder', 'plugin-name' ),
		// 		'type' => \Elementor\Controls_Manager::ICON,
		// 		'include' => [
		// 			'fa fa-facebook',
		// 			'fa fa-flickr',
		// 			'fa fa-google-plus',
		// 			'fa fa-instagram',
		// 			'fa fa-linkedin',
		// 			'fa fa-pinterest',
		// 			'fa fa-reddit',
		// 			'fa fa-twitch',
		// 			'fa fa-twitter',
		// 			'fa fa-vimeo',
		// 			'fa fa-youtube',
		// 			'fa fa-shopping-cart',
		// 			'fa fa-star',
		// 		],
		// 		'default' => 'fa fa-shopping-cart',
		// 	]
		// );

		$this->add_control(
			'mt_testimonials_icon_holder',
			[
				'label' => esc_html__( 'Second Button icon', 'text-domain' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'fa4compatibility' => 'icon',
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
			]
		);

		$this->add_control(
			'icon_align',
			[
				'label' => esc_html__( 'Alignment', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'plugin-name' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'plugin-name' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'plugin-name' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
			]
		);

		$this->add_control(
			'mt_testimonials_content',
			[
				'label' => esc_html__( 'Paragraph', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' => true,
				'placeholder' => esc_html__( 'Your testimonial content here', 'essential-elementor-widget' ),
			]
		);

		$this->add_control(
			'testimonial_align',
			[
				'label' => esc_html__( 'Author Alignment', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'plugin-name' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'plugin-name' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'plugin-name' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'default' => 'center',
				'toggle' => true,
			]
		);

		$this->add_control(
			'mt_testimonials_position',
			[
				'label' => esc_html__( 'Position', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'   => true,
				'placeholder' => esc_html__( 'Position', 'essential-elementor-widget' ),
			]
		);	

		$this->add_control(
			'mt_testimonials_theme',
			[
				'label' => esc_html__( 'Theme', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'   => true,
				'placeholder' => esc_html__( 'Testimonial theme', 'essential-elementor-widget' ),
			]
		);	

		$this->add_control(
			'mt_testimonial_image',
			[
				'label' => esc_html__( 'Choose Image', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Image_Size::get_type(),
			[
				'name' => 'mt_testimonial_image',
				'default' => 'large',
				'separator' => 'none',
			]
		);

		$this->end_controls_section();


		//Code for style options//

		$this->start_controls_section(
			'background_style',
			[
				'label' => esc_html__( 'Background', 'essential-elementor-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
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
				'name' => 'background_options',
				'label' => esc_html__( 'Background', 'plugin-name' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .background_options',
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
				'selector' => '{{WRAPPER}} .background_options',
			]
		);

		$this->add_control(
			'border_radius',
			[
				'label' => esc_html__( 'Border radius', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .background_options' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'margin_options',
			[
				'label' => esc_html__( 'Margin Options', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);		

		$this->add_control(
			'margin',
			[
				'label' => esc_html__( 'Margin', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .mt-testimonials-box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'padding',
			[
				'label' => esc_html__( 'Padding', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .mt-testimonials-box' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style',
			[
				'label' => esc_html__( 'Testimonial Options', 'essential-elementor-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'icons_options',
			[
				'label' => esc_html__( 'Icons options', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);	

		$this->add_control(
			'icons_color',
			[
				'label' => esc_html__( 'Color', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} .mt-testimonials-stars' => 'color: {{VALUE}}',
				],
			]
		);	

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'icons_typography',
				'selector' => '{{WRAPPER}} .mt-testimonials-stars',
			]
		);
		
		$this->add_control(
			'paragraph_options',
			[
				'label' => esc_html__( 'Paragraph options', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);	

		$this->add_control(
			'paragraph_color',
			[
				'label' => esc_html__( 'Color', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} .mt-testimonials-content' => 'color: {{VALUE}}',
				],
			]
		);	

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'paragraph_typography',
				'selector' => '{{WRAPPER}} .mt-testimonials-content',
			]
		);

		$this->add_control(
			'paragraph_margin',
			[
				'label' => esc_html__( 'Paragraph Margin', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .mt-testimonials-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_style2',
			[
				'label' => esc_html__( 'Author Options', 'essential-elementor-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'author_options',
			[
				'label' => esc_html__( 'Author options', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);	

		$this->add_control(
			'author_margin',
			[
				'label' => esc_html__( 'Margin', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .mt-testimonials-author' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'author_padding',
			[
				'label' => esc_html__( 'Padding', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .mt-testimonials-author' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border_author',
				'label' => esc_html__( 'Border', 'plugin-name' ),
				'selector' => '{{WRAPPER}} .mt-testimonials-author',
			]
		);


		$this->add_control(
			'position_options',
			[
				'label' => esc_html__( 'Position options', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);	

		$this->add_control(
			'position_color',
			[
				'label' => esc_html__( 'Color', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} .mt-testimonials-position' => 'color: {{VALUE}}',
				],
			]
		);	

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'position_typography',
				'selector' => '{{WRAPPER}} .mt-testimonials-position',
			]
		);

		$this->add_control(
			'position_margin',
			[
				'label' => esc_html__( 'Position Margin', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .mt-testimonials-position' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'theme_options',
			[
				'label' => esc_html__( 'Theme options', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);	

		$this->add_control(
			'theme_color',
			[
				'label' => esc_html__( 'Color', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} .mt-testimonials-theme' => 'color: {{VALUE}}',
				],
			]
		);	

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'theme_typography',
				'selector' => '{{WRAPPER}} .mt-testimonials-theme',
			]
		);

		$this->add_control(
			'theme_margin',
			[
				'label' => esc_html__( 'Theme Margin', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .mt-testimonials-theme' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
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
		$mt_testimonials_content = $settings['mt_testimonials_content'];
		$mt_testimonials_position = $settings['mt_testimonials_position'];
		$mt_testimonials_theme = $settings['mt_testimonials_theme'];
		$mt_testimonials_img_holder = $settings['mt_testimonials_img_holder'];
		$mt_testimonials_icon_holder = $settings['mt_testimonials_icon_holder'];
		?>

        <!-- Start rendering the output -->
		<div class="mt-testimonials-item background_options">
			<div class="mt-testimonials-box mt-box">
				<div  style="text-align: <?php echo esc_attr( $settings['icon_align'] ); ?>;" class="mt-testimonials-quotes">
						<svg width="43" height="45" viewBox="0 0 43 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M5.18442 45C2.92545 41.2154 1.39732 37.2923 0.600039 33.2308C-0.152951 29.1692 -0.197245 25.1769 0.467158 21.2538C1.13156 17.2846 2.50466 13.4769 4.58645 9.83077C6.71254 6.18461 9.54733 2.90769 13.0908 0L18.8047 3.6C19.3362 3.92307 19.6905 4.2923 19.8677 4.70769C20.0892 5.12307 20.1778 5.56153 20.1335 6.02308C20.1335 6.43846 20.0449 6.85384 19.8677 7.26922C19.6905 7.68461 19.4691 8.03077 19.2033 8.30769C18.3617 9.32308 17.498 10.7538 16.6121 12.6C15.7706 14.4 15.1505 16.4769 14.7518 18.8308C14.3975 21.1385 14.4196 23.6538 14.8183 26.3769C15.2169 29.1 16.2578 31.8462 17.9409 34.6154C18.8268 36.0462 19.0704 37.3154 18.6718 38.4231C18.2731 39.4846 17.4537 40.2231 16.2135 40.6385L5.18442 45ZM28.0399 45C25.7809 41.2154 24.2528 37.2923 23.4555 33.2308C22.7025 29.1692 22.6582 25.1769 23.3226 21.2538C23.987 17.2846 25.3601 13.4769 27.4419 9.83077C29.568 6.18461 32.4028 2.90769 35.9463 0L41.6601 3.6C42.1916 3.92307 42.546 4.2923 42.7232 4.70769C42.9446 5.12307 43.0332 5.56153 42.9889 6.02308C42.9889 6.43846 42.9003 6.85384 42.7232 7.26922C42.546 7.68461 42.3245 8.03077 42.0588 8.30769C41.2172 9.32308 40.3535 10.7538 39.4676 12.6C38.626 14.4 38.0059 16.4769 37.6073 18.8308C37.2529 21.1385 37.2751 23.6538 37.6737 26.3769C38.0723 29.1 39.1132 31.8462 40.7964 34.6154C41.6823 36.0462 41.9259 37.3154 41.5272 38.4231C41.1286 39.4846 40.3092 40.2231 39.069 40.6385L28.0399 45Z" fill="#ECF5FF"></path>
                        </svg>
					<span class="mt-testimonials-stars">
						<?php \Elementor\Icons_Manager::render_icon( $settings['mt_testimonials_icon_holder'], [ 'aria-hidden' => 'true' ] );\Elementor\Icons_Manager::render_icon( $settings['mt_testimonials_icon_holder'], [ 'aria-hidden' => 'true' ] );\Elementor\Icons_Manager::render_icon( $settings['mt_testimonials_icon_holder'], [ 'aria-hidden' => 'true' ] );\Elementor\Icons_Manager::render_icon( $settings['mt_testimonials_icon_holder'], [ 'aria-hidden' => 'true' ] );\Elementor\Icons_Manager::render_icon( $settings['mt_testimonials_icon_holder'], [ 'aria-hidden' => 'true' ] ); ?> 
					</span>
				</div>
				<p class="mt-testimonials-content">
				<?php echo esc_html__($mt_testimonials_content, 'essential-elementor-widget');  ?>
				</p>
				<div  style="text-align: <?php echo esc_attr( $settings['testimonial_align'] ); ?>;" class="mt-testimonials-author">
					<div class="mt-testimonials-img-holder">
						<?php echo '<img src="' . esc_url( $settings['mt_testimonial_image']['url'] ) . '" alt="my-image">'; ?>
					</div>
					<div class="mt-testimonials-details">
						<h2 class="mt-testimonials-position">
							<?php echo esc_html__( $mt_testimonials_position, 'essential-elementor-widget');  ?>
						</h2>
						<p class="mt-testimonials-theme">
							<?php echo esc_html__( $mt_testimonials_theme, 'essential-elementor-widget');  ?>
						</p>
					</div>
				</div>
			</div>
		</div>
        <!-- End rendering the output finally-->
		
        <?php
	}						
}
