<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Models;
use App\Models\Color;
use App\Models\Fuel;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    /**
     * Lista todos os carros
     */
    public function index()
    {
        $cars = Car::all();
        return view('admin.cars.car.index', compact('cars'));
    }

    /**
     * Mostra o formulário de criação
     */
    public function create()
    {
        $brands = Brand::all();
        $models = Models::all();
        $colors = Color::all();
        $fuels = Fuel::all();

        return view('admin.cars.carCreate.index', compact('brands', 'models', 'colors', 'fuels'));
    }

    /**
     * Salva um novo carro
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'chassi' => 'required|string|unique:cars,chassi',
            'category' => 'required|in:Luxury,Standard,Economy',
            'models_id' => 'required|exists:models,id',
            'color_id' => 'required|exists:colors,id',
            'brand_id' => 'required|exists:brands,id',
            'fuel_id' => 'required|exists:fuels,id',
            'manufacture_date' => 'required|date',
            'registration_date' => 'required|date',
            'observations' => 'nullable|string',
            'license_plate' => 'required|string|unique:cars,license_plate',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'value' => 'required|numeric|min:0',
            'car_insurance' => 'nullable|string|max:255',
            'car_insurance_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'car_document' => 'required|string|max:255',
            'car_document_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle file uploads
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('car_images', 'public');
        }

        if ($request->hasFile('car_insurance_image')) {
            $validated['car_insurance_image'] = $request->file('car_insurance_image')->store('insurance_images', 'public');
        }

        if ($request->hasFile('car_document_image')) {
            $validated['car_document_image'] = $request->file('car_document_image')->store('document_images', 'public');
        }

        Car::create($validated);

        return redirect()->route('cars.index')->with('success', 'Carro criado com sucesso!');
    }

    /**
     * Mostra os detalhes de um carro
     */
    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('admin.cars.carView.index', compact('car'));
    }

    /**
     * Mostra o formulário de edição
     */
    public function edit($id)
    {
        $car = Car::findOrFail($id);
        $brands = Brand::all();
        $models = Models::all();
        $colors = Color::all();
        $fuels = Fuel::all();

        return view('admin.cars.carEdit.index', compact('car', 'brands', 'models', 'colors', 'fuels'));
    }

    /**
     * Atualiza um carro
     */
    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);

        $validated = $request->validate([
            'chassi' => 'required|string|unique:cars,chassi,' . $car->id,
            'category' => 'required|in:Luxury,Standard,Economy',
            'models_id' => 'required|exists:models,id',
            'color_id' => 'required|exists:colors,id',
            'brand_id' => 'required|exists:brands,id',
            'fuel_id' => 'required|exists:fuels,id',
            'manufacture_date' => 'required|date',
            'registration_date' => 'required|date',
            'observations' => 'nullable|string',
            'license_plate' => 'required|string|unique:cars,license_plate,' . $car->id,
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'value' => 'required|numeric|min:0',
            'car_insurance' => 'nullable|string|max:255',
            'car_insurance_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'car_document' => 'required|string|max:255',
            'car_document_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Handle file uploads and delete old files if new ones are uploaded
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($car->image) {
                Storage::disk('public')->delete($car->image);
            }
            $validated['image'] = $request->file('image')->store('car_images', 'public');
        }

        if ($request->hasFile('car_insurance_image')) {
            // Delete old insurance image if exists
            if ($car->car_insurance_image) {
                Storage::disk('public')->delete($car->car_insurance_image);
            }
            $validated['car_insurance_image'] = $request->file('car_insurance_image')->store('insurance_images', 'public');
        }

        if ($request->hasFile('car_document_image')) {
            // Delete old document image if exists
            if ($car->car_document_image) {
                Storage::disk('public')->delete($car->car_document_image);
            }
            $validated['car_document_image'] = $request->file('car_document_image')->store('document_images', 'public');
        }

        // Update the car record
        $car->update($validated);

        return redirect()->route('cars.index')->with('success', 'Carro atualizado com sucesso!');
    }

    /**
     * Remove um carro
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);

        // Delete associated images
        if ($car->image) {
            Storage::disk('public')->delete($car->image);
        }
        if ($car->car_insurance_image) {
            Storage::disk('public')->delete($car->car_insurance_image);
        }
        if ($car->car_document_image) {
            Storage::disk('public')->delete($car->car_document_image);
        }

        $car->delete();

        return redirect()->route('cars.index')->with('success', 'Carro removido com sucesso!');
    }
}