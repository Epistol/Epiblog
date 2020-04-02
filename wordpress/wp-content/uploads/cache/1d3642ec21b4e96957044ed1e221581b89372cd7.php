<article <?php post_class() ?>>
  <header>
    <h2 class="entry-title text-pink-500"><a href="<?php echo e(get_permalink()); ?>"><?php echo get_the_title(); ?></a></h2>
    <?php echo $__env->make('partials/entry-meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </header>
  <div class="entry-summary">
  <?php echo $__env->make('partials/sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php the_excerpt() ?>
  </div>
</article>
