<?php

return [

    /*
    |--------------------------------------------------------------------------
    | File generated
    |--------------------------------------------------------------------------
    |
    | A value indicating when the records were generated
    |
    */

    'generated' => env('APP_GENERATED', LARAVEL_START),


    /*
    |--------------------------------------------------------------------------
    | Time Period
    |--------------------------------------------------------------------------
    |
    | The time period for which it is necessary to take news
    | Indicate in hours: 1,2..n
    |
    */

    'period' => 12,

    /*
    |--------------------------------------------------------------------------
    | Story
    |--------------------------------------------------------------------------
    |
    | Options for defining similar articles and combining them
    |
    */

    'story'  => [
        'percent'  => 70,
        'minCount' => 1,//3,

        // Time difference when groups cannot be combined at all
        'diff' => 18000, //seconds

        // If the news was published at the same time, then increase the likelihood of their similarity
        'increasedPercentage' => [
            'diff'    => 3600, // seconds
            'percent' => 10,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | News
    |--------------------------------------------------------------------------
    |
    | Options ...
    |
    */

    'news'  => [
        'renderCount' => 10,
    ],

    /*
    |--------------------------------------------------------------------------
    | RSS Feed
    |--------------------------------------------------------------------------
    |
    | ...
    |
    */

    'rss' => [
        'https://www.watson.ch/api/1.0/rss/index.xml',
        'https://www.srf.ch/news/bnf/rss/1646',
        'https://www.nzz.ch/recent.rss',
        'https://www.blick.ch/news/rss.xml',
        'https://partner-feeds.publishing.tamedia.ch/rss/tagesanzeiger/ticker',
        'https://bazonline.ch/basel/rss.html',
        'https://partner-feeds.publishing.tamedia.ch/rss/derbund/ticker',
        'https://partner-feeds.20min.ch/rss/20minuten',
        'https://partner-feeds.publishing.tamedia.ch/rss/bazonline/ticker',
        'https://www.faz.net/rss/aktuell/',
        'https://www.srf.ch/news/bnf/rss/1890',
        'https://telebasel.ch/feed/',
        'https://www.watson.ch/api/1.0/rss/index.xml?tag=Schweiz',
        'https://newsfeed.zeit.de/index',
        'https://rss.sueddeutsche.de/app/service/rss/alles/index.rss?output=rss',
        'https://partner-feeds.publishing.tamedia.ch/rss/bernerzeitung/ticker',
        'https://www.luzernerzeitung.ch/schweiz.rss',
        'https://www.tagblatt.ch/schweiz.rss',
        'https://www.persoenlich.com/rss/news.xml',
        'https://insideparadeplatz.ch/feed/',
        'http://www.news.ch/rss/letztenews.xml',
        'https://www.netzwoche.ch/taxonomy/term/31/feed',
        'https://t3n.de/rss.xml',
        'https://rss.golem.de/rss.php?feed=RSS2.0',
        'https://www.heise.de/rss/heise-atom.xml',
        'https://www.derstandard.at/rss',
        'https://www.diepresse.com/rss/home',
        'https://www.kleinezeitung.at/rss/chronik',
        'https://kurier.at/xml/rssd',
    ],
    
    /*
    'rss' => [
        // smi
        'https://www.vedomosti.ru/rss/news',
        'https://istories.media/rss/all.xml',
        'https://life.ru/rss',
        'https://vz.ru/rss.xml',
        'https://www.ridus.ru/rss/news',
'https://www.fontanka.ru/rss.xml',
'https://www.kommersant.ru/RSS/news.xml',
'https://tvrain.ru/export/rss/all.xml',
'https://meduza.io/rss/news',

'https://tjournal.ru/rss',
'https://zona.media/rss',
'https://rtvi.com/rss',
'https://takiedela.ru/feed/',
'https://paperpaper.ru/feed/',
'https://www.yuga.ru/articles.rss',
'https://tayga.info/rss',
'https://7x7-journal.ru/rss/default.xml',
'https://mash.ru/rss',
'https://eadaily.com/ru/rss/index.xml',
'https://www.vtimes.io/rss',
'https://holod.media/feed/',
'https://verstka.media/feed/',
'https://kedr.media/feed',
'https://novayagazeta.eu/feed/rss',
'https://vc.ru/rss',
'https://www.rosbalt.ru/feed/',
'https://republic.ru/export/all.xml',
'https://graniru.org/export/all-atom.xml',
'https://www.svoboda.org/api/',
'https://feeds.bbci.co.uk/russian/rss.xml',
'https://ovdinfo.org/rss.xml',
'https://navalny.com/blog/post.rss',
'https://theins.ru/feed',
'https://rss.dw.com/xml/rss-ru-all',
'https://thebell.io/feed',
'https://www.golosameriki.com/api/',
'https://paperpaper.ru/feed/',
'https://www.the-village.ru/api/spaces/2/rss.xml',
'https://roskomsvoboda.org/feed/',
'https://ura.news/rss',
'https://cherta.media/feed/',
        
        'http://www.aif.ru/rss/news.php',
        'http://lenta.ru/rss/',
        'http://www.rian.ru/export/rss2/index.xml',
        'http://russian.rt.com/rss/',
        'https://www.gazeta.ru/export/rss/lenta.xml',
        'http://www.aif.ru/rss/news.php',
        'http://vz.ru/rss.xml',
        'http://www.vedomosti.ru/newsline/out/rss.xml',
        'http://tass.ru/rss/v2.xml?sections=MjU%3D',
        'http://www.vesti.ru/vesti.rss',
        'https://www.mk.ru/rss/news/index.xml',
        'https://dailystorm.ru/media/rss.xml',
        'https://360tv.ru/rss/',
        'https://www.interfax.ru/rss.asp',
        'https://www.forbes.ru/newrss.xml',
        //'https://ura.news/rss',
        'https://www.znak.com/rss',
        'https://takiedela.ru/feed',
        'https://regnum.ru/rss/russian/',
        'https://rg.ru/xml/index.xml',
        'https://www.ng.ru/rss/',

        'https://rtvi.com/rss/',

        'https://regnum.ru/rss/news.html',
        'https://live24.ru/rss.xml',
        'https://takiedela.ru/feed/',
        'https://paperpaper.ru/feed/',
        'https://www.yuga.ru/articles.rss',
        'https://tayga.info/rss',
        'https://7x7-journal.ru/rss/default.xml',
        'https://mash.ru/rss',
        'https://ria.ru/export/rss2/archive/index.xml',
        'https://eadaily.com/ru/rss/index.xml',
        'https://www.vtimes.io/rss',

        // foreign
        'https://gordonua.com/xml/rss_category/top.html',
        'https://nexta.news/feed/',
        'https://www.belta.by/rss',
        'https://telegraf.by/feed/',


        // blogs
        'https://varlamov.ru/data/rss',


        'https://rss.unian.net/site/news_rus.rss?',
    ],
*/
    
    /*
    |--------------------------------------------------------------------------
    | Ignore
    |--------------------------------------------------------------------------
    |
    | ...
    |
    */

    'ignore' => [
        'covers' => [
            'images/zenvz.jpg', // https://vz.ru/images/zenvz.jpg
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | tags
    |--------------------------------------------------------------------------
    |
    | ...
    |
    */

    'tags' => [
        //[
        //    'slug'     => \Illuminate\Support\Str::slug('Навальный'),
        //    'name'     => 'Навальный',
        //    'contains' => 'Навальный', 'ФБК', 'Навальн',
        //],
        [
            'slug'     => \Illuminate\Support\Str::slug('COVID-19'),
            'name'     => 'COVID-19',
            'contains' => 'коронавирус', 'ковид', 'covid', 'Спутник V', 'Спутника V',
        ],
        [
            'slug'     => \Illuminate\Support\Str::slug('Украина'),
            'name'     => 'Украина',
            'contains' => 'украи', 'Киев'
        ],
        [
            'slug'     => \Illuminate\Support\Str::slug('Беларусь'),
            'name'     => 'Беларусь',
            'contains' => 'Беларус', 'Беларус', 'Тихановск', 'Минск', 'Лукашенк'
        ],
        //[
        //    'slug'     => \Illuminate\Support\Str::slug('Северный поток'),
        //    'name'     => 'Северный поток',
        //    'contains' => 'Северный поток',
        //],
    ],

];
