<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public static function getAll() {
      return Animal::all();
    }

    public static function seek($request) {
        $id = $request->id;
        $animal = Animal::find($id);
        return $animal;
    }

    public static function add($request) {
        $animal = new Animal();
        $animal->name = $request->name;
        $animal->age = $request->age;
        $animal->description = $request->description;
        $animal->sex = $request->sex;
        $animal->weight = $request->weight;
        $animal->species_id = $request->species_id;
        $animal->save();
        return;
    }

    public static function edit($request) {
        $id = $request->id;
        $animal = Animal::find($id);

        $animal->name = $request->name;
        $animal->age = $request->age;
        $animal->description = $request->description;
        $animal->sex = $request->sex;
        $animal->weight = $request->weight;
        $animal->species_id = $request->species_id;

        $animal->save();
        return;
    }

    public static function deleteOne($request) {
        Animal::destroy($request->id);
        return;
    }

    public function species() {
        return $this->belongsTo('App\Species');
    }
}
