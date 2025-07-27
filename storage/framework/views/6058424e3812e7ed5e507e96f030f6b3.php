<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Ce que disent nos clients</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $t): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="flex text-yellow-400 mb-4">
                        <?php for($i = 1; $i <= 5; $i++): ?>
                            <i class="ri-<?php echo e($i <= floor($t->note) ? 'star-fill' : ($i - $t->note < 1 ? 'star-half-fill' : 'star-line')); ?>"></i>
                        <?php endfor; ?>
                    </div>
                    <p class="text-gray-700 mb-6">"<?php echo e($t->text); ?>"</p>
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-gray-300 rounded-full mr-3"></div>
                        <div>
                            <h4 class="font-medium"><?php echo e($t->name); ?></h4>
                            <p class="text-sm text-gray-600"><?php echo e($t->city); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\wamp64\www\bookypro\resources\views/partials/testimonials.blade.php ENDPATH**/ ?>