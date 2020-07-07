@extends('admin.layouts.master')
@section('content')
@include('admin.includes.alert')
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">SL</th>
        <th scope="col">Title</th>
        <th scope="col">Brief</th>
        <th scope="col">Image</th>
        <th scope="col">youtube link</th>
        <th scope="col">Body</th>
        <th scope="col">Section</th>
        <th scope="col">Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @php
            $i = 1;
        @endphp
        @foreach ($videos as $video)
            <tr>
            <th>{{$i++}}</th>
                <td>{{$video->title}}</td>
                <td>{{$video->brief}}</td>
            <td><img width="100" height="100" src="{{asset('/'.$video->image)}}" alt="image"></td>
                <td>{{$video->youtube_link}}</td>
                <td>{{$video->body}}</td>
                <td>{{$video->show_section_id == 1 ? 'Section 1': ''}}</td>
                <td>{{$video->is_active == 1? 'Published': 'Unpublished'}}</td>
            <td><a href="{{route('video-delete',['id' => $video->id])}}" onclick="return confirm('Are Sure To Delete')" class="fas fa-trash text-danger"></a></td> 
           </tr>  
        @endforeach
       
    </tbody>
  </table>    
@endsection