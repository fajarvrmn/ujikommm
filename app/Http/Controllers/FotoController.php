<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Fotoooo;
use Session;
use App\Role;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foto = Fotoooo::all();
        return view('foto.index')->with(compact('foto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foto.create');
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
        $Fotoo = new Fotoooo;

        
        // Mengambil file yang diupload
        $uploaded_depan = $request->file('depan');
        // mengambil extension file
        $extension1 = $uploaded_depan->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename1 = md5(time()) . '.' . $extension1;
        // menyimpan logo ke folder public/img
        $destinationPath1 = public_path() . DIRECTORY_SEPARATOR . 'img';
        $uploaded_depan->move($destinationPath1, $filename1);
        // mengisi field logo di Fotoo dengan filename yang baru dibuat
        $Fotoo->depan = $filename1;
      

       
        // Mengambil file yang diupload
        $uploaded_belakang = $request->file('belakang');
        // mengambil extension file
        $extension2 = $uploaded_belakang->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename2 = md5(time()) . '.' . $extension2;
        // menyimpan logo ke folder public/img
        $destinationPath2 = public_path() . DIRECTORY_SEPARATOR . 'img';
        $uploaded_belakang->move($destinationPath2, $filename2);
        // mengisi field logo di Fotoo dengan filename yang baru dibuat
        $Fotoo->belakang = $filename2;
      

        // Mengambil file yang diupload
        $uploaded_kiri = $request->file('kiri');
        // mengambil extension file
        $extension3 = $uploaded_kiri->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename3 = md5(time()) . '.' . $extension3;
        // menyimpan kiri ke folder public/img
        $destinationPath3 = public_path() . DIRECTORY_SEPARATOR . 'img';
        $uploaded_kiri->move($destinationPath3, $filename3);
        // mengisi field kiri di Fotoo dengan filename yang baru dibuat
        $Fotoo->kiri = $filename3;
      
        
                // Mengambil file yang diupload
        $uploaded_kanan = $request->file('kanan');
        // mengambil extension file
        $extension4 = $uploaded_kanan->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename4 = md5(time()) . '.' . $extension4;
        // menyimpan kanan ke folder public/img
        $destinationPath4 = public_path() . DIRECTORY_SEPARATOR . 'img';
        $uploaded_kanan->move($destinationPath4, $filename4);
        // mengisi field logo di Fotoo dengan filename yang baru dibuat
        $Fotoo->kanan = $filename4;
      

        // Mengambil file yang diupload
        $uploaded_lainnya1 = $request->file('lainnya1');
        // mengambil extension file
        $extension5 = $uploaded_lainnya1->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename5 = md5(time()) . '.' . $extension5;
        // menyimpan lainnya1 ke folder public/img
        $destinationPath5 = public_path() . DIRECTORY_SEPARATOR . 'img';
        $uploaded_lainnya1->move($destinationPath5, $filename5);
        // mengisi field logo di Fotoo dengan filename yang baru dibuat
        $Fotoo->lainnya1 = $filename5;
      

        // Mengambil file yang diupload
        $uploaded_lainnya2 = $request->file('lainnya2');
        // mengambil extension file
        $extension6 = $uploaded_lainnya2->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename6 = md5(time()) . '.' . $extension6;
        // menyimpan lainnya2 ke folder public/img
        $destinationPath6 = public_path() . DIRECTORY_SEPARATOR . 'img';
        $uploaded_lainnya2->move($destinationPath6, $filename6);
        // mengisi field logo di Fotoo dengan filename yang baru dibuat
        $Fotoo->lainnya2 = $filename6;
      
        
        // Mengambil file yang diupload
        $uploaded_lainnya3 = $request->file('lainnya3');
        // mengambil extension file
        $extension7 = $uploaded_lainnya3->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename7 = md5(time()) . '.' . $extension7;
        // menyimpan lainnya3 ke folder public/img
        $destinationPath7 = public_path() . DIRECTORY_SEPARATOR . 'img';
        $uploaded_lainnya3->move($destinationPath7, $filename7);
        // mengisi field logo di Fotoo dengan filename yang baru dibuat
        $Fotoo->lainnya3 = $filename7;
      
        

        // Mengambil file yang diupload
        $uploaded_lainnya4 = $request->file('lainnya4');
        // mengambil extension file
        $extension8 = $uploaded_lainnya4->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename8 = md5(time()) . '.' . $extension8;
        // menyimpan lainnya4 ke folder public/img
        $destinationPath8 = public_path() . DIRECTORY_SEPARATOR . 'img';
        $uploaded_lainnya4->move($destinationPath8, $filename8);
        // mengisi field logo di Fotoo dengan filename yang baru dibuat
        $Fotoo->lainnya4 = $filename8;
      
        
        // Mengambil file yang diupload
        $uploaded_lainnya5 = $request->file('lainnya5');
        // mengambil extension file
        $extension9 = $uploaded_lainnya5->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename9 = md5(time()) . '.' . $extension9;
        // menyimpan lainnya5 ke folder public/img
        $destinationPath9 = public_path() . DIRECTORY_SEPARATOR . 'img';
        $uploaded_lainnya5->move($destinationPath9, $filename9);
        // mengisi field logo di Fotoo dengan filename yang baru dibuat
        $Fotoo->lainnya5 = $filename9;


        
  $Fotoo->save();

  return redirect()->route('Foto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $foto = Fotoooo::find($id);
        return view('foto.show', compact('foto'));
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
        $foto = Fotoooo::destroy($id);
        return redirect()->route('Foto.index');

    }
}
