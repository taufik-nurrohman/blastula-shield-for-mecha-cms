<?php include 'header.php'; ?>
<article id="post-<?php echo $page->id; ?>">
  <h2><?php echo $page->title; ?></h2>
  <div><?php echo $page->content; ?></div>
  <footer>
    <div><?php Weapon::fire('page_footer', array($page)); ?></div>
  </footer>
</article>
<?php include 'footer.php'; ?>