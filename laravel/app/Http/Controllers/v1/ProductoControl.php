<?php

namespace App\Http\Controllers\v1;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\v1\Producto; 

class ProductoController extends Controller
{
    function getAll()
    {
        $response= new \stdClass();
        $producto= Producto::all();
        $response->success=true;
        $response->data = $producto;
        return response()->json($response,200);
    }

    function getItem($id)
    {
        $response= new \stdClass();
        $producto= Producto::find($id);
        $response->success=true;
        $response->data = $producto;
        return response()->json($response,200);   
    }

    function store(Request $request)
    {
        $response = new \stdClass();
        $producto = new Producto();
        $producto->nombre = $request->nombre;        
        $producto->categoria = $request->categoria;
        $producto->marca = $request->marca;
        $producto->precio = $request->precio;
        $producto->presentacion = $request->presentacion;
        
        $producto->save();
        $response->success = true; 
        $response->data = $producto;
        return response()->json($response,200);   
    }

    function putUpdate(Request $request)
    {
        $response = new \stdClass();
        $producto = Producto::find($request->id);

        if($producto){
           $producto->nombre = $request->nombre;        
            $producto->categoria = $request->categoria;
            $producto->marca = $request->marca;
            $producto->precio = $request->precio;
            $producto->presentacion = $request->presentacion;
        
            $producto->save();
            $response->success = true;
            $response->data = $producto;
        }
        else{
            $response->success = false;
            $response->errors = ["el producto con el id ".$request->id."no existe"];
        }

        return response()->json($response, ($response->success?200:401));   
    }
    
    function patchUpdate(Request $request)
    {
        $response = new \stdClass();
        $producto = Producto::find($request->id);

        if($producto){
            if($request->nombre)
            $producto->nombre = $request->nombre;
            if($request->categoria)
            $producto->categoria = $request->categoria;
            if($request->marca)
            $producto->marca = $request->marca;
            if($request->precio)
            $producto->precio = $request->precio;
            if($request->presentacion)
            $producto->presentacion = $request->presentacion;
           
            $response->success = true;
            $response->data = $producto;
        }
        else{
            $response->success = false;
            $response->errors = ["el producto con el id ".$request->id." no existe"];
        }

        return response()->json($response, ($response->success?200:401));   
    }
    
    function delete($id)
    {
        $response = new \stdClass();
        $producto = Producto::find($id); 
        if($producto){
            $producto->delete();
            $response->success = true;

        }
        else{
            $response->success = false;
            $response->errors = ["el producto con el id ".$id." no existe"];
        }
        return response()->json($response, ($response->success?200:401));

    }
}