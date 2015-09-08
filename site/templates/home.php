<?php snippet('header') ?>

	<div class="container" role="main">
		<div class="row">
			<div class="col-sm-3">
				<a href="<?php echo $site->url() ?>">
					<img src="<?php echo $site->url() ?>/assets/images/arthur.jpg" class="avatar">
				</a>
				<h1><?php echo $page->title()->html() ?></h1>
				<?php echo $page->text()->kirbytext() ?>
				<hr>
				<?php snippet('tagcloud') ?>

			</div>
			<div class="col-sm-9">
				<?php $subpages   = $page->images()->sortBy('sort', 'asc'); ?>
				<?php if($tag = param('tag')) : ?>
				  <?php $subpages = $subpages->filterBy('tags', $tag, ','); ?>
				  <h3>#<?php echo $tag ?> (<?php echo $subpages->count() ?> items)</h3>
				<?php endif ?>
				<?php $subpages = $subpages->paginate(20); ?>
				<?php $pagination = $subpages->pagination(); ?>
				
				<?php foreach ($subpages as $image) : ?>
					<div class="item">
						<div class="img-container">
							<?php echo thumb($image, array('width' => 1200)); ?>
							<div class="img-meta center">
								<h2 class="cap"><?php echo $image->caption() ?></h2>
								<?php if ($image->tags() != '') : ?>
									<div class="tags">
										<?php $tags = explode(',',$image->tags()) ?>
										<h4>
										<?php foreach ($tags as $tag) : ?>
											<?php snippet('thetag', array('tag' => $tag)) ?>
										<?php endforeach ?>
										</h4>
									</div>
								<?php endif ?>
								<a href="<?php echo $image->url() ?>" class="btn btn-default mt" download>Download (<?php echo $image->niceSize() ?>) <i class="fa fa-download"></i></a>
							</div>
						</div>
						
					</div>
				<?php endforeach ?>
				

				<!-- Pagination -->
				<div class="" role="navigation">
					<ul class="pager">
						<?php if($pagination->hasPrevPage()): ?>
						<li class="previous">
							<a href="<?php echo $pagination->prevPageUrl() ?>">
						  	&larr; previous
							</a>
						</li>
						<?php endif ?>

						<?php if($pagination->hasNextPage()): ?>
						<li class="next">
							<a href="<?php echo $pagination->nextPageUrl() ?>" class>
							  next &rarr;
							</a>
						</li>
						<?php endif ?>
					</ul>
				</div>
			</div>
		</div>
	</div> <!-- // container -->
