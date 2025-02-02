<!doctype html>
<html>
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
<body>
<div class="bg-white w-full flex flex-col items-center justify-between min-h-screen">
    <div
        class="relative isolate overflow-hidden bg-gradient-to-b from-primary-100/20 flex-1 flex flex-col items-center justify-center w-full">
        <div class="mx-auto max-w-7xl pb-24 pt-10 sm:pb-32 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:px-8 lg:py-40">
            <div class="px-6 lg:px-0 lg:pt-4">
                <div class="mx-auto max-w-2xl">
                    <div class="max-w-lg">
                        <div class="text-4xl font-bold text-primary-500 flex items-center gap-2">
                            <div>wind</div>
                            <div class="text-sm text-gray-400 font-normal border border-gray-200 py-1 px-2 rounded">
                                Flutter
                            </div>
                        </div>
                        <div class="mt-24 sm:mt-32 lg:mt-16">
                            <a href="https://github.com/fluttersdk/wind/releases" class="inline-flex space-x-6">
                                <span
                                    class="rounded-full bg-primary-600/10 px-3 py-1 text-sm/6 font-semibold text-primary-600 ring-1 ring-inset ring-primary-600/10">
                                    {{ __('Latest release') }}
                                </span>
                                <span class="inline-flex items-center space-x-2 text-sm/6 font-medium text-gray-600">
                  <span>v{{ config('docs.version') }}</span>
                  <svg class="size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                       data-slot="icon">
                    <path fill-rule="evenodd"
                          d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z"
                          clip-rule="evenodd"/>
                  </svg>
                </span>
                            </a>
                        </div>
                        <h1 class="mt-10 text-pretty text-5xl font-semibold tracking-tight text-gray-900 sm:text-7xl">
                            {{ __('Design Flutter, Tailwind Way') }}
                        </h1>
                        <p class="mt-8 text-pretty text-lg font-medium text-gray-500 sm:text-xl/8">
                            {{ __('Seamlessly style your Flutter apps with the power and simplicity of Tailwind-inspired utilities.') }}
                        </p>
                        <div class="mt-10 flex items-center gap-x-6">
                            <a href="{{ url('getting-started/installation') }}"
                               class="rounded-md bg-primary-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-primary-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">Documentation</a>
                            <a href="https://github.com/fluttersdk/wind" class="text-sm/6 font-semibold text-gray-900">{{ __('View on GitHub') }} <span
                                    aria-hidden="true">→</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-20 sm:mt-24 md:mx-auto md:max-w-2xl lg:mx-0 lg:mt-0 lg:w-screen">
                <div class="shadow-lg md:rounded-3xl">
                    <div class="mx-auto max-w-2xl md:mx-0 md:max-w-none">
                        <div class="w-screen overflow-hidden rounded-tl-xl bg-gray-900">
                            <div class="flex bg-gray-800/40 ring-1 ring-white/5">
                                <div class="-mb-px flex text-sm/6 font-medium text-gray-400">
                                    <div
                                        class="border-b border-r border-b-white/20 border-r-white/10 bg-white/5 px-4 py-2 text-white">
                                        welcome.dart
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-auto">
                                {!! Str::markdown(file_get_contents(resource_path('contents/home/code.md'))) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-white">
        <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8">
            <div class="mt-16 flex justify-center gap-x-10">
                <a href="https://github.com/fluttersdk/wind" class="text-gray-600 hover:text-gray-800">
                    <span class="sr-only">GitHub</span>
                    <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                              clip-rule="evenodd"/>
                    </svg>
                </a>

                <a href="https://pub.dev/packages/fluttersdk_wind" class="text-gray-600 hover:text-gray-800">
                    <span class="sr-only">pub.dev</span>

                    <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M14.314 0 2.3 12 6 15.7 21.684.012h-7.357L14.314 0zm.014 11.072-6.471 6.457 6.47 6.47H21.7l-6.46-6.468 6.46-6.46h-7.371z"/>
                    </svg>
                </a>

                <a href="https://chatgpt.com/g/g-679a1d4f809881918c8f9e926d4b4d34-windgpt-your-flutter-companion-for-wind-plugin" class="text-gray-600 hover:text-gray-800">
                    <span class="sr-only">ChatGPT</span>

                    <svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path
                            d="M22.282 9.821a5.985 5.985 0 0 0-.516-4.91 6.046 6.046 0 0 0-6.51-2.9A6.065 6.065 0 0 0 4.981 4.18a5.985 5.985 0 0 0-3.998 2.9 6.046 6.046 0 0 0 .743 7.097 5.98 5.98 0 0 0 .51 4.911 6.051 6.051 0 0 0 6.515 2.9A5.985 5.985 0 0 0 13.26 24a6.056 6.056 0 0 0 5.772-4.206 5.99 5.99 0 0 0 3.997-2.9 6.056 6.056 0 0 0-.747-7.073zM13.26 22.43a4.476 4.476 0 0 1-2.876-1.04l.141-.081 4.779-2.758a.795.795 0 0 0 .392-.681v-6.737l2.02 1.168a.071.071 0 0 1 .038.052v5.583a4.504 4.504 0 0 1-4.494 4.494zM3.6 18.304a4.47 4.47 0 0 1-.535-3.014l.142.085 4.783 2.759a.771.771 0 0 0 .78 0l5.843-3.369v2.332a.08.08 0 0 1-.033.062L9.74 19.95a4.5 4.5 0 0 1-6.14-1.646zM2.34 7.896a4.485 4.485 0 0 1 2.366-1.973V11.6a.766.766 0 0 0 .388.676l5.815 3.355-2.02 1.168a.076.076 0 0 1-.071 0l-4.83-2.786A4.504 4.504 0 0 1 2.34 7.872zm16.597 3.855-5.833-3.387L15.119 7.2a.076.076 0 0 1 .071 0l4.83 2.791a4.494 4.494 0 0 1-.676 8.105v-5.678a.79.79 0 0 0-.407-.667zm2.01-3.023-.141-.085-4.774-2.782a.776.776 0 0 0-.785 0L9.409 9.23V6.897a.066.066 0 0 1 .028-.061l4.83-2.787a4.5 4.5 0 0 1 6.68 4.66zm-12.64 4.135-2.02-1.164a.08.08 0 0 1-.038-.057V6.075a4.5 4.5 0 0 1 7.375-3.453l-.142.08-4.778 2.758a.795.795 0 0 0-.393.681zm1.097-2.365 2.602-1.5 2.607 1.5v2.999l-2.597 1.5-2.607-1.5Z"/>
                    </svg>
                </a>
            </div>

            <p class="mt-10 text-center text-sm/6 text-gray-400">&copy; {{ now()->year }} Made with ❤️ by <a
                    href="https://anilcancakir.com" class="text-gray-600">Anılcan Çakır</a>
                for <a href="https://fluttersdk.com">FlutterSDK</a> </p>
        </div>
    </footer>
</div>

@vite('resources/js/app.js')
</body>
</html>
