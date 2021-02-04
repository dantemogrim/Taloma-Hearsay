<?php require __DIR__ . '/views/header.php'; ?>
<?php require __DIR__ . '/core/data.php'; ?>
<?php require __DIR__ . '/core/functions.php'; ?>

<main>

    <?php foreach ($stories as $story) : ?>
        <?php
        $title = $story['title'];
        $img = $story['img'];
        $article = $story['article'];
        // $articleClass = $story['articleClass']; 
        $reporter = $story['reporter'];
        $date = $story['published'];
        $shade = $story['shade'];

        ?>

        <div class="article-container">
            <div class="title-section">
                <img class="dot1" src="/img/dot1.png">
                <h2> <?php echo $title;  ?> </h2>
            </div>
            <br>
            <!-- Here! -->
            <div class="article-section">
                <img class="article-img" src="<?= $img; ?>">
                <br>
                <span class=""><?= $article; ?></span>
            </div>
            <br>
            <br>
            <img class="horizontal-line" src="/img/horizontalline.png">
            <small><?php echo 'Reporter: ' . $reporter . ' | Published: ' . $date . ' | Shade: ' . $shade; ?></small>
        </div>
        <section>
            <img class="dot2" src="/img/dot2.png">
        </section>
    <?php endforeach; ?>
</main>

<?php require __DIR__ . '/views/footer.php'; ?>