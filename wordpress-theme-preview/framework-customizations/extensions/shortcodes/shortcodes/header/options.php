<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'logo' => array(
		'label' => __( 'Logotype', 'fw' ),
		'desc' => __( 'Choose image for your logo', 'fw' ),
		'type' => 'upload',
	),
	'links' => array(
		'label' => __( 'Navigation', 'fw' ),
		'desc' => __( 'Addable navigation in your site', 'fw' ),
		'type' => 'addable-popup',
		'template' => 'Item',
	    'popup-title' => 'Item',
	    'size' => 'medium',
	    'limit' => 0,
	    'add-button-text' => __('Add', 'fw'),
	    'sortable' => true,
	    'popup-options' => array(
	    	'title' => array(
	    		'label' => __( 'Name Item', 'fw' ),
				'desc' => __( 'Enter name item', 'fw' ),
				'type' => 'text',
	    	),
	    	'url' => array(
	    		'label' => __( 'URL Item', 'fw' ),
				'desc' => __( 'Enter URL item', 'fw' ),
				'type' => 'text',
	    	),
	    	'icon' => array(
	    		'label' => __( 'Icon Item', 'fw' ),
				'desc' => __( 'Choose icon item', 'fw' ),
				'type' => 'icon',
	    	),
	    ),
	),
	'title'  => array(
		'label' => __( 'Title', 'fw' ),
		'desc'  => __( 'Enter title', 'fw' ),
		'type'  => 'text',
	),
	'buttons' => array(
		'label' => __( 'Buttons', 'fw' ),
		'desc'  => __( 'Enter button', 'fw' ),
		'type' => 'addable-popup',
		'template' => 'Button',
	    'popup-title' => 'Button',
	    'size' => 'medium',
	    'limit' => 3,
	    'add-button-text' => __('Add', 'fw'),
	    'sortable' => true,
	    'popup-options' => array(
	    	'title' => array(
	    		'label' => __( 'Name Item', 'fw' ),
				'desc' => __( 'Enter name item', 'fw' ),
				'type' => 'text',
	    	),
	    	'url' => array(
	    		'label' => __( 'URL Item', 'fw' ),
				'desc' => __( 'Enter URL item', 'fw' ),
				'type' => 'text',
	    	),
	    	'icon' => array(
	    		'label' => __( 'Icon Item', 'fw' ),
				'desc' => __( 'Choose icon item', 'fw' ),
				'type' => 'icon',
	    	),
	    ),
	),
);