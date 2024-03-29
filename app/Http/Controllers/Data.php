<?php

namespace App\Http\Controllers;
use Redirect;
use Illuminate\Http\Request;
use App\ModelData;
use Illuminate\Support\Facades\Session;
class Data extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cek = Session::get('level');

        if ($cek == '11' ) {
            $data = ModelData::all();
        return Redirect::to('/data/11/edit');
            
        }
          elseif ($cek == '10') {
 $data = ModelData::all();
            return view('data',compact('data'));
             
          }
        
        


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('data_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        
        $data = new ModelData();
       $data->provinsi = $request->provinsi;
       $data->paslon1 = 0;
       $data->paslon2 = 0;
       $data->jumlah = $request->jumlah;
       $data->save();
       return redirect()->route('data.index')->with('alert-success','Berhasil Menambahkan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $data = ModelData::where('id',$id)->get();

        return view('data_edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

         $data = ModelData::where('id',$id)->first();
        $data->provinsi = $request->provinsi;
        $data->paslon1 = $request->paslon1;
        $data->paslon2 = $request->paslon2;
        $data->jumlah = $request->jumlah;
        $data->save();
        return redirect()->route('data.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $data = ModelData::where('id',$id)->first();
        $data->delete();
        return redirect()->route('data.index')->with('alert-success','Data berhasi dihapus!');
    }
}
