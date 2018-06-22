<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php $color_class = !empty($atts['color']) ? "fw-btn-{$atts['color']}" : ''; ?>
<a href="<?php echo esc_attr($atts['link']) ?>" target="<?php echo esc_attr($atts['target']) ?>" class="fw-btn fw-btn-1 <?php echo esc_attr($color_class); ?> <?php echo esc_attr($atts['custom_class']); ?>">
	<i class="<?php echo esc_attr($atts['icon']) ?>"></i><span><?php echo $atts['label']; ?></span>
</a>