<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'npm';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'npm',
        'name',
        'program_studi',
        'semester',
    ];

    public function users()
    {
        return $this->hasOne(User::class, 'mahasiswa_npm', 'npm');
    }
}
