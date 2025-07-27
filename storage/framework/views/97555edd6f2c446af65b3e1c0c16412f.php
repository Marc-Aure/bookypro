<div class="max-w-2xl mx-auto p-6">
    <!-- Indicateur de progression -->
    <div class="flex justify-between mb-8">
        <?php $__currentLoopData = [1 => 'Informations', 2 => 'Coordonnées', 3 => 'Photos & Description', 4 => 'Préférences']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex flex-col items-center">
                <div class="w-8 h-8 rounded-full flex items-center justify-center <?php echo e($step >= $index ? 'bg-blue-600 text-white' : 'bg-gray-300 text-gray-600'); ?>">
                    <?php echo e($index); ?>

                </div>
                <span class="text-sm mt-2 <?php echo e($step >= $index ? 'text-blue-600' : 'text-gray-600'); ?>"><?php echo e($label); ?></span>
            </div>
            <?php if($index < 4): ?>
                <div class="flex-1 h-1 mt-4 <?php echo e($step > $index ? 'bg-blue-600' : 'bg-gray-300'); ?>"></div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!-- Formulaire -->
    <?php if($step == 1): ?>
        <div class="form-section">
            <h2 class="text-2xl font-bold mb-4">Informations personnelles</h2>
            <div class="mb-4">
                <label for="first_name" class="block text-sm font-medium">Prénom</label>
                <input type="text" wire:model="first_name" id="first_name" class="w-full p-2 border rounded" />
                <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-4">
                <label for="last_name" class="block text-sm font-medium">Nom</label>
                <input type="text" wire:model="last_name" id="last_name" class="w-full p-2 border rounded" />
                <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Date de naissance</label>
                <div class="flex space-x-2">
                    <select wire:model="birth_day" class="w-1/3 p-2 border rounded">
                        <option value="">Jour</option>
                        <?php for($day = 1; $day <= 31; $day++): ?>
                            <option value="<?php echo e($day); ?>"><?php echo e($day); ?></option>
                        <?php endfor; ?>
                    </select>
                    <select wire:model="birth_month" class="w-1/3 p-2 border rounded">
                        <option value="">Mois</option>
                        <?php $__currentLoopData = ['Janvier' => 1, 'Février' => 2, 'Mars' => 3, 'Avril' => 4, 'Mai' => 5, 'Juin' => 6, 'Juillet' => 7, 'Août' => 8, 'Septembre' => 9, 'Octobre' => 10, 'Novembre' => 11, 'Décembre' => 12]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value); ?>"><?php echo e($month); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <select wire:model="birth_year" class="w-1/3 p-2 border rounded">
                        <option value="">Année</option>
                        <?php for($year = now()->year; $year >= 1900; $year--): ?>
                            <option value="<?php echo e($year); ?>"><?php echo e($year); ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                <?php $__errorArgs = ['birth_day'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <?php $__errorArgs = ['birth_month'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <?php $__errorArgs = ['birth_year'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <p class="text-sm text-gray-500 mt-1">Vous devez avoir au moins 18 ans.</p>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Genre</label>
                <div class="flex space-x-4">
                    <label><input type="radio" wire:model="gender" value="male" /> Homme</label>
                    <label><input type="radio" wire:model="gender" value="female" /> Femme</label>
                    <label><input type="radio" wire:model="gender" value="other" /> Autre</label>
                </div>
                <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <button wire:click="nextStep" class="bg-blue-600 text-white px-4 py-2 rounded">Continuer</button>
        </div>
    <?php elseif($step == 2): ?>
        <div class="form-section">
            <h2 class="text-2xl font-bold mb-4">Coordonnées</h2>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium">Adresse email</label>
                <input type="email" wire:model="email" id="email" class="w-full p-2 border rounded" />
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <p class="text-sm text-gray-500 mt-1">Nous ne partagerons jamais votre email.</p>
            </div>
            <div class="mb-4">
                <label for="phone_number" class="block text-sm font-medium">Numéro de téléphone</label>
                <div class="flex">
                    <select class="w-1/4 p-2 border rounded-l">
                        <option>+33</option>
                    </select>
                    <input type="text" wire:model="phone_number" id="phone_number" class="w-3/4 p-2 border rounded-r" />
                </div>
                <?php $__errorArgs = ['phone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <p class="text-sm text-gray-500 mt-1">Optionnel, pour vérification et notifications.</p>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium">Mot de passe</label>
                <input type="password" wire:model="password" id="password" class="w-full p-2 border rounded" />
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div id="password-strength" class="text-sm mt-1"></div>
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium">Confirmer le mot de passe</label>
                <input type="password" wire:model="password_confirmation" id="password_confirmation" class="w-full p-2 border rounded" />
                <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="flex justify-between">
                <button wire:click="previousStep" class="bg-gray-300 text-gray-700 px-4 py-2 rounded">Précédent</button>
                <button wire:click="nextStep" class="bg-blue-600 text-white px-4 py-2 rounded">Continuer</button>
            </div>
        </div>
    <?php elseif($step == 3): ?>
        <div class="form-section">
            <h2 class="text-2xl font-bold mb-4">Photos et description</h2>
            <div class="mb-4">
                <label class="block text-sm font-medium">Vos photos (max. 6)</label>
                <div class="grid grid-cols-3 gap-4">
                    <?php for($i = 0; $i < 6; $i++): ?>
                        <div class="border rounded p-2">
                            <?php if(isset($photos[$i])): ?>
                                <img src="<?php echo e($photos[$i]->temporaryUrl()); ?>" class="w-full h-32 object-cover" />
                            <?php else: ?>
                                <input type="file" wire:model="photos.<?php echo e($i); ?>" accept="image/jpeg,image/png,image/heic" class="w-full" />
                            <?php endif; ?>
                        </div>
                    <?php endfor; ?>
                </div>
                <?php $__errorArgs = ['photos.*'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <p class="text-sm text-gray-500 mt-1">JPG, PNG, HEIC, max 10 Mo.</p>
            </div>
            <div class="mb-4">
                <label for="bio" class="block text-sm font-medium">À propos de vous</label>
                <textarea wire:model="bio" id="bio" class="w-full p-2 border rounded" rows="5"></textarea>
                <div id="bio-count" class="text-sm text-gray-500 mt-1">0/500</div>
                <?php $__errorArgs = ['bio'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Centres d'intérêt</label>
                <div class="grid grid-cols-3 gap-2">
                    <?php $__currentLoopData = ['Voyages', 'Cinéma', 'Musique', 'Cuisine', 'Sport', 'Lecture', 'Art', 'Nature', 'Photographie', 'Technologie', 'Mode', 'Animaux', 'Jeux vidéo', 'Danse', 'Vin']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <label class="flex items-center">
                            <input type="checkbox" wire:model="interests" value="<?php echo e($interest); ?>" />
                            <span class="ml-2"><?php echo e($interest); ?></span>
                        </label>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php $__errorArgs = ['interests'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <p class="text-sm text-gray-500 mt-1">Max 5 centres d'intérêt.</p>
            </div>
            <div class="flex justify-between">
                <button wire:click="previousStep" class="bg-gray-300 text-gray-700 px-4 py-2 rounded">Précédent</button>
                <button wire:click="nextStep" class="bg-blue-600 text-white px-4 py-2 rounded">Continuer</button>
            </div>
        </div>
    <?php elseif($step == 4): ?>
        <div class="form-section">
            <h2 class="text-2xl font-bold mb-4">Préférences de recherche</h2>
            <div class="mb-4">
                <label class="block text-sm font-medium">Je recherche</label>
                <div class="flex space-x-4">
                    <label><input type="radio" wire:model="search_gender" value="male" /> Des hommes</label>
                    <label><input type="radio" wire:model="search_gender" value="female" /> Des femmes</label>
                    <label><input type="radio" wire:model="search_gender" value="both" /> Les deux</label>
                </div>
                <?php $__errorArgs = ['search_gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Tranche d'âge</label>
                <div class="flex space-x-4">
                    <div>
                        <label>Min</label>
                        <input type="range" wire:model="age_min" min="18" max="100" class="w-full" />
                        <span><?php echo e($age_min); ?> ans</span>
                    </div>
                    <div>
                        <label>Max</label>
                        <input type="range" wire:model="age_max" min="18" max="100" class="w-full" />
                        <span><?php echo e($age_max); ?> ans</span>
                    </div>
                </div>
                <?php $__errorArgs = ['age_min'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <?php $__errorArgs = ['age_max'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Distance maximale</label>
                <input type="range" wire:model="distance" min="1" max="500" class="w-full" />
                <span><?php echo e($distance); ?> km</span>
                <?php $__errorArgs = ['distance'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-4">
                <label class="block text-sm font-medium">Type de relation</label>
                <div class="flex flex-col space-y-2">
                    <label><input type="radio" wire:model="relationship_type" value="serious" /> Relation sérieuse</label>
                    <label><input type="radio" wire:model="relationship_type" value="casual" /> Rencontres décontractées</label>
                    <label><input type="radio" wire:model="relationship_type" value="friendship" /> Amitié</label>
                    <label><input type="radio" wire:model="relationship_type" value="open" /> Je verrai bien</label>
                </div>
                <?php $__errorArgs = ['relationship_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-4">
                <label class="flex items-center">
                    <input type="checkbox" wire:model="accept_terms" />
                    <span class="ml-2">J'accepte les <a href="#" class="text-blue-600">conditions d'utilisation</a> et la <a href="#" class="text-blue-600">politique de confidentialité</a></span>
                </label>
                <?php $__errorArgs = ['accept_terms'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-red-500 text-sm"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="mb-4">
                <label class="flex items-center">
                    <input type="checkbox" wire:model="receive_newsletter" />
                    <span class="ml-2">Recevoir des conseils et offres par email</span>
                </label>
            </div>
            <div class="flex justify-between">
                <button wire:click="previousStep" class="bg-gray-300 text-gray-700 px-4 py-2 rounded">Précédent</button>
                <button wire:click="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Terminer l'inscription</button>
            </div>
        </div>
    <?php endif; ?>
</div>

<script>
    document.getElementById('password')?.addEventListener('input', function() {
        const strength = document.getElementById('password-strength');
        const value = this.value;
        if (value.length < 6) {
            strength.textContent = 'Faible';
            strength.className = 'text-red-500 text-sm';
        } else if (value.length < 10) {
            strength.textContent = 'Moyen';
            strength.className = 'text-yellow-500 text-sm';
        } else {
            strength.textContent = 'Fort';
            strength.className = 'text-green-500 text-sm';
        }
    });

    document.getElementById('bio')?.addEventListener('input', function() {
        const count = document.getElementById('bio-count');
        count.textContent = `${this.value.length}/500`;
        count.className = this.value.length < 50 ? 'text-red-500 text-sm' : 'text-gray-500 text-sm';
    });
</script><?php /**PATH C:\wamp64\www\bookypro\resources\views/livewire/register-form.blade.php ENDPATH**/ ?>