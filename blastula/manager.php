<?php include 'header.php'; ?>
<article>
  <h2><?php echo $config->page_title; ?></h2>
  <div>
    <?php if($cargo = File::exist($config->cargo)) include $cargo; ?>
  </div>
</article>
<?php include 'footer.php'; ?>