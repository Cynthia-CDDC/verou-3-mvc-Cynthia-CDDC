<?php require 'View/includes/header.php'?>

<?php // Use any data loaded in the controller here ?>

<section>
    <h1><?= $article->title ?></h1>
    <p><?= $article->formatPublishDate() ?></p>
    <p><?= $article->description ?></p>
    <p><img src= <?= $article->image ?> height="100" width="100"></p>

    <?php // links to next and previous ?>
    <a href="index.php?page=show&id=<?= $previousArticle ?? $article->id ?>">Previous article</a>
    <a href="index.php?page=show&id=<?= $nextArticle ?? $article->id ?>">Next article</a>
</section>

<?php require 'View/includes/footer.php'?>