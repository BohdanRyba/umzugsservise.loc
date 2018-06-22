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
                <li class="breadcrumb-item active"><a href="{{adminLocaleLink('/posts')}}">Posts</a></li>
                <li class="breadcrumb-item active">Edit Posts</li>
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


            <form action="{{ adminLocaleLink('/posts') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Image:</strong>
                        <input type="file" name="post_img" class="form-control">
                    </div>
                    <div class="form-group">
                        <strong>Category:</strong>

                        <select multiple name="categories[]" class="custom-select">
                            @foreach($postCategories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <strong>Locale:</strong>
                        <select name="locale" class="custom-select">
                            @foreach($locales as $key=>$locale)
                                <option value="{{$key}}">{{$locale}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="title" value="{{ old('title') }}"
                                       class="form-control"
                                       placeholder="Title">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Description:</strong>
                                {{Form::textarea('description',old('description'),[
                                'class'=>'form-control',
                                'id'=>'description',
                                'placeholder'=>'Description'
                                ])}}
                                {{--<textarea class="form-control" style="height:150px" name="description"--}}
                                {{--                                          placeholder="Description">{{old('description')}}</textarea>--}}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Content:</strong>
                                {{Form::textarea('content',old('content'),[
                                    'class'=>'form-control',
                                    'id'=>'content',
                                    'placeholder'=>'Content'
                                    ])}}
                            </div>
                        </div>
                    </div>
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

            </form>
        </div>
    </div>

@endsection

@section('scripts')
    @parent
    <script src="{{ asset('admin-assets/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('description');
        CKEDITOR.replace('content');
    </script>
@endsection
