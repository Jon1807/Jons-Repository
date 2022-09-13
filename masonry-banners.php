<?php
namespace Elementor;
use Elementor\Repeater;

class addons_masonry_banners extends Widget_Base {
	
	public function get_name() {
		return 'masonry-banners';
	}
	
	public function get_title() {
		return 'MT - Masonry Banners';
	}
	
	public function get_icon() {
		return 'eicon-gallery-masonry';
	}
	
	public function get_categories() {
		return [ 'addons-widgets' ];
	}
	
	protected function register_controls() {

		$this->start_controls_section(
			'section_title',
			[
				'label' => __( 'Content', 'modeltheme-addons-for-wpbakery' ),
			]
		);
		$this->add_control(
			'extra_class',
			[
				'label' => __( 'Extra class name', 'modeltheme-addons-for-wpbakery' ),
				'label_block' => true,
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'modeltheme-addons-for-wpbakery' ),
			]
		);
        $repeater = new Repeater();
		// $repeater = new \Elementor\Repeater(); 
		$repeater->add_control(
			'banner_img',
			[
				'label' => esc_html__( 'Choose Image', 'modeltheme-addons-for-wpbakery' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$repeater->add_control(
			'banner_title',
			[
				'label' => esc_html__( 'Title', 'modeltheme-addons-for-wpbakery' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
		$repeater->add_control(
			'banner_subtitle',
			[
				'label' => esc_html__( 'Subtitle', 'modeltheme-addons-for-wpbakery' ),
				'type' => \Elementor\Controls_Manager::TEXT,
			]
		);
		$repeater->add_control(
			'banner_url',
			[
				'label' => esc_html__( 'Link', 'plugin-name' ),
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
		$repeater->add_control(
			'layout',
			[
				'label' => __( 'Text Layout', 'modeltheme-addons-for-wpbakery' ),
				'label_block' => true,
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					''       	 	=> __( 'Select Option', 'modeltheme-addons-for-wpbakery' ),
					'top_left' 		=> __( 'Top Left', 'modeltheme-addons-for-wpbakery' ),
					'top_right' 	=> __( 'Top Right', 'modeltheme-addons-for-wpbakery' ),
				]
			]
		);
        // $repeater->end_popover();
		$this->end_controls_section();
		$this->start_controls_section(
			'section_button',
			[
				'label' => __( 'Button', 'modeltheme-addons-for-wpbakery' ),
			]
		);
		$repeater->add_control(
			'button_status',
			[
				'label' => __( 'Status', 'modeltheme-addons-for-wpbakery' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __( 'Show', 'modeltheme-addons-for-wpbakery' ),
				'label_off' => __( 'Hide', 'modeltheme-addons-for-wpbakery' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$repeater->add_control(
			'banner_button_text',
			[
				'label' => esc_html__( 'Text', 'modeltheme-addons-for-wpbakery' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'condition' => [
					'button_status' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'button_style',
			[
				'label' => __( 'Style', 'modeltheme-addons-for-wpbakery' ),
				'label_block' => true,
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'condition' => [
					'button_status' => 'yes',
				],
				'options' => [
					''       	 	=> __( 'Select Option', 'modeltheme-addons-for-wpbakery' ),
					'round' 		=> __( 'Rounded', 'modeltheme-addons-for-wpbakery' ),
					'boxed' 	=> __( 'Boxed with Color', 'modeltheme-addons-for-wpbakery' ),
				]
			]
		);
		$this->end_controls_section();
        $this->start_controls_section(
            'style_button',
            [
                'label' => esc_html__( 'Button Styling', 'modeltheme-addons-for-wpbakery' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
		$repeater->add_control(
			'button_color',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => __( 'Color', 'modeltheme-addons-for-wpbakery' ),
				'label_block' => true,
				'condition' => [
					'button_status' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'button_background',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => __( 'Background', 'modeltheme-addons-for-wpbakery' ),
				'label_block' => true,
				'condition' => [
					'button_status' => 'yes',
				],
			]
		);
		$this->end_controls_section();
        $this->start_controls_section(
            'style_title',
            [
                'label' => esc_html__( 'Title Styling', 'invent-slider' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        ); 
		$repeater->add_control(
			'banner_title_color',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => __( 'Color', 'modeltheme-addons-for-wpbakery' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'banner_title_size',
			[
				'label' => esc_html__( 'Font size', 'modeltheme-addons-for-wpbakery' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
			]
		);
		$repeater->add_control(
			'banner_title_line',
			[
				'label' => esc_html__( 'Line height', 'modeltheme-addons-for-wpbakery' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
			]
		);
		$repeater->add_control(
			'banner_title_weight',
			[
				'label' => esc_html__( 'Font weight', 'modeltheme-addons-for-wpbakery' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
			]
		);
		$this->end_controls_section();
        $this->start_controls_section(
            'style_subtitle',
            [
                'label' => esc_html__( 'Subtitle Styling', 'invent-slider' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
		$repeater->add_control(
			'banner_subtitle_color',
			[
				'type' => \Elementor\Controls_Manager::COLOR,
				'label' => __( 'Color', 'modeltheme-addons-for-wpbakery' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'banner_subtitle_size',
			[
				'label' => esc_html__( 'Font size', 'modeltheme-addons-for-wpbakery' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
			]
		);
		$repeater->add_control(
			'banner_subtitle_line',
			[
				'label' => esc_html__( 'Line height', 'modeltheme-addons-for-wpbakery' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
			]
		); 
		$repeater->add_control(
			'banner_subtitle_weight',
			[
				'label' => esc_html__( 'Font weight', 'modeltheme-addons-for-wpbakery' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
			]
		);
		$this->add_control(
			'banner_settings',
			[
				'label' => __( 'Banner Settings', 'modeltheme-addons-for-wpbakery' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [],
				'title_field' => '',
			]
		);
	$this->end_controls_section();

	}
                 
	protected function render() {
        $settings 					= $this->get_settings_for_display();
		$extra_class 				= $settings['extra_class'];
		$banner_settings 			= $settings['banner_settings'];



		// echo '<pre>' . var_export($image_groups, true) . '</pre>';

        $btn_atts = '';
		$btn_atts .= $banner_url['url'].',';
		$btn_atts .= $banner_url['is_external'].',';
		$btn_atts .= $banner_url['nofollow'].',';
		$btn_atts .= $title.',';
    	
    	$image_id ='';
		if ($banner_img['source'] == 'library') {
			$image_id .= $banner_img['id'].',';
        }

        $shortcode_content = ''; 
        $shortcode_content .= '[mt_addons_masonry_short page_builder="elementor" banner_img="'.$image_id.'"]';
        	foreach ($banner_settings as $banner ) {
		        $banner_img 				= $banner['banner_img'];
		        $banner_title 				= $banner['banner_title'];
		        $banner_subtitle 			= $banner['banner_subtitle'];
		        $banner_url 				= $banner['banner_url'];
		        $layout 					= $banner['layout'];
		        $button_status 				= $banner['button_status'];
		        $banner_button_text 		= $banner['banner_button_text'];
		        $button_style 				= $banner['button_style'];
		        $button_color 				= $banner['button_color'];
		        $button_background 			= $banner['button_background'];
		        $banner_title_color 		= $banner['banner_title_color'];
		        $banner_title_size 			= $banner['banner_title_size'];
		        $banner_title_line 			= $banner['banner_title_line'];
		        $banner_title_weight 		= $banner['banner_title_weight'];
		        $banner_subtitle_color 		= $banner['banner_subtitle_color'];
		        $banner_subtitle_size 		= $banner['banner_subtitle_size'];
		        $banner_subtitle_line 		= $banner['banner_subtitle_line'];
		        $banner_subtitle_weight 	= $banner['banner_subtitle_weight'];

        		$shortcode_content .= '[mt_addons_masonry_short_item page_builder="elementor"  banner_img="'.$image_id.'" banner_title="'.$banner_title.'" banner_subtitle="'.$banner_subtitle.'" banner_url="'.$btn_atts.'" layout="'.$layout.'" button_status="'.$button_status.'" banner_button_text="'.$banner_button_text.'" button_style="'.$button_style.'" button_color="'.$button_color.'" button_background="'.$button_background.'" banner_title_color="'.$banner_title_color.'" banner_title_size="'.$banner_title_size.'" banner_title_line="'.$banner_title_line.'" banner_title_weight="'.$banner_title_weight.'" banner_subtitle_color="'.$banner_subtitle_color.'" banner_subtitle_size="'.$banner_subtitle_size.'" banner_subtitle_line="'.$banner_subtitle_line.'" banner_subtitle_weight="'.$banner_subtitle_weight.'"]';
        		$shortcode_content .= '[/mt_addons_masonry_short_item]';

        	}
        $shortcode_content .= '[/mt_addons_masonry_short]';

        echo  $shortcode_content;

	}
	protected function content_template() {

    }
}