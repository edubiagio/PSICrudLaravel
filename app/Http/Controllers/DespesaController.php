<?php

namespace App\Http\Controllers;

use App\Models\Despesa;
use Illuminate\Http\Request;

class DespesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
    }

    public function index()
    {
        $despesa = Despesa::paginate();
        return view('indexDespesa', compact('despesa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createDespesa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matricula_usuario_inclusao = getenv("username");
        $input = $request->validate([
            'Unidade' => 'required|string',
            'Valor' => 'required',
            'observacao' => 'string',
            //'matricula_usuario_inclusao'=>'required',
            'Data' => 'required'
        ]);


        $ret = Despesa::create([
            'co_unidade_demandante' => $input['Unidade'],
            'vr_total' => $input['Valor'],
            'matricula_usuario_inclusao' => $matricula_usuario_inclusao,
            'dt_pagamento' => $input['Data'],
            'observacao' => $input['observacao']
        ]);

        return redirect('/Despesas/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $despesa = Despesa::find($id);
        return view('showDespesa', compact('despesa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $despesa = Despesa::find($id);
        return view('editDespesa', compact('despesa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Despesa::findOrFail($request->id)->update($request->all());
        return redirect('/Despesas/');

    }

    /**
     * show the specified resource from storage before destroy
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $despesa = Despesa::find($id);
        return view('deleteDespesa', compact('despesa'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $despesa = Despesa::find($id);
        $despesa->delete();
        return redirect('/Despesas/');
    }
}
