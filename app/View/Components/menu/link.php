<?php

namespace App\View\Components\menu;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\View\Component;

class link extends Component
{
    public string $href;
    public string $active;
    public string $title;
    public bool $toogle;
    public string $icon;

    public function __construct($href, $title, $icon, $active = null, $toogle = false)
    {
        $this->href = $href;
        $this->title = $title;
        $this->active = $active ?? $href;
        $this->toogle = $toogle;
        $this->icon = $icon;
    }

    public function render(): View
    {
        $item = ['menu-item', 'active' => $this->isActive()];
        $link = ['menu-link', 'menu-toggle' => $this->toogle];

        return view('components.menu.link', [
            'item' => Arr::toCssClasses($item),
            'link' => Arr::toCssClasses($link)
        ]);
    }

    protected function isActive(): bool
    {
        if (is_bool($this->active)) {
            return $this->active;
        }

        if (request()->is($this->active)) {
            return true;
        }

        if (request()->fullUrlIs($this->active)) {
            return true;
        }

        return request()->routeIs($this->active);
    }
}
