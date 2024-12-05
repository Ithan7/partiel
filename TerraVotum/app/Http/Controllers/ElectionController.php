<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreElectionRequest;
use App\Http\Requests\UpdateElectionRequest;
use App\Models\Election;
use App\Models\Movement;
use App\Models\Parti;
use App\Models\Tour;

class ElectionController extends Controller
{
    public function index() {
        $elections = Election::getElections();
        $movements = Movement::getMovements();
        $parties = Parti::getParties();
        $tours = Tour::getTours();
        return view('election', ["elections"=>$elections, "movements"=>$movements, "parties"=>$parties, "tours"=>$tours]);
    }
}
