<?php

namespace DesignPatterns\Structural\Proxy;

interface DownloaderInterface
{
    public function download(string $url): string;
}
