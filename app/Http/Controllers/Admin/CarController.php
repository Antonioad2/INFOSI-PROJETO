<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Brand;
use App\Model\Models;
use App\Model\Color;
use App\Model\Fuel;
use App\Model\Car;
use App\Model\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::with(['brand', 'color', 'fuel', 'models', 'supplier'])->get();
        return view('admin.cars.car.index', compact('cars'));
    }

    public function create()
    {
        $brands    = Brand::all();
        $models    = Models::all();
        $colors    = Color::all();
        $fuels     = Fuel::all();
        $suppliers = Supplier::all();

        return view('admin.cars.carCreate.index', compact('brands', 'models', 'colors', 'fuels', 'suppliers'));  
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'chassi'            => 'required|string|unique:cars,chassi',
            'category'          => 'required|in:Luxury,Standard,Economy',
            'models_id'         => 'required|exists:models,id',
            'color_id'          => 'required|exists:colors,id',
            'brand_id'          => 'required|exists:brands,id',
            'fuel_id'           => 'required|exists:fuels,id',
            'supplier_id'       => 'required|exists:suppliers,id',
            'manufacture_date'  => 'required|date',
            'registration_date' => 'required|date',
            'observations'      => 'nullable|string',
            'license_plate'     => 'required|string|unique:cars,license_plate',
            'image'             => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'car_insurance'     => 'nullable|string',
            'car_insurance_upload' => 'nullable|mimes:pdf|max:2048',
            'car_document'      => 'required|string|max:255',  
            'car_document_upload' => 'nullable|mimes:pdf|max:2048',
            'inspection_date'   => 'nullable|date',
            'inspection_document_upload' => 'nullable|mimes:pdf|max:2048',
        ]);

        // Upload de ficheiros
        foreach (['image', 'car_insurance_upload', 'car_document_upload', 'inspection_document_upload'] as $fileField) {
            if ($request->hasFile($fileField)) {
                $validated[$fileField] = $request->file($fileField)->store('cars', 'public');
            }
        }

        Car::create($validated);

        return redirect()->route('cars.index')->with('success', 'Carro criado com sucesso!');
    }

    public function show($id)
    {
        $car = Car::with(['brand', 'models', 'color', 'fuel', 'supplier'])->findOrFail($id);
        return view('admin.cars.carView.index', compact('car'));
    }

    public function edit($id)
    {
        $car       = Car::findOrFail($id);
        $brands    = Brand::all();
        $models    = Models::all();
        $colors    = Color::all();
        $fuels     = Fuel::all();
        $suppliers = Supplier::all();

        return view('admin.cars.carEdit.index', compact('car', 'brands', 'models', 'colors', 'fuels', 'suppliers'));
    }

    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);

        $validated = $request->validate([
            'category'          => 'required|in:Luxury,Standard,Economy',
            'models_id'         => 'required|exists:models,id',
            'color_id'          => 'required|exists:colors,id',
            'brand_id'          => 'required|exists:brands,id',
            'fuel_id'           => 'required|exists:fuels,id',
            'supplier_id'       => 'required|exists:suppliers,id',
            'manufacture_date'  => 'required|date',
            'registration_date' => 'required|date',
            'observations'      => 'nullable|string',
            'license_plate'     => 'required|string|unique:cars,license_plate,' . $car->id,
            'image'             => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'car_insurance'     => 'nullable|string',
            'car_insurance_upload' => 'nullable|mimes:pdf',
            'car_document'      => 'required|string|max:255',
            'car_document_upload' => 'nullable|mimes:pdf,doc,docx',
            'inspection_date'   => 'nullable|date',
            'inspection_document_upload' => 'nullable|mimes:pdf,doc,docx',
        ]);

        foreach (['image', 'car_insurance_upload', 'car_document_upload', 'inspection_document_upload'] as $fileField) {
            if ($request->hasFile($fileField)) {
                if ($car->$fileField) {
                    Storage::disk('public')->delete($car->$fileField);
                }
                $validated[$fileField] = $request->file($fileField)->store('cars', 'public');
            }
        }

        $car->update($validated);

        return redirect()->route('cars.index')->with('success', 'Carro atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $car = Car::findOrFail($id);

        foreach (['image', 'car_insurance_upload', 'car_document_upload', 'inspection_document_upload'] as $fileField) {
            if ($car->$fileField) {
                Storage::disk('public')->delete($car->$fileField);
            }
        }

        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Carro removido com sucesso!');
    }
}