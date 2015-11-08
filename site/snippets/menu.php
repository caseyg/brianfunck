<ul class="menu list-unstyled">
  <?php foreach($pages->get('work')->children()->visible() as $p): ?>
  <li>
    <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
  </li>
  <?php endforeach ?>
</ul>