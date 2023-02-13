<?php
namespace akane0151\targetCrawler\Controllers;

use Illuminate\Http\Request;
use mexaro\targetCrawler\TargetCrawler;

class targetCrawlerController
{
    public function crawl() {
        $target = TargetCrawler::doCrawl();
        return $target;
    }
}
