<!DOCTYPE html>
<html lang="<?php echo e($locale['code']); ?>" dir="<?php echo e($locale['direction']); ?>">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
		<title><?php echo e($title); ?> — <?php echo e($generalSettings->websiteTitle); ?></title>
        <?php echo $__env->make('includes.seo-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <link rel="icon" href="https://i.ibb.co/cQfHWm5/favicon.png">
		<link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('css/all.min.css')); ?>">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
	
        <?php echo $__env->make('includes.header-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php if(isset($wire)): ?>
            <?php echo \Livewire\Livewire::styles(); ?>

        <?php endif; ?>
    </head>
<body class="<?php echo e($locale['direction']); ?> <?php echo e($theme); ?>">
	
	<div class="container">
		<div class="main-section">
			<header class="mainPadding">
				<nav class="p-0 navbar navbar-expand-lg navbar-dark">
					<a class="navbar-brand <?php echo e($theme == 'dark' ? 'dark' : ''); ?>" href="<?php echo e(url('/')); ?>"><img alt="top-logo" src="https://i.ibb.co/T4dz7Gc/zetech.png" style="max-width: 100%;height: auto;" class="img-responsivee"></a>
					<div class="collapse navbar-collapse header-navbar" x-data x-on:toggle.window="$el.classList.toggle('show')" id="navbarNavDropdown">
						<ul>
							<li>
								<a href="<?php echo e(url('/')); ?>"><?php echo e(trans('webtools/pages.home-link')); ?></a>
							</li>

                            <?php $__currentLoopData = $navigationPages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($page->location == 'header' || $page->location == 'both'): ?>
                                    <li>
                                        <a href="<?php echo e(route('page', $page->slug)); ?>"><?php echo e($page->title); ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php $__currentLoopData = $generalSettings->links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($link['location'] == 'header' || $link['location'] == 'both'): ?>
                                    <li>
                                        <a <?php echo e($link['newTab'] ? 'target="_blank"' : ''); ?> href="<?php echo e($link['url']); ?>"><?php echo e($link['label']); ?></a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php if($generalSettings->blogSection): ?>
                                <li>
                                    <a href="<?php echo e(route('blog')); ?>"><?php echo e(trans('webtools/pages.blog-link')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if($generalSettings->contactPage): ?>
                                <li>
                                    <a href="<?php echo e(route('contact')); ?>"><?php echo e(trans('webtools/pages.contact-link')); ?></a>
                                </li>
                            <?php endif; ?>
						</ul>
					</div>

                    <?php if($generalSettings->darkTheme): ?>
                        <div x-data="{ show: false }" @click.outside="show = false" class="btn-group header-language-btn-group">
                            <a href="<?php echo e(route('set-theme', $theme == 'light' ? 'dark' : 'light')); ?>" class="text-black header-language-btn">
                                <div class="text"><i class="fas <?php echo e($theme == 'light' ? 'fa-moon' : 'fa-sun'); ?>"></i></div>
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php if(count($languageSettings->languages) && count($languageSettings->languages) > 1): ?>
                        <div x-data="{ show: false }" @click.outside="show = false" class="btn-group header-language-btn-group">
                            <button type="button" :class="show && 'show'" @click="show = !show" class="header-language-btn dropdown-toggle">
                                <div class="icon">
                                    <img width="20" height="18" src="https://countryflagsapi.com/png/<?php echo e(get_locale()['flag']); ?>" alt="">
                                </div>
                                <div class="text <?php echo e($locale['direction'] == 'rtl' ? 'mx-2' : ''); ?>"><?php echo e(strtoupper(trim(get_locale()['code']))); ?></div>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end header-language-dd" :class="show && 'show'" data-bs-popper>
                                <?php $__currentLoopData = $languageSettings->languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a href="javascript:void()" x-on:click="window.location.replace('<?php echo e(route('set-language', $language['code'])); ?>')" class="<?php echo e(get_locale()['code'] == strtolower(trim($language['code'])) ? 'active' : ''); ?>">
                                        <div class="icon">
                                            <img width="20" height="18" src="https://countryflagsapi.com/png/<?php echo e($language['flag']); ?>" alt="">
                                        </div>
                                        <div class="text"><?php echo e(strtoupper(trim($language['code']))); ?></div>
                                    </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div x-data x-on:click="$dispatch('toggle')" id="navbar-toggler" class="nav-btn" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</nav>
			</header>
			
            <?php echo $__env->yieldContent('content'); ?>

            <div class="row">
                <?php if($generalSettings->contactPage): ?>
                    <div class="col-lg-6">
                        <div class="home-helping-sec">
                            <?php echo $generalSettings->contactSectionContent; ?>


                            <a href="<?php echo e(route('contact')); ?>" class="btn custom--btn button__lg btn__light"><?php echo e(trans('webtools/pages.contact-link')); ?></a>
                        </div>
                    </div>
                <?php endif; ?>
                
				<div class="<?php echo e($generalSettings->contactPage ? 'col-lg-6' : 'col-lg-12'); ?>">
					<footer>
						<div class="footer-logo"><a href="<?php echo e(url('/')); ?>"><img alt="footer-logo" src="https://i.ibb.co/T4dz7Gc/zetech.png" alt=""></a></div>
						<div class="footer-nav">
                            <?php $__currentLoopData = $navigationPages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($page->location == 'footer' || $page->location == 'both'): ?>
                                    <a href="<?php echo e(route('page', $page->slug)); ?>"><?php echo e($page->title); ?></a>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php $__currentLoopData = $generalSettings->links; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($link['location'] == 'footer' || $link['location'] == 'both'): ?>
                                    <a <?php echo e($link['newTab'] ? 'target="_blank"' : ''); ?> href="<?php echo e($link['url']); ?>"><?php echo e($link['label']); ?></a>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php if($generalSettings->blogSection): ?>
                                <a href="<?php echo e(route('blog')); ?>"><?php echo e(trans('webtools/pages.blog-link')); ?></a>
                            <?php endif; ?>
						</div>
						<div class="footer-copyright"><?php echo $generalSettings->footerAttribution; ?></div>
					</footer>
				</div>
			</div>
		</div>
	</div>
	
    <?php echo $__env->yieldPushContent('alpine-components'); ?>
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <?php if(isset($wire)): ?>
        <?php echo \Livewire\Livewire::scripts(); ?>

    <?php endif; ?>

    <?php echo $__env->make('includes.footer-content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html><?php /**PATH /home/musab/Documents/cyber-tools/full/resources/views/layouts/main.blade.php ENDPATH**/ ?>