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
                    <a href="{{route('admin.dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active"><a href="{{route('users.index')}}">Categories</a></li>
                <li class="breadcrumb-item active">Create Category</li>
            </ol>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form action="{{ route('categories.store') }}" method="post">
            {{csrf_field()}}
            <!-- Tab panes -->
                <div class="form-group">
                    <strong>Status:</strong>
                    <select name="status" class="custom-select">
                        @foreach($statuses as $key=>$status)
                            <option value="{{$key}}">{{$status}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <strong>Alias:</strong>
                    <input type="text" name="alias" value="{{ old($key.'-alias') }}"
                           class="form-control"
                           placeholder="Name">
                </div>

                @foreach($locales as $key => $locale)
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>{{$locale}} Name:</strong>
                                <input type="text" name="{{$key}}-name" value="{{ old($key.'-name') }}"
                                       class="form-control"
                                       placeholder="Name">
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>

        </form>
    </div>
    </div>
@endsection
