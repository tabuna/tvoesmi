<?php

namespace App\View\Components;

use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Story extends Component
{
    /**
     * @var string|null
     */
    public $image;

    /**
     * @var string
     */
    public $internalLink;

    /**
     * @var string
     */
    public $favicon;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $title;

    /**
     * @var
     */
    public $pubDate;

    /**
     * @var string
     */
    public $link;

    /**
     * @var Collection
     */
    public $items;

    /**
     * @var Collection
     */
    public $sources;

    /**
     * Create a new component instance.
     *
     * @param Collection $story
     */
    public function __construct(Collection $story)
    {
        $main = $story->get('main');

        $this->title = $main->title;
        $this->domain = $main->domain;
        $this->favicon = $main->favicon;
        $this->image = $main->image;
        $this->internalLink = $main->internalLink;
        $this->link = $main->link;
        $this->pubDate = $main->pubDate->jsonSerialize();


        $this->main = $story->get('main');
        $this->items = $story->get('items');


        $this->sources = $story->get('items')->pluck('favicon', 'domain')->unique();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.story');
    }
}
