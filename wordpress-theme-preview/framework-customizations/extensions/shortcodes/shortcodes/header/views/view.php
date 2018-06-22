<?php if (!defined('FW')) die( 'Forbidden' ); ?>

<div class="texture-overlay"></div>
<div class="fw-container">
	<div class="fw-row nav-wrapper">
		<div class="fw-col-md-6 fw-col-sm-6 fw-col-xs-6 text-left">
			<a href="/"><img src="<?php echo $atts['logo']['url'] ?>" alt="<?php echo $atts['title'] ?>"></a>
		</div>
		<div class="fw-col-md-6 fw-col-sm-6 fw-col-xs-6 text-right navicon">
			<p>MENU</p><a id="trigger-overlay" class="nav_slide_button nav-toggle" href="#"><span></span></a>
		</div>
	</div>
	<div class="fw-row hero-content">
		<div class="fw-col-md-12">
			<h1 class="animated fadeInDown"><?php echo $atts['title'] ?></h1>
			<?php foreach ( $atts['buttons'] as $key => $button ) : ?>
			<a href="<?php echo $button['url'] ?>" class="use-btn animated fadeInUp"><?php echo $button['title'] ?> <i class="<?php echo $button['icon'] ?>"></i></a>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<div class="overlay overlay-boxify">
	<nav>
		<ul>
			<?php foreach ( $atts['links'] as $key => $link ) : ?>
			<li><a href="<?php echo $link['url'] ?>"><i class="<?php echo $link['icon'] ?>"></i><?php echo $link['title'] ?></a></li>
			<?php endforeach; ?>
		</ul>
	</nav>
</div>