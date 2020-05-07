<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class reklamAgency extends Model
{
    protected $guarded = ['*'];

/*    public static function soxr(Request $request)
    {
        $agency = new reklamAgency;
        $agency->name = $request->name;
        $agency->code = $request->code;
        $agency->type = $request->type;
        $agency->save();

    }*/

    public static function getAll()
    {
        $all = reklamAgency::select('id','name','code','type')->get();
        return $all;
    }

    public static function getOne($id)
    {
        $show = reklamAgency::select('id','name', 'code', 'type')->find($id);
        return $show;
    }
}
