<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemapCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate sitemap.xml file';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $sitemapPath = public_path('sitemap.xml');

        $this->info('Generating sitemap.xml file...');

        $sitemap = Sitemap::create();
        $page = Url::create(url('/'))
            ->setLastModificationDate(
                Carbon::createFromTimestamp(
                    filemtime(base_path('resources/views/pages/home.blade.php'))
                )
            )
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(0.9);

        $sitemap->add($page);

        $this->info('Homepage added to sitemap.xml file');

        $pages = config('docs.pages');
        $version = config('docs.version');
        $fallbackVersion = config('docs.fallback_version');

        foreach ($pages as $page) {
            $children = $page['children'] ?? [];
            foreach ($children as $child) {
                $url = url($child['path']);

                $path = resource_path('contents/docs/'.$version.'/'.$child['path'].'.md');
                if (! file_exists($path)) {
                    $path = resource_path('contents/docs/'.$fallbackVersion.'/'.$child['path'].'.md');
                }

                $sitemap->add(
                    Url::create($url)
                        ->setLastModificationDate(
                            Carbon::createFromTimestamp(
                                filemtime($path)
                            )
                        )
                        ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                        ->setPriority(0.8)
                );

                $this->info($url.' added to sitemap.xml file');
            }
        }

        $sitemap->writeToFile($sitemapPath);

        // Minify the sitemap.xml file
        $this->info('Minifying sitemap.xml file...');
        $sitemapContent = file_get_contents($sitemapPath);
        $sitemapContent = str_replace("\n\n", "\n", $sitemapContent);
        $sitemapContent = str_replace(["\r", "\t"], '', $sitemapContent);
        $sitemapContent = str_replace('    ', ' ', $sitemapContent);
        $sitemapContent = str_replace('> <', '><', $sitemapContent);
        file_put_contents($sitemapPath, $sitemapContent);
    }
}
