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
                    <h2>{{$post->title}}</h2>
                        <div class="position-relative mb-30">
                        <img src="{{asset('/'.$post->image)}}" alt="news-details" class="single-news"> 
                        </div> 
                        <h2 class="title-semibold-dark size-c30">{{$post->brief}}</h2>
                            {!!$post->body!!}
                            
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