<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

class ProductsController extends Controller
{
    public function index()
    {
        return Products::all();
    }

    public function show(Request $request)
    {
        return [
            Products::findOrFail($request->input('id')),
        ];
    }

    public function store(Request $request)
    {
        $id = Products::insertGetId($request->all());

        return $id;
    }

    public function update(Request $request)
    {
        // $validated = $request->id->validate([
        //     'id' => 'bail|required|int',
        // ]);
        
        Products::where('id', $request->id)
                ->update($request->data);
    }

    public function delete(Request $request)
    {
        Products::where('id', $request->id)
                ->delete();
    }
}
