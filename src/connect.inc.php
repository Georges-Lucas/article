<?php
    include_once 'connect_bdd.inc.php'
?>

<?php foreach($_response as $_article) :?>
    <article>
        <h2>
            <a href="article.php?id=<?= $_article['id']?>">
                <?= strip_tags($_article['titre'])?>
            </a>
        </h2>
        <p>
            <?= strip_tags($_article['contenu'])?>
        </p>
        <time datetime="<?= strip_tags($_article['date_modification'])?>">
            Date de modification : <?= strip_tags($_article['date_modification'])?>
        </time>
    </article>

<?php endforeach;?>