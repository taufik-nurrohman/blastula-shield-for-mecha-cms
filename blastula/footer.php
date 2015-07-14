    <?php if($manager): ?>
    <?php echo Widget::manager(); ?>
    <?php endif; ?>
    </section>
    <footer>
      <p>&copy; <a href="<?php echo $config->url; ?>"><?php echo $config->title; ?></a></p>
    </footer>
    <?php Weapon::fire('cargo_after'); ?>
    <?php Weapon::fire('sword_before'); ?>
    <?php echo Asset::javascript('assets/sword/default.js'); ?>
    <?php Weapon::fire('sword_after'); ?>
    <?php Weapon::fire('SHIPMENT_REGION_BOTTOM'); ?>
  </body>
</html>