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
                                    <h4 class="mt-0 header-title">All services</h4>
                                    <p class="text-muted m-b-30">
                                        &nbsp;
                                    </p>
                                    @if($services->isEmpty())
                                    <p class="alert alert-info">No. of services found: 0</p>
                                    @else
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>created on</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($services as $service)
                                            <tr>
                                                <td>{{$service->name}}</td>
                                                <td>
                                                    {{ str_limit($service->description, $limit = 70, $end = '...') }}
                                                </td>
                                                <td>{{$service->created_at->diffForHumans()}}</td>
                                                             <td>
                                                    <a href="{{route('services.show', [$service->id])}}" class="btn btn-success">show</a>
                                                    <a href="{{route('services.edit', [$service->id])}}" class="btn btn-info">edit</a>
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
<form action="{{route('services.destroy', [$service->id])}}" method="post" style="display:none;" id="delete-form">
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