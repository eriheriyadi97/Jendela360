<?php

namespace App\Http\Controllers;

use App\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    public function index()
    {
        $sales = Sales::orderBy('created_at', 'DESC')->paginate(100);
         return view('Sales.index', compact('sales'));
    }
  
    public function create()
    {
        $Sales = Sales::orderBy('Sales_name', 'ASC')->get();
        return view('Sales.create', compact('Sales'));
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'nama_pembeli' => 'required|string',
            'email' => 'nullable|string',
            'mobil_dibeli' => 'nullable|string',
        ]);

        try{
            $user_data = [
                'nama_pembeli' => $request->get('nama_pembeli'),
                'email' => $request->get('email'),
                'mobil_dibeli' => $request->get('mobil_dibeli')
            ];
            DB::transaction(function() use ($user_data){
                Sales::create($user_data);
            });

            \Session::flash('pesan','Data berhasil di tambah');
            return redirect()->route('sales.index');
        }catch(\Exception $e){
            return response()->json(['errors' => [$e->getMessage()]], 500);
        }
    } 

    public function destroy($id)
    {
        $sales = Sales::findOrFail($id);
        $sales->delete();
        return redirect()->back()->with(['success' => 'Kategori Berita ' .$sales->nama_pembeli . 'Telah Dihapus']);
    }

    public function edit($id)
    {
        $sales = Sales::orderBy('nama_pembeli', 'ASC')->get();
        $sales = Sales::findOrFail($id);
        return view('sales.edit', compact('sales'));
    }

    public function update(Request $request, $id) 
    { 
            $data = Sales::findOrFail($id);   

            $data->update($request->all());
        
            return redirect()->route('sales.index');
    }
}
