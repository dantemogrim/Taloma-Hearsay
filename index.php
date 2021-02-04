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
        $layout = $story['layout'];

        ?>

        <!-- .editorconfig, order by date, randomized like counter ID in authors  -->

        <div class="article-container">
            <div class="title-section">
                <img class="dot1" src="/img/dot1.png">
                <h2> <?php echo $title;  ?> </h2>
            </div>
            <br>
            <!-- Here! -->
            <div class="<?= $layout ?>">
                <img class="article-img" src="<?= $img; ?>">
                <br>
                <span class=""><?= $article; ?></span>
            </div>
            <br>
            <br>
            <img src="/img/horizontalline.png">
            <small class="article-info"><?php echo 'Reporter: ' . $reporter . ' | Published: ' . $date . ' | Shade: ' . $shade; ?></small>
        </div>
        <section>
            - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
        </section>
    <?php endforeach; ?>
</main>

<?php require __DIR__ . '/views/footer.php'; ?>