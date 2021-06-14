<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detencion extends Model
{
    use HasFactory;

    protected $fillable = ['equipo_id',
                            'fecha',
                            'hora_inicio',
                            'hora_fin',
                            'turno',
                            'delta',
                            'motivo_id',
                            'motivo_detalle_id',
                            'tag_id',
                            'imputacion_id'
                        ];
    
    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    public function motivo()
    {
        return $this->belongsTo(Motivo::class);
    }

    public function submotivo()
    {
        return $this->belongsTo(MotivoDetalle::class , 'motivo_detalle_id');
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    public function imputacion()
    {
        return $this->belongsTo(Imputacion::class);
    }

}
