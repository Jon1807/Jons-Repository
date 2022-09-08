<!--CSS-->
<style>
	.mt-tgrid-metas{
    display: flex; 
    justify-content: space-between; 
    margin-top: 20px;
}

.mt-tgrid-rightmetas{
    display:flex;
}

.mt_btn_medium_1{
    padding: 11px 25px;
}

.mt_btn_medium_2{
    padding: 12px;;
}

.mt-btn-gradient{
	-webkit-transition: all 250ms ease-in-out;
	background: linear-gradient(135deg,#fe8045 0%,#fe4e55 100%);
}
</style>

<!--PHP-->

<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
class Essential_Elementor_Multi_Vendor_Widget extends \Elementor\Widget_Base { 
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
		return 'vendor';
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
		return esc_html__( 'Multi Vendor Widget', 'essential-elementor-widget' );
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
		return 'eicon-tools';
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
		return [ 'vendor', 'multi', 'widget', 'auction' ];
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
			'mt_vendor_image',
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
				'name' => 'mt_vendor_image',
				'default' => 'full',
				'separator' => 'none',
			]
		);

		$this->add_control(
			'mt-image-link',
			[
				'label' => esc_html__( 'Image Link', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'mt_tgrid_title',
			[
				'label' => esc_html__( 'Card Title', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block' => true,
				'placeholder' => esc_html__( 'Your card title here', 'essential-elementor-widget' ),
			]
		);

		$this->add_control(
			'widget_title',
			[
				'label' => esc_html__( 'Link title', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'mt_tgrid_category',
			[
				'label' => esc_html__( 'Card Category', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'   => true,
				'placeholder' => esc_html__( 'Your first Category here', 'essential-elementor-widget' ),
			]
		);	

		$this->add_control(
			'mt_tgrid_category2',
			[
				'label' => esc_html__( 'Second Card Category', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'   => true,
				'placeholder' => esc_html__( 'Your second Category here', 'essential-elementor-widget' ),
			]
		);	

		$this->add_control(
			'mt_tgrid_category3',
			[
				'label' => esc_html__( 'Third Card Category', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'   => true,
				'placeholder' => esc_html__( 'Your third Category here', 'essential-elementor-widget' ),
			]
		);	

		$this->add_control(
			'widget_category',
			[
				'label' => esc_html__( 'Link category', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'mt_tgrid_price',
			[
				'label' => esc_html__( 'Card Price', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'   => true,
				'placeholder' => esc_html__( 'Your Price here', 'essential-elementor-widget' ),
			]
		);	

		$this->add_control(
			'mt_tgrid_sales',
			[
				'label' => esc_html__( 'Card sales', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'   => true,
				'placeholder' => esc_html__( 'Number of sales here', 'essential-elementor-widget' ),
			]
		);	

		$this->add_control(
			'mt_btn_medium_1',
			[
				'label' => esc_html__( 'Button text', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'label_block'   => true,
				'placeholder' => esc_html__( 'Text button', 'essential-elementor-widget' ),
			]
		);	

		$this->add_control(
			'mt-btn-medium-1-link',
			[
				'label' => esc_html__( 'First button Link', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

		$this->add_control(
			'mt_btn_medium_2',
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
			'mt-btn-medium-2-link',
			[
				'label' => esc_html__( 'Second button Link', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://your-link.com', 'plugin-name' ),
				'options' => [ 'url', 'is_external', 'nofollow' ],
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
					// 'custom_attributes' => '',
				],
				'label_block' => true,
			]
		);

		$this->end_controls_section();
		//Code for style options//
		$this->start_controls_section(
			'section_style',
			[
				'label' => esc_html__( 'Style', 'essential-elementor-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

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
			'category_options',
			[
				'label' => esc_html__( 'Category Options', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);		

		$this->add_control(
			'category_color',
			[
				'label' => esc_html__( 'Color', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} h4' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'category_typography',
				'selector' => '{{WRAPPER}} h4',
			]
		);	

		$this->add_control(
			'price_options',
			[
				'label' => esc_html__( 'Price Options', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);		

		$this->add_control(
			'price_color',
			[
				'label' => esc_html__( 'Color', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} span' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'price_typography',
				'selector' => '{{WRAPPER}} span',
			]
		);	

		$this->add_control(
			'sales_options',
			[
				'label' => esc_html__( 'Sales Options', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);		

		$this->add_control(
			'sales_color',
			[
				'label' => esc_html__( 'Color', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} p' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'sales_typography',
				'selector' => '{{WRAPPER}} p',
			]
		);	


		$this->end_controls_section();

		$this->start_controls_section(
			'button_style',
			[
				'label' => esc_html__( 'Button', 'essential-elementor-widget' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'button_options',
			[
				'label' => esc_html__( 'Button Options', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);		

		$this->add_control(
			'button_color',
			[
				'label' => esc_html__( 'Color', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} .mt_btn_medium_1 a' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'button_typography',
				'selector' => '{{WRAPPER}} .mt_btn_medium_1 a',
			]
		);	

		$this->add_control(
			'button_radius',
			[
				'label' => esc_html__( 'Button radius', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .mt_btn_medium_1' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'margin_button',
			[
				'label' => esc_html__( 'Margin Button', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .mt_btn_medium_1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'border',
				'label' => esc_html__( 'Border', 'plugin-name' ),
				'selector' => '{{WRAPPER}} .mt_btn_medium_1',
			]
		);

		$this->add_control(
			'second_button_options',
			[
				'label' => esc_html__( 'Second Button Options', 'smartowl' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);	

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'button_background_options',
				'label' => esc_html__( 'Background', 'plugin-name' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .mt_btn_medium_2',
			]
		);

		$this->add_control(
			'second_button_color',
			[
				'label' => esc_html__( 'Color', 'essential-elementor-widget' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '#000',
				'selectors' => [
					'{{WRAPPER}} .mt_btn_medium_2 a' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'button_typography',
				'selector' => '{{WRAPPER}} .mt_btn_medium_2 a',
			]
		);	

		$this->add_control(
			'second_button_radius',
			[
				'label' => esc_html__( 'Button radius', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .mt_btn_medium_2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'second_margin_button',
			[
				'label' => esc_html__( 'Margin Button', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .mt_btn_medium_2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'second_border',
				'label' => esc_html__( 'Border', 'plugin-name' ),
				'selector' => '{{WRAPPER}} .mt_btn_medium_2',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'background_section_style',
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
					'{{WRAPPER}} .mt-tgrid-singleitem.mt-box.background_options' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'border_radius_image',
			[
				'label' => esc_html__( 'Border radius image', 'plugin-name' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .mt_vendor_image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'{{WRAPPER}} .mt-tgrid-details' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
		$mt_tgrid_title = $settings['mt_tgrid_title'];
		$mt_tgrid_category = $settings['mt_tgrid_category'];
		$mt_tgrid_category2 = $settings['mt_tgrid_category2'];
		$mt_tgrid_category3 = $settings['mt_tgrid_category3'];
		$mt_tgrid_price = $settings['mt_tgrid_price'];
		$mt_tgrid_sales = $settings['mt_tgrid_sales'];
		$mt_tgrid_btn_medium = $settings['mt_btn_medium_1'];
		$mt_tgrid_btn_medium2 = $settings['mt_btn_medium_2'];


		?>

        <!-- Start rendering the output -->
    <div class="mt-tgrid-singleitem mt-box background_options">
		<?php if ( ! empty( $settings['mt-image-link']['url'] ) ) {
			$this->add_link_attributes( 'mt-image-link', $settings['mt-image-link'] );
		}?>
		<a <?php echo $this->get_render_attribute_string( 'mt-image-link' ); ?>>
			<?php echo '<img class="mt_vendor_image" src="' . esc_url( $settings['mt_vendor_image']['url'] ) . '" alt="">'; ?>
		</a>
		<div class="mt-tgrid-details">
			<div class="mt-tgrid-title-category-group">
				<h3 class="mt_tgrid_title">
					<?php if ( ! empty( $settings['widget_title']['url'] ) ) {
							$this->add_link_attributes( 'widget_title', $settings['widget_title'] );
					}?>
						<a <?php echo $this->get_render_attribute_string( 'widget_title' ); ?>>
					<h3 class="mt-tgrid-name"><?php echo esc_html__($mt_tgrid_title, 'essential-elementor-widget');  ?></h3>
					</a>
				</h3>
				<h4 class="mt_tgrid_category">
					<?php if ( ! empty( $settings['widget_category']['url'] ) ) {
							$this->add_link_attributes( 'widget_category', $settings['widget_category'] );
					}?>
					<a <?php echo $this->get_render_attribute_string( 'widget_category' ); ?>>
						<h4 class="mt_tgrid_category"><?php echo esc_html__($mt_tgrid_category, 'essential-elementor-widget');  ?> / <?php echo esc_html__($mt_tgrid_category2, 'essential-elementor-widget');  ?> / <?php echo esc_html__($mt_tgrid_category3, 'essential-elementor-widget');  ?></h4>
					</a> <?php if ( ! empty( $settings['widget_category']['url'] ) ) {
							$this->add_link_attributes( 'widget_category', $settings['widget_category'] );
					}?>				
				</h4>
				</div>
			<div class="mt-tgrid-metas">
				<div class="mt-tgrid-leftmetas">
					<span class="mt_tgrid_price"><?php echo esc_html__($mt_tgrid_price, 'essential-elementor-widget');  ?></span>
					<p class="mt_tgrid_sales"><?php echo esc_html__($mt_tgrid_sales, 'essential-elementor-widget');  ?>  </p>
				</div>
				<div class="mt-tgrid-rightmetas">
					<div class="mt_btn_medium_1">
						<?php if ( ! empty( $settings['mt-btn-medium-1-link']['url'] ) ) {
							$this->add_link_attributes( 'mt-btn-medium-1-link', $settings['mt-btn-medium-1-link'] );
						}?>
						<a <?php echo $this->get_render_attribute_string( 'mt-btn-medium-1-link' ); ?>><?php echo esc_html__($mt_tgrid_btn_medium, 'essential-elementor-widget');  ?></a>
					</div>
					<div class="mt_btn_medium_2">
						<?php if ( ! empty( $settings['mt-btn-medium-2-link']['url'] ) ) {
							$this->add_link_attributes( 'mt-btn-medium-2-link', $settings['mt-btn-medium-2-link'] );
						}?>
						<a  <?php echo $this->get_render_attribute_string( 'mt-btn-medium-2-link' ); ?>> 
						<?php \Elementor\Icons_Manager::render_icon( $settings['mt_btn_medium_2'], [ 'aria-hidden' => 'true' ] ); ?>
						</a>
					</div>
			</div>
			</div>
		</div>
	</div>
        <!-- End rendering the output -->

        <?php
		
	}						
}