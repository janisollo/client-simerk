<div class="<?php echo e($block->classes); ?>">
  <?php if($items): ?>
    <ul>
      <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($item['item']); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  <?php else: ?>
    <p><?php echo e($block->preview ? 'Add an item...' : 'No items found!'); ?></p>
  <?php endif; ?>

  <div>
    <InnerBlocks />
  </div>
</div>
<?php /**PATH /var/www/html/wp-content/themes/Simerk/resources/views/blocks/example.blade.php ENDPATH**/ ?>