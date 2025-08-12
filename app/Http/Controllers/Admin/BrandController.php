<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Brand; // Import the Brand model


class BrandController extends Controller
{
    //
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brands.brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.brandCreate.index');
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
        Brand::create([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
        ]);

        return redirect()->route('brands.index')->with('success', 'Marca criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        $brand = Brand::findOrFail($brand->id);
        return view('admin.brands.brandView.index', compact('brand')); // Caminho diferente para view única
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 public function edit(Brand $brand)
    {
        //
        return view('admin.brands.brandEdit.index', ['brand' => $brand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
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

        $brand->update([
            'name' => $request->name,
            'description' => $request->description,
            'date' => $request->date,
        ]);

        return redirect()->route('brands.index')->with('success', 'Marca atualizada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
        $brand->delete();

        return redirect()->route('brands.index')->with('success', 'Marca removida com sucesso!');
        //

    }
}
