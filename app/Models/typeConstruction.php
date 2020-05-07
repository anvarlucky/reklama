<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class typeConstruction extends Model
{
    protected $guarded = ['*'];

    public static function getOne($id)
    {
        $construction = typeConstruction::select('id','name','length', 'height', 'width')
            ->find($id);
        return $construction;
    }
}
