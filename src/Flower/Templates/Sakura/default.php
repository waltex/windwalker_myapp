<?php
// src/Flower/Templates/sakura/default.php
/**
 * @var  $this  \Windwalker\Core\Renderer\PhpRenderer
 */
?>

<?php $this->extend('_global.html') ?>

<!-- This will override parent `content` block -->
<?php $this->block('content'); ?>
<div class="container">
    <h1>Hello <?php echo $this->escape($name); ?></h1>
</div>
<?php $this->endblock(); ?>