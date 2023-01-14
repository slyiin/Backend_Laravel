<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mall;

class MallController extends Controller
{
    public function index(){
        return Mall::all();

    }


    public function store(Request $request)
    {
        return Mall::create([
            'name' => $request->name,
            'address' => $request->address
        ]);
    }


    public function show($id)
    {
        return Mall::findOrFail($id);
    }


    public function destroy($id)
    {
       return Mall::find($id)->delete();
    }


    public function update(Request $request, $id)
    {
        Mall::find($id)->update([
            'name' => $request->name,
            'address' => $request->address
        ]);
    }
}
