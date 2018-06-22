<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'style'   => array(
		'type'    => 'select',
		'label'   => __('Box Style', 'fw'),
		'choices' => array(
			'fw-iconbox-1' => __('Icon above title', 'fw'),
			'fw-iconbox-2' => __('Icon in line with title', 'fw')
		)
	),
	'title'   => array(
		'type'  => 'text',
		'label' => __( 'Title of the Box', 'fw' ),
	),
	'content' => array(
		'type'  => 'textarea',
		'label' => __( 'Content', 'fw' ),
		'desc'  => __( 'Enter the desired content', 'fw' ),
	),
	'icon_main' => array(
		'label' => __( 'Image Icon Main', 'fw' ),
		'desc'  => __( 'Choose a image icon for your main content', 'fw' ),
		'type'  => 'icon',
	),
	'text_link' => array(
		'label' => __( 'Text link', 'fw' ),
		'desc'  => __( 'Enter text link', 'fw' ),
		'type'  => 'text',
	),
	'icon_link' => array(
		'label' => __( 'Image Icon Link', 'fw' ),
		'desc'  => __( 'Choose a image icon for your link', 'fw' ),
		'type'  => 'icon',
	),
);