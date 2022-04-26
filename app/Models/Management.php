<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Management extends Model
{
    use HasFactory, UuidForKey;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $table = 'management';
    protected $primaryKey = 'management_id';
    protected $fillable = [
        'name',
        'image',
        'jabatan',
        'description'
    ];
    public function getImageUrlAttribute()
    {
        return asset('images/management/' . $this->image);
    }

    public function getContentStrippedAttribute()
    {
        return Str::limit(strip_tags($this->description), 150, '...');
    }
}
