<?php
  foreach ($articles as $article) {
?>
<article>
    <p><?= $article->nazov ?></p>
    <p><?= $article->popis ?></p>
</article>
<?php
}