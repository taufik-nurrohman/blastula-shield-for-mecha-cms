<?php Shield::chunk('header'); ?>
<?php if($config->total_articles > 0): ?>
<?php foreach($articles as $article): ?>
<?php Shield::lot(array('article' => $article)); ?>
<article id="post-<?php echo $article->id; ?>">
  <p><?php echo $article->date->FORMAT_1; ?></p>
  <h3><a href="<?php echo $article->url; ?>"><?php echo $article->title; ?></a></h3>
  <p><?php echo $article->description; ?></p>
  <?php Shield::chunk('article.footer.index'); ?>
</article>
<?php endforeach; ?>
<?php else: ?>
<article>
  <p>No posts yet.</p>
</article>
<?php endif; ?>
<p><?php echo $pager->step->html; ?></p>
<?php Shield::chunk('footer'); ?>