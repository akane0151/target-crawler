<?php
use Akane0151\TargetCrawler\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('crawl', [Controllers\TargetCrawlerController::class,'crawl']);
