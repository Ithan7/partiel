<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    /** @use HasFactory<\Database\Factories\ElectionFactory> */
    use HasFactory;
    protected $table = 'elections';
    protected $fillable =  [
        'pourcentage',
    ];

    public static function getElections() {
        // Création de la requête
        $req = "SELECT name
        FROM elections";
        $result = DB::select($req);
        // Retourner le result
        return $result;
    }
}
