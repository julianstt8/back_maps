<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mapsModel extends Model
{
    use HasFactory;
    protected $table = "map_coordenadas";
    protected $primaryKey = "id_marker";
    public $incrementing = true;
    public $timestamps = false;
}
