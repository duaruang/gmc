<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidForKey;

class Setting extends Model
{
    use HasFactory, UuidForKey;

    protected $table = 'setting';
    protected $primaryKey = 'setting_id';

    protected $fillable = [
        'logo',
        'footer_img',
        'kontak1_name',
        'kontak1_phone',
        'kontak2_name',
        'kontak2_phone',
        'email',
        'link_fb',
        'link_twitter',
        'link_ig',
        'link_yt',
        'link_nav',
        'address',
        'keterangan',
        'bantuan',
    ];
    public function getImageUrlAttribute()
    {
        return asset('assets/images/' . $this->logo);
    }
    public function getFooterUrlAttribute()
    {
        return asset('assets/images/' . $this->footer_img);
    }
}
