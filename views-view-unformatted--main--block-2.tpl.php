<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="content_row">
	<?php foreach ($rows as $id => $row): ?>
	  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
			<div class="f_l inside_row">
				<?php print $row; ?>
			</div>
	  </div>
	<?php endforeach; ?>
</div>