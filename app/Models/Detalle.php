<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;

    public function motivo()
    {
        return $this->belongsTo(Motivo::class);
    }

    public function motivo_detalle()
    {
        return $this->belongsTo(MotivoDetalle::class, 'motivos_detalle_id','id');
    }
}
