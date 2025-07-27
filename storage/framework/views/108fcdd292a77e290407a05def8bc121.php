<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookyPro - <?php echo $__env->yieldContent('title'); ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="<?php echo e(asset('js/dark-mode.js')); ?>"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4f46e5',
                        secondary: '#f97316',
                    },
                    borderRadius: {
                        button: '8px',
                    },
                    fontFamily: {
                        pacifico: ['Pacifico'],
                        inter: ['Inter', 'sans-serif'],
                    },
                },
            },
        }
    </script>
    <link rel="stylesheet" href="<?php echo e(asset('css/bookypro.css')); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" rel="stylesheet">
</head>
<body class="font-inter bg-gray-50 text-gray-900">
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH C:\wamp64\www\bookypro\resources\views/Admin/layouts/guest.blade.php ENDPATH**/ ?>