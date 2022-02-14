<?php $this->applyTemplateHook("home-content--home-searsh-images", "before"); ?>
<div style="text-align:center">
    <?php $this->applyTemplateHook("home-content--home-searsh-images", "begin"); ?>
    <?php foreach($config['images_home'] as $image):?>
        <img src="<?=$this->asset("{$image}", false)?>" alt="Preamar de cultura e arte" style="width: 15%; margin-right: 10px;">
    <?php endforeach?>
    <?php $this->applyTemplateHook("home-content--home-searsh-images", "end"); ?>
</div> 
<?php $this->applyTemplateHook("home-content--home-searsh-images", "after"); ?>