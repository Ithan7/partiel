<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Movement extends Model
{
    /** @use HasFactory<\Database\Factories\MovementFactory> */
    use HasFactory;
    use HasFactory;
    protected $table = 'mouvements';
    protected $fillable =  [
        'id',
        'name',
        'description',
    ];

    public static function getMovements() {
        // Création de la requête
        $req = "SELECT id, name
        FROM mouvements
        WHERE id=1";
        // Exécution et récupération de la requête
        $result = DB::select($req);
        // Retourner le result
        return $result;
    }
}
