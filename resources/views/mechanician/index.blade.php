@extends('layouts.master')
@section('content')
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card m-b-20">
                                <div class="card-body">
                                          @include('partials.success')
        @include('partials.error')
                                    <h4 class="mt-0 header-title">All mechanicians</h4>
                                    <p class="text-muted m-b-30">
                                        &nbsp;
                                    </p>
                                    @if($mechanicians->isEmpty())
                                    <p class="alert alert-info">No. of mechanicians found: 0</p>
                                    @else
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>address</th>
                                                <th>Telephone</th>
                                                <th>created on</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($mechanicians as $mechanician)
                                            <tr>
                                                <td>{{$mechanician->names}}</td>
                                                <td>{{$mechanician->email}}</td>
                                                <td>{{$mechanician->address}}</td>
                                                <td>{{$mechanician->phone}}</td>
                                                <td>{{$mechanician->created_at->diffForHumans()}}</td>
                                                <td>{{$mechanician->status ? 'blocked' :'active'}}</td>
                                                             <td>
                                                    <a href="{{route('mechanicians.show', [$mechanician->id])}}" class="btn btn-success">show</a>
                                                    <a href="{{route('mechanicians.edit', [$mechanician->id])}}" class="btn btn-info">edit</a>
<a
 href="#"
  onClick="
    var result = confirm('are you sure you wish to delete this intitution?');
                      if(result)
                      {
                          event.preventDefault();
                          document.getElementById('delete-form').submit();
                      }" class="btn btn-danger">delete
</a>
<form action="{{route('mechanicians.destroy', [$mechanician->id])}}" method="post" style="display:none;" id="delete-form">
    <input type="hidden" name="_method" value="delete">
    {{csrf_field()}}
</form>

                                            </tr>
                                            
                                          @endforeach
                                          
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- container-fluid -->
            </div><!-- content -->
  
@endsection