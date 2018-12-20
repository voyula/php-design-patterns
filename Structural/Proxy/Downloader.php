<?php

namespace DesignPatterns\Structural\Proxy;

class Downloader implements DownloaderInterface
{
    public function download(string $url): string
    {
        echo "Downloading a file from the Internet.\n";

        return $result;
    }
}
