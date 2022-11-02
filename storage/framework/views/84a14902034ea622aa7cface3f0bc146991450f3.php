<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Re-verify <?php echo e($name); ?> v<?php echo e($version); ?> — Bitflan</title>
    <link rel="icon" href="https://i.ibb.co/cQfHWm5/favicon.png" />
    <link rel="stylesheet" href="<?php echo e(asset('css/theme.css')); ?>" />
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
    <main class="h-screen w-screen overflow-hidden bg-gray-100 flex items-center justify-center px-6 flex-col">
        <img src="https://i.ibb.co/T4dz7Gc/zetech.png" width="222" />

        <section class="max-w-[550px] w-full rounded bg-white shadow-md p-6 text-center flex flex-col items-center justify-center mt-3">
            <div>
               Please re-verify your license for <strong><?php echo e($name); ?></strong> <span class="text-xs font-bold ml-1 px-2 py-0.5 bg-green-600 text-white rounded-lg"><?php echo e($version); ?></span>
            </div>
        </section>

        <div class="max-w-[550px] w-full mt-3">
            <section class="w-full rounded bg-white shadow-md p-6">
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('bitflan.locker', [])->html();
} elseif ($_instance->childHasBeenRendered('Ywi8sRd')) {
    $componentId = $_instance->getRenderedChildComponentId('Ywi8sRd');
    $componentTag = $_instance->getRenderedChildComponentTagName('Ywi8sRd');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Ywi8sRd');
} else {
    $response = \Livewire\Livewire::mount('bitflan.locker', []);
    $html = $response->html();
    $_instance->logRenderedChild('Ywi8sRd', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            </section>
        </div>
    </main>
    <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html><?php /**PATH /home/musab/Documents/cyber-tools/full/resources/views/install/lock.blade.php ENDPATH**/ ?>