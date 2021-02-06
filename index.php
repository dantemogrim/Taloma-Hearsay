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

    <div class="article-container media-query">
      <div class="title-section media-query">
        <img class="dot1 media-query" src="/img/dot1.png">
        <h2> <?php echo $title;  ?> </h2>
      </div>
      <br>
      <!-- Here! -->
      <div class="<?= $layout ?> media-query">
        <img class="article-img media-query" src="<?= $img; ?>">
        <br>
        <span class="article-text"><?= $article; ?></span>
      </div>
      <br>
      <br>
      <img class="horizontal-line media-query" src="/img/horizontalline.png">
      <small class="article-info"><?php echo 'Reporter: ' . $reporter . ' | Published: ' . $date . ' | Shade: ' . $shade; ?></small>
      <img class="horizontal-line media-query" src="/img/horizontalline.png" hidden>
    </div>
    <section class="media-query">
      - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    </section>
    <img class="symbol" src="/img/dot4.png" hidden>
  <?php endforeach; ?>
</main>

<?php require __DIR__ . '/views/footer.php'; ?>
