<!-- Header -->
<header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center">
                <a href="#" class="text-2xl font-['Pacifico'] text-primary">BookyPro</a>
                <nav class="hidden md:flex ml-10 space-x-6">
                    <a href="#" class="text-gray-800 hover:text-primary font-medium">Accueil</a>
                    <a href="#" class="text-gray-800 hover:text-primary font-medium">Services</a>
                    <a href="#" class="text-gray-800 hover:text-primary font-medium">Comment ça marche</a>
                    <a href="#" class="text-gray-800 hover:text-primary font-medium">Tarifs</a>
                    <a href="#" class="text-gray-800 hover:text-primary font-medium">Contact</a>
                </nav>
            </div>
            <div class="flex items-center space-x-4">
                <label class="toggle-switch">
                    <input type="checkbox" id="darkModeToggle">
                    <span class="toggle-slider"></span>
                </label>
                <a href="#" class="text-gray-800 hover:text-primary font-medium">Connexion</a>
                <a href="<?php echo e(route("register")); ?>" class="bg-primary text-white px-4 py-2 !rounded-button whitespace-nowrap">Inscription</a>
                <button class="md:hidden w-10 h-10 flex items-center justify-center text-gray-700">
                    <i class="ri-menu-line ri-lg"></i>
                </button>
            </div>
        </div>
    </header><?php /**PATH C:\wamp64\www\bookypro\resources\views/partials/header.blade.php ENDPATH**/ ?>