<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaTratamiento extends Model
{
    use HasFactory;
    protected $table = 'ventatratamiento';
    protected $primaryKey = 'id';
    protected $fillable = ['id','cantidad','total','fecha', 'id_tratamiento'];
    public $timestamps = false;
}
