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
                <li class="breadcrumb-item active">Create Category{{$categoru->name}}</li>
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
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#options" role="tab">Options</a>
                    </li>
                    @foreach($locales as $key => $locale)
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#{{$key}}" role="tab">{{$locale}}</a>
                        </li>
                    @endforeach
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="options" role="tabpanel">
                        <div class="col-xs-12 col-sm-12 col-md-12">
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
                        </div>
                    </div>

                    @foreach($locales as $key => $locale)
                        <div class="tab-pane" id="{{$key}}" role="tabpanel">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        <input type="text" name="{{$key}}-name" value="{{ old($key.'-name') }}"
                                               class="form-control"
                                               placeholder="Name">
                                    </div>
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
