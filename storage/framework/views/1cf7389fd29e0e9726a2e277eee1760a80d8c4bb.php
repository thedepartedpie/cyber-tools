<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.widget','data' => ['class' => 'filament-account-widget']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'filament-account-widget']); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'filament::components.card.index','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('filament::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php
            $user = \Filament\Facades\Filament::auth()->user();
        ?>

        <div class="h-12 flex items-center space-x-4 rtl:space-x-reverse">
            <div
                class="w-10 h-10 rounded-full bg-gray-200 bg-cover bg-center"
                style="background-image: url('<?php echo e(\Filament\Facades\Filament::getUserAvatarUrl($user)); ?>')"
            ></div>

            <div>
                <h2 class="text-lg sm:text-xl font-bold tracking-tight">
                    <?php echo e(__('filament::widgets/account-widget.welcome', ['user' => \Filament\Facades\Filament::getUserName($user)])); ?>

                </h2>

                <p class="text-sm">
                    <a href="<?php echo e(route('filament.pages.profile')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'text-gray-600 hover:text-primary-500 focus:outline-none focus:underline',
                        'dark:text-gray-300 dark:hover:text-primary-500' => config('filament.dark_mode'),
                    ]) ?>">
                        Edit Profile
                    </a>

                    -

                    <a href="<?php echo e(route('filament.auth.logout')); ?>" class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                        'text-gray-600 hover:text-primary-500 focus:outline-none focus:underline',
                        'dark:text-gray-300 dark:hover:text-primary-500' => config('filament.dark_mode'),
                    ]) ?>">
                        <?php echo e(__('filament::widgets/account-widget.buttons.logout.label')); ?>

                    </a>
                </p>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php /**PATH /home/musab/Documents/cyber-tools/full/resources/views/vendor/filament/widgets/account-widget.blade.php ENDPATH**/ ?>