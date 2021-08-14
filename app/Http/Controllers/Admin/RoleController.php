<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use App\Permissions;
class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::get();
        return view('admin.role.index', [
            'roles' => $roles,
            'user' => Auth::user(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.create', [
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

        $role = new Role ; 
        $role->name = $request->name ; 
        $role->guard_name = 'admin'; 
        $role->save();

        return redirect()->route('admin.role.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('admin.role.edit', [
            'user' => Auth::user(),
            'role' => $role
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $rules = [
            'name' => 'required|min:5|max:100',
        ];

        $messages = [
            'name.required' => 'Por favor , insira o nome da função',
        ]; 

        $request->validate($rules , $messages);

        $role->name = $request->name;
        $role->save();
        return redirect()->route('admin.role.index');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $route = Route::where('id' , $id)->first();
        $role->delete();
        return redirect()->route('admin.route.index');
    }

    public function permissions(Role $role)
    {
        $permissions = Permissions::get();
        return view('admin.role.permission' , [
            'role' => $role,
            'permissions' => $permissions,
            'user' => Auth::user(),
        ]);
    }
    public function permissionsSync(Request $request , Role $role)
    {
        $permissionRequest = $request->except(['_token' , '_method']);

        foreach($permissionRequest as $key => $value)
        {
            $permission[] = Permissions::where('id' , $key)->first();
        }

        if(!empty($permission))
        {
            $role->syncPermission($permission);
        }else{
            $role->syncPermission(null);
        }

        return redirect()->route('role.permission' , ['role' => $role->id]);
    }
}
