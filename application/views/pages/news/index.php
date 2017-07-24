<h2> <?php echo $title; ?></h2>

<?php foreach ($news as $news_item) { ?>
	
	<div>
		<h3> <?php echo $news_item['title']; ?></h3>
		<h5> <?php echo $news_item['text']; ?></h5>
		<p> <a href="<?php echo 'http://localhost/codeIgniter/codeigniter-tutorial/news/'. $news_item['slug']; ?>"> Ver Más</a></p>
	</div>
<?php } ?>