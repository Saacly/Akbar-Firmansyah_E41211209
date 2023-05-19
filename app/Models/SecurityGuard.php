<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecurityGuard extends Model
{
    use HasFactory;
    protected $table = 'security_guards';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama', 'nomor_identitas', 'alamat', 'nomor_hp'
    ];
}
