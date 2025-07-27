<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Catégories populaires</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex flex-col items-center p-4 rounded-lg hover:shadow-md transition-shadow">
                    <div class="w-16 h-16 flex items-center justify-center <?php echo e(explode(' ', $category->color)[0]); ?> rounded-full mb-3">
                        <i class="<?php echo e($category->icon); ?> ri-lg <?php echo e(explode(' ', $category->color)[1] ?? ''); ?>"></i>
                    </div>
                    <h3 class="font-medium text-center"><?php echo e($category->name); ?></h3>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\wamp64\www\bookypro\resources\views/partials/categories.blade.php ENDPATH**/ ?>