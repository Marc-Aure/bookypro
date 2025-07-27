<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookyPro - <?php echo $__env->yieldContent('title', 'Réservation'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script src="<?php echo e(asset('js/dark-mode.js')); ?>"></script>
    <script>
        tailwind.config = {
            darkMode: 'class', //important
            theme: {
                extend: {
                    colors: {
                        primary: '#4f46e5',
                        secondary: '#f97316'
                    },
                    borderRadius: {
                        none: '0px',
                        sm: '4px',
                        DEFAULT: '8px',
                        md: '12px',
                        lg: '16px',
                        xl: '20px',
                        '2xl': '24px',
                        '3xl': '32px',
                        full: '9999px',
                        button: '8px',
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="<?php echo e(asset('css/bookypro.css')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
</head>
<body class="bg-gray-50 font-['Inter'] min-h-screen dark:bg-gray-900 dark:text-white">
    <?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\wamp64\www\bookypro\resources\views/layouts/app.blade.php ENDPATH**/ ?>