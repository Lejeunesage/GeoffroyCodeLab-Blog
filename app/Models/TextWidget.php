<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class TextWidget extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'image',
        'title',
        'content',
        'active'
    ];


    public static function getImage(string $key): string
    {
        $widget = TextWidget::query()
        ->where('key', $key)
        ->where('active', '=', 1)
        ->first();

        if (!$widget) {
            return '';
        }

        if($widget->image){

            return '/storage/' . $widget->image;
        }else {
            return '';
        }

       
    }

    public static function getTitle(string $key): string
    {
        $widget = TextWidget::query()
        ->where('key', $key)
        ->where('active', '=', 1)
        ->first();

        if (!$widget) {
            return '';
        }

        if($widget->title){

            return $widget->title;
        }else {
            return '';
        }
    }

    public static function getContent(string $key): string
    {
        $widget = Cache::get('text-widget-' . $key, function () use ($key) {
            return TextWidget::query()
            ->where('key', $key)
            ->where('active', '=', 1)
            ->first();
        });

        if (!$widget) {
            return '';
        }

        if($widget->content){

            return $widget->content;
        }else {
            return '';
        }
    }
}