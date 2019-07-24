<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
	
use Illuminate\Support\Facades\DB;

class mobilController extends Controller
{
    public function index()
    {
        $mobil = Mobil::orderBy('created_at', 'DESC')->paginate(100);
         return view('mobil.index', compact('mobil'));
    }
  
    public function create()
    {
        $mobil = mobil::orderBy('mobil_name', 'ASC')->get();
        return view('mobil.create', compact('mobil'));
    }

    public function store (Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'stock' => 'required|integer',
            'harga' => 'required|integer'
        ]);

        try{
            $user_data = [
                'name' => $request->get('name'),
                'stock' => $request->get('stock'),
                'harga' => $request->get('harga')
            ];
            DB::transaction(function() use ($user_data){
                mobil::create($user_data);
            });

            \Session::flash('pesan','Data berhasil di tambah');
            return redirect()->route('mobil.index');
        }catch(\Exception $e){
            return response()->json(['errors' => [$e->getMessage()]], 500);
        }
    } 

    public function destroy($id)
    {
        $mobil = mobil::findOrFail($id);
        $mobil->delete();
        return redirect()->back()->with(['success' => 'Mobil ' .$mobil->name . 'Telah Dihapus']);
    }

    public function edit($id)
    {
        $mobil = mobil::orderBy('name', 'ASC')->get();
        $mobil = mobil::findOrFail($id);
        return view('mobil.edit', compact('mobil'));
    }

    public function update(Request $request, $id) 
    { 
            $data = mobil::findOrFail($id);   

            $data->update($request->all());
        
            return redirect()->route('mobil.index');
    }


}
