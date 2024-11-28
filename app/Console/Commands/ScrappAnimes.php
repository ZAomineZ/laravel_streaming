<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Concern\Scrapp\NekoSamaAnime;
use App\Concern\Scrapp\NekoSamaVideo;
use App\Services\EpisodeService;
use Exception;
use Illuminate\Console\Command;

final class ScrappAnimes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrapp:anime';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ceci est une description pour scrapp tous les animes.';

    public function __construct(
        protected NekoSamaAnime $nekoSamaAnime,
        protected NekoSamaVideo $nekoSamaVideo,
        protected EpisodeService $episodeService
    )
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     * @throws Exception
     */
    public function handle(): void
    {
        // Scrapp animes and episodes
        //$this->nekoSamaAnime->scrapp();
        // Scrapp video for each episodes
        $episodes = $this->episodeService->all();
        foreach ($episodes as $episode) {
            $url = $episode->url;

            $videoURL = $this->nekoSamaVideo->scrapp($url);

            $episode->update(['video_url' => $videoURL]);
        }

        $this->info('All anime was scrapped with success !');
    }
}
