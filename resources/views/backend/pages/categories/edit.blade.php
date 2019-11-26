@extends('backend.layouts.master')
@section('content')

  <div class="main-panel"style="margin:20px;padding:20px;">
    <div class="content-wrapper">
      <div class="card">

        <div class="card-header">
          Edit category
        </div>

          <div class="card-body">
            <form action="{{ route('admin.category.update' ,$category->id)}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              @include('backend.partials.messages')

        <div class="form-group">
        <label>Category Name</label>
        <input class="form-control" type="text" name="name" value="{{$category->name}}" required />
        </div>
        <div class="form-group">
        <label>Status</label>
        @if($category->status==1)
         <div class="radio">
        <label>
        <input type="radio" name="status" id="status" value="1" checked="checked">Active
        </label>
        </div>
        <div class="radio">
        <label>
        <input type="radio" name="status" id="status" value="0">Inactive
        </label>
        </div>
      @else
        <div class="radio">
        <label>
        <input type="radio" name="status" id="status" value="0" checked="checked">Inactive
        </label>
        </div>
         <div class="radio">
        <label>
        <input type="radio" name="status" id="status" value="1">Active
        </label>
        </div
      @endif
        </div>

        <button type="submit" name="update" class="btn btn-info">Update </button>

                                            </form>

          </div>
      </div>
</div>
</div>


@endsection
