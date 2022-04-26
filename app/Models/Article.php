<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory, UuidForKey;

    protected $primaryKey = 'article_id';

    protected $fillable = [
        'title',
        'slug',
        'image',
        'source_url',
        'content',
        'published_at'
    ];

    public function getImageUrlAttribute()
    {
        return asset('images/article/' . $this->image);
    }

    public function getContentStrippedAttribute()
    {
        return Str::limit(strip_tags($this->content), 150, '...');
    }
}
