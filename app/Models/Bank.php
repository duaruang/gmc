<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory, UuidForKey;

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'bank_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'program_id',
        'bank',
        'name',
        'number',
    ];
}
