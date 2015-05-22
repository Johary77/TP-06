
<?php foreach ($articles as $article): ?>

    <h2><?php echo $article['Titre'] ?></h2>
    <div id="main">
        <?php echo $article['Texte_libre'] ?>
    </div>
    <p><a href="view/<?php echo $article['IdArticle'] ?>">Voir article</a></p>
<?php endforeach ?>
