@extends('backend.layouts.master')

@section('content')

  <div class="main-panel"style="margin:20px;padding:20px;">
    <div class="content-wrapper">
      <div class="card">

        <div class="card-header">
          Add Book
        </div>
                <div class="card-body">
                @include('backend.partials.messages')

              <form role="form" method="post" action="{!! route('admin.book.store') !!}"  enctype="multipart/form-data">
                @csrf

          <div class="form-group">
          <label>Book Name<span style="color:red;">*</span></label>
          <input class="form-control" type="text" name="name" autocomplete="off"  required value="{{ old('name') }}"  autofocus/>
          </div>

          <div class="form-group">
          <label> Category<span style="color:red;">*</span></label>
          <select class="form-control" name="category_id" required="required" value="{{ old('category_id') }}"  autofocus>
          <option value=""> Select Category</option>

          @foreach($category as $c)

          <option value="{{$c->id}}">{{$c->name}}</option>
        @endforeach
          </select>
          </div>


          <div class="form-group">
          <label> Author<span style="color:red;">*</span></label>
          <select class="form-control" name="author_id" required="required" value="{{ old('author_id') }}"  autofocus>
          <option value=""> Select Author</option>

          @foreach($author as $a)

          <option value="{{$a->id}}">{{$a->name}}</option>
        @endforeach
          </select>
          </div>

          <div class="form-group">
          <label>ISBN Number<span style="color:red;">*</span></label>
          <input class="form-control" type="text" name="isbnn_number"  required="required" autocomplete="off"  value="{{ old('isbnn_number') }}"  autofocus/>
          <p class="help-block">An ISBN is an International Standard Book Number.ISBN Must be unique</p>
          </div>

          <div class="form-group">
            <label for="image">Book Image <span style="color:red;">*</span></label>
            <input type="file" class="form-control" name="book_image" id="image" required="required" >
          </div>

          <div class="form-group">
            <label>Status</label>
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

          </div>


          <button type="submit" name="add" class="btn btn-info">Add </button>

                                              </form>

                                                </div>
                                            </div>
                                      </div>
                                      </div>

  <!-- main-panel ends -->
@endsection
