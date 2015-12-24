<section>
  <h4><?php echo $article->total_comments_text; ?></h4>
  <ol>
    <?php if($article->total_comments > 0): ?>
    <?php foreach($article->comments as $comment): ?>
    <?php Shield::lot(array('comment' => $comment)); ?>
    <li>
      <?php if( ! empty($comment->url) && $comment->url != '#'): ?>
      <p><strong><a href="<?php echo $comment->url; ?>" rel="nofollow" target="_blank"><?php echo $comment->name; ?></a></strong></p>
      <?php else: ?>
      <p><strong><?php echo $comment->name; ?></strong></p>
      <?php endif; ?>
      <div><?php echo $comment->message; ?></div>
      <p><?php echo $comment->date->FORMAT_1; ?></p>
      <?php Shield::chunk('comment.footer'); ?>
    </li>
    <?php endforeach; ?>
    <?php endif; ?>
  </ol>
  <?php Shield::chunk('comment.form'); ?>
</section>