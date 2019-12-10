@extends('layouts.app')

@section('content')s
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Create New Blog</h5>
        <hr>
        <form action="{{ route('blogs.store') }}" method="post">
          @csrf
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text">Title</span>
            </div>
            <input name="title" type="text" class="form-control" placeholder="Blog title">
            @error('title')
              <span class="text-danger">This is required and must not be more than 255</span>
            @enderror
          </div>
          <div class="input-group mb-3">
            <label for="body">Body</label>
            <div class="input-group">
              <textarea placeholder="What are you thinking today ?" class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
              @error('body') <span class="text-danger">This is required</span> @enderror
          </div>
          </div>
          <div class="input-group">
            <input type="submit" value="Submit" class="btn btn-success" />
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
