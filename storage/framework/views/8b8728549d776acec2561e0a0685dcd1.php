<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-8">
            <h2 class="text-3xl font-bold">Services en vedette</h2>
            <div class="flex space-x-2">
                <button class="p-2 !rounded-full border border-gray-200 hover:border-primary">
                    <i class="ri-arrow-left-s-line ri-lg"></i>
                </button>
                <button class="p-2 !rounded-full border border-gray-200 hover:border-primary">
                    <i class="ri-arrow-right-s-line ri-lg"></i>
                </button>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white rounded-lg shadow-sm overflow-hidden">
                    <div class="h-48 overflow-hidden">
                        <img src="<?php echo e($service->image_url); ?>" alt="<?php echo e($service->title); ?>" class="w-full h-full object-cover object-top">
                    </div>
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="w-10 h-10 flex items-center justify-center <?php echo e($service->category->color); ?> rounded-full mr-3">
                                <i class="ri-<?php echo e($service->category->icon); ?> <?php echo e(Str::after($service->category->color, ' ')); ?>"></i>
                            </div>
                            <span class="text-sm font-medium text-gray-500"><?php echo e($service->category->name); ?></span>
                        </div>
                        <h3 class="text-xl font-semibold mb-2"><?php echo e($service->title); ?></h3>
                        <div class="flex items-center mb-3">
                            <div class="flex text-yellow-400">
                                <?php for($i = 1; $i <= 5; $i++): ?>
                                    <i class="ri-<?php echo e($i <= floor($service->rating) ? 'star-fill' : ($i - $service->rating < 1 ? 'star-half-fill' : 'star-line')); ?>"></i>
                                <?php endfor; ?>
                            </div>
                            <span class="ml-2 text-sm text-gray-600"><?php echo e(number_format($service->rating, 1)); ?> (<?php echo e($service->reviews_count); ?> avis)</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-600 mb-4">
                            <i class="ri-map-pin-line mr-1"></i>
                            <span><?php echo e($service->location); ?></span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-primary font-semibold">À partir de <?php echo e(number_format($service->price, 2)); ?>€</span>
                            <button class="bg-primary text-white px-4 py-2 !rounded-button whitespace-nowrap">Réserver</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="text-center mt-10">
            <a href="<?php echo e(route('services.index')); ?>" class="inline-flex items-center text-primary font-medium">
                Voir tous les services
                <i class="ri-arrow-right-line ml-1"></i>
            </a>
        </div>
    </div>
</section>
<?php /**PATH C:\wamp64\www\bookypro\resources\views/partials/services.blade.php ENDPATH**/ ?>