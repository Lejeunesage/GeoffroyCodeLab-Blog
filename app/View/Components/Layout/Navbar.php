<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public array $navigationItems = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->navigationItems = [
            ['label' => 'A propos', 'href' => '#about'],
            ['label' => 'Projets', 'href' => '#portfolio'],
            ['label' => 'Tutoriels de codage', 'href' => '#tutorials'],
            ['label' => 'Contact', 'href' => '#contact'],
            ['label' => 'Blog', 'href' => '/' ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.navbar');
    }
}
