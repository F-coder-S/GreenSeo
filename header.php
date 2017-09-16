<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
define(DEFAULT_DIR, "/bitrix/templates/.default");
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<title><?$APPLICATION->ShowTitle();?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<?$APPLICATION->ShowHead();?>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
		<link rel="icon" type="image/x-icon" href="/favicon.ico">
		<link href="<?=DEFAULT_DIR?>/css/fonts.css" rel="stylesheet">
		<?$APPLICATION->SetAdditionalCSS(DEFAULT_DIR."/css/bootstrap.min.css");?>
		<?$APPLICATION->SetAdditionalCSS(DEFAULT_DIR."/css/style.css");?>
		<?$APPLICATION->SetAdditionalCSS(DEFAULT_DIR."/css/swiper.min.css");?>
		<?$APPLICATION->SetAdditionalCSS(DEFAULT_DIR."/css/bootstrap-theme.min.css");?>
		<?$APPLICATION->SetAdditionalCSS(DEFAULT_DIR."/css/jquery.fancybox.css?v=2.1.5");?>
		<?$APPLICATION->SetAdditionalCSS("https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/black-tie/jquery-ui.css");?>
		<?$APPLICATION->AddHeadScript("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js");?>
		<?$APPLICATION->AddHeadScript("https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js");?>
		<?$APPLICATION->AddHeadScript(DEFAULT_DIR."/js/bootstrap.min.js");?>
		<?$APPLICATION->AddHeadScript(DEFAULT_DIR."/js/jquery.mousewheel-3.0.6.pack.js");?>
		<?$APPLICATION->AddHeadScript(DEFAULT_DIR."/js/jquery.fancybox.pack.js?v=2.1.5");?>
		<?$APPLICATION->AddHeadScript(DEFAULT_DIR."/js/swiper.jquery.min.js");?>
		<?$APPLICATION->AddHeadScript(DEFAULT_DIR."/js/js.js");?>
<script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>

<script type="text/javascript">
  VK.init({apiId: 5414855, onlyWidgets: true});
</script>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "http://remont-avto86.ru/",
  "logo": "http://remont-avto86.ru/Screenshot_1.png"
}
</script>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebSite",
  "name": "remont-avto86.ru",
  "alternateName": "Автосервис",
  "url": "http://remont-avto86.ru/"
}
</script>
	</head>
	<body>
	<!-- Google Tag Manager -->
		<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-K8XM23"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-K8XM23');</script>
	<!-- End Google Tag Manager -->
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<header class="container-fluid gray-menu">
			<nav id="topmenu" class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Показать меню</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="glyphicon glyphicon-remove"></span>
						</button>
						<div id="header" class="navbar-header">
							<div class="phones hidden-xs hidden-sm col-md-4 col-lg-4">
								<div class="phone_number indexphonepage">
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"COMPONENT_TEMPLATE" => ".default",
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "inc",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/includes/header_phone_number.php"
										)
									);?>
								</div>
								<div class="work_time">
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"COMPONENT_TEMPLATE" => ".default",
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "inc",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/includes/header_work_time.php"
										)
									);?>
								</div>
							</div>
							<div class="logo col-md-4 col-lg-4">
								<div class="halfround"></div>
								<a href="/">
									<div class="logotype"></div>
									<div class="slogan">
										<span>
											<?$APPLICATION->IncludeComponent(
												"bitrix:main.include",
												"",
												Array(
													"COMPONENT_TEMPLATE" => ".default",
													"AREA_FILE_SHOW" => "file",
													"AREA_FILE_SUFFIX" => "inc",
													"EDIT_TEMPLATE" => "",
													"PATH" => "/includes/header_slogan.php"
												)
											);?>
										</span>
									</div>
								</a>
							</div>
							<div class="address hidden-xs hidden-sm col-md-4 col-lg-4">
								<div>
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"COMPONENT_TEMPLATE" => ".default",
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "inc",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/includes/header_address.php"
										)
									);?>
								</div>

								<div class="map_address"><a href="#callbackwidget">Заказать звонок</a></div>


<!--
								<div class="map_address button fancybox" id="map_address" href="#requestmap">Карта проезда</div>
								<div id="requestmap" style="width: 400px; height: 300px"></div>
-->

							</div>
						</div>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<div id="collapsing_logo">
							<img src="<?=DEFAULT_DIR?>/img/logo_collapsed.svg" />
						</div>
							<?$APPLICATION->IncludeComponent("bitrix:menu", "mainpage", Array(
								"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
									"CHILD_MENU_TYPE" => "podmenu",	// Тип меню для остальных уровней
									"COMPONENT_TEMPLATE" => ".default",
									"DELAY" => "N",	// Откладывать выполнение шаблона меню
									"MAX_LEVEL" => "2",	// Уровень вложенности меню
									"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
									"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
									"MENU_CACHE_TYPE" => "A",	// Тип кеширования
									"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
									"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
									"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
								),
								false
							);?>
						<div class="nav_contacts">
							<div class="phones">
								<div class="phone_number">
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"COMPONENT_TEMPLATE" => ".default",
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "inc",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/includes/header_phone_number.php"
										)
									);?>
								</div>
								<div class="work_time">
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"COMPONENT_TEMPLATE" => ".default",
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "inc",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/includes/header_work_time.php"
										)
									);?>
								</div>
							</div>
							<div class="address">
								<div>
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include",
										"",
										Array(
											"COMPONENT_TEMPLATE" => ".default",
											"AREA_FILE_SHOW" => "file",
											"AREA_FILE_SUFFIX" => "inc",
											"EDIT_TEMPLATE" => "",
											"PATH" => "/includes/header_address.php"
										)
									);?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</header>
		<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"mainpage_slider", 
	array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "mainpage_slider",
		"COUNT_ELEMENTS" => "Y",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "catalog",
		"SECTION_CODE" => $_REQUEST["CODE"],
		"SECTION_FIELDS" => array(
			0 => "NAME",
			1 => "SORT",
			2 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "UF_SLIDER_IMAGE",
			1 => "UF_SLIDER_TITLE",
			2 => "UF_TEXT_SLIDE",
			3 => "UF_URL_SLIDE",
			4 => "UF_BUTTON_TEXT_SLIDE",
			5 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "1",
		"VIEW_MODE" => "LINE"
	),
	false
);?>
		<content>
			<?$APPLICATION->IncludeComponent(
				"bitrix:catalog.section.list", 
				"mainpage_services_list", 
				array(
					"ADD_SECTIONS_CHAIN" => "N",
					"CACHE_GROUPS" => "Y",
					"CACHE_TIME" => "36000000",
					"CACHE_TYPE" => "A",
					"COMPONENT_TEMPLATE" => "mainpage_services_list",
					"COUNT_ELEMENTS" => "Y",
					"IBLOCK_ID" => "1",
					"IBLOCK_TYPE" => "catalog",
					"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
					"SECTION_FIELDS" => array(
						0 => "",
						1 => "",
					),
					"SECTION_ID" => $_REQUEST["SECTION_ID"],
					"SECTION_URL" => "/uslugi/#SECTION_CODE_PATH#/",
					"SECTION_USER_FIELDS" => array(
						0 => "UF_MINI_PIC_SERVICE",
						1 => "",
					),
					"SHOW_PARENT_NAME" => "Y",
					"TOP_DEPTH" => "1",
					"VIEW_MODE" => "LINE"
				),
				false
			);?>
			<div class="container">
				<div class="maintext">
					<h1><?$APPLICATION->ShowTitle(false)?></h1>