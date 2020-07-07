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
        <th scope="col">Body</th>
        <th scope="col">Section</th>
        <th scope="col">Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
                <th>1</th>
                <td>{{$post->title}}</td>
                <td>{{$post->brief}}</td>
            <td><img width="100" height="100" src="{{asset('/'.$post->image)}}" alt="image"></td>
                <td>{{$post->body}}</td>
                <td>{{$post->show_section_id == 2 ? 'Section 2': ''}}</td>
                <td>{{$post->is_active == 1? 'Published': 'Unpublished'}}</td>
            <td><a href="{{route('post-delete',['id' => $post->id])}}" onclick="return confirm('Are Sure To Delete')" class="fas fa-trash text-danger"></a></td> 
           </tr>  
        @endforeach
       
    </tbody>
  </table>    
@endsection