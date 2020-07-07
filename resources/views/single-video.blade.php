@extends('layouts.master')
@section('title')
    Laravel | Single Post
@endsection
@section('content')
    <!-- News Details Page Area Start Here -->
    <section class="bg-body section-space-less30">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 col-md-12 mb-30">
                    <div class="news-details-layout1">
                    <h2>{{$video->title}}</h2>
                        <div class="position-relative mb-30">
                        {{-- <img src="{{asset('/'.$video->image)}}" alt="news-details" class="img-fluid">  --}}
                        {!!$video->youtube_link!!}
                        </div> 
                        <h2 class="title-semibold-dark size-c30">{{$video->brief}}</h2>
                            {!!$video->body!!}
                            
                        <div class="post-share-area mb-40 item-shadow-1">
                            <p>You can share this post!</p> 
                            {{-- Use Third Party Share Widget --}}
                        <div class="addthis_inline_share_toolbox"></div> 
                             
                        </div> 
                    </div>
                </div> 
            </div>
        </div>
    </section>
    <!-- News Details Page Area End Here -->
@endsection