@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Add New Post</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
                </div>
            </div>
        </div>


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


        <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#image" role="tab">Image</a>
                </li>
                @foreach($locales as $key => $locale)
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#{{$key}}" role="tab">{{$locale}}</a>
                    </li>
                @endforeach
                <li class="nav-item">
                    <a class="nav-link  " data-toggle="tab" href="#options" role="tab">Options</a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="image" role="tabpanel">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="file" name="post_img" class="form-control">
                        </div>
                    </div>
                </div>
                @foreach($locales as $key => $locale)
                    <div class="tab-pane" id="{{$key}}" role="tabpanel">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="{{$key}}-title" value="{{ old($key.'-title') }}"
                                           class="form-control"
                                           placeholder="Title">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Description:</strong>
                                    <textarea class="form-control" style="height:150px" name="{{$key}}-description"
                                              placeholder="Description">{{old($key.'-description')}}</textarea>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Content:</strong>
                                    <textarea class="form-control" style="height:150px" name="{{$key}}-content"
                                              placeholder="Content">{{ old($key.'-content') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
            </div>

        </form>
    </div>
@endsection
