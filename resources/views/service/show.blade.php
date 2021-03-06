@extends('layouts.master')
@section('content')
   <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col-9">
            <div class="card m-b-20">
                <div class="card-body">
                          @include('partials.success')
        @include('partials.error')
      <!--               <h4 class="mt-0 header-title">Textual inputs</h4>
                    <p class="text-muted m-b-30">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.</p> -->
                <form action="{{route('services.update',[$service->id] )}}" method="post">
                     @csrf
                     <input type="hidden" name="_method" value="put">
                      <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">service Name</label>
                        <div class="col-sm-10"><input class="form-control" type="text" value="{{$service->name}}" id="example-text-input" name="name"></div>
                    </div>

                  


                <div class="form-group row"><label for="example-number-input" class="col-sm-2 col-form-label">description</label>
                <div class="col-sm-10"><textarea required class="form-control" rows="5" name="description">{{$service->description }}</textarea></div>
                </div>


            <div class="form-group row m-t-20">
            <div class="col-12 text-right"><button class="btn btn-warning w-md waves-effect waves-light" type="submit">{{ __('Update service') }}</button></div>
        </div>
                                </form>
                                 
                                
                             
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- container-fluid -->
        </div>
        

@endsection