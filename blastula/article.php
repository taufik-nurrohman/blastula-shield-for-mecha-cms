<?php Shield::chunk('header'); ?>
<article id="post-<?php echo $article->id; ?>">
  <p><?php echo $article->date->FORMAT_1; ?></p>
  <h2><?php echo $article->title; ?></h2>
  <div><?php echo $article->content; ?></div>
  <?php Shield::chunk('article.footer'); ?>
</article>
<?php Shield::chunk('pager'); ?>
<?php Shield::chunk('comments'); ?>
<?php Shield::chunk('footer'); ?>