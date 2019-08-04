@extends('layouts.master')
@section('title', 'Dashboard')
@section('content')
   <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                <div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <h4 class="page-title">Dashboard</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Welcome to Smart Garage Support Dashboard</li>
            </ol>
            <div class="state-information d-none d-sm-block">

              
            </div>
        </div>
    </div>
</div>
                <div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon"><i class="mdi mdi-account-outline float-right"></i></div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3">Mechanicians</h6>
                    <h4 class="mb-4">{{count($mechanicians)}}</h4><span class="ml-2"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon"><i class="fas fa-university float-right"></i></div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3">Garages</h6>
                    <h4 class="mb-4">{{count($garages)}}</h4><span class="ml-2"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon"><i class="mdi mdi-library-books  float-right"></i></div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3">Spareparts Store</h6>
                    <h4 class="mb-4">{{count($spareparts)}}</h4><span class="ml-2"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary">
            <div class="card-body mini-stat-img">
                <div class="mini-stat-icon"><i class="ion-android-book float-right"></i></div>
                <div class="text-white">
                    <h6 class="text-uppercase mb-3">Mechanician Specialities</h6>
                    <h4 class="mb-4">{{count($specialities)}}</h4><span class="ml-2"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
        <div class="col-xl-6">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">{{ $chart1->options['chart_title'] }}</h4>

                        <div class="dashboard-charts morris-charts">
                                {!! $chart1->renderHtml() !!}
                        </div>
                    </div>
                </div>
            </div>
        <div class="col-xl-6">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">{{ $chart2->options['chart_title'] }}</h4>

                        <div class="dashboard-charts morris-charts">
                                {!! $chart2->renderHtml() !!}
                        </div>
                    </div>
                </div>
            </div>

</div>
{{--  --}}

{{--  --}}


                </div>
                </div>
                </div>
                {!! $chart1->renderChartJsLibrary() !!}
{!! $chart1->renderJs() !!}
                {!! $chart2->renderChartJsLibrary() !!}
{!! $chart2->renderJs() !!}
                @endsection