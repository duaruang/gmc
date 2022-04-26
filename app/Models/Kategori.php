<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidForKey;

class Kategori extends Model
{
    use HasFactory, UuidForKey;

    protected $table = 'kategori';
    protected $primaryKey = 'kategori_id';

    protected $fillable = [
        'nama',
        'kode',
        'keterangan',
        'image',
    ];
}
