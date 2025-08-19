<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SupplierController extends Controller
{
    public function index()
    {
        // Lista fornecedores com contagem de carros
        $suppliers = Supplier::withCount('cars')->get();
        return view('admin.suppliers.supplier.index', compact('suppliers'));
    }

    public function create()
    {
        return view('admin.suppliers.supplierCreate.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'                   => 'required|string|max:255|unique:suppliers,name',
            'email'                  => 'required|email|unique:suppliers,email',
            'phone'                  => 'nullable|string|max:20',
            'nif'                    => 'nullable|string|max:20|unique:suppliers,nif',
            'vehicle_logbook_upload' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:4096',
            'bi'                     => 'nullable|string|max:50',
            'bi_upload'              => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:4096',
            'address'                => 'nullable|string|max:255',
            'registration_date'      => 'nullable|date',
        ]);

        // Uploads
        if ($request->hasFile('vehicle_logbook_upload')) {
            $validated['vehicle_logbook_upload'] = $request->file('vehicle_logbook_upload')->store('suppliers/logbooks', 'public');
        }
        if ($request->hasFile('bi_upload')) {
            $validated['bi_upload'] = $request->file('bi_upload')->store('suppliers/bi', 'public');
        }

        Supplier::create($validated);

        return redirect()->route('suppliers.index')->with('success', 'Fornecedor criado com sucesso!');
    }

    public function show($id)
    {
        $supplier = Supplier::with('cars')->findOrFail($id);
        return view('admin.suppliers.supplierView.index', compact('supplier'));
    }

    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('admin.suppliers.supplierEdit.index', compact('supplier'));
    }

    public function update(Request $request, $id)
    {
        $supplier = Supplier::findOrFail($id);

        $validated = $request->validate([
            'name'                   => 'required|string|max:255|unique:suppliers,name,' . $supplier->id,
            'email'                  => 'required|email|unique:suppliers,email,' . $supplier->id,
            'phone'                  => 'nullable|string|max:20',
            'nif'                    => 'nullable|string|max:20|unique:suppliers,nif,' . $supplier->id,
            'vehicle_logbook_upload' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:4096',
            'bi'                     => 'nullable|string|max:50',
            'bi_upload'              => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:4096',
            'address'                => 'nullable|string|max:255',
            'registration_date'      => 'nullable|date',
        ]);

        // Substituir arquivos se houver novo upload
        if ($request->hasFile('vehicle_logbook_upload')) {
            if ($supplier->vehicle_logbook_upload) {
                Storage::disk('public')->delete($supplier->vehicle_logbook_upload);
            }
            $validated['vehicle_logbook_upload'] = $request->file('vehicle_logbook_upload')->store('suppliers/logbooks', 'public');
        }

        if ($request->hasFile('bi_upload')) {
            if ($supplier->bi_upload) {
                Storage::disk('public')->delete($supplier->bi_upload);
            }
            $validated['bi_upload'] = $request->file('bi_upload')->store('suppliers/bi', 'public');
        }

        $supplier->update($validated);

        return redirect()->route('suppliers.index')->with('success', 'Fornecedor atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);

        // Bloqueia exclusão se tiver carros
        if ($supplier->cars()->count() > 0) {
            return redirect()->route('suppliers.index')->with('error', 'Não é possível remover fornecedor com carros associados!');
        }

        // Apagar arquivos
        if ($supplier->vehicle_logbook_upload) {
            Storage::disk('public')->delete($supplier->vehicle_logbook_upload);
        }
        if ($supplier->bi_upload) {
            Storage::disk('public')->delete($supplier->bi_upload);
        }

        $supplier->delete();

        return redirect()->route('suppliers.index')->with('success', 'Fornecedor removido com sucesso!');
    }
}
