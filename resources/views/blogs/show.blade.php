@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Edit Post</h5>
        <hr>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text">Title</span>
          </div>
          <input disabled value="{{ $blog->title }}" name="title" type="text" class="form-control" placeholder="Blog title">
        </div>
        <div class="input-group mb-3">
          <label for="body">Body</label>
          <div class="input-group">
            <textarea
              disabled
              placeholder="What are you thinking today ?"
              class="form-control"
              name="body"
              id="body"
              cols="30"
              rows="10"
            >{{ $blog->body }}</textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection