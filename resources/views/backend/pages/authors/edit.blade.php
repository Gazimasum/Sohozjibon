@extends('backend.layouts.master')
@section('content')

  <div class="main-panel"style="margin:20px;padding:20px;">
    <div class="content-wrapper">
      <div class="card">

        <div class="card-header">
          Edit Author
        </div>

          <div class="card-body">
            <form action="{{ route('admin.author.update' ,$author->id)}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              @include('backend.partials.messages')

        <div class="form-group">
        <label>Author Name</label>
        <input class="form-control" type="text" name="name" value="{{$author->name}}" required />
        </div>

        <button type="submit" name="update" class="btn btn-info">Update </button>

              </form>

          </div>
      </div>
</div>
</div>


@endsection
