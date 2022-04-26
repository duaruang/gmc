<?php

namespace App\Models;

use App\Traits\UuidForKey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory, UuidForKey;

    protected $table = 'donasi';
    protected $primaryKey = 'donasi_id';

    protected $fillable = [
        'user_id',
        'program_id',
        'admin_id',
        'bank_id',
        'amount',
        'status',
        'nomor',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bank_id');
    }

    public function prove()
    {
        return $this->hasOne(Prove::class, 'donasi_id');
    }
}
