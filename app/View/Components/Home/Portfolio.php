<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Tailwind.css', 'Vue3'],
                'title' => 'Titre du projet3',
                'image' => url('/img/project.jpg'),
                'github' => 'https://github.com/Lejeunesage/projetdhonneur
                '
            ],
            [
                'category' => ['PHP', 'Bootstrap'],
                'title' => 'Titre du projet',
                'image' => url('/img/project.jpg'),
                'github' => 'https://github.com/Lejeunesage/teroc'
            ],
            [
                'category' => ['PHP', 'Laravel'],
                'title' => 'Titre du projet',
                'image' => url('/img/project.jpg'),
                'github' => 'https://github.com/Lejeunesage'
            ],
            [
                'category' => ['PHP'],
                'title' => 'Titre du projet',
                'image' => url('/img/project.jpg'),
                'github' => 'https://github.com/Lejeunesage'
            ],
            [
                'category' => ['VueJs', 'PHP'],
                'title' => 'Titre du projet',
                'image' => url('/img/project.jpg'),
                'github' => 'https://github.com/Lejeunesage'
            ],
            [
                'category' => ['Laravel', 'VueJs'],
                'title' => 'Titre du projet',
                'image' => url('/img/project.jpg'),
                'github' =>  'https://github.com/Lejeunesage'
            ],
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}