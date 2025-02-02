<?php

namespace App;

use Blade;
use Illuminate\Support\Str;

class Doc
{
    /**
     * Get the version.
     *
     * @return string
     */
    public static function version(): string
    {
        if (session()->has('version')) {
            return session('version');
        }

        return config('docs.version');
    }

    /**
     * Render the markdown file.
     *
     * @param string|null $page
     * @param string|null $version
     * @return string
     */
    public static function render(string $page = null, string $version = null, bool $removeHtmlElements = false): string
    {
        $page = $page ?? 'index';
        $version = $version ?? self::version();

        $path = resource_path('contents/docs/' . $version . '/' . $page . '.md');
        if (!file_exists($path)) {
            $path = resource_path('contents/docs/' . config('docs.fallback_version') . '/' . $page . '.md');
        }

        $contents = file_exists($path) ? file_get_contents($path) : '## Page not found';

        if ($removeHtmlElements) {
            $markdown = Str::markdown($contents, [
                'html_input' => 'strip',
                'allow_unsafe_links' => false,
            ]);
        } else {
            $markdown = Str::markdown($contents, [
                'html_input' => 'allow',
                'allow_unsafe_links' => false,
            ]);
        }

        return Blade::render(
            html_entity_decode($markdown)
        );
    }

    /**
     * @param $path
     * @param $version
     * @return string
     */
    public static function url($path, $version = null): string
    {
        if ($version) {
            return route('docs.version', [$version, $path]);
        }

        return route('docs', $path);
    }

    /**
     * @param $path
     * @return bool
     */
    public static function active($path): bool
    {
        return Str::endsWith(request()->path(), $path);
    }
}
