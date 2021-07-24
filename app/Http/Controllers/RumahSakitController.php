<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\RumahSakit;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RumahSakitController extends Controller
{
    public function index()
    {
        $rsakit = DB::table('rsakit')->join('provinsis', 'rsakit.provinsi_id', '=', 'provinsis.id')
            ->select('rsakit.*', 'provinsis.nama_provinsi')
            ->get();

        return response()->json($rsakit);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'alamat' => 'required',
            'provinsi_id' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json($validator->errors());
        }

        $rsakit = RumahSakit::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'provinsi_id' => $request->provinsi_id
        ]);

        if($rsakit) {
            return response()->json(['status' => 1]);
        } else {
            return response()->json(['status' => 0]);
        }
    }

    public function show($id)
    {
        $rsakit = DB::table('rsakit')->join('provinsis', 'rsakit.provinsi_id', '=', 'provinsis.id')                                   
            ->select('rsakit.*', 'provinsis.nama_provinsi')
            ->where('rsakit.id' , '=', $id)
            ->first();
                                   
        return response()->json($rsakit);
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'nama' => 'required',
                'alamat' => 'required',
                'provinsi_id' => 'required'
            ]
        );

        if($validator->fails()) {
            return response()->json($validator->errors());
        }

        $rsakit = RumahSakit::find($id);
        $rsakit->update($request->all());

        if($rsakit) {
            return response()->json(['status' => 1]);
        }
        else {
            return response()->json(['status' => 0]);
        }
    }

    public function destroy($id)
    {
        $rsakit = RumahSakit::find($id);
        $rsakit->delete();

        if($rsakit) {
            return response()->json(['status' => 1]);
        }
        else {
            return response()->json(['status' => 0]);
        }
    }    
}