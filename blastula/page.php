<?php Shield::chunk('header'); ?>
<article id="post-<?php echo $page->id; ?>">
  <h2><?php echo $page->title; ?></h2>
  <div><?php echo $page->content; ?></div>
  <?php Shield::chunk('page.footer'); ?>
</article>
<?php Shield::chunk('footer'); ?>