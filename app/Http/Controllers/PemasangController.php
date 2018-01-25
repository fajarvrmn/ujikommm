<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Pemasanggg;
use Session;
use App\Role;

class PemasangController extends Controller
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
            $pemasangg = Pemasanggg::all();
            return Datatables::of($pemasangg)
              ->addColumn('action',function($pemasanggg){
                return view('datatable._action', [
                    'model'     => $pemasanggg,
                    'form_url'  => route('Pemasanggg.destroy',$pemasanggg->id),
                    'edit_url'  => route('Pemasanggg.edit',$pemasanggg->id),
                    'confirm_message' => 'Yakin Ingin Menghapus ' . $pemasanggg->name . ' ?' ]);
            })->make(true);

              }


        $html = $htmlBuilder
        ->addColumn(['data'=>'id','name'=>'id', 'title'=>'No'])
        ->addColumn(['data'=>'nama','name'=>'nama', 'title'=>'Nama Lengkap'])
        ->addColumn(['data'=>'email','name'=>'email', 'title'=>'Email'])
        ->addColumn(['data'=>'telepon','name'=>'telepon', 'title'=>'No Telepon'])
        ->addColumn(['data'=>'alamat','name'=>'alamat', 'title'=>'Alamat Lengkap'])
        
      

        

        ->addColumn(['data'=>'action','name'=>'action','title'=>'Action','orderable'=>false,'searchable'=>false]);
        return view('pemasang.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('pemasang.create');
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
       $this->validate($request, [
            'nama'=>'required',
            'email'=>'required|email',
            'telepon'=>'required|numeric',
            'alamat'=>'required',
            
            
            ]);

        $user = new Pemasanggg;
        $user->nama = $request['nama'];
        $user->email = $request['email'];
        $user->telepon = $request['telepon'];
        $user->alamat = $request['alamat'];
        


        // $adminrole = Role::where('name', 'admin')->first();
        $user->save();
        return redirect()->route('Pemasang.index');
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
