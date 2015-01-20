<?php include 'header.php'; ?>
<?php if($config->total_articles > 0): ?>
<?php foreach($articles as $article): ?>
<article id="post-<?php echo $article->id; ?>">
  <p><?php echo $article->date->FORMAT_1; ?></p>
  <h3><a href="<?php echo $article->url; ?>"><?php echo $article->title; ?></a></h3>
  <p><?php echo $article->description; ?></p>
  <p><?php Weapon::fire('article_footer', array($article)); ?></p>
</article>
<?php endforeach; ?>
<?php else: ?>
<article>
  <p>No posts yet.</p>
</article>
<?php endif; ?>
<p><?php echo $pager->prev->link; ?> | <?php echo $pager->next->link; ?></p>
<?php include 'footer.php'; ?>