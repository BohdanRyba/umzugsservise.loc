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
                <li class="breadcrumb-item active">Edit Post {{$post->name}}</li>
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


            <form action="{{ adminLocaleLink('/posts/'.$post->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="post_img" class="form-control">
                </div>


                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text"name="title" value="{{old('title')?old('title'):$post->title}}"
                           class="form-control"
                           placeholder="Title">
                </div>

                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea  id="description"  class="form-control" style="height:150px" name="description"
                              placeholder="Description">{{ old('description')?old('description'):$post->description }}</textarea>
                </div>

                <div class="form-group">
                    <strong>Content:</strong>
                    <textarea  id="content"  class="form-control" style="height:150px" name="content"
                              placeholder="Content">{{ old('content')?old('content'):$post->content }}</textarea>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
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
