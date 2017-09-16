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
	<?php
		if(!drupal_is_front_page()) {
			$breads = greenSEO_get_breads(isset($node)?$node:null);
			if(count($breads)){?>
				<div id="breadcrumps"><div class="block_inside">
					<?php
					$i = 1;
					foreach($breads as $bread){
						if($bread['is_link']){?>
							<a href="<?=$bread['href']?>"><?=$bread['name']?></a>
							<?php
						}else{?>
							<span><?=$bread['name']?></span>
							<?php
							continue;
						}
						if($i<count($breads)){?>
							<span class="b_sep">></span>
							<?php
						}
						$i++;
					}
				print '</div></div>';
			}
		}
	?>
	<?php if(!drupal_is_front_page()) : ?>
	<div class="block_inside">
		<?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>
		<?php print render($title_prefix); ?>
		<?php if ($title): ?>
		  <h1><?php print $title ?></h1>
		<?php endif; ?>
		<?php print render($title_suffix); ?>
		<?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
		<?php print render($tabs2); ?>
		<?php if ($messages): ?>
			<?php global $user; ?>
			<?php if($user->uid != 1) : ?>
			<div class="shadow_messenge"></div>
			<div class="f_l massenger_all">
				<div class="inside_massenger">
					<div class="f_l header_top">
						<div class="name">Статус</div>
						<div class="close"></div>
					</div>
			<?php endif; ?>	
					<?php print $messages; ?>
			<?php if($user->uid != 1) : ?>
				</div>
			</div>
			<?php endif; ?>	
		<?php endif; ?>	
		<?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
		<?php print render($page['content']); ?>
	</div>
	<?php endif; ?>
	<?php if(drupal_is_front_page()) : ?>
		<div class="f_b top_quote">
			<?php
				$block = block_load('block', 3);
				$block = _block_render_blocks(array($block));
				$block_build = _block_get_renderable_array($block);
				echo drupal_render($block_build);
			?>		
		</div>
		<div class="f_b service">
			<?php
				$block = block_load('block', 8);
				$block = _block_render_blocks(array($block));
				$block_build = _block_get_renderable_array($block);
				echo drupal_render($block_build);
			?>		
		</div>
		<div class="f_b career">
			<?php
				$block = block_load('block', 9);
				$block = _block_render_blocks(array($block));
				$block_build = _block_get_renderable_array($block);
				echo drupal_render($block_build);
			?>		
		</div>
		<div class="f_b certifications">
			<?php
				$block = block_load('block', 14);
				$block = _block_render_blocks(array($block));
				$block_build = _block_get_renderable_array($block);
				echo drupal_render($block_build);
			?>		
		</div>
		<div class="f_b why">
			<?php
				$block = block_load('block', 6);
				$block = _block_render_blocks(array($block));
				$block_build = _block_get_renderable_array($block);
				echo drupal_render($block_build);
			?>		
		</div>
		<div class="f_b seo_audit">
			<?php
				$block = block_load('block', 13);
				$block = _block_render_blocks(array($block));
				$block_build = _block_get_renderable_array($block);
				echo drupal_render($block_build);
			?>		
		</div>
		<div class="f_b prices">
			<div class="block_inside">
				<div class="f_l full_titile">
					<h2 class="title_block">Сколько стоят мои услуги по продвижению сайта</h2>
				</div>
				<div class="f_l tabs_content">
					<div class="f_l tabs_prices">
						<span id="price-seo-1" class="tabs pr_f active">SEO-оптимизация</span>
						<span id="price-seo-2" class="tabs pr_t">SEO Аудиты</span>
						<span id="price-seo-3" class="tabs pr_for">Контекстная реклама</span>
					</div>
					<div class="f_l info_block block_pr_f active-block">
						<?php
							$block = block_load('block', 10);
							$block = _block_render_blocks(array($block));
							$block_build = _block_get_renderable_array($block);
							echo drupal_render($block_build);
						?>		
					</div>
					<div class="f_l info_block block_pr_t">
						<?php
							$block = block_load('block', 11);
							$block = _block_render_blocks(array($block));
							$block_build = _block_get_renderable_array($block);
							echo drupal_render($block_build);
						?>		
					</div>
					<div class="f_l info_block block_pr_for">
						<?php
							$block = block_load('block', 12);
							$block = _block_render_blocks(array($block));
							$block_build = _block_get_renderable_array($block);
							echo drupal_render($block_build);
						?>		
					</div>
				</div>

			</div>
		</div>
		<div class="f_b reviews">
			<?php print views_embed_view('main','block_2'); ?>
		</div>
		<div class="f_b order_service">
			<?php
				$block = block_load('webform', 'client-block-2');
				$block = _block_render_blocks(array($block));
				$block_build = _block_get_renderable_array($block);
				echo drupal_render($block_build);
			?>
		</div>
		<div class="f_b text_block">
			<?php
				$block = block_load('block', 5);
				$block = _block_render_blocks(array($block));
				$block_build = _block_get_renderable_array($block);
				echo drupal_render($block_build);
			?>
		</div>
		<div class="f_b employees">
			<?php print views_embed_view('main','block_1'); ?>		
		</div>
		<div class="f_b map">
			<?php
				$block = block_load('block', 15);
				$block = _block_render_blocks(array($block));
				$block_build = _block_get_renderable_array($block);
				echo drupal_render($block_build);
			?>
		</div>
		<?php print render($page['content']); ?>
	<?php endif; ?>
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