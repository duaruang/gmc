<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\UuidForKey;

class Prove extends Model
{
    use HasFactory, UuidForKey;

    protected $table = 'prove';
    protected $primaryKey = 'prove_id';

    protected $fillable = [
        'donasi_id',
        'image',
    ];
}
