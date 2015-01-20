<section>
  <h4><?php echo $article->total_comments_text; ?></h4>
  <ol>
    <?php if($article->total_comments > 0): ?>
    <?php foreach($article->comments as $comment): ?>
    <li>
      <?php if( ! empty($comment->url) && $comment->url != '#'): ?>
      <h5><a href="<?php echo $comment->url; ?>" rel="nofollow" target="_blank"><?php echo $comment->name; ?></a></h5>
      <?php else: ?>
      <h5><?php echo $comment->name; ?></h5>
      <?php endif; ?>
      <div><?php echo $comment->message; ?></div>
      <div><?php echo $comment->date->FORMAT_1; ?></div>
      <footer class="media-footer">
        <?php Weapon::fire('comment_footer', array($comment, $article)); ?>
      </footer>
    </li>
    <?php endforeach; ?>
    <?php endif; ?>
  </ol>
  <form id="comment-form" action="<?php echo $config->url_current; ?>" method="post">
    <?php echo $messages; ?>
    <input name="token" type="hidden" value="<?php echo $token; ?>">
    <input name="parent" type="hidden" value="">
    <p>Name:</p>
    <p><input name="name" type="text" value="<?php echo Guardian::wayback('name'); ?>"></p>
    <p>Email:</p>
    <p><input name="email" type="email" value="<?php echo Guardian::wayback('email'); ?>"></p>
    <p>URL:</p>
    <p><input name="url" type="url" value="<?php echo Guardian::wayback('url'); ?>"></p>
    <p>Message:</p>
    <p><textarea name="message"><?php echo Guardian::wayback('message'); ?></textarea></p>
    <p><?php echo Guardian::math(); ?> = <input name="math" type="text" style="width:4em;" value="" autocomplete="off"></p>
    <p><button type="submit">Submit</button></p>
    <p><?php echo $speak->comment_guide; ?></p>
  </form>
  <?php Weapon::fire('comments_footer', array($article)); ?>
</section>