<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tour extends Model
{
    /** @use HasFactory<\Database\Factories\TourFactory> */
    use HasFactory;
    protected $table = 'tours';
    protected $fillable =  [
        'election_id',
        'tour_nb',
        'pourcentage',
        'parti_id',
    ];

    public static function getTours() {
        // Création de la requête
        $req = "SELECT pourcentage, parti_id
        FROM tours";
        $result = DB::select($req);
        // Retourner le result
        return $result;
    }
}
