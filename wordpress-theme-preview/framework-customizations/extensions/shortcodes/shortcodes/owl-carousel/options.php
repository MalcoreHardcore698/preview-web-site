<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'logo' => array(
		'type'  => 'upload',
		'label' => __('Logo Section', 'fw'),
		'desc'  => __('Add Logo Section', 'fw'),
	),
	'background' => array(
		'type'  => 'upload',
		'label' => __('Background Section', 'fw'),
		'desc'  => __('Add Background Section', 'fw'),
	),
	'items'   => array(
		'type'            => 'addable-popup',
		'label'           => __('Items Owl Carousel', 'fw'),
		'desc'            => __('Add item in owl carousel', 'fw'),
		'popu-title'      => __('Add/Edit item', 'fw'),
		'template'        => 'Item',
		'size'            => 'large',
		'limit'           => 3,
		'sortable'        => true,
		'add-button-text' => __('Add', 'fw'),
		'popup-options'   => array(
			'content' => array(
			    'type'          => 'wp-editor',
			    'label'         => __('Content', 'fw'),
			    'desc'          => __('Enter your content for item', 'fw'),
			    'size'          => 'large',
			    'editor_height' => 400,
			    'wpautop'       => true,
			    'editor_type'   => false,
			    'shortcodes'    => false,
			),
		),
	),
);