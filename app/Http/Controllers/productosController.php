<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\productosModel;
use App\Models\tipos_productoModel;

class productosController extends Controller
{
    public $nombre_producto,$precio,$cantidad,$fechaDeIngreso,$id_tiposProducto;
    public $_id;
    public $InsertOrUpdate=false;


    public function index()
    {
        $productos = productosModel::all();
        return view('welcome', compact('productos'));
    }

    public function create()
    {
        $productos =productosModel::all();
        return view('welcome', compact('productos'));
    }
    
    public function store(Request $request)
    {
        $productos = new productosModel();
        $productos->nombre = $request->input('nombre_producto');
        $productos->precio = $request->input('precio');
        $productos->cantidad = $request->input('cantidad');
        $productos->fecha_ingreso = $request->input('fecha_ingreso');
        $productos->id_tipos_producto = $request->input('id_tipos_producto');
        $productos->save();

        return redirect()->route('welcome')->with('success', 'Producto creado exitosamente.');
    }

    public function edit($id)
    {
        $productos = productosModel::findOrFail($id);
        $tiposProductos = tipos_productoModel::all();
        return view('welcome', compact('productos', 'tiposProductos'));
    }

    public function update(Request $request, $id)
    {
        $productos = productosModel::findOrFail($id);
        $productos->nombre = $request->input('nombre_producto');
        $productos->precio = $request->input('precio');
        $productos->cantidad = $request->input('cantidad');
        $productos->fecha_ingreso = $request->input('fecha_ingreso');
        $productos->id_tipos_producto = $request->input('id_tipos_producto');
        $productos->save();

        return redirect()->route('welcome')->with('success', 'Producto actualizado exitosamente.');
    }
    public function destroy($id)
    {
        $productos = productosModel::findOrFail($id);
        $productos->delete();

        return redirect()->route('welcome')->with('success', 'Producto eliminado exitosamente.');
    }


}
