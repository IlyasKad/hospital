<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model {
    public static function getAll(){
        return  Admin::all();

    }
}