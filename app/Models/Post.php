<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'body',
        'user_id',
        'active',
        'published_at',
        'meta_title', 
        'meta_description'
    ];

    protected $casts = [
        'published_at' => 'datetime'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function shortBody($words = 30): string
    {
        return Str::words(strip_tags($this->body), $words);
    }

    public function getFormattedDate()
    {
        // Convertir la date de publication en objet Carbon
        $published_at = Carbon::parse($this->published_at);

        // Définir la locale française
        $published_at_fr = $published_at->locale('fr_FR');

        // Formater la date en français
        return $published_at_fr->isoFormat('LL'); // ex: 13 mai 2022
    }

    public function getThumbnail()
    {
        if (str_starts_with($this->thumbnail, 'http')) {
            return $this->thumbnail;
        }

        return '/storage/' . $this->thumbnail;
    }

    // public function humanReadTime(): Attribute
    // {
    //     return new Attribute(
    //         get: function ($value, $attributes) {
    //             $words = Str::wordCount(strip_tags($attributes['body']));
    //             $minutes = ceil($words / 200);

    //             return $minutes . ' ' . str('min')->plural($minutes) . ', '
    //                 . $words . ' ' . str('word')->plural($words);
    //         }
    //     );
    // }
}
