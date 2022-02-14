<?php $this->applyTemplateHook("home-content--home-searsh-action", "begin"); ?>
  <a class="btn btn-accent btn-large" href="<?php echo $app->createUrl($config['action_home'][0]) ?>"><?= $config['action_home'][1] ?></a>
  <?php $this->applyTemplateHook("home-content--home-searsh-action", "after"); ?>