<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    public static function getAll() {
      return Species::all();
    }

    public static function seek($request) {
        $id = $request->id;
        $species = Species::find($id);
        return $species;
    }

    public static function add($request) {
        $species = new Species();
        $species->name = $request->name;
        $species->description = $request->description;
        $species->save();
        return;
    }

    public static function edit($request) {
        $id = $request->id;
        $species = Species::find($id);

        $species->name = $request->name;
        $species->description = $request->description;

        $species->save();
        return;
    }

    public static function deleteOne($request) {
        Species::destroy($request->id);
        return;
    }
}
