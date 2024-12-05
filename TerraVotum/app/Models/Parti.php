<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Parti extends Model
{
    /** @use HasFactory<\Database\Factories\PartiFactory> */
    use HasFactory;
    protected $table = 'partis';
    protected $fillable =  [
        'id',
        'mouvement_id',
        'name',
        'description',
    ];

    public static function getParties() {
        // Création de la requête
        $req = "SELECT mouvement_id, name, description 
        FROM partis
        WHERE mouvement_id=1";
        $result = DB::select($req);
        // Retourner le result
        return $result;
    }
}
