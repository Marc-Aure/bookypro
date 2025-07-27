

<?php $__env->startSection('title', 'Accueil'); ?>

<?php $__env->startSection('content'); ?>
    <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md my-8">
        <!-- Indicateur de progression -->
        <div class="flex justify-between items-center mb-8">
            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
            <?php
                $steps = [
                    1 => 'Informations',
                    2 => 'Coordonnées',
                    3 => 'Photos & Description',
                    4 => 'Préférences'
                ];
            ?>
            <?php $__currentLoopData = $steps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex flex-col items-center">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center text-sm font-semibold <?php echo e($step ?? 1 >= $index ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-600'); ?>">
                        <?php echo e($index); ?>

                    </div>
                    <span class="text-xs mt-2 text-center <?php echo e($step ?? 1 >= $index ? 'text-blue-600' : 'text-gray-600'); ?>"><?php echo e($label); ?></span>
                </div>
                <?php if($index < 4): ?>
                    <div class="flex-1 h-1 mt-5 mx-2 <?php echo e($step ?? 1 > $index ? 'bg-blue-600' : 'bg-gray-200'); ?>"></div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- Formulaire -->
        <?php if(($step ?? 1) == 1): ?>
            <form action="<?php echo e(route('register.step1')); ?>" method="POST" class="space-y-6">
                <?php echo csrf_field(); ?>
                <h2 class="text-2xl font-bold text-gray-800">Informations personnelles</h2>

                <div>
                    <label for="first_name" class="block text-sm font-medium text-gray-700">Prénom</label>
                    <input type="text" name="first_name" id="first_name" value="<?php echo e(old('first_name')); ?>" class="mt-1 w-full p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Votre prénom" required />
                    <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label for="last_name" class="block text-sm font-medium text-gray-700">Nom</label>
                    <input type="text" name="last_name" id="last_name" value="<?php echo e(old('last_name')); ?>" class="mt-1 w-full p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Votre nom" required />
                    <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Date de naissance</label>
                    <div class="flex space-x-3 mt-1">
                        <select name="birth_day" id="birth_day" class="w-1/3 p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                            <option value="">Jour</option>
                            <?php for($day = 1; $day <= 31; $day++): ?>
                                <option value="<?php echo e($day); ?>" <?php echo e(old('birth_day') == $day ? 'selected' : ''); ?>><?php echo e($day); ?></option>
                            <?php endfor; ?>
                        </select>
                        <select name="birth_month" id="birth_month" class="w-1/3 p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                            <option value="">Mois</option>
                            <?php $__currentLoopData = ['Janvier' => 1, 'Février' => 2, 'Mars' => 3, 'Avril' => 4, 'Mai' => 5, 'Juin' => 6, 'Juillet' => 7, 'Août' => 8, 'Septembre' => 9, 'Octobre' => 10, 'Novembre' => 11, 'Décembre' => 12]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value); ?>" <?php echo e(old('birth_month') == $value ? 'selected' : ''); ?>><?php echo e($month); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <select name="birth_year" id="birth_year" class="w-1/3 p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required>
                            <option value="">Année</option>
                            <?php for($year = now()->year; $year >= now()->year - 100; $year--): ?>
                                <option value="<?php echo e($year); ?>" <?php echo e(old('birth_year') == $year ? 'selected' : ''); ?>><?php echo e($year); ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <?php $__errorArgs = ['birth_day'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <?php $__errorArgs = ['birth_month'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <?php $__errorArgs = ['birth_year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <p class="text-sm text-gray-500 mt-1">Vous devez avoir au moins 18 ans pour vous inscrire.</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Genre</label>
                    <div class="flex space-x-6 mt-2">
                        <label class="flex items-center">
                            <input type="radio" name="gender" value="male" <?php echo e(old('gender') == 'male' ? 'checked' : ''); ?> class="h-4 w-4 text-blue-600 focus:ring-blue-500" required />
                            <span class="ml-2 text-gray-700">Homme</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="gender" value="female" <?php echo e(old('gender') == 'female' ? 'checked' : ''); ?> class="h-4 w-4 text-blue-600 focus:ring-blue-500" />
                            <span class="ml-2 text-gray-700">Femme</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="gender" value="other" <?php echo e(old('gender') == 'other' ? 'checked' : ''); ?> class="h-4 w-4 text-blue-600 focus:ring-blue-500" />
                            <span class="ml-2 text-gray-700">Autre</span>
                        </label>
                    </div>
                    <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700">Continuer</button>
            </form>

        <?php elseif(($step ?? 1) == 2): ?>
            <form action="<?php echo e(route('register.step2')); ?>" method="POST" class="space-y-6">
                <?php echo csrf_field(); ?>
                <h2 class="text-2xl font-bold text-gray-800">Coordonnées</h2>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Adresse email</label>
                    <input type="email" name="email" id="email" value="<?php echo e(old('email')); ?>" class="mt-1 w-full p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="votre@email.com" required />
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <p class="text-sm text-gray-500 mt-1">Nous ne partagerons jamais votre email avec des tiers.</p>
                </div>

                <div>
                    <label for="phone_number" class="block text-sm font-medium text-gray-700">Numéro de téléphone</label>
                    <div class="flex mt-1">
                        <select name="phone_code" class="w-1/4 p-3 border border-gray-300 rounded-l-md focus:ring-blue-500 focus:border-blue-500">
                            <option value="+33">+33</option>
                        </select>
                        <input type="text" name="phone_number" id="phone_number" value="<?php echo e(old('phone_number')); ?>" class="w-3/4 p-3 border border-gray-300 rounded-r-md focus:ring-blue-500 focus:border-blue-500" placeholder="Votre numéro" />
                    </div>
                    <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <p class="text-sm text-gray-500 mt-1">Utilisé pour la vérification et les notifications (optionnel).</p>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                    <input type="password" name="password" id="password" class="mt-1 w-full p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required />
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div id="password-strength" class="text-sm mt-1"></div>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmer le mot de passe</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="mt-1 w-full p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" required />
                    <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="flex justify-between">
                    <a href="<?php echo e(route('register')); ?>" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400">Précédent</a>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Continuer</button>
                </div>
            </form>

        <?php elseif(($step ?? 1) == 3): ?>
            <form action="<?php echo e(route('register.step3')); ?>" method="POST" enctype="multipart/form-data" class="space-y-6">
                <?php echo csrf_field(); ?>
                <h2 class="text-2xl font-bold text-gray-800">Photos et description</h2>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Vos photos (max. 6)</label>
                    <div class="grid grid-cols-3 gap-4 mt-2">
                        <?php for($i = 0; $i < 6; $i++): ?>
                            <div class="border border-gray-300 rounded-md p-2">
                                <input type="file" name="photos[]" accept="image/jpeg,image/png,image/heic" class="w-full text-sm" />
                            </div>
                        <?php endfor; ?>
                    </div>
                    <?php $__errorArgs = ['photos.*'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <p class="text-sm text-gray-500 mt-1">JPG, PNG, HEIC, max 10 Mo.</p>
                </div>

                <div>
                    <label for="bio" class="block text-sm font-medium text-gray-700">À propos de vous</label>
                    <textarea name="bio" id="bio" class="mt-1 w-full p-3 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" rows="5" required><?php echo e(old('bio')); ?></textarea>
                    <div id="bio-count" class="text-sm text-gray-500 mt-1">0/500</div>
                    <?php $__errorArgs = ['bio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Centres d'intérêt</label>
                    <div class="grid grid-cols-3 gap-2 mt-2">
                        <?php $__currentLoopData = ['Voyages', 'Cinéma', 'Musique', 'Cuisine', 'Sport', 'Lecture', 'Art', 'Nature', 'Photographie', 'Technologie', 'Mode', 'Animaux', 'Jeux vidéo', 'Danse', 'Vin']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <label class="flex items-center">
                                <input type="checkbox" name="interests[]" value="<?php echo e($interest); ?>" <?php echo e(in_array($interest, old('interests', [])) ? 'checked' : ''); ?> class="h-4 w-4 text-blue-600 focus:ring-blue-500" />
                                <span class="ml-2 text-gray-700"><?php echo e($interest); ?></span>
                            </label>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php $__errorArgs = ['interests'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <p class="text-sm text-gray-500 mt-1">Sélectionnez jusqu'à 5 centres d'intérêt.</p>
                </div>

                <div class="flex justify-between">
                    <a href="<?php echo e(route('register')); ?>?step=2" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400">Précédent</a>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Continuer</button>
                </div>
            </form>

        <?php elseif(($step ?? 1) == 4): ?>
            <form action="<?php echo e(route('register.step4')); ?>" method="POST" class="space-y-6">
                <?php echo csrf_field(); ?>
                <h2 class="text-2xl font-bold text-gray-800">Préférences de recherche</h2>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Je recherche</label>
                    <div class="flex space-x-6 mt-2">
                        <label class="flex items-center">
                            <input type="radio" name="search_gender" value="male" <?php echo e(old('search_gender') == 'male' ? 'checked' : ''); ?> class="h-4 w-4 text-blue-600 focus:ring-blue-500" required />
                            <span class="ml-2 text-gray-700">Des hommes</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="search_gender" value="female" <?php echo e(old('search_gender') == 'female' ? 'checked' : ''); ?> class="h-4 w-4 text-blue-600 focus:ring-blue-500" />
                            <span class="ml-2 text-gray-700">Des femmes</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="search_gender" value="both" <?php echo e(old('search_gender') == 'both' ? 'checked' : ''); ?> class="h-4 w-4 text-blue-600 focus:ring-blue-500" />
                            <span class="ml-2 text-gray-700">Les deux</span>
                        </label>
                    </div>
                    <?php $__errorArgs = ['search_gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Tranche d'âge</label>
                    <div class="flex space-x-4 mt-2">
                        <div class="w-1/2">
                            <label class="text-sm">Âge minimum</label>
                            <input type="range" name="age_min" min="18" max="100" value="<?php echo e(old('age_min', 18)); ?>" class="w-full" oninput="this.nextElementSibling.textContent = this.value + ' ans'" />
                            <span class="text-sm text-gray-700"><?php echo e(old('age_min', 18)); ?> ans</span>
                        </div>
                        <div class="w-1/2">
                            <label class="text-sm">Âge maximum</label>
                            <input type="range" name="age_max" min="18" max="100" value="<?php echo e(old('age_max', 50)); ?>" class="w-full" oninput="this.nextElementSibling.textContent = this.value + ' ans'" />
                            <span class="text-sm text-gray-700"><?php echo e(old('age_max', 50)); ?> ans</span>
                        </div>
                    </div>
                    <?php $__errorArgs = ['age_min'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <?php $__errorArgs = ['age_max'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Distance maximale</label>
                    <input type="range" name="distance" min="1" max="500" value="<?php echo e(old('distance', 50)); ?>" class="w-full mt-2" oninput="this.nextElementSibling.textContent = this.value + ' km'" />
                    <span class="text-sm text-gray-700"><?php echo e(old('distance', 50)); ?> km</span>
                    <?php $__errorArgs = ['distance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700">Type de relation recherchée</label>
                    <div class="flex flex-col space-y-2 mt-2">
                        <label class="flex items-center">
                            <input type="radio" name="relationship_type" value="serious" <?php echo e(old('relationship_type') == 'serious' ? 'checked' : ''); ?> class="h-4 w-4 text-blue-600 focus:ring-blue-500" required />
                            <span class="ml-2 text-gray-700">Relation sérieuse</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="relationship_type" value="casual" <?php echo e(old('relationship_type') == 'casual' ? 'checked' : ''); ?> class="h-4 w-4 text-blue-600 focus:ring-blue-500" />
                            <span class="ml-2 text-gray-700">Rencontres décontractées</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="relationship_type" value="friendship" <?php echo e(old('relationship_type') == 'friendship' ? 'checked' : ''); ?> class="h-4 w-4 text-blue-600 focus:ring-blue-500" />
                            <span class="ml-2 text-gray-700">Amitié</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" name="relationship_type" value="open" <?php echo e(old('relationship_type') == 'open' ? 'checked' : ''); ?> class="h-4 w-4 text-blue-600 focus:ring-blue-500" />
                            <span class="ml-2 text-gray-700">Je verrai bien</span>
                        </label>
                    </div>
                    <?php $__errorArgs = ['relationship_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label class="flex items-center">
                        <input type="checkbox" name="accept_terms" value="1" <?php echo e(old('accept_terms') ? 'checked' : ''); ?> class="h-4 w-4 text-blue-600 focus:ring-blue-500" required />
                        <span class="ml-2 text-gray-700">J'accepte les <a href="#" class="text-blue-600 hover:underline">conditions d'utilisation</a> et la <a href="#" class="text-blue-600 hover:underline">politique de confidentialité</a></span>
                    </label>
                    <?php $__errorArgs = ['accept_terms'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm mt-1"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div>
                    <label class="flex items-center">
                        <input type="checkbox" name="receive_newsletter" value="1" <?php echo e(old('receive_newsletter') ? 'checked' : ''); ?> class="h-4 w-4 text-blue-600 focus:ring-blue-500" />
                        <span class="ml-2 text-gray-700">Je souhaite recevoir des conseils de rencontres et des offres spéciales par email</span>
                    </label>
                </div>

                <div class="flex justify-between">
                    <a href="<?php echo e(route('register')); ?>?step=3" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400">Précédent</a>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Terminer l'inscription</button>
                </div>
            </form>
        <?php endif; ?>
    </div>

    <script>
        // Validation côté client pour le mot de passe
        const passwordInput = document.getElementById('password');
        const passwordStrength = document.getElementById('password-strength');
        if (passwordInput && passwordStrength) {
            passwordInput.addEventListener('input', function () {
                const value = this.value;
                if (value.length < 6) {
                    passwordStrength.textContent = 'Faible';
                    passwordStrength.className = 'text-red-500 text-sm mt-1';
                } else if (value.length < 10) {
                    passwordStrength.textContent = 'Moyen';
                    passwordStrength.className = 'text-yellow-500 text-sm mt-1';
                } else {
                    passwordStrength.textContent = 'Fort';
                    passwordStrength.className = 'text-green-500 text-sm mt-1';
                }
            });
        }

        // Compteur de caractères pour la bio
        const bioInput = document.getElementById('bio');
        const bioCount = document.getElementById('bio-count');
        if (bioInput && bioCount) {
            bioInput.addEventListener('input', function () {
                const length = this.value.length;
                bioCount.textContent = `${length}/500`;
                bioCount.className = length < 50 ? 'text-red-500 text-sm mt-1' : 'text-gray-500 text-sm mt-1';
            });
        }

        // Limiter à 5 centres d'intérêt
        const interestCheckboxes = document.querySelectorAll('input[name="interests[]"]');
        interestCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function () {
                const checkedCount = document.querySelectorAll('input[name="interests[]"]:checked').length;
                if (checkedCount > 5) {
                    this.checked = false;
                    alert('Vous ne pouvez sélectionner que 5 centres d\'intérêt maximum.');
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\bookypro\resources\views/auth/register-form.blade.php ENDPATH**/ ?>