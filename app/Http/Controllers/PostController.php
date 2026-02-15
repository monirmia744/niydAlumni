<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // লেটেস্ট পোস্টগুলো আগে দেখাবে
        $posts = Post::with('user')->latest()->get();
        return view('admin.post.index', compact('posts'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.post.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id'  => 'required|exists:users,id',
            'title'    => 'required|string|max:255',
            'content'  => 'required',
            'category' => 'nullable|string',
            'image'    => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'status'   => 'required|in:draft,published,archived',
        ]);

        $data = $request->all();

        // ইমেজ আপলোড লজিক
        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/posts'), $imageName);
            $data['image'] = 'uploads/posts/'.$imageName;
        }

        Post::create($data);

        return redirect()->route('admin.post.index')->with('message', 'Post Created Successfully!');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $users = User::all();
        return view('admin.post.edit', compact('post', 'users'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        
        $request->validate([
            'title'    => 'required|string|max:255',
            'content'  => 'required',
            'status'   => 'required|in:draft,published,archived',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // আগের ইমেজ থাকলে ফোল্ডার থেকে ডিলিট করা
            if($post->image && file_exists(public_path($post->image))){
                unlink(public_path($post->image));
            }
            
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/posts'), $imageName);
            $data['image'] = 'uploads/posts/'.$imageName;
        }

        $post->update($data);

        return redirect()->route('admin.post.index')->with('message', 'Post Updated Successfully!');
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);

        // ডাটাবেজ থেকে ডিলিট করার আগে ইমেজ ডিলিট
        if($post->image && file_exists(public_path($post->image))){
            unlink(public_path($post->image));
        }

        $post->delete();

        return back()->with('message', 'Post Deleted Successfully!');
    }
}
