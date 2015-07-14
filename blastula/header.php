<!DOCTYPE html>
<html dir="<?php echo $config->language_direction; ?>" class="page-<?php echo $config->page_type; ?>">
  <head>
    <?php Weapon::fire('SHIPMENT_REGION_TOP'); ?>
    <?php Weapon::fire('shell_before'); ?>
    <?php echo Asset::stylesheet('assets/shell/default.css'); ?>
    <?php Weapon::fire('shell_after'); ?>
  </head>
  <body>
    <?php Weapon::fire('cargo_before'); ?>
    <header>
      <?php if($config->url_current == $config->url): ?>
      <h1><?php echo $config->title; ?></h1>
      <?php else: ?>
      <h1><a href="<?php echo $config->url; ?>"><?php echo $config->title; ?></a></h1>
      <?php endif; ?>
      <p><?php echo $config->slogan; ?></p>
    </header>
    <section>
      <nav><?php echo Menu::get(); ?></nav>