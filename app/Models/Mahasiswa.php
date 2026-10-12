<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Mahasiswa extends Model
{
    public function nilaiMatakuliah(): HasMany
{
    return $this->hasMany(
        NilaiMatakuliah::class,
        'mahasiswa_id'
    );
}
    use HasFactory;

    protected $fillable = ['nim', 'nama', 'email', 'prodi', 'semester'];
}
