<!DOCTYPE html>
<html lang="{{ $locale['code'] }}" dir="{{ $locale['direction'] }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
		<title>{{ $title }} — {{ $generalSettings->websiteTitle }}</title>
        @include('includes.seo-content')
        <link rel="icon" href="https://i.ibb.co/cQfHWm5/favicon.png">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
	
        @include('includes.header-content')

        @if(isset($wire))
            @livewireStyles()
        @endif
    </head>
<body class="{{ $locale['direction'] }} {{ $theme }}">
	
	<div class="container">
		<div class="main-section">
			<header class="mainPadding">
				<nav class="p-0 navbar navbar-expand-lg navbar-dark">
					<a class="navbar-brand {{ $theme == 'dark' ? 'dark' : '' }}" href="{{ url('/') }}"><img alt="top-logo" src="https://i.ibb.co/T4dz7Gc/zetech.png" style="max-width: 100%;height: auto;" class="img-responsivee"></a>
					<div class="collapse navbar-collapse header-navbar" x-data x-on:toggle.window="$el.classList.toggle('show')" id="navbarNavDropdown">
						<ul>
							<li>
								<a href="{{ url('/') }}">{{ trans('webtools/pages.home-link') }}</a>
							</li>

                            @foreach($navigationPages as $page)
                                @if($page->location == 'header' || $page->location == 'both')
                                    <li>
                                        <a href="{{ route('page', $page->slug) }}">{{ $page->title }}</a>
                                    </li>
                                @endif
                            @endforeach

                            @foreach($generalSettings->links as $link)
                                @if($link['location'] == 'header' || $link['location'] == 'both')
                                    <li>
                                        <a {{ $link['newTab'] ? 'target="_blank"' : '' }} href="{{ $link['url'] }}">{{ $link['label'] }}</a>
                                    </li>
                                @endif
                            @endforeach

                            @if ($generalSettings->blogSection)
                                <li>
                                    <a href="{{ route('blog') }}">{{ trans('webtools/pages.blog-link') }}</a>
                                </li>
                            @endif

                            @if ($generalSettings->contactPage)
                                <li>
                                    <a href="{{ route('contact') }}">{{ trans('webtools/pages.contact-link') }}</a>
                                </li>
                            @endif
						</ul>
					</div>

                    @if($generalSettings->darkTheme)
                        <div x-data="{ show: false }" @click.outside="show = false" class="btn-group header-language-btn-group">
                            <a href="{{ route('set-theme', $theme == 'light' ? 'dark' : 'light') }}" class="text-black header-language-btn">
                                <div class="text"><i class="fas {{ $theme == 'light' ? 'fa-moon' : 'fa-sun' }}"></i></div>
                            </a>
                        </div>
                    @endif

                    @if(count($languageSettings->languages) && count($languageSettings->languages) > 1)
                        <div x-data="{ show: false }" @click.outside="show = false" class="btn-group header-language-btn-group">
                            <button type="button" :class="show && 'show'" @click="show = !show" class="header-language-btn dropdown-toggle">
                                <div class="icon">
                                    <img width="20" height="18" src="https://countryflagsapi.com/png/{{ get_locale()['flag'] }}" alt="">
                                </div>
                                <div class="text {{ $locale['direction'] == 'rtl' ? 'mx-2' : '' }}">{{ strtoupper(trim(get_locale()['code'])) }}</div>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end header-language-dd" :class="show && 'show'" data-bs-popper>
                                @foreach ($languageSettings->languages as $language)
                                    <a href="javascript:void()" x-on:click="window.location.replace('{{ route('set-language', $language['code']) }}')" class="{{ get_locale()['code'] == strtolower(trim($language['code'])) ? 'active' : '' }}">
                                        <div class="icon">
                                            <img width="20" height="18" src="https://countryflagsapi.com/png/{{ $language['flag'] }}" alt="">
                                        </div>
                                        <div class="text">{{ strtoupper(trim($language['code'])) }}</div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <div x-data x-on:click="$dispatch('toggle')" id="navbar-toggler" class="nav-btn" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</nav>
			</header>
			
            @yield('content')

            <div class="row">
                @if ($generalSettings->contactPage)
                    <div class="col-lg-6">
                        <div class="home-helping-sec">
                            {!! $generalSettings->contactSectionContent !!}

                            <a href="{{ route('contact') }}" class="btn custom--btn button__lg btn__light">{{ trans('webtools/pages.contact-link') }}</a>
                        </div>
                    </div>
                @endif
                
				<div class="{{ $generalSettings->contactPage ? 'col-lg-6' : 'col-lg-12' }}">
					<footer>
						<div class="footer-logo"><a href="{{ url('/') }}"><img alt="footer-logo" src="https://i.ibb.co/T4dz7Gc/zetech.png" alt=""></a></div>
						<div class="footer-nav">
                            @foreach($navigationPages as $page)
                                @if($page->location == 'footer' || $page->location == 'both')
                                    <a href="{{ route('page', $page->slug) }}">{{ $page->title }}</a>
                                @endif
                            @endforeach

                            @foreach($generalSettings->links as $link)
                                @if($link['location'] == 'footer' || $link['location'] == 'both')
                                    <a {{ $link['newTab'] ? 'target="_blank"' : '' }} href="{{ $link['url'] }}">{{ $link['label'] }}</a>
                                @endif
                            @endforeach

                            @if ($generalSettings->blogSection)
                                <a href="{{ route('blog') }}">{{ trans('webtools/pages.blog-link') }}</a>
                            @endif
						</div>
						<div class="footer-copyright">{!! $generalSettings->footerAttribution !!}</div>
					</footer>
				</div>
			</div>
		</div>
	</div>
	
    @stack('alpine-components')
    <script src="{{ asset('js/app.js') }}" defer></script>

    @if(isset($wire))
        @livewireScripts()
    @endif

    @include('includes.footer-content')

    @stack('scripts')
</body>
</html>