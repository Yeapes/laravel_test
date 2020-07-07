@extends('admin.layouts.master')
@section('content')
<div class="row content registration-form">
    <div class="col-12 pl-0 pr-0">
        <div class="form-group">
            <div class="col-sm-12">
                <h4 class="text-center font-weight-bold font-italic mt-3">Add Post</h4>
            </div>
        </div>
    <form method="POST" action="{{route('save-video')}}" enctype="multipart/form-data" class="form-inline">
            @csrf
            <div class="form-group col-12 mb-3">
                <label for="title" class="col-sm-3 col-form-label text-right">Title</label>
                <input id="title" type="text" class="col-sm-9 form-control @error('title') is-invalid @enderror" name="title" placeholder="title" value="{{ old('title') }}" required  autofocus>
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-12 mb-3">
                <label for="brief" class="col-sm-3 col-form-label text-right">Brief</label>
                <input id="brief" type="text" class="col-sm-9 form-control @error('brief') is-invalid @enderror" name="brief" placeholder="brief" value="{{ old('brief') }}" required autocomplete="brief" autofocus>
                @error('brief')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div> 

            <div class="form-group col-12 mb-3">
                <label for="image" class="col-sm-3 col-form-label text-right">image</label>
                <input id="image" type="file" class="col-sm-9 form-control" name="image" required>
            </div>

            <div class="form-group col-12 mb-3">
                <label for="brief" class="col-sm-3 col-form-label text-right">Youtube iframe Link</label>
                <input id="youtube_link" type="text" class="col-sm-9 form-control @error('youtube_link') is-invalid @enderror" name="youtube_link" placeholder="youtube link" value="{{ old('youtube_link') }}" required autocomplete="brief" autofocus>
                @error('youtube_link')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-12 mb-3">
                <label for="body" class="col-sm-3 col-form-label text-right">Body</label>
                <textarea class="col-sm-9 form-control @error('password') is-invalid @enderror" name="body" id="body" cols="30" rows="5"></textarea>
                @error('body')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-12 mb-3">
                <label for="role" class="col-sm-3 col-form-label text-right">Show Section</label>

                <select name="show_section_id" class="form-control col-sm-9 @error('show_section_id') is-invalid @enderror" id="role">
                    <option value="">Select Section</option>
                    <option value="1">Section 1</option> 
                </select>
                @error('show_section_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div> 
                <div class="form-group col-12 mb-3">
                    <label class="col-sm-3 col-form-label text-right">Video Status</label>
                    <input type="radio" name="is_active" value="1" class="mr-2 @error('show_section_id') is-invalid @enderror" checked/> Publish
                    <input type="radio" name="is_active" value="0" class="mr-2 ml-2 @error('show_section_id') is-invalid @enderror"/> Unpublish 

                    @error('is_active')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div> 
            <div class="form-group col-12 mb-3">
                <label class="col-sm-3"></label>
                <button type="submit" class="col-sm-9 btn btn-block btn-info">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection