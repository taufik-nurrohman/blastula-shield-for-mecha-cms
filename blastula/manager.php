<?php Shield::chunk('header'); ?>
<article>
  <h2><?php echo $config->page_title; ?></h2>
  <div>
    <?php if($cargo = Shield::lot('page')) echo $cargo->content; ?>
  </div>
</article>
<?php Shield::chunk('footer'); ?>