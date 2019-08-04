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
                                    <h4 class="mt-0 header-title">All sparepart stores</h4>
                                    <p class="text-muted m-b-30">
                                        &nbsp;
                                    </p>
                                    @if($spareparts->isEmpty())
                                    <p class="alert alert-info">No. of spareparts found: 0</p>
                                    @else
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>address</th>
                                                <th>Telephone</th>
                                                <th>Description</th>
                                                <th>created on</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($spareparts as $sparepart)
                                            <tr>
                                                <td>{{$sparepart->name}}</td>
                                                <td>{{$sparepart->address}}</td>
                                                <td>{{$sparepart->phone}}</td>
                                                <td>{{$sparepart->description}}</td>
                                                <td>{{$sparepart->created_at->diffForHumans()}}</td>
                                                             <td>
                                                    <a href="{{route('spareparts.show', [$sparepart->id])}}" class="btn btn-success">show</a>
                                                    <a href="{{route('spareparts.edit', [$sparepart->id])}}" class="btn btn-info">edit</a>
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
<form action="{{route('spareparts.destroy', [$sparepart->id])}}" method="post" style="display:none;" id="delete-form">
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