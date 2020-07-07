<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request; 
class PostController extends Controller
{
    //

    public function addPost(){
        return view('admin.content.add-post');
    }

    public function savePost(Request $request){
        $this->validate($request,[
            'title' => 'required|unique:posts',
            'brief' => 'required',
            'image' => 'required',
            'body' => 'required',
            'show_section_id' => 'required',
            'is_active' => 'required'
        ]);
        $file = $request->file('image');
        $imageName = $file->getClientOriginalName();
        $directory = 'admin/uploads/post/';
        $imageUrl = $directory.$imageName;
        $file->move($directory,$imageUrl); 

        $post = new Post();
        $post->title = $request->title;
        $post->brief = $request->brief;
        $post->image = $imageUrl;
        $post->body = "<p>$request->body</p>";
        $post->show_section_id = $request->show_section_id;
        $post->is_active = $request->is_active;
        $post->save(); 

        return back()->with('message','Post Save Successfull');
 
    }

    public function postList(){
        $posts = Post::get();
        return view('admin.content.post-list',compact('posts'));
    }
 
    public function postDelete($id){
        $post = Post::find($id);

        if(unlink($post->image)){
            $post->delete();
            return back()->with('error_message','Post Deleted');
        }
    }
}
