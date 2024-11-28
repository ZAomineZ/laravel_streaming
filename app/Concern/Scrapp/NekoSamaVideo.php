<?php

declare(strict_types=1);

namespace App\Concern\Scrapp;

use App\Concern\Request\RequestGoutte;
use App\Exceptions\UrlNullException;
use Illuminate\Support\Str;

final class NekoSamaVideo
{
    public function __construct(
        protected RequestGoutte $requestGoutte
    )
    {
    }

    /**
     * @throws UrlNullException
     */
    public function scrapp(?string $url = null): string
    {
        if (null === $url) throw new UrlNullException("Cette anime page n'existe pas sur le site de neko-sama !");

        $request = $this->requestGoutte->get(NekoSama::HOME . $url);

        $html = $request->html();
        $lines = explode("\n", $html);
        $videoData = array_filter($lines, function (string $line) {
           $line = trim($line);
           return str_starts_with($line, "video[0] = 'https://www.pstream.net");
        });

        if (empty($videoData))  return "";

        $video = current($videoData);
        $video = trim($video);
        $videoParts = explode('video[0] = ', $video);
        $videoParts = array_filter($videoParts);
        $video = Str::replace(["'", ","], '', current($videoParts));

        dump('Video: ', $video);

        return $video ?? "";
    }
}
