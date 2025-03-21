<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostController extends Controller
{
    public function index (){
        $posts = Post::orderBy("created_at","desc")->get();
        return view('customer.posts.index', [ 'posts' => $posts ]);
    }

    public function detail ($id){
        $post = Post::find($id);
        return view('customer.posts.detail')->with('post', $post);
    }

    public function getdonviByBendi(Request $request){}
}
