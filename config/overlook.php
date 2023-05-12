<?php

return [
    'includes' => [
        // App\Filament\Resources\Blog\AuthorResource::class,
        // App\Filament\Resources\Blog\AuthorResource::class,
        App\Filament\Resources\CategoryResource::class,
        App\Filament\Resources\PostResource::class,
    ],
    'excludes' => [
        // App\Filament\Resources\Blog\AuthorResource::class,
        App\Filament\Widgets\PostOverview::class    ],
];
