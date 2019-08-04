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
                    <!-- <h4 class="mt-0 header-title">Textual inputs</h4>
                    <p class="text-muted m-b-30">Here are examples of <code class="highlighter-rouge">.form-control</code> applied to each textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code class="highlighter-rouge">type</code>.</p> -->
                <form action="{{route('spareparts.store')}}" method="post">
                     @csrf
                      <div class="form-group row"><label for="example-text-input" class="col-sm-2 col-form-label">sparepart Name</label>
                        <div class="col-sm-10"><input class="form-control" type="text"placeholder="Enter store Name" id="example-text-input" name="name"></div>
                    </div>
                    <div class="form-group row"><label for="example-tel-input" class="col-sm-2 col-form-label">Telephone</label>
                        <div class="col-sm-10">
                        <input class="form-control" type="tel" placeholder="Enter  Telephone Number" id="example-tel-input" name="phone">
                        </div>
                     </div>

                        <div class="form-group row"><label for="example-email-input" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                        <input class="form-control" type="text" placeholder="Enter your address" id="example-email-input" name="address"></div>
                    </div> 

                <div class="form-group row"><label for="example-number-input" class="col-sm-2 col-form-label">description</label>
                <div class="col-sm-10"><textarea required class="form-control" rows="5" name="description"></textarea></div>
                </div>


            <div class="form-group row m-t-20">
            <div class="col-12 text-right"><button class="btn btn-primary w-md waves-effect waves-light" type="submit">{{ __('Add New store') }}</button></div>
        </div>
                                </form>
                                 
                                
                             
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- container-fluid -->
        </div>
        

@endsection