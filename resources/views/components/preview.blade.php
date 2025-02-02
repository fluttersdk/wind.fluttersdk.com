<div class="flex flex-col w-full rounded-lg bg-white shadow-lg items-center" x-data="{ size: '{{ $size ?? 'xs' }}' }">
    <div class="w-full flex p-2 border-b rounded-t-lg bg-white border-gray-200">
        <div class="flex-1 w-full flex items-center gap-2">
            <div class="flex-1">
                <a href="{{ $iframeUrl }}" target="_blank" class="p-2 text-primary-600 text-base flex items-center gap-2">
                    <span class="hidden lg:block">
                        {{ str_replace('http://', '', $iframeUrl) }}
                    </span>

                    <span class="block lg:hidden">
                        Preview
                    </span>

                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"/>
                        </svg>
                    </span>
                </a>
            </div>

            @if ($iframe)
                <div>
                    <select class="p-2 text-primary-600 text-base" x-model="size">
                        <option value="xs">Mobile</option>
                        <option value="sm">Small</option>
                        <option value="md">Medium</option>
                        <option value="lg">Large</option>
                        <option value="xl">Extra Large</option>
                    </select>
                </div>
            @endif
        </div>
    </div>

    @if ($iframe)
        <iframe {{ $attributes->merge(['class' => 'w-full h-auto border-dashed border-gray-200 border-x']) }} src="{{ $iframeUrl }}"
                x-bind:class="'max-w-screen-' + size"></iframe>
    @endif
</div>
