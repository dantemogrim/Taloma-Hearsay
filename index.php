<?php require __DIR__ . '/views/header.php'; ?>
<?php require __DIR__ . '/core/data.php'; ?>
<?php require __DIR__ . '/core/functions.php'; ?>

<main>

    <?php foreach ($stories as $story) : ?>
        <?php
        $title = $story['title'];
        $img = $story['img'];
        $article = $story['article'];
        $reporter = $story['reporter'];
        $date = $story['published'];
        $shade = $story['shade'];
        // $img = $story[1][1];
        // $article = $story[1][2];
        // $reporter = $story[1][3];
        // $published = $story[1][4];
        // $shade = $story[1][5];

        ?>

        <div class="article-container">
            <div class="title-section">
                <img class="dot1" src="/img/dot1.png">
                <h2> <?php echo $title;  ?> </h2>
                <img class="dot2" src="/img/dot2.png">
            </div>
            <br>
            <div class="article-section">
                <img class="article-img" src="<?= $img; ?>">
                <br>
                <span><?= $article; ?></span>
            </div>
            <br>
            <br>
            <img class="horizontal-line" src="/img/horizontalline.png">
            <small><?php echo 'Reporter: ' . $reporter . ' | Published: ' . $date . ' | Shade: ' . $shade; ?></small>
        </div>
    <?php endforeach; ?>
</main>

<?php require __DIR__ . '/views/footer.php'; ?>