<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Provinsi;

class ProvinsiController extends Controller
{
    public function index()
    {
        $provinsi = Provinsi::all()->toArray();
        return $provinsi;
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_provinsi' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors());
        }

        $provinsi = Provinsi::create([
            'nama_provinsi' => $request->nama_provinsi
        ]);

        if($provinsi) {
            return response()->json(['status' => 1]);
        } else {
            return response()->json(['status' => 0]);
        }
    }
    
    public function show($id)
    {
        $provinsi = Provinsi::find($id);
        return response()->json($provinsi);
    }
    
    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_provinsi' => 'required'
            ]);
            
        if($validator->fails()) {
            return response()->json($validator->errors());
        }
            
        $provinsi = Provinsi::find($id);
        $provinsi->update($request->all());
            
        if($provinsi) {
            return response()->json(['status' => 1]);
        } else {
            return response()->json(['status' => 0]);
        }        
    }
    
    public function destroy($id)
    {
        $provinsi = Provinsi::find($id);
        $provinsi->delete();
        
        if($provinsi) {
            return response()->json(['status' => 1]);
        } else {
            return response()->json(['status' => 0]);
        }                
    }
}
