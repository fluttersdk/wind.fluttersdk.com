<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Preview extends Component
{
    public string $iframeUrl;

    /**
     * Create a new component instance.
     */
    public function __construct(public string $path, public bool $iframe = true, public string $size = 'xs')
    {
        $this->iframeUrl = config('docs.preview_url') . '/#/' . $this->path;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.preview');
    }
}
