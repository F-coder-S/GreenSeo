<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
	<div class="f_l row_portfolio">
		<div class="f_l name_site">
			<a target="_blank" href="http://<?php print $node->field_portfolio_domen['und'][0]['value']; ?>"><?php print $node->field_portfolio_domen['und'][0]['value']; ?></a>
			<?php print $node->field_portfolio_desc_domen['und'][0]['value']; ?>
		</div>
		<div class="f_l info_portfolio">
			<div class="row odd">
				<div class="label">Срок продвижения</div>
				<div class="value"><?php print $node->field_portfolio_time['und'][0]['value']; ?></div>
			</div>
			<div class="row even">
				<div class="label">На продвижении</div>
				<div class="value"><?php print $node->field_portfolio_on_seo['und'][0]['value']; ?></div>
			</div>
			<div class="row odd">
				<div class="label">Продвигается запросов</div>
				<div class="value"><?php print $node->field_portfolio_moving_on['und'][0]['value']; ?></div>
			</div>
			<div class="row even">
				<div class="label">Бюджет</div>
				<div class="value"><?php print $node->field_portfolio_budget['und'][0]['value']; ?></div>
			</div>
			<div class="row odd">
				<div class="label">Посетителей</div>
				<div class="value"><?php print $node->field_portfolio_people['und'][0]['value']; ?></div>
			</div>
			<div class="f_l dinamic">
				<?php print theme_image_style( array( 'style_name' => '830w', 'path' => $node->field_portfolio_statistic['und'][0]['uri'], 'width' => NULL, 'height' => NULL, 'alt' => $node->title, 'title' => $node->title ) ); ?>
			</div>
		</div>
	</div>
	<?php if(!empty($node->field_portfolio_full_text)) : ?>
	<div class="f_l text_portfolio">
		<?php print $node->field_portfolio_full_text['und'][0]['value']; ?>
	</div>
	<?php endif; ?>
</article>