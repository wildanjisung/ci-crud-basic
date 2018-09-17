<div class="container">
	<h2><?php echo $title; ?></h2>
	<hr>

	<?php foreach ($news as $key => $news_item): ?>
		<div class="card mb-2">
			<div class="card-body">
				<h5 class="card-title"><?php echo $news_item['title']; ?></h5>
			    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
			    <p class="card-text"><?php echo $news_item['text']; ?></p>
				<a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View</a>
				<br>
				<a href="<?php echo site_url('news/update/'.$news_item['id']); ?>">Edit</a>
				<br>
				<a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>">Hapus</a>
			</div>
		</div>
	<?php endforeach ?>
</div>
