<h1>Articles!</h1>

<?php
foreach($model as $article) {
    ?>
    <h4><?= ucfirst($article->getTitle())?></h4>
    <small>By: <?= $article->getAuthor()?> at <?=$article->getPostedAt()?></small>
    <p><?= $article->getContent()?></p>
    <?php
}
?>

