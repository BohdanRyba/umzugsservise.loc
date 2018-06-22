@extends('admin.layouts.app')

@section('navigation')
    @include('admin.partials.nav',$categories)
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{adminLocaleLink('')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active"><a href="{{adminLocaleLink('/categories')}}">Categories</a></li>
                <li class="breadcrumb-item active">Show Category {{$category->name}}</li>
            </ol>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>

                        {{ $category->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">

                        <strong>Status:</strong>
                        {{ $category->status }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Timestamps:</strong>
                        <strong>Created:</strong>{{ $category->created_at }} |
                        <strong>Updated:</strong> {{$category->updated_at}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
