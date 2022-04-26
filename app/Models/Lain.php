<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidForKey;

class Lain extends Model
{
    use HasFactory, UuidForKey;

    protected $table = 'lain';
    protected $primaryKey = 'lain_id';

    protected $fillable = [
        'image',
        'caption1',
        'caption2',
        'big_caption1',
        'big_caption2',
        'banner_bottom',
        'caption_banner',
        'link_button',
        'article_desc'
    ];
    public function getImageUrlAttribute()
    {
        return asset('assets/images/' . $this->image);
    }
}
