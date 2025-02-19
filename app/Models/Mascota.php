<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;
    protected $table = 'mascotas';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','especie','raza','fecha','hora','id_cliente'];
    public $timestamps = false;
}
