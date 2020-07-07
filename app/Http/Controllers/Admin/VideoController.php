<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    //

    public function addVideo(){

        return view('admin.content.add-video');
    }

    public function saveVideo(Request $request){
        $this->validate($request,[
            'title' => 'required|unique:videos',
            'brief' => 'required',
            'image' => 'required',
            'youtube_link' => 'required',
            'body' => 'required',
            'show_section_id' => 'required',
            'is_active' => 'required'
        ]);
        $file = $request->file('image');
        $imageName = $file->getClientOriginalName();
        $directory = 'admin/uploads/video/';
        $imageUrl = $directory.$imageName;
        $file->move($directory,$imageUrl); 

        $video = new Video();
        $video->title = $request->title;
        $video->brief = $request->brief;
        $video->image = $imageUrl;
        $video->youtube_link = $request->youtube_link;
        $video->body = "<p>$request->body</p>";
        $video->show_section_id = $request->show_section_id;
        $video->is_active = $request->is_active;
        $video->save();  

        return back()->with('message','Video Save Successfull');
    }

    public function videoList(){
        $videos = Video::get();
        return view('admin.content.video-list',compact('videos'));
    }

    public function videoDelete($id){
        $video = Video::find($id);
        
        if(unlink($video->image)){
            $video->delete();
            return back()->with('error_message','Video Deleted');
        }
    }
}
