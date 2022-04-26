<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Legalitas extends Model
{
    use HasFactory, UuidForKey;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $table = 'legalitas';
    protected $primaryKey = 'legalitas_id';
    protected $fillable = [
        'name',
        'description'
    ];
}
