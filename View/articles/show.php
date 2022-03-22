<?php require 'View/includes/header.php'?>

<h1><?= $article->title ?> - <?= $article->author ?></h1>

<section>
    <!-- <h1><?= $article->title ?></h1> -->
    <p><?= $article->formatPublishDate() ?></p>
    <p><?= $article->description ?></p>
    <p><img src= <?= $article->image ?> height="100" width="100"></p>
    <br>
    <br>
    <!-- <a href="index.php?page=show&author=<?=$authorsArticles?>">More from this author</a> -->

    <?php // links to next and previous ?>
    <a href="index.php?page=show&id=<?= $previousArticle ?? $article->id ?>">Previous article</a>
    <a href="index.php?page=show&id=<?= $nextArticle ?? $article->id ?>">Next article</a>
</section>

<?php require 'View/includes/footer.php'?>