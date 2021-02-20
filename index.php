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
      <h2> <?php echo $title;  ?> </h2>
      <br>
      <div class="<?= $layout ?> media-query image-and-article">
        <img class="article-img media-query" alt="Portrait drawing of the reporter of the article." src="<?= $img; ?>" loading="lazy">
        <br>
        <span class="article-text"><?= $article; ?></span>
      </div>
      <br>
      <br>
      <img class="horizontal-line media-query" alt="A wobbly, horizontal, hand drawn line." src="/img/horizontalline.png" loading="lazy">
      <div class="info-container">
        <ul>
          <li class="info"><b>Reporter: </b><?php echo $reporter; ?></li>
          <li class="info"><b>Published: </b><?php echo $date; ?></li>
          <li class="info"><b>Shade: </b><?php echo $shade; ?></li>
        </ul>
        <img class="tablet-img" alt="Portrait drawing of the reporter of the article." src="<?= $img; ?>" loading="lazy" hidden>
      </div>
      <img class="horizontal-hidden-line media-query" alt="A wobbly, horizontal, hand drawn line." src="/img/horizontalline.png" loading="lazy" hidden>
    </div>
    <section class="dashes" aria-hidden="true">
      <p aria-hidden="true"> - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </p>
    </section>
  <?php endforeach; ?>
</main>

<?php require __DIR__ . '/views/footer.php'; ?>
