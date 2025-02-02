<?php

namespace App\Http\Controllers;

use App\Doc;
use Illuminate\Contracts\Support\Renderable;
use SEOMeta;

class HomeController extends Controller
{
    /**
     * Show the application welcome screen.
     *
     * @return Renderable
     */
    public function index()
    {
        SEOMeta::setTitle('Tailwind Simplicity for Flutter Apps');
        SEOMeta::setDescription('Transform the way you design Flutter apps with Wind. Bring the intuitive class-based styling of TailwindCSS to Flutter and build stunning, responsive applications faster than ever — no compromises, no extra runtime.');

        return view('pages.home');
    }

    public function pdf()
    {
        $pages = collect(config('docs.pages'))->pluck('children')->flatten(1)->pluck('path')->toArray();

        $contents = collect($pages)->map(function ($path) {
            return Doc::render($path, null, true);
        })->join("\n");

        return $contents;
    }
}
