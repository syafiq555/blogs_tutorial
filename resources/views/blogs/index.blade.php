@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">List of blogs</h5>
        <hr>
        <div class="mb-3">
          <a href="{{ route('blogs.create') }}">
            <button class="btn btn-primary">Create New</button>  
          </a>
        </div>
        <table class="table table-striped table-hover table-bordered">
          <tr>
            <th class="text-center">Name</th>
            <th class="text-center">Body</th>
            <th class="text-center"></th>
          </tr>
          @foreach ($blogs as $blog)
            <tr>
              <td>{{ $blog->title }}</td>
              <td>{{ $blog->body }}</td>
              <td class="text-center">

                <form onsubmit="deleteBlog(event, this)" action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-success">
                    View
                  </a>
                  <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning">
                    Edit
                  </a>
                  <button class="btn btn-danger">Delete</button>  
                </form>  
              </td>
            </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script>
    function deleteBlog(event, form) {
      event.preventDefault()
      const isConfirmed = window.confirm('Are you sure ?')
      if(!isConfirmed) return;
      form.submit()
    }
  </script>
@endpush