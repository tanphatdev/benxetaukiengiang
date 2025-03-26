<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function manager (Request $request){
        $page = $request->query('page', 1);
        $paginator = Post::orderBy("created_at", "desc")
        ->paginate($perPage = 5, $columns = ['*'], $pageName = 'page', $page);
        $posts = $paginator->items();
        $page = $paginator->currentPage();
        $lastPage = $paginator->lastPage();

        return view('admin.posts.manager', [
            'posts' => $posts,
            'page' => $page,
            'lastPage' => $lastPage,
        ]);
    }

    public function showCreate(Request $request){
        return view('admin.posts.create');
    }

    public function create(Request $request) {
        $validator = Validator::make(
            $request->all(), 
            [
                'title' => ['required', 'max:255'],
                'sub_content' => ['required'], 
                'content' => ['required'], 
            ], 
            $messages = [
                'title.required' => 'Tiêu đề bài viết là bắt buộc', 
                'sub_content.required' => 'Tóm tắt bài viết là bắt buộc',
                'content.required' => 'Nội dung bài viết là bắt buộc',
            ]
        );

        if ($validator->fails()) {
            return redirect('/manager/posts/create')
                    ->withErrors($validator)
                    ->withInput();
        }

        $data = $request->all();

        Post::create([
            'title' => $data['title'],
            'image' => $data['image'],
            'sub_content' => $data['sub_content'],
            'content' => $data['content'],
        ]);

        return redirect('/manager/posts');
    }

    public function showUpdate($id){
        $post = Post::find($id);
        return view('admin.posts.update')->with('post', $post);
    }

    public function update(Request $request) {
        $validator = Validator::make(
            $request->all(), 
            [
                'title' => ['required', 'max:255'],
                'image' => ['required'],
                'sub_content' => ['required'], 
                'content' => ['required'], 
            ], 
            $messages = [
                'title.required' => 'Tiêu đề bài viết là bắt buộc', 
                'image.required' => 'Ảnh bài viết là bắt buộc', 
                'sub_content.required' => 'Tóm tắt bài viết là bắt buộc',
                'content.required' => 'Nội dung bài viết là bắt buộc',
            ]
        );

        if ($validator->fails()) {
            return redirect('/manager/posts/update')
                    ->withErrors($validator)
                    ->withInput();
        }

        $data = $request->all();

        Post::where('id', $data['id'])->update([
            'title' => $data['title'],
            'image' => $data['image'],
            'sub_content' => $data['sub_content'],
            'content' => $data['content'],
        ]);

        return redirect('/manager/posts');
    }

    public function delete ($id){
        $post = Post::find($id);
        $post->delete();
        return redirect('/manager/posts');
    }
}
