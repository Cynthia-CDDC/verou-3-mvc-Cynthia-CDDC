<?php require 'View/includes/header.php'?>

<h1>Articles from: <?= $_GET['author'] ?></h1>

<section>
    <?php foreach ($articles as $article) : ?>
        <h1><?= $article->title ?></h1>
        <p><?= $article->formatPublishDate() ?></p>
        <p><?= $article->description ?></p>
        <p><img src= <?= $article->image ?> height="100" width="100"></p>
    <?php endforeach; ?>
</section>
<?php require 'View/includes/footer.php'?>