<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Permissions;
use App\Role;
use App\User;
use Illuminate\Support\Facades\Auth;


class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.permission.index' , [
            'user' => Auth::user(),
            'permissions' => Permissions::get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permission.create' , [
            'user' => Auth::user(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = [
            'name' => 'required|min:5|max:100',
        ];

        $messages = [
            'name.required' => 'Por favor , insira o nome da função',
        ]; 

        $request->validate($rules , $messages);

        $permission = new Permissions;
        $permission->name = $request->name;
        $permission->guard_name = 'admin';
        $permission->save();
        return redirect()->route('admin.permission.index');
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
    public function edit(Permissions $permission)
    {
        return view('admin.permission.edit', [
            'user' => Auth::user(),
            'permission' => $permission
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permissions $permission)
    {
        $permission->name = $request->name ; 
        $permission->save();

        return redirect()->route('admin.permission.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permissions $permission)
    {
        $permission->delete();
        return redirect()->route('admin.permission.index');
    }
}
