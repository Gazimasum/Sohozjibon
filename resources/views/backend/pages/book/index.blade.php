@extends('backend.layouts.master')
@section('content')

  <div class="main-panel"style="margin:20px;padding:20px;">
    <div class="content-wrapper">
      <div class="card">

        <div class="card-header">
          Manage Books
        </div>

          <div class="card-body">
            @include('backend.partials.messages')
            <div class="table table-responsive">

              <table class="table table-striped table-bordered table-hover" id="myTable">
                  <thead>
                      <tr>
                        <th>Image</td>
                          <th>Books</th>
                          <th>Category</th>
                          <th>Author</th>
                          <th>ISBNN</th>
                          <th>Status</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($books as $b)

                      <tr class="odd gradeX">
                        <td class="center"><img src="{!! asset('images/books/'.$b->image) !!}" style="height:100px;" alt=""></td>
                          <td class="center">{{$b->name}}</td>
                          <td class="center">
                        {{$b->category->name}}
                          </td>
                          <td class="center">{{$b->author->name}}</td>
                          <td class="center">{{$b->isbnn_number}}</td>
                          <td class="center">{{$b->status}}</td>
                          <td class="center">

                          <a href="{!! route('admin.book.edit',$b->id) !!}"><button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
                          <a href="#deleteModal{{ $b->id }}" data-toggle="modal" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</a>
                          </td>
                      </tr>


                      <!-- Delete Modal -->
                      <div class="modal fade" id="deleteModal{{ $b->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="{!! route('admin.book.delete', $b->id) !!}"  method="post">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger"> Delete</button>
                              </form>

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            </div>
                          </div>
                        </div>
                      </div>

                    @endforeach
                  </tbody>
              </table>
              </div>
            <button type="button" class="btn btn-primary">  <a  href="{!! route('admin.book.create') !!}" style="color:white;">Create Book</a></button>

          </div>
      </div>
</div>
</div>


@endsection
