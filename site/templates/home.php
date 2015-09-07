<?php snippet('header') ?>

	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="container" role="main">
		<div class="row">
			<div class="col-sm-3">
				<!-- Ma face ici -->
				<img src="<?php echo $site->url() ?>/assets/images/arthur.jpg" class="avatar">
				<h1><?php echo $page->title()->html() ?></h1>
				<?php echo $page->text()->kirbytext() ?>
			</div>
			<div class="col-sm-9">
				<?php $subpages   = $page->images()->sortBy('sort', 'asc')->paginate(10); ?>
				<?php $pagination = $subpages->pagination(); ?>
				<?php foreach ($subpages as $image) : ?>
					<div class="img-container">
						<img src="<?php echo $image->url() ?>" class="img-responsive">
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

<?php snippet('footer') ?>