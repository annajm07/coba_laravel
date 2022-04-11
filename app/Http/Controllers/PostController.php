<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;

class PostController extends Controller
{

    public function view(Post $post){
        // $data = Posts::all();
        // $view = Posts::view($slug);
        
        // if($data->firstwhere('slug',$slug) == null){
        //     return "YOUR REQUEST NOT FOUND";
        //     die();
        // }
        return view('post',[
            'title'=>'Detail',
            'active' =>'detail',
            'post'=>$post]);
    }

    public function index(){   
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug',request('category'));
            $title = 'in '.$category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username',request('author'));
            $title = 'by '.$author->name;
        }

        return view('posts',[
            'title'=>'All Posts '.$title,
            'active' =>'all posts',
            'posts'=>Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString()
        ]);
    }
}
