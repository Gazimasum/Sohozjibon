@extends('backend.layouts.master')
@section('content')

  <div class="main-panel"style="margin:20px;padding:20px;">
    <div class="content-wrapper">
      <div class="card">

        <div class="card-header">
          Edit category
        </div>

          <div class="card-body">
            <form action="{{ route('admin.book.update' ,$book->id)}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              @include('backend.partials.messages')

            <div class="form-group">
              <label>Book Name<span style="color:red;">*</span></label>
              <input class="form-control" type="text" name="name" value="{{$book->name}}" required />
              </div>

              <div class="form-group">
              <label> Category<span style="color:red;">*</span></label>
              <select class="form-control" name="category_id" required="required">
              <option value="{{$book->category_id}}"> {{$book->category->name}}</option>
            @foreach ( $category as $c)
              <option value="{{$c->id}}">{{$c->name}}</option>
              @endforeach
              </select>
              </div>
              <div class="form-group">
              <label> Author<span style="color:red;">*</span></label>
              <select class="form-control" name="author_id" required="required">
              <option value="{{$book->author_id}}"> {{$book->author->name}}</option>
              @foreach ( $author as $a)
              <option value="{{$a->id}}">{{$a->name}}</option>
                 @endforeach
              </select>
              </div>

              <div class="form-group">
              <label>ISBN Number<span style="color:red;">*</span></label>
              <input class="form-control" type="text" name="isbnn_number" value="{{$book->isbnn_number}}"  required="required" />
              <p class="help-block">An ISBN is an International Standard Book Number.ISBN Must be unique</p>
              </div>

              <div class="form-group">
                <label for="image">Book Image <span style="color:red;">*</span></label><br>
                <img src="{!! asset('images/books/'.$book->image) !!}" alt="Book Image" style="height:120px;">
                <input type="file" class="form-control" name="book_image" id="image"  >
              </div>

              <div class="form-group">
              <label>Status</label>
              @if($book->status==1)
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
