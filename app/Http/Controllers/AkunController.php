<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\User;
use Session;
use App\Role;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        //
    // return view('akuntabel.index');
        $akun= User::all();
        return view('akuntabel.index', compact('akun'));




    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('akuntabel.create');
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
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|string|min:6']);

            $user = new User;
            $user->name = $request['name'];
            $user->email = $request['email'];
            $user->password = bcrypt($request['password']);

            $adminRole = Role::where('name','admin')->first();
            $user->save();
            $user->attachRole($adminRole);

        return redirect('/admin/User');
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

         $akun = Wilayahhh::findOrFail($id);
        return view('Akun.edit',compact('akun'));

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
       

        

$this->validate($request, [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:6']);
      
        $akun = User::find($id);
        $akun->update($request->all());
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan data dengan Username : $akun->name, Email : $akun->email"
        ]);
        return redirect()->route('Akun.index');

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
  User::destroy($id);
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Akun berhasil dihapus"
        ]);
        return redirect()->route('Akun.index');
    }
}
