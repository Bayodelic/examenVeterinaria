<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinario extends Model
{
    use HasFactory;
    protected $table = 'veterinario';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre','apellido'];
    public $timestamps = false;

}
