<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\LogAdmins;

class PostController extends Controller
{
    public function ShowPostForm()
    {
        
        return view('admin.post.addPost' , [
            'user' => Auth::user()
        ]);
    }

    public function AddPost(Request $request)
    {
        $rules = [
            'namePost' => 'required|min:5|max:100',
            'subtitle' => 'required|min:5|max:100',
            'content' => 'required',
        ];

        $messages = [
            'namePost.required' => 'Por favor , insira o titulo do post',
            'subtitle.required' => 'Por favor , insira o subtitulo do post',
            'content.required' => 'Por favor , insira o conteúdo do post',
        ]; 

        $request->validate($rules , $messages);

         $NewPost = new Post;
         $NewPost->uri = $this->newUri($request->namePost);
         $NewPost->title = $request->namePost;
         $NewPost->subtitle = $request->subtitle;
         $NewPost->content = $request->content;
         $NewPost->author = Auth::user()->id;
         $NewPost->save();

         if($NewPost->id)
         {
            $json['message'] = $this->message->success('Uhuu , post adicionado com sucesso!')->render();
            $this->AddLog->addLog('addPost' , 'post adicionado com sucesso' , $request->getClientIp() , Auth::user()->id);
            return redirect()->route('admin.add.post');
         }
    }

    private function newUri($string = NULL){
        $procurar   = array('À','Á','Â','Ã','Ä','Å','Æ','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ò','Ó','Ô','Õ','Ö','Ø','Ù','Ú','Û','Ü','Ý','ß','à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ø','ù','ú','û','ü','ý','ÿ');
        $substituir = array('A','A','A','A','A','A','AE','C','E','E','E','E','I','I','I','I','D','N','O','O','O','O','O','O','U','U','U','U','Y','s','a','a','a','a','a','a','ae','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','o','u','u','u','u','y','y');
        return strtolower(str_replace($procurar, $substituir, (str_replace(' ', '-' , $string))));
    }

    public function AllPost()
    {       
        $posts = Post::orderBy('created_at')->with('Author')->get();

        return view('admin.post.allPost' , [
            'user' => Auth::user(),
            'posts' => $posts
        ]);
    }

    public function EditPost(Post $post)
    {
        return view('admin.post.editPost' , [
            'user' => Auth::user(),
            'post' => $post
        ]);
    }
}
