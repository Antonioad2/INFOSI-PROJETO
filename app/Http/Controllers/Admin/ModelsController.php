<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Models; // Assuming you have a Models model

class ModelsController extends Controller
{
    //
     public function index()
    {
        $models = Models::all();
        return view('admin.models.model.index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.models.modelCreate.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'date' => 'nullable|date',
        ], [
            'name.required' => 'O nome é obrigátorio.',
            'description.max' => 'The description may not be greater than 1000 characters.',
            'date.date' => 'The date must be a valid date.',
        ]);
        Models::create([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
        ]);

        return redirect()->route('models.index')->with('success', 'Modelo criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Models $models)
    {
        //
        $model = Models::findOrFail($models->id);
        return view('admin.models.modelView.index', compact('model')); // Caminho diferente para view única
        //

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Models $models)
    {
        //
        return view('admin.models.modelEdit.index', ['model' => $models]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Models $models)
    {
        //
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'date' => 'nullable|date',
        ], [
            'name.required' => 'O nome é obrigátorio.',
            'description.max' => 'O campo descrição não pode ter mais de 1000 caracteres.',
            'date.date' => 'A data deve ser uma data válida.',
        ]);

        $models->update([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
        ]);
        return redirect()->route('models.index')->with('success', 'Modelo atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Models $models)
    {
        //
        $models->delete();

        return redirect()->route('models.index')->with('success', 'Modelo removida com sucesso!');
        //

    }
}
