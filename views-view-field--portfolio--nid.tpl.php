<div class="f_l row_portfolio">
	<div class="f_l name_site">
		<a target="_blank" href="http://<?php print $row->field_field_portfolio_domen[0]['raw']['value']; ?>"><?php print $row->field_field_portfolio_domen[0]['raw']['value']; ?></a>
		<?php print $row->field_field_portfolio_desc_domen[0]['raw']['value']; ?>
		<?php print l('Смотреть подробнее', 'node/'.$row->nid, array('attributes' => array('class' => 'read_more'))); ?>
	</div>
	<div class="f_l info_portfolio">
		<div class="row odd">
			<div class="label">Срок продвижения</div>
			<div class="value"><?php print $row->field_field_portfolio_time[0]['raw']['value']; ?></div>
		</div>
		<div class="row even">
			<div class="label">На продвижении</div>
			<div class="value"><?php print $row->field_field_portfolio_on_seo[0]['raw']['value']; ?></div>
		</div>
		<div class="row odd">
			<div class="label">Продвигается запросов</div>
			<div class="value"><?php print $row->field_field_portfolio_moving_on[0]['raw']['value']; ?></div>
		</div>
		<div class="row even">
			<div class="label">Бюджет</div>
			<div class="value"><?php print $row->field_field_portfolio_budget[0]['raw']['value']; ?></div>
		</div>
		<div class="row odd">
			<div class="label">Посетителей</div>
			<div class="value"><?php print $row->field_field_portfolio_people[0]['raw']['value']; ?></div>
		</div>
		<div class="f_l dinamic">
			<?php print theme_image_style( array( 'style_name' => '830w', 'path' => $row->field_field_portfolio_statistic[0]['raw']['uri'], 'width' => NULL, 'height' => NULL, 'alt' => '', 'title' => '' ) ); ?>
		</div>
	</div>
</div>