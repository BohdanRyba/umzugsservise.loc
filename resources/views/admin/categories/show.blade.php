@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
<<<<<<< HEAD
                    <h2> Show Role</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
=======
                    <h2> Show Categories</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
>>>>>>> 4d17b3e870af28adaa2c48cc0897cf6dbda1c51d
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
<<<<<<< HEAD
                    {{ $role->name }}
=======
                    {{ $category->name }}
>>>>>>> 4d17b3e870af28adaa2c48cc0897cf6dbda1c51d
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
<<<<<<< HEAD
                    <strong>Permissions:</strong>
                    @if(!empty($rolePermissions))
                        @foreach($rolePermissions as $v)
                            <label class="label label-success">{{ $v->name }},</label>
                        @endforeach
                    @endif
=======
                    <strong>Status:</strong>
                    {{ $category->status }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Timestamps:</strong>
                    <strong>Created:</strong>{{ $category->created_at }} | <strong>Updated:</strong> {{$category->updated_at}}
>>>>>>> 4d17b3e870af28adaa2c48cc0897cf6dbda1c51d
                </div>
            </div>
        </div>
    </div>
@endsection
