<div id="<?php print $block_html_id; ?>" class="block">
	<div class="form_order">
		<div class="f_l title_form">Закажите продвижение Вашего сайта</div>
		<?php
			$block = block_load('webform', 'client-block-1');
			$block = _block_render_blocks(array($block));
			$block_build = _block_get_renderable_array($block);		
			echo render($block_build['webform_client-block-1']['#markup']);
		?>
	</div>
	
	<?php print $content ?>
</div>
<p>smdpsdpapsdasdpoas nks dksa dn asndasasa </p>