@extends('backend.layouts.master')
@section('content')

  <div class="main-panel"style="margin:20px;padding:20px;">
    <div class="content-wrapper">
      <div class="card">

        <div class="card-header">
          Manage Categories
        </div>

          <div class="card-body">
            @include('backend.partials.messages')
            <div class="table table-responsive">

              <table class="table table-striped table-bordered table-hover" id="myTable">
                  <thead>
                      <tr>

                          <th>Category</th>
                          <th>Status</th>
                          <th>Creation Date</th>
                          <th>Updation Date</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as $c)

                      <tr class="odd gradeX">

                          <td class="center">{{$c->name}}</td>
                          <td class="center">
                          @if($c->status==1)
                          <a href="#" class="btn btn-success btn-xs">Active</a>
                          @else
                          <a href="#" class="btn btn-danger btn-xs">Inactive</a>
                          @endif
                          </td>
                          <td class="center">{{$c->created_at}}</td>
                          <td class="center">{{$c->updated_at}}</td>
                          <td class="center">

                          <a href="{!! route('admin.category.edit',$c->id) !!}"><button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
                          <a href="#deleteModal{{ $c->id }}" data-toggle="modal" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</a>
                          </td>
                      </tr>

                      <!-- Delete Modal -->
                      <div class="modal fade" id="deleteModal{{ $c->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Are sure to delete?</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="{!! route('admin.category.delete', $c->id) !!}"  method="post">
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
            <button type="button" class="btn btn-primary">  <a  href="{!! route('admin.categories.create') !!}" style="color:white;">Create Category</a></button>

          </div>
      </div>
</div>
</div>


@endsection
