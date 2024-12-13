<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GrupoHorario extends Model
{
    use HasFactory;

    protected $fillable = ['grupo_id', 'lugar_id', 'dia', 'hora'];

    public function grupo(): BelongsTo
    {
        return $this->belongsTo(Grupo::class);
    }

    public function lugar()
    {
        return $this->belongsTo(Lugar::class);
    }

}
