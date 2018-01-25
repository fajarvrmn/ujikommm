<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Iklan;
use App\Merekk;
use App\Tipe; 
use App\Pemasang;   
use Session;
use App\Role;

class IklannController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        //
        if($request->ajax()){
            $iklann = Iklan::with('Merekk','Tipe','Foto','Pemasang');
            return Datatables::of($iklann)
              ->addColumn('action',function($iklan){
                return view('datatable._action', [
                    'model'     => $iklan,
                    'form_url'  => route('Iklan.destroy',$iklan->id),
                    'edit_url'  => route('Iklan.edit',$iklan->id),
                    'confirm_message' => 'Yakin Ingin Menghapus ' . $iklan->name . ' ?' ]);
            })->make(true);

              }


        $html = $htmlBuilder
        ->addColumn(['data'=>'id','name'=>'id', 'title'=>'No'])
        ->addColumn(['data'=>'kondisi','name'=>'kondisi', 'title'=>'Kondisi'])
        ->addColumn(['data'=>'transmisi','name'=>'transmisi', 'title'=>'Transmisi'])
        ->addColumn(['data'=>'bahanbakar','name'=>'bahanbakar', 'title'=>'Bahan bakar'])
        ->addColumn(['data'=>'tahunkeluar','name'=>'tahunkeluar', 'title'=>'Tahun keluar'])
        ->addColumn(['data'=>'warna','name'=>'warna', 'title'=>'Warna'])
        ->addColumn(['data'=>'deskripsi','name'=>'deskripsi', 'title'=>'Deskripsi'])
        ->addColumn(['data'=>'harga','name'=>'harga', 'title'=>'Harga'])
        ->addColumn(['data'=>'Foto','name'=>'Foto', 'title'=>'Foto mobil'])


        ->addColumn(['data'=>'merekk.merek','name'=>'merekk.merek', 'title'=>'Merek Mobil'])
        ->addColumn(['data'=>'merekk.model','name'=>'merekk.model', 'title'=>'Model'])
        ->addColumn(['data'=>'tipe.nametipe','name'=>'tipe.namatipe', 'title'=>'Tipe'])


     

        ->addColumn(['data'=>'action','name'=>'action','title'=>'Action','orderable'=>false,'searchable'=>false]);
        return view('Iklann.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }
}
