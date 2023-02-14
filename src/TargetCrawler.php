<?php

namespace Akane0151\TargetCrawler;
use Symfony\Component\HttpClient\HttpClient;
use Goutte\Client;
class TargetCrawler
{
    public static function doCrawl(){
        try{
            $url = config("targetCrawler.url");
            $elements = config("targetCrawler.elements");

            $client = new Client(HttpClient::create(['timeout' => 60]));
            $crawler = $client->request('GET', $url);
            $targetData = [];
            $i = 1;
            foreach ($elements as $target){
                $targetData["data".$i]=$crawler->filter($target)->first()->text();
                $i++;
            }

            return $targetData["data1"];
        }
        catch(\Exception $e)
        {
            return $e->getMessage();
        }
    }

}
