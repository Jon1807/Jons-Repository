<?php
namespace Elementor;

class addons_parallax_image extends Widget_Base {
	
	public function get_name() {
		return 'mt-parallax-image';
	}
	
	public function get_title() {
		return 'MT - Parallax Image';
	}
	
	public function get_icon() {
		return 'eicon-parallax';
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
			'banner_img',
			[
				'label' => esc_html__( 'Image', 'modeltheme-addons-for-wpbakery' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->add_control(
	    	'image_size',
	        [
	            'label' => esc_html__('Image Size', 'modeltheme-addons-for-wpbakery'),
	            'type' => Controls_Manager::TEXT,
          		'description' => esc_attr__('Enter image size (Example: thumbnail, medium, large, full or other sizes defined by theme)', 'modeltheme-addons-for-wpbakery'),

	        ]
	    );
    
	$this->end_controls_section();

	}
         
	protected function render() {
        $settings 					= $this->get_settings_for_display();
        $banner_img 				= $settings['banner_img'];
        $image_size 				= $settings['image_size'];

        $image_id = '';
		if ($banner_img['source'] == 'library') {
			$image_id .= $banner_img['id'].',';
        }

        $shortcode_content = ''; 
        $shortcode_content .= do_shortcode('[mt-addons-parallax-image page_builder="elementor" banner_img="'.$image_id.'" image_size="'.$image_size.'" ]');

        echo  $shortcode_content;

	}
	protected function content_template() {

    }
}