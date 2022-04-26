<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relawan extends Model
{
    use HasFactory, UuidForKey;

    protected $table = 'relawan';
    protected $primaryKey = 'relawan_id';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'birth_place',
        'birth_date',
        'address',
        'skill',
        'hoby',
        'work_exp',
        'organization_exp',
        'last_education',
        'facebook',
        'instagram',
        'twitter',
        'ktp',
        'photo',
        'status'
    ];
    
    public function getPhotoUrlAttribute()
    {
        return asset('images/photo/'.$this->photo);
    }
}
