<?php
use akane0151\targetCrawler\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('crawl', [Controllers\targetCrawlerController::class,'crawl']);
