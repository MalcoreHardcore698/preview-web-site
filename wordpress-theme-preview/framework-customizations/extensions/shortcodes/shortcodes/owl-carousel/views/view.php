<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

<div class="col-md-6 nopadding features-intro-img">
	<div class="features-bg">
		<div class="texture-overlay" style="background-image: url('<?php echo $atts['background']['url'] ?>');"></div>
		<div class="features-img wp1">
			<img src="<?php echo $atts['logo']['url'] ?>" alt="HTML5 Logo">
		</div>
	</div>
</div>
<div class="col-md-6 nopadding">
	<div class="features-slider">
			<ul class="slides" id="featuresSlider">
				<?php foreach ( $atts['items'] as $key => $value ) : ?>
				<li>
					<?php echo do_shortcode( $value['content'] ) ?>
				</li>
				<?php endforeach; ?>
			</ul>
	</div>
</div>