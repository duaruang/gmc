<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class About extends Model
{
    use HasFactory, UuidForKey;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $table = 'about';
    protected $primaryKey = 'about_id';
    protected $fillable = [
        'description',
        'title',
        'subtitle',
        'image',
        'home_title',
        'home_desc',
        'home_image'
    ];

    public function getImageUrlAttribute()
    {
        return asset('images/tentang/' . $this->image);
    }
}
