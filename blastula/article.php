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
<p><?php echo $pager->prev->link; ?> | <?php echo $pager->next->link; ?></p>
<?php if($config->comments) include 'comments.php'; ?>
<?php include 'footer.php'; ?>