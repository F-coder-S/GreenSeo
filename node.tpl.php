<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <?php if(!empty($node->body)) {
		print $node->body['und'][0]['value'];
	}?>
</article>