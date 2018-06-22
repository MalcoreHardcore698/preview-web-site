<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'label'  => array(
		'label' => __( 'Link Label', 'fw' ),
		'desc'  => __( 'This is the text that appears on your link', 'fw' ),
		'type'  => 'text',
	),
	'icon' => array(
		'label' => __( 'Image Icon', 'fw' ),
		'desc'  => __( 'Choose a image icon for your link', 'fw' ),
		'type'  => 'icon',
	),
	'url' => array(
		'label' => __( 'URL', 'fw' ),
		'desc'  => __( 'Enter URL', 'fw' ),
		'type'  => 'text',
	),
	'custom_class' => array(
		'label' => __( 'Custom Class', 'fw' ),
		'desc'  => __( 'Enter custom class for link', 'fw' ),
		'type'  => 'text',
	),
);