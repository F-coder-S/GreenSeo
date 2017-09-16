<!DOCTYPE html>
<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:700&amp;subset=cyrillic" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&amp;subset=cyrillic" rel="stylesheet">
  <link rel="stylesheet" href="https://seologos.ru/sites/all/themes/greenSEO/owl.carousel.css"> 
  <link rel="stylesheet" href="https://seologos.ru/sites/all/themes/greenSEO/owl.theme.default.css">
  <script type="text/javascript" src="https://seologos.ru/sites/all/themes/greenSEO/js/jquery-3.2.1.js"></script>
<script type="text/javascript" src="https://seologos.ru/sites/all/themes/greenSEO/js/owl.carousel.js"></script>
<script src="https://use.fontawesome.com/14e6e96a21.js"></script>
<script type="text/javascript" src="https://seologos.ru/sites/all/themes/greenSEO/js/common.js"></script>
	 <!--[if lt IE 9]>
	<script src="<?php print base_path() . drupal_get_path('theme', 'greenseo') . '/js/html5shiv.js'; ?>">
	</script><![endif]-->

	<meta name="viewport" content="width=device-width, initial-scale=1" />
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  
</body>
</html>
