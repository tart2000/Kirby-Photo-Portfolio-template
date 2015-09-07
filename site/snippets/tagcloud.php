<?php

// fetch all tags
$tags = page('home')->images()->pluck('tags', ',', true);

?>
<div class="tags">
	<h4>
	<?php foreach ($tags as $tag) : ?>
		<?php snippet('thetag', array('tag' => $tag)) ?>
	<?php endforeach ?>
	</h4>
</div>
