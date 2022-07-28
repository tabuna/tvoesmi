<?php

namespace App;

use Illuminate\Support\Str;

class Link
{
    /**
     * @param string $url
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public static function to(string $url)
    {
        return url($url);

        if (config('app.env') === 'production') {
            return Str::of(url($url.'.html'))->replaceFirst(config('app.url'), '');
        }

        return url($url);
    }

    /**
     * @param $name
     * @param $parameters
     * @param $absolute
     *
     * @return string
     */
    public static function route($name, $parameters = [], $absolute = true)
    {
        return route($name, $parameters, $absolute);

        if (config('app.env') === 'production') {
            return Str::of(route($name, $parameters, $absolute).'.html')->replaceFirst(config('app.url'), '');
        }

        return route($name, $parameters, $absolute);
    }
}
