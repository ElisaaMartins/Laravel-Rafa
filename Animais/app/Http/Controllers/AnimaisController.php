<?php

namespace App\Http\Controllers;

use App\Models\AnimaisModel;
use Illuminate\Http\Request;

class AnimaisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo csrf_token();
        $Animais = AnimaisModel::all();
        return $Animais;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        AnimaisModel::created($request->all());
        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AnimaisModel $Animais)
    {
        $Animais->fill($request->all());
        $Animais->save();
        return "Animal atualizado";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnimaisModel $Animais)
    {
        AnimaisModel::destroy($Animais->id);
        return "Animal excluido";
    }
}
