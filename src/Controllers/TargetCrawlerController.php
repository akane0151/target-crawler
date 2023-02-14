<?php
namespace Akane0151\TargetCrawler\Controllers;

use Illuminate\Http\Request;
use Akane0151\TargetCrawler\TargetCrawler;

class TargetCrawlerController
{
    public function crawl() {
        $target = TargetCrawler::doCrawl();
        return $target;
    }
}
