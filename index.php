<?php
require __DIR__ . '/core/data.php';
require __DIR__ . '/core/functions.php';
require __DIR__ . '/views/header.php';
?>


<main>

  <?php foreach (dateSorter($stories) as $story) : ?>
    <?php
    $title = $story['title'];
    $img = $story['img'];
    $article = $story['article'];
    $reporter = $story['reporter'];
    $date = $story['published'];
    $shade = $story['shade'];
    $layout = $story['layout'];

    ?>

    <div class="article-container media-query">
      <div class="title-section media-query">
        <img class="dot1 media-query" src="/img/dot1.png" loading="lazy">
        <h2> <?php echo $title;  ?> </h2>
      </div>
      <br>
      <div class="<?= $layout ?> media-query image-and-article">
        <img class="article-img media-query" src="<?= $img; ?>" loading="lazy">
        <br>
        <span class="article-text"><?= $article; ?></span>
      </div>
      <br>
      <br>
      <img class="horizontal-line media-query" src="/img/horizontalline.png" loading="lazy">
      <div class="info-container">
        <ul>
          <li class="info"><b>Reporter: </b><?php echo $reporter; ?></li>
          <li class="info"><b>Published: </b><?php echo $date; ?></li>
          <li class="info"><b>Shade: </b><?php echo $shade; ?></li>
        </ul>
        <img class="tablet-img" src="<?= $img; ?>" loading="lazy" hidden>
      </div>
      <img class="horizontal-hidden-line media-query" src="/img/horizontalline.png" loading="lazy" hidden>
    </div>
    <section class="">
      <p> - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>
    </section>
  <?php endforeach; ?>
</main>

<?php require __DIR__ . '/views/footer.php'; ?>
