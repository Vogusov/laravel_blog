<?php

declare(strict_types=1);

namespace App\Services;

use App\Contracts\ParserContract;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserService implements ParserContract
{
    public function getParsedList(string $url): array
    {
        $xml = XMLParser::load($url);
        $data = $xml->parse([
            'title' => ['uses' => 'channel.title'],
            'link' => ['uses' => 'channel.link'],
            'description' => ['uses' => 'channel.description'],
            'image' => ['uses' => 'channel.image.url'],
            'news' => ['uses' => 'channel.item[title,link,description,enclosure,pubDate,guid]'],
        ]);
        return $data;
        // www.kinopoisk.ru/news.rss
    }
}
