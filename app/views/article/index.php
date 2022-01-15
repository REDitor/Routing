<h1>Articles!</h1>

<?php
foreach ($model as $article) {
	?>
	<section id="article_<?php echo $article->getId() ?>">
		<h4><?= ucfirst($article->getTitle()) ?></h4>
		<small>By: <?= $article->getAuthor() ?> at <?= $article->getPostedAt() ?></small>
		<p><?= $article->getContent() ?></p>
		<button onclick="delete_data(<?php echo $article->getId(); ?>)">Delete</button>
	</section>
	<?php
}
?>

<script>
	function delete_data(id) {
		alert(id);
	}
</script>

