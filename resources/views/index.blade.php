@extends('layouts.master')
@section('title')
Laravel || Test
@endsection
            @section('content') 
            @php
                foreach ($data as $key => $value) {
                        $$key = $value;
                    }
            @endphp
            <section class="bg-body section-space-default">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <h1>Section 1</h1>
                            <div class="row">
                                @foreach ($video_feature as $video_feature)
                                    <div class="col-lg-6 col-md-12">
                                        <div class="item-shadow-gray mb-30">
                                            <div class="img-overlay-70"> 
                                                <img src="{{asset('/'.$video_feature->image)}}" alt="news" class="video-feature">
                                                <div class="text-center">
                                                    <a class="play-btn" href="{{route('single-video',['id' =>$video_feature->id ])}}">
                                                        <img src="{{asset('frontend')}}/img/banner/play.png" alt="play" class="img-fluid">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="bg-body item-shadow-gray box-padding20">                                    
                                                <h3 class="title-medium-dark">
                                                    <a href="{{route('single-video',['id' =>$video_feature->id ])}}">{{$video_feature->title}}</a>
                                                </h3>
                                            </div>
                                        </div> 
                                    </div> 
                                @endforeach 

                                <div class="col-lg-6 col-md-12"> 
                                    <div class="row"> 
                                       @foreach ($videos as $video)
                                       <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                        <div class="mt-25">
                                           <div class="item-shadow-gray mb-30">
                                                <div class="img-overlay-70"> 
                                                    <img src="{{asset('/'.$video->image)}}" alt="news" class="post-image">
                                                    <div class="text-center">
                                                        <a class="play-btn" href="{{route('single-video',['id' =>$video->id ])}}">
                                                            <img src="{{asset('frontend')}}/img/banner/play.png" alt="play" class="img-fluid">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="bg-body item-shadow-gray box-padding20">                                    
                                                    <h3 class="title-medium-dark">
                                                        <a href="{{route('single-video',['id' =>$video->id ])}}">{{ $video->title }}</a>
                                                    </h3>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                       @endforeach
                                </div>
                               </div> 
                            </div> 
                        </div>
                        <div class="ne-sidebar sidebar-break-md col-lg-4 col-md-12">
                            <div class="sidebar-box">
                                <h1>Section 2</h1> 
                                <div class="row">
                                    @foreach ($post_feature as $post_feature)
                                        <div class="col-lg-12 col-md-12"> 
                                            <div class="img-overlay-70 img-scale-animate mb-30">
                                                <div class="mask-content-sm">                                    
                                                    <h3 class="title-medium-light">
                                                        <a href="{{route('single-post',['id' => $post_feature->id])}}">{{$post_feature->title}}</a>
                                                    </h3>
                                                </div>
                                                <img src="{{asset('/'.$post_feature->image)}}" alt="news" class="post-feature">
                                                
                                            </div>
                                            <h3>{{$post_feature->brief}}</h3> 
                                        </div>
                                    @endforeach 
                                </div>
                                <div class="row">  
                                    @foreach ($posts as $post)
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="mt-25">
                                            <a href="{{route('single-post',['id' => $post->id])}}" class="img-opacity-hover recent-News-img">
                                                    <img src="{{asset('/'.$post->image)}}" alt="ad" class="post-image mb-10 width-100">
                                                </a>
                                                <h3 class="title-medium-dark size-md mb-none">
                                                <a href="{{route('single-post',['id' => $post->id])}}">{{$post->title}}</a>
                                                </h3>
                                            </div>
                                        </div> 
                                    @endforeach 
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </section> 
 @endsection  