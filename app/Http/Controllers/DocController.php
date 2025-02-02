<?php

namespace App\Http\Controllers;

use App\Doc;
use SEOMeta;

class DocController extends Controller
{
    public function page($slug = null)
    {
        $page = $this->getPage($slug);
        SEOMeta::setTitle($page['title'] ?? 'Documentation');
        SEOMeta::setDescription($page['description'] ?? 'Documentation');

        return view('pages.doc', [
            'version' => Doc::version(),
            'contents' => Doc::render($page['path'] ?? 'index'),
        ]);
    }

    protected function getPage($slug)
    {
        $pages = collect(config('docs.pages'))->flatMap(function ($page) {
            return $page['children'] ?? [];
        });

        return $pages->firstWhere('path', $slug);
    }
}
