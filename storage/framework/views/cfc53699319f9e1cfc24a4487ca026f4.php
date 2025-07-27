<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
<h3 class="font-semibold text-lg mb-4">Services disponibles</h3>

<div class="space-y-3 mb-6">
    <?php $__currentLoopData = $bookingServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <label class="custom-checkbox flex items-center">
            <input type="checkbox" name="services[]" value="<?php echo e($service->id); ?>">
            <span class="checkmark mr-3"></span>
            <span><?php echo e($service->title); ?> (<?php echo e($service->duration ?? '30'); ?> min)</span>
        </label>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<h3 class="font-semibold text-lg mb-4">Prestataires</h3>
<div class="space-y-3">
    <label class="custom-checkbox flex items-center">
        <input type="radio" name="provider_id" value="" checked>
        <span class="checkmark mr-3"></span>
        <span>N'importe quel styliste</span>
    </label>
    <?php $__currentLoopData = $providers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <label class="custom-checkbox flex items-center">
            <input type="radio" name="provider_id" value="<?php echo e($provider->id); ?>">
            <span class="checkmark mr-3"></span>
            <span><?php echo e($provider->name); ?></span>
        </label>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
    </div>
</section>
<?php /**PATH C:\wamp64\www\bookypro\resources\views/partials/booking.blade.php ENDPATH**/ ?>