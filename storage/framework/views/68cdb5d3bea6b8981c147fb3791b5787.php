<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-4">Comment ça marche</h2>
        <p class="text-gray-600 text-center max-w-2xl mx-auto mb-12">
            Réservez votre prochain rendez-vous en trois étapes simples
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php $__currentLoopData = $steps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $step): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex flex-col items-center text-center">
                    <div class="w-20 h-20 flex items-center justify-center bg-blue-100 rounded-full mb-4">
                        <i class="ri-<?php echo e($step->icon); ?> ri-2x text-primary"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-2"><?php echo e($step->title); ?></h3>
                    <p class="text-gray-600"><?php echo e($step->description); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\wamp64\www\bookypro\resources\views/partials/how-it-works.blade.php ENDPATH**/ ?>