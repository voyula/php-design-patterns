<?php

namespace DesignPatterns\Structural\Proxy;

class DownloaderProxy implements DownloaderInterface
{
    /**
     * @var Downloader
     */
    private $downloader;
    /**
     * @var string[]
     */
    private $cache = [];

    /**
     * @param Downloader $downloader
     */
    public function __construct(Downloader $downloader)
    {
        $this->downloader = $downloader;
    }

    /**
     * @param string $url
     *
     * @return string
     */
    public function download(string $url): string
    {
        if (!isset($this->cache[$url])) {
            echo 'CacheProxy MISS.';
            $result = $this->downloader->download($url);
            $this->cache[$url] = $result;
        } else {
            echo "CacheProxy HIT. Retrieving result from cache.\n";
        }

        return $this->cache[$url];
    }
}
