<?php include 'header.php'; ?>
<article id="post-<?php echo $article->id; ?>">
  <p><?php echo $article->date->FORMAT_1; ?></p>
  <h2><?php echo $article->title; ?></h2>
  <div><?php echo $article->content; ?></div>
  <footer>
    <div>Posted by <?php echo $article->author; ?> on <?php echo $article->date->FORMAT_5; ?></div>
    <div><?php Weapon::fire('article_footer', array($article)); ?></div>
  </footer>
</article>
<p>
  <?php echo ! empty($pager->prev->link) ? $pager->prev->link : $speak->newer; ?> &middot; <?php echo ! empty($pager->next->link) ? $pager->next->link : $speak->older; ?>
</p>
<?php if($config->comments) include 'comments.php'; ?>
<?php include 'footer.php'; ?>