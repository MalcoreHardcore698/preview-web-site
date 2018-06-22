<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
?>
<?php
/*
 * `.fw-iconbox` supports 3 styles:
 * `fw-iconbox-1`, `fw-iconbox-2` and `fw-iconbox-3`
 */
?>
<div class="fw-col-md-4 feature-1 wp2">
	<div class="feature-icon">
		<i class="<?php echo esc_attr($atts['icon_main']); ?>"></i>
	</div>
	<div class="feature-content">
		<h3><?php echo $atts['title']; ?></h3>
		<p><?php echo $atts['content']; ?></p>
		<a href="http://tympanus.net/codrops/?p=22554" class="read-more-btn"><?php echo $atts['text_link']; ?> <i class="<?php echo esc_attr($atts['icon_link']); ?>"></i></a>
	</div>
</div>