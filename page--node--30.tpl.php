<header id="header">
	<div class="f_l top_header">
		<div class="block_inside">
			<a class="logo" href="<?php print $front_page ?>">
				<img src="<?php print $logo ?>" alt="" title="" />
			</a>	
			<?php print render($page['header']); ?>
		</div>
	</div>
	<div class="f_l bottom_header">
		<div class="block_inside">
			<?php
				$menu_name = variable_get('menu_main_links_source', 'menu-service-menu');
				$tree = menu_tree($menu_name);
				print drupal_render($tree);
			?>
		</div>
	</div>
</header><!-- .header-->
<main id="content">
	<div class="f_b top_quote">
		<?php
			$block = block_load('block', 16);
			$block = _block_render_blocks(array($block));
			$block_build = _block_get_renderable_array($block);
			echo drupal_render($block_build);
		?>		
	</div>
	<div class="f_b text_seo">
		<?php
			$block = block_load('block', 17);
			$block = _block_render_blocks(array($block));
			$block_build = _block_get_renderable_array($block);
			echo drupal_render($block_build);
		?>
	</div>
	<div class="f_b tabs_block">
		<div class="block_inside">
			<div class="content_desc">
				<div class="tabs_node">
					<span class="tabs pr_f active"><span>SEO-аудит сайта</span></span>
					<span class="tabs pr_t"><span>Сбор семантического ядра</span></span>
					<span class="tabs pr_for"><span>Оптимизация текста и тегов</span></span>
					<span class="tabs pr_fv"><span>Внутренняя перелинковка</span></span>
					<span class="tabs pr_six"><span>Внешняя оптимизация</span></span>
					<span class="tabs pr_sev"><span>Работа с юзабилити и поведенческими факторами</span></span>
					<span class="tabs pr_eig"><span>Работа с коммерческими факторами ранжирования</span></span>
				</div>
				<div class="info_block block_pr_f">
					<div class="desc_seo">
						<p><span>Прототип сайта</span> - это схема с визуальным отображением размещения элементов на каждой странице Вашего будущего сайта:</p>
						<ul class="t_u1">
							<li>Прототипирование с помощью передовой программы moqups.com</li>
							<li>В процессе участвуют: заказчик, менеджер, технический директор, дизайнер, SEO-специалист</li>
							<li>Создание ТЗ на основе прототипов бесплатно</li>
							<li>Прототип будет сделан с учётом требований</li>
							<li>SEO-оптимизации для дальнейшего продвижения сайта</li>
						</ul>	
						<div class="f_l portfolio">
							<a href="#">Посмотреть пример</a>
						</div>
						<div class="f_l price">
							<div class="name_b">Цена отдельной услуги без продвижения:</div>
							<div class="price_s">20 000 <span>руб.</span></div>
						</div>
						<div class="f_l order_bottom">
							<div>Заказать отдельно</div>
						</div>
						<div class="f_l read_more">
							<a href="#">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="info_block block_pr_t">
					<div class="desc_seo">
						<p><span>Прототип сайта</span> - это схема с визуальным отображением размещения элементов на каждой странице Вашего будущего сайта:</p>
						<ul class="t_u1">
							<li>Прототипирование с помощью передовой программы moqups.com</li>
							<li>В процессе участвуют: заказчик, менеджер, технический директор, дизайнер, SEO-специалист</li>
							<li>Создание ТЗ на основе прототипов бесплатно</li>
							<li>Прототип будет сделан с учётом требований</li>
							<li>SEO-оптимизации для дальнейшего продвижения сайта</li>
						</ul>	
						<div class="f_l portfolio">
							<a href="#">Посмотреть пример</a>
						</div>
						<div class="f_l price">
							<div class="name_b">Цена отдельной услуги без продвижения:</div>
							<div class="price_s">100 000 <span>руб.</span></div>
						</div>
						<div class="f_l order_bottom">
							<div>Заказать отдельно</div>
						</div>
						<div class="f_l read_more">
							<a href="#">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="info_block block_pr_for">
					<div class="desc_seo">
						<p><span>Прототип сайта</span> - это схема с визуальным отображением размещения элементов на каждой странице Вашего будущего сайта:</p>
						<ul class="t_u1">
							<li>Прототипирование с помощью передовой программы moqups.com</li>
							<li>В процессе участвуют: заказчик, менеджер, технический директор, дизайнер, SEO-специалист</li>
							<li>Создание ТЗ на основе прототипов бесплатно</li>
							<li>Прототип будет сделан с учётом требований</li>
							<li>SEO-оптимизации для дальнейшего продвижения сайта</li>
						</ul>	
						<div class="f_l portfolio">
							<a href="#">Посмотреть пример</a>
						</div>
						<div class="f_l price">
							<div class="name_b">Цена отдельной услуги без продвижения:</div>
							<div class="price_s">230 000 <span>руб.</span></div>
						</div>
						<div class="f_l order_bottom">
							<div>Заказать отдельно</div>
						</div>
						<div class="f_l read_more">
							<a href="#">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="info_block block_pr_fv">
					<div class="desc_seo">
						<p><span>Прототип сайта</span> - это схема с визуальным отображением размещения элементов на каждой странице Вашего будущего сайта:</p>
						<ul class="t_u1">
							<li>Прототипирование с помощью передовой программы moqups.com</li>
							<li>В процессе участвуют: заказчик, менеджер, технический директор, дизайнер, SEO-специалист</li>
							<li>Создание ТЗ на основе прототипов бесплатно</li>
							<li>Прототип будет сделан с учётом требований</li>
							<li>SEO-оптимизации для дальнейшего продвижения сайта</li>
						</ul>	
						<div class="f_l portfolio">
							<a href="#">Посмотреть пример</a>
						</div>
						<div class="f_l price">
							<div class="name_b">Цена отдельной услуги без продвижения:</div>
							<div class="price_s">280 000 <span>руб.</span></div>
						</div>
						<div class="f_l order_bottom">
							<div>Заказать отдельно</div>
						</div>
						<div class="f_l read_more">
							<a href="#">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="info_block block_pr_six">
					<div class="desc_seo">
						<p><span>Прототип сайта</span> - это схема с визуальным отображением размещения элементов на каждой странице Вашего будущего сайта:</p>
						<ul class="t_u1">
							<li>Прототипирование с помощью передовой программы moqups.com</li>
							<li>В процессе участвуют: заказчик, менеджер, технический директор, дизайнер, SEO-специалист</li>
							<li>Создание ТЗ на основе прототипов бесплатно</li>
							<li>Прототип будет сделан с учётом требований</li>
							<li>SEO-оптимизации для дальнейшего продвижения сайта</li>
						</ul>	
						<div class="f_l portfolio">
							<a href="#">Посмотреть пример</a>
						</div>
						<div class="f_l price">
							<div class="name_b">Цена отдельной услуги без продвижения:</div>
							<div class="price_s">270 000 <span>руб.</span></div>
						</div>
						<div class="f_l order_bottom">
							<div>Заказать отдельно</div>
						</div>
						<div class="f_l read_more">
							<a href="#">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="info_block block_pr_sev">
					<div class="desc_seo">
						<p><span>Прототип сайта</span> - это схема с визуальным отображением размещения элементов на каждой странице Вашего будущего сайта:</p>
						<ul class="t_u1">
							<li>Прототипирование с помощью передовой программы moqups.com</li>
							<li>В процессе участвуют: заказчик, менеджер, технический директор, дизайнер, SEO-специалист</li>
							<li>Создание ТЗ на основе прототипов бесплатно</li>
							<li>Прототип будет сделан с учётом требований</li>
							<li>SEO-оптимизации для дальнейшего продвижения сайта</li>
						</ul>	
						<div class="f_l portfolio">
							<a href="#">Посмотреть пример</a>
						</div>
						<div class="f_l price">
							<div class="name_b">Цена отдельной услуги без продвижения:</div>
							<div class="price_s">260 000 <span>руб.</span></div>
						</div>
						<div class="f_l order_bottom">
							<div>Заказать отдельно</div>
						</div>
						<div class="f_l read_more">
							<a href="#">Подробнее</a>
						</div>
					</div>
				</div>
				<div class="info_block block_pr_eig">
					<div class="desc_seo">
						<p><span>Прототип сайта</span> - это схема с визуальным отображением размещения элементов на каждой странице Вашего будущего сайта:</p>
						<ul class="t_u1">
							<li>Прототипирование с помощью передовой программы moqups.com</li>
							<li>В процессе участвуют: заказчик, менеджер, технический директор, дизайнер, SEO-специалист</li>
							<li>Создание ТЗ на основе прототипов бесплатно</li>
							<li>Прототип будет сделан с учётом требований</li>
							<li>SEO-оптимизации для дальнейшего продвижения сайта</li>
						</ul>	
						<div class="f_l portfolio">
							<a href="#">Посмотреть пример</a>
						</div>
						<div class="f_l price">
							<div class="name_b">Цена отдельной услуги без продвижения:</div>
							<div class="price_s">240 000 <span>руб.</span></div>
						</div>
						<div class="f_l order_bottom">
							<div>Заказать отдельно</div>
						</div>
						<div class="f_l read_more">
							<a href="#">Подробнее</a>
						</div>
					</div>
				</div>
			</div>
			<div class="f_l big_seo">
				<div>Заказать комплексное продвижение сайта</div>
			</div>
		</div>
	</div>
	<div class="f_b why">
		<?php
			$block = block_load('block', 6);
			$block = _block_render_blocks(array($block));
			$block_build = _block_get_renderable_array($block);
			echo drupal_render($block_build);
		?>		
	</div>
	<div class="f_b form_fild seo_audit">
		<?php
			$block = block_load('block', 13);
			$block = _block_render_blocks(array($block));
			$block_build = _block_get_renderable_array($block);
			echo drupal_render($block_build);
		?>		
	</div>
	<div class="f_b my_path">
		<?php
			$block = block_load('block', 21);
			$block = _block_render_blocks(array($block));
			$block_build = _block_get_renderable_array($block);
			echo drupal_render($block_build);
		?>		
	</div>
	<div class="f_b certifications_vn">
		<?php
			$block = block_load('block', 22);
			$block = _block_render_blocks(array($block));
			$block_build = _block_get_renderable_array($block);
			echo drupal_render($block_build);
		?>		
	</div>
	<div class="f_b form_fild seo_on">
		<div class="block_inside">
			<div class="f_l full_titile">
				<h2>Закажите</h2>
				<div class="desc_block_full">профессиональное продвижение<br /> вашего сайта прямо сейчас</div>
			</div>
			<?php
				$block = block_load('webform', 'client-block-1');
				$block = _block_render_blocks(array($block));
				$block_build = _block_get_renderable_array($block);		
				echo render($block_build['webform_client-block-1']['#markup']);
			?>
		</div>
	</div>
	<div class="f_b gratitude">
		<?php
			$block = block_load('block', 20);
			$block = _block_render_blocks(array($block));
			$block_build = _block_get_renderable_array($block);
			echo drupal_render($block_build);
		?>		
	</div>
	<div class="f_b instruments">
		<?php
			$block = block_load('block', 19);
			$block = _block_render_blocks(array($block));
			$block_build = _block_get_renderable_array($block);
			echo drupal_render($block_build);
		?>		
	</div>
	<?php 
		hide($page['content']['system_main']);
		print render($page['content']); 
	?>
</main><!-- .content -->
<footer id="footer">
	<div class="f_l top_footer">
		<div class="block_inside">
			<?php print render($page['footer']); ?>
		</div>
	</div>
	<?php
		$block = block_load('block', 2);
		$block = _block_render_blocks(array($block));
		$block_build = _block_get_renderable_array($block);
		echo drupal_render($block_build);
	?>		
</footer><!-- .footer -->
<div class="block_order_feadback callback">
    <div class="inside_form">
        <div class="close">x</div>
		<div class="f_l head_form">
			<div class="title_form">Заказать звонок</div>
		</div>
		<?php
			$block = block_load('webform', 'client-block-15');
			$block = _block_render_blocks(array($block));
			$block_build = _block_get_renderable_array($block);
			echo render($block_build['webform_client-block-15']['#markup']);
		?>
    </div>
</div>
<div class="block_order_feadback service_fade">
    <div class="inside_form">
        <div class="close">x</div>
		<div class="f_l head_form">
			<div class="title_form">Заказ услуги</div>
		</div>
		<?php
			$block = block_load('webform', 'client-block-16');
			$block = _block_render_blocks(array($block));
			$block_build = _block_get_renderable_array($block);
			echo render($block_build['webform_client-block-16']['#markup']);
		?>
    </div>
</div>