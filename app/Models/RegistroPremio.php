<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistroPremio extends Model
{
    use HasFactory;
    protected $table = 'registro_premios';

    public function premio()
    {
        return $this->belongsTo(Premio::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
