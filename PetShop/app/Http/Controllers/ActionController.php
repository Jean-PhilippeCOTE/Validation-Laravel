<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Species;

class ActionController extends Controller
{

    /* CRUD for Animals */

    public function addAnimal(Request $request) {
        Animal::add($request);
        return redirect('/animalsListing');
    }

    public function editAnimal(Request $request) {
        Animal::edit($request);
        return redirect('/animalsListing');
    }

    public function deleteAnimal(Request $request) {
        Animal::deleteOne($request);
        return redirect('/animalsListing');
    }

    /* CRUD for Species */

    public function addSpecies(Request $request) {
        Species::add($request);
        return redirect('/speciesListing');
    }

    public function editSpecies(Request $request) {
        Species::edit($request);
        return redirect('/speciesListing');
    }

    public function deleteSpecies(Request $request) {
        Species::deleteOne($request);
        return redirect('/speciesListing');
    }
}
