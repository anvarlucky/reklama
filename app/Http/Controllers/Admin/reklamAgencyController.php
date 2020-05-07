<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\reklamAgency;

class reklamAgencyController extends Controller
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
        $this->viewPath = 'admin.reklamAgency.';
        $this->route = 'admin.reklam-agency.';
    }

    public function index()
    {
        $agencies = reklamAgency::getAll();
        return view($this->viewPath.'index',[
            'agencies' => $agencies,
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
        //dd($request);
        $agency = new reklamAgency;
        $agency->name = $request->name;
        $agency->code = $request->code;
        $agency->type = $request->type;
        $agency->save();
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
        $getOne = reklamAgency::getOne($id);
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
        $editOne = reklamAgency::getOne($id);
        return view($this->viewPath.'edit',[
            'editOne' => $editOne
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
        $agency = reklamAgency::getOne($id);
        $agency->name = $request->name;
        $agency->code = $request->code;
        $agency->type = $request->type;
        $agency->save();
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
