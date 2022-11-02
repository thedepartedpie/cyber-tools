

<?php $__env->startSection('content'); ?>

<div class="hero-section">
    <h2><?php echo e(trans('webtools/homepage.title')); ?></h2>
    <h1><?php echo e(trans('webtools/homepage.heading')); ?></h1>
</div>
<div class="main-search-sec">
    <input x-data="window.bitflanToolSearchComponent()" type="text" placeholder="<?php echo e(trans('webtools/homepage.search-placeholder')); ?>">
</div>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.ads.top-banner','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('ads.top-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<div class="content-sec">

    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div data-category data-count="<?php echo e(count($category['tools'])); ?>" class="content-sec-inner">
            <div class="content-title-sec">
                <?php echo $__env->make($category['view'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="content-cats-sec">
                <?php $__currentLoopData = $category['tools']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tool): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($toolOptions['tool-' . $tool['name'] . '.' . 'enabled'] != false): ?>
                        <div class="content-cats-col" data-tool data-name="<?php echo e(str_replace('"', '', $toolOptions['tool-' . $tool['name'] . '.' . 'title'][0]->payload)); ?>" data-summary="<?php echo e(str_replace('"', '', $toolOptions['tool-' . $tool['name'] . '.' . 'summary'][0]->payload)); ?>">
                            <a href="<?php echo e(route('tool', $slugs->{$key})); ?>" class="content-cats-inner">
                                <?php echo $__env->make($tool['templates']['selector'], [
                                    'tool'    => $tool['name'],
                                    'title'   => get_tool_title($tool['name'], str_replace('"', '', $toolOptions['tool-' . $tool['name'] . '.' . 'title'][0]->payload)),
                                    'summary' => get_tool_summary($tool['name'], str_replace('"', '', $toolOptions['tool-' . $tool['name'] . '.' . 'summary'][0]->payload)),
                                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.ads.bottom-banner','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('ads.bottom-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/musab/Documents/cyber-tools/full/resources/views/homepage.blade.php ENDPATH**/ ?>