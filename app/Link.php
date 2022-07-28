<?php

namespace App;

class Link
{
    /**
     * @param string $url
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\UrlGenerator|string
     */
    public static function to(string $url)
    {
        if (config('app.env') === 'production') {
            return url($url.'.html');
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
        if (config('app.env') === 'production') {
            return route($name, $parameters, $absolute).'.html';
        }

        return route($name, $parameters, $absolute);
    }
}
