<?php

namespace App\Http\Controllers;
use App\Models\Section;
use App\Models\Module;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // obtener lista de secciones por modulo
        $module = Module::find($id);

        $moduleName = $module->name;

        $sections = Section::where('module_id',$id)->get();
        
        $ress = User::menu();

        return view('module.list_sections',compact('sections','moduleName','ress'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // formulario para crear una nueva seccion

        $ress = User::menu();

        return view('module.new_sections',compact(['ress','id']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Guardar una seccion
        $sec = new Section();

        $sec->module_id = $request->input('module_id');

        $sec->name = $request->input('name');

        $sec->short_name = $request->input('short_name');

        $sec->save();

        return redirect()->route('module_list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
