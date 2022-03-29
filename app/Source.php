<?php

namespace App;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\HigherOrderCollectionProxy;
use Tabuna\Similar\Similar;

class Source
{
    /**
     * @return Collection|HigherOrderCollectionProxy
     */
    public static function getSimilarNews()
    {
        return once(function () {
            return collect(self::getJsonData('/api/similar-news.json'))
                ->map(function (array $group) {
                    $main = new News($group['main']);

                    $items = collect($group['items'])->map(function ($new) {
                        return new News($new);
                    })->sortByDesc('pubDate');

                    return collect([
                        'main'  => $main,
                        'items' => $items,
                    ]);
                });
        });
    }

    /**
     * @return Collection|HigherOrderCollectionProxy
     */
    public static function getLastNews()
    {
        return once(function () {
            return collect(self::getJsonData('/api/last-news.json'))
                ->map(function (array $item) {
                    return new News($item);
                })
                ->sortByDesc('pubDate');
        });
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function getMostTags(int $limit = 10)
    {
        $tags = [];

        self::getLastNews()
            ->map(function (News $news) {
                return $news->getKeywordsAttribute();
            })
            ->each(function (array $keys) use (&$tags) {
                foreach ($keys as $value) {
                    if (isset($tags[$value])) {
                        ++$tags[$value];
                    } else {
                        $tags[$value] = 1;
                    }
                }
            });

        $tags = collect($tags)
            ->sortDesc()
            ->map(function ($weight, $name) {
                return new Tag($name, $weight);
            })
            ->take(50);


        $similar = new Similar(function ($a, $b) {
            similar_text((string) $a, (string) $b, $copy);

            return 80 < $copy;
        });


        $sim = $similar->findOut($tags->toArray());

        return collect($sim)
            ->mapWithKeys(function (Collection $collection, string $name) {
                $weight = $collection->sum->getWeight();

                return [$name => $weight];
            })
            ->sortDesc()
            ->take($limit)
            ->keys();
    }

    /**
     * @return Collection|HigherOrderCollectionProxy
     */
    public static function getExchange()
    {
        return once(function () {
            return collect(self::getJsonData('/api/exchange.json'));
        });
    }

    /**
     * @param string $path
     *
     * @return array|mixed
     */
    private static function getJsonData(string $path)
    {
        if (! Storage::exists($path)) {
            return [];
        }

        return json_decode(
            Storage::get($path),
            true
        );
    }
}
