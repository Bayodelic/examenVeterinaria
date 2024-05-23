<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    protected $table = 'consultas';
    protected $primaryKey = 'id';
    protected $fillable = ['id','id_mascota','fecha','hora','descripcion','veterinario','id_veterinario'];
    public $timestamps = false;
}
