@php($pages = config('docs.pages'))
<!doctype html>
<html class="h-full bg-gray-50">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {!! SEOMeta::generate() !!}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.scss')

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0WQ1F56CVL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-0WQ1F56CVL');
    </script>
</head>
<body class="h-full bg-gray-50">
<div x-data="{ sidebarOpen: false }">
    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <div class="relative z-50 lg:hidden" role="dialog" aria-modal="true">
        <div
            class="fixed inset-0 bg-gray-900/80"
            aria-hidden="true"
            x-show="sidebarOpen"
            x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300"
        ></div>

        <div class="fixed inset-0 flex" aria-hidden="true" x-show="sidebarOpen">
            <div class="relative mr-16 flex w-full max-w-xs flex-1"
                 x-show="sidebarOpen"
                 x-transition:enter="transition ease-in-out duration-300 transform"
                 x-transition:enter-start="-translate-x-full"
                 x-transition:enter-end="translate-x-0"
                 x-transition:leave="transition ease-in-out duration-300 transform"
                 x-transition:leave-start="translate-x-0"
                 x-transition:leave-end="-translate-x-full"
            >
                <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                    <button type="button" class="-m-2.5 p-2.5" @click="sidebarOpen = false">
                        <span class="sr-only">Close sidebar</span>
                        <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <!-- Sidebar component, swap this element with another sidebar if you like -->
                <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-white px-6 pb-4">
                    <a href="{{ url('/') }}" class="flex h-16 shrink-0 items-center gap-2">
                        <div class="text-2xl font-bold text-primary-500">wind</div>
                        <div class="text-xs text-gray-400 font-normal border border-gray-200 py-0.5 px-1 rounded">
                            Flutter
                        </div>
                    </a>
                    <nav class="flex flex-1 flex-col">
                        @foreach($pages as $topPage)
                            <ul role="list" class="flex flex-col">
                                <div class="text-xs/6 font-semibold text-gray-400">{{ __($topPage['title']) }}</div>

                                <ul role="list" class="-mx-2 mt-2 pl-2">
                                    @foreach($topPage['children'] as $page)
                                        <li>
                                            <a href="{{ App\Doc::url($page['path']) }}"
                                               class="border-l border-gray-200 group flex gap-x-3 px-2 py-1 text-sm/6 font-semibold text-gray-700 hover:border-primary-400 hover:text-primary-400 {{ \App\Doc::active($page['path']) ? 'text-primary-600 font-bold' : '' }}">
                                                <span class="truncate">{{ __($page['title']) }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </ul>
                        @endforeach
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Static sidebar for desktop -->
    <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-gray-200 bg-white px-6 pb-4">
            <a href="{{ url('/') }}" class="flex h-16 shrink-0 items-center gap-2">
                <div class="text-2xl font-bold text-primary-500">wind</div>
                <div class="text-xs text-gray-400 font-normal border border-gray-200 py-0.5 px-1 rounded">
                    Flutter
                </div>
            </a>
            <nav class="flex flex-1 flex-col gap-4">
                @foreach($pages as $topPage)
                    <ul role="list" class="flex flex-col">
                        <div class="text-xs/6 font-semibold text-gray-400">{{ __($topPage['title']) }}</div>

                        <ul role="list" class="-mx-2 mt-2 pl-2">
                            @foreach($topPage['children'] as $page)
                                <li>
                                    <a href="{{ App\Doc::url($page['path']) }}"
                                       class="border-l border-gray-200 group flex gap-x-3 px-2 py-1 text-sm/6 font-semibold text-gray-700 hover:border-primary-400 hover:text-primary-400 {{ \App\Doc::active($page['path']) ? 'text-primary-600 font-bold' : '' }}">
                                        <span class="truncate">{{ __($page['title']) }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </ul>
                @endforeach
            </nav>
        </div>
    </div>

    <div class="lg:pl-72">
        <div
            class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
            <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden" @click="sidebarOpen = true">
                <span class="sr-only">{{ __('Open sidebar') }}</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                     aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                </svg>
            </button>

            <!-- Separator -->
            <div class="h-6 w-px bg-gray-200 lg:hidden" aria-hidden="true"></div>

            <div class="flex flex-1 justify-end items-center gap-4">
                <div class="hidden lg:flex items-center justify-end gap-4">
                    <button type="button"
                            @click="$store.darkMode.mode == 'dark' ? $store.darkMode.light() : $store.darkMode.dark()"
                            class="text-gray-600 font-normal text-center">
                        <span class="sr-only"
                              x-text="$store.darkMode.mode == 'dark' ? 'Switch to light mode' : 'Switch to dark mode'"></span>

                        <svg x-show="$store.darkMode.mode == 'light'" class="size-5" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor"
                             aria-hidden="true" data-slot="icon">
                            <path fill-rule="evenodd"
                                  d="M9.528 1.718a.75.75 0 0 1 .162.819A8.97 8.97 0 0 0 9 6a9 9 0 0 0 9 9 8.97 8.97 0 0 0 3.463-.69.75.75 0 0 1 .981.98 10.503 10.503 0 0 1-9.694 6.46c-5.799 0-10.5-4.7-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 0 1 .818.162Z"
                                  clip-rule="evenodd"/>
                        </svg>

                        <svg x-show="$store.darkMode.mode == 'dark'" class="size-5" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke="currentColor"
                             aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M12 3v2.25m6.364.386-1.591 1.591M21 12h-2.25m-.386 6.364-1.591-1.591M12 18.75V21m-4.773-4.227-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z"/>
                        </svg>
                    </button>

                    <a href="https://github.com/fluttersdk/wind" target="_blank"
                       class="text-gray-600 font-normal text-center">
                        <span class="sr-only">Github</span>

                        <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </a>

                    <a href="https://pub.dev/packages/fluttersdk_wind" target="_blank"
                       class="text-gray-600 font-normal text-center">
                        <span class="sr-only">pub.dev</span>

                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M14.314 0 2.3 12 6 15.7 21.684.012h-7.357L14.314 0zm.014 11.072-6.471 6.457 6.47 6.47H21.7l-6.46-6.468 6.46-6.46h-7.371z"/>
                        </svg>
                    </a>

                    <a href="https://chatgpt.com/g/g-679a1d4f809881918c8f9e926d4b4d34-windgpt-your-flutter-companion-for-wind-plugin" target="_blank"
                       class="text-gray-600 font-normal text-center">
                        <span class="sr-only">ChatGPT</span>

                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22.282 9.821a5.985 5.985 0 0 0-.516-4.91 6.046 6.046 0 0 0-6.51-2.9A6.065 6.065 0 0 0 4.981 4.18a5.985 5.985 0 0 0-3.998 2.9 6.046 6.046 0 0 0 .743 7.097 5.98 5.98 0 0 0 .51 4.911 6.051 6.051 0 0 0 6.515 2.9A5.985 5.985 0 0 0 13.26 24a6.056 6.056 0 0 0 5.772-4.206 5.99 5.99 0 0 0 3.997-2.9 6.056 6.056 0 0 0-.747-7.073zM13.26 22.43a4.476 4.476 0 0 1-2.876-1.04l.141-.081 4.779-2.758a.795.795 0 0 0 .392-.681v-6.737l2.02 1.168a.071.071 0 0 1 .038.052v5.583a4.504 4.504 0 0 1-4.494 4.494zM3.6 18.304a4.47 4.47 0 0 1-.535-3.014l.142.085 4.783 2.759a.771.771 0 0 0 .78 0l5.843-3.369v2.332a.08.08 0 0 1-.033.062L9.74 19.95a4.5 4.5 0 0 1-6.14-1.646zM2.34 7.896a4.485 4.485 0 0 1 2.366-1.973V11.6a.766.766 0 0 0 .388.676l5.815 3.355-2.02 1.168a.076.076 0 0 1-.071 0l-4.83-2.786A4.504 4.504 0 0 1 2.34 7.872zm16.597 3.855-5.833-3.387L15.119 7.2a.076.076 0 0 1 .071 0l4.83 2.791a4.494 4.494 0 0 1-.676 8.105v-5.678a.79.79 0 0 0-.407-.667zm2.01-3.023-.141-.085-4.774-2.782a.776.776 0 0 0-.785 0L9.409 9.23V6.897a.066.066 0 0 1 .028-.061l4.83-2.787a4.5 4.5 0 0 1 6.68 4.66zm-12.64 4.135-2.02-1.164a.08.08 0 0 1-.038-.057V6.075a4.5 4.5 0 0 1 7.375-3.453l-.142.08-4.778 2.758a.795.795 0 0 0-.393.681zm1.097-2.365 2.602-1.5 2.607 1.5v2.999l-2.597 1.5-2.607-1.5Z"/>
                        </svg>
                    </a>
                </div>

                <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-200" aria-hidden="true"></div>

                <div class="font-semibold text-gray-900">
                    v{{ config('docs.version') }}
                </div>
            </div>
        </div>

        <main class="py-10 bg-gray-50">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="docs">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>
</div>

@vite('resources/js/app.js')
</body>
</html>
