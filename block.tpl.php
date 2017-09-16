<?php if($block->delta != "main") : ?>
	<div id="<?php print $block_html_id; ?>" class="block">
<?php endif; ?>
	<?php if($block->delta == 'menu-mobile') : ?>
		<button type="button" class="navbar-toggle">
			<span class="icon_menu">
				<span class="block__icon">
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
				</span>
			</span>
		</button>
		<div class="menu_conteiner">
			<div class="top_menu">
				<div class="title_menu">меню сайта</div>
				<div class="close_menu"></div>
			</div>		
	<?php endif; ?>
	<?php print render($title_prefix); ?>	
		<?php if ($block->subject): ?>
			<div class="f_l full_titile">
				<?php if($block->delta == 8) : ?>
					<h1 class="title_block"><?php print $block->subject ?></h1>
				<?php elseif($block->delta == 20) : ?>
					<h2><?php print $block->subject ?></h2>
					<div class="desc_block_full">моих клиентов</div>
				<?php elseif($block->delta == 19) : ?>
					<h2><?php print $block->subject ?></h2>
					<div class="desc_block_full">которые я использую в работе</div>
				<?php elseif($block->delta == 21) : ?>
					<h2><?php print $block->subject ?></h2>
					<div class="desc_block_full">Как я стал СЕО специалистом</div>
				<?php elseif($block->delta == 22) : ?>
					<h2><?php print $block->subject ?></h2>
					<div class="desc_block_full">об образовании и достижениях в сфере SEO продвижения</div>
				<?php else : ?>
					<h2 class="title_block"><?php print $block->subject ?></h2>
				<?php endif; ?>
			</div>
		<?php endif;?>
	<?php print render($title_suffix); ?>
	
    <?php print $content ?>
	<?php if($block->delta == 'menu-mobile') : ?>
		</div>
	<?php endif; ?>
<?php if($block->delta != "main") : ?>
	</div>
<?php endif; ?>
