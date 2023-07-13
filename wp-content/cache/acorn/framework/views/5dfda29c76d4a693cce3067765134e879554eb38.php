<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4">
  <?php while(have_posts()): ?> <?php (the_post()); ?>
  <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-4">
    <div class="px-4 py-5 sm:px-6">
      <?php echo $__env->first(['partials.content-single-' . get_post_type(), 'partials.content-single'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </div>
  <?php endwhile; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/wp-content/themes/Simerk/resources/views/single.blade.php ENDPATH**/ ?>