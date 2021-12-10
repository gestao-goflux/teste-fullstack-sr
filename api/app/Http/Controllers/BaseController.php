<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class BaseController extends Controller
{

    protected $class;
    
    public function index()
    {
        return $this->class::paginate();
    }

    public function show(string $id)
    {
        $item = $this->class::find($id);

        if (is_null($item)) {
            return response()->json('', 204);
        }

        return $item;
    }

    public function save(Request $request)
    {
        return response()->json($this->class::create($request->all()), 201);
    }

    public function update($id, Request $request)
    {
        $item = $this->class::find($id);

        if (is_null($item)) {
            return response()->json([
                'error' => 'Item não encontrado'
            ], 404);
        }

        $item->fill($request->all());
        $item->save();

       return $item;
    }
}
