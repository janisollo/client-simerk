<div class="<?php echo e($block->classes); ?> flex items-center justify-center h-screen">
  <div class="text-center">
    <?php if($heading): ?>
    <h1 class="text-4xl text-black"><?php echo e($heading); ?></h1>
    <?php else: ?>
    <h1 class="text-4xl text-black">Enter Heading Here</h1>
    <?php endif; ?>
  </div>

  <?php if($background_image): ?>
  <div class="absolute top-0 left-0 w-full h-full bg-cover bg-center" style="background-image: url('<?php echo e($background_image); ?>');"></div>
  <?php endif; ?>
</div><?php /**PATH /var/www/html/wp-content/themes/Simerk/resources/views/blocks/hero.blade.php ENDPATH**/ ?>