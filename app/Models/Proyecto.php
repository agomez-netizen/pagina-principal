<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = 'proyectos';
    protected $primaryKey = 'id_proyecto';

    // si tu PK no es bigint, Laravel igual funciona, esto ayuda si es int
    public $incrementing = true;
    protected $keyType = 'int';

    // Laravel usará created_at y updated_at (ya los tienes)
    public $timestamps = true;

    protected $fillable = [
        'nombre',
        'descripcion',
        'direcccion',
        'activo',
    ];

    protected $casts = [
        'activo' => 'boolean',
    ];
}
