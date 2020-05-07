<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\typeConstruction;

class typeConstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $viewPath;
    private $route;

    public function __construct()
    {
        $this->viewPath = 'admin.typeConstruction.';
        $this->route = 'admin.type-construction.';
    }

    public function index()
    {
        $constructions = typeConstruction::all();
        return view($this->viewPath.'index',
            ['constructions' => $constructions
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->viewPath.'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $construction = new typeConstruction;
        $construction->name = $request->name;
        $construction->length = $request->length;
        $construction->width = $request->width;
        $construction->height = $request->height;
        $construction->save();
        return redirect()->route($this->route.'index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getOne = typeConstruction::getOne($id);
        return view($this->viewPath.'show',[
            'getOne' => $getOne,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editOne = typeConstruction::getOne($id);
        return view($this->viewPath.'edit',
            [
               'editOne' => $editOne,
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $construction = typeConstruction::getOne($id);
        $construction->name = $request->name;
        $construction->length = $request->length;
        $construction->width = $request->width;
        $construction->height = $request->height;
        $construction->save();
        return redirect()->route($this->route.'index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
