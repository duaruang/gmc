<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Slider extends Model
{
    use HasFactory, UuidForKey;

    protected $primaryKey = 'slider_id';

    protected $fillable = [
        'title',
        'subtitle',
        'image',
        'is_button',
        'button_link',
        'button_name'
    ];

    public function getImageUrlAttribute()
    {
        return asset('images/slider/' . $this->image);
    }

    public function getContentStrippedAttribute()
    {
        return Str::limit(strip_tags($this->content), 150, '...');
    }
}
