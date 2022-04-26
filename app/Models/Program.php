<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Program extends Model
{
    use HasFactory, UuidForKey;

    protected $table = 'program';
    protected $primaryKey = 'program_id';

    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'image',
        'icon',
        'description',
        'target_amount',
        'ended_at',
        'kode'
    ];

    protected $casts = [
        'ended_at' => 'datetime'
    ];

    protected $appends = [
        'total_donasi',
        'percent',
        'image_url'
    ];

    public function donasi()
    {
        return $this->hasMany(Donasi::class, 'program_id');
    }

    public function donasi_approved()
    {
        return $this->hasMany(Donasi::class, 'program_id')->where('status', 2);
    }

    public function getDescriptionFormatedAttribute()
    {
        return Str::limit($this->description, 50, '...');
    }

    public function getTotalDonasiAttribute()
    {
        return $this->donasi_approved()->sum('amount');
    }

    public function getPercentAttribute()
    {
        if (!empty($this->target_amount)) {
            return ($this->total_donasi / $this->target_amount) * 100;
        } else {
            return 100;
        }
    }

    public function getImageUrlAttribute()
    {
        return asset('images/program/' . $this->image);
    }

    public function galeries()
    {
        return $this->hasMany(ProgramGalery::class, 'program_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'source_id');
    }

    public function bank()
    {
        return $this->hasMany(Bank::class, 'program_id');
    }
}
