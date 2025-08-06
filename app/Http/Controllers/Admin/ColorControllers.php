<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Color;
use App\Http\Requests\ColorRequest;

class ColorController extends Controller
{
    //
    /**
     * Display a listing of the colors.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $colors = Color::all();
        return view('colors.index', compact('colors'));
    }

    /**
     * Show the form for creating a new color.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('colors.create');
    }

    /**
     * Store a newly created color in storage.
     *
     * @param  \App\Http\Requests\ColorRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ColorRequest $request)
    {
        Color::create($request->validated());
        return redirect()->route('colors.index')->with('success', 'Cor criada com sucesso!');
    }

    /**
     * Display the specified color.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $color = Color::findOrFail($id);
        return view('colors.show', compact('color'));
    }

    /**
     * Show the form for editing the specified color.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $color = Color::findOrFail($id);
        return view('colors.edit', compact('color'));
    }

    /**
     * Update the specified color in storage.
     *
     * @param  \App\Http\Requests\ColorRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
   public function update(ColorRequest $request, Color $color)
    {
        \Log::info('Update chamado', ['color_id' => $color->id, 'data' => $request->all()]);
        $color->update($request->validated());
        return redirect()->route('colors.index')->with('success', 'Cor atualizada com sucesso!');
    }

    /**
     * Remove the specified color from storage (soft delete).
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $color = Color::findOrFail($id);
        $color->delete();
        return redirect()->route('colors.index')->with('success', 'Cor deletada com sucesso!');
    }

    /**
     * Display a listing of soft-deleted colors.
     *
     * @return \Illuminate\View\View
     */
   public function trashed()
    {
        \Log::info('Método trashed chamado');
        $colors = Color::onlyTrashed()->get();
        \Log::info('Cores deletadas:', $colors->toArray());
        return view('colors.trashed', compact('colors'));
    }

    /**
     * Restore a soft-deleted color.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore($id)
    {
        $color = Color::withTrashed()->findOrFail($id);
        $color->restore();
        return redirect()->route('colors.index')->with('success', 'Cor restaurada com sucesso!');
    }
}