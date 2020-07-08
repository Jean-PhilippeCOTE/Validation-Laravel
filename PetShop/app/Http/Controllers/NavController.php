<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Species;

class NavController extends Controller
{
    public function home() {
        return view('home');
    }

    public function add() {
        return view('add');
    }

    /* Manage Animals display */

    public function animals() {
        return view('animalsListing', ['animals' => Animal::getAll()]);
    }

   public function addAnimal() {
        $species = Species::getAll();
        return view('addAnimal', ['species' => $species]);
    }

    public function getAnimalInfos(Request $request) {
        $animals = Animal::seek($request);
        $species = Species::getAll();
        return view('animalsEdit', ['request' => $animals,
                                    'species' => $species]);
    }

    /* Manage Species display */
    
    public function species() {
        return view('speciesListing', ['species' => Species::getAll()]);
    }

    public function addSpecies() {
        return view('addSpecies');
    }

    public function getSpeciesInfos(Request $request) {
        $species = Species::seek($request);
        return view('speciesEdit', ['request' => $species]);
    }
}
