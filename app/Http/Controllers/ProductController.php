<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function index()
    {
       $products = Product::all();
       return view('products.index', compact('products'));
    }

    
    public function create()
    {
        return view('products.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'rfc' => 'required|string|max:13',
            'clave_puesto' => 'required|integer',
            'horas_asignadas' => 'required|integer|min:0',
            'fecha_ingreso_puesto' => 'required|date',
            'fecha_termino_puesto' => 'required|date|after:fecha_ingreso_puesto',
            'fecha_de_ratificacion_puesto' => 'required|date|after_or_equal:fecha_ingreso_puesto',
    ]);

    $product=new Product();
    $product->rfc = $request->rfc;
    $product->clave_puesto = $request->clave_puesto;
    $product->horas_asignadas = $request->horas_asignadas;
    $product->fecha_ingreso_puesto = $request->fecha_ingreso_puesto;
    $product->fecha_termino_puesto = $request->fecha_termino_puesto;
    $product->fecha_de_ratificacion_puesto = $request->fecha_de_ratificacion_puesto;
    $product->save();

    return redirect()->route('products.index')->with('success', 'Usuario creado correctamente.');
    }


    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }


    public function update(Request $request, Product $product)
    {
        $request->validate([
            'rfc' => 'required|string|max:13',
            'clave_puesto' => 'required|integer',
            'horas_asignadas' => 'required|integer|min:0',
            'fecha_ingreso_puesto' => 'required|date',
            'fecha_termino_puesto' => 'required|date|after:fecha_ingreso_puesto',
            'fecha_de_ratificacion_puesto' => 'required|date|after_or_equal:fecha_ingreso_puesto',
        ]);

        $product->rfc = $request->rfc;
        $product->clave_puesto = $request->clave_puesto;
        $product->horas_asignadas = $request->horas_asignadas;
        $product->fecha_ingreso_puesto = $request->fecha_ingreso_puesto;
        $product->fecha_termino_puesto = $request->fecha_termino_puesto;
        $product->fecha_de_ratificacion_puesto = $request->fecha_de_ratificacion_puesto;
        $product->save();

        return redirect()->route('products.index')->with('success', 'Puesto actualizado correctamente.');
    }

    
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Puesto eliminado correctamente.');
    }
}
