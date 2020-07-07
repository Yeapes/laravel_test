<?php

namespace App\Http\Controllers;

use App\Post;
use App\Video;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index(){

        $data['posts'] = Post::where('is_active',1)->where('show_section_id',2)->latest()->limit(4)->get();
        $data['post_feature'] = Post::where('is_active',1)->where('show_section_id',2)->limit(1)->get();
 
        $data['videos'] = Video::where('is_active',1)->where('show_section_id',1)->latest()->limit(4)->get();
        $data['video_feature'] = Video::where('is_active',1)->where('show_section_id',1)->limit(1)->get();
        // return $data;

        return view('index',compact('data'));
    }

    //Single Post

    public function singlePost($id){
        $post = Post::find($id);
        // return $post;
        return view('single-post',compact('post'));
    }
    public function singleVideo($id){
        $video = Video::find($id); 
        return view('single-video',compact('video'));
    }
}
