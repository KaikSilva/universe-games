<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Post;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('created_at' , 'ASC')->get();
        return view('admin.users.viewUserAll', [
            'users' => $users,
            'user' => Auth::user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.newUser', [
            'user' => Auth::user()
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
            'email' => 'required|min:5|max:100',
            'senha' => 'required',
            'confSenha' => 'required',
        ];

        $messages = [
            'name.required' => 'Por favor , insira o titulo do post',
            'email.required' => 'Por favor , insira o subtitulo do post',
            'senha.required' => 'Por favor , insira o conteúdo do post',    
            'confSenha.required' => 'Por favor , confirme a senha',
        ]; 

        $request->validate($rules , $messages);
        $this->SaveImage->ImageRaiz($request->ImgPerfil);
        
        $NewUser = new User;
        $NewUser->name = $request->name;
        $NewUser->email = $request->email;
        $NewUser->password = bcrypt($request->senha);
        $NewUser->cover = $this->SaveImage->newImage($request->ImgPerfil);
        $NewUser->save();

        return redirect()->route('admin.user.show' , ['user' => $NewUser->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $posts = Post::where('author' , $user->id)->orderBy('created_at' , 'DESC')->get();
        return view('admin.users.viewUser', [
            'Author' => $user,
            'user' => Auth::user(),
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.editUser', [
            'Author' => $user,
            'user' => Auth::user()
        ]);
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
