<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotivoDetalle extends Model
{
    use HasFactory;

    public function detalle()
    {
        return $this->hasMany(Detalle::class);
    }
}
