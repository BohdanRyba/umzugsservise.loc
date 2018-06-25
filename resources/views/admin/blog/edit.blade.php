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
                    <div class="mt-3">

                    @foreach($post->attachments as $attachment)
                        <img width="100px" src="{{getImgUrl($attachment->filePath)}}" alt="{{$attachment->fileName}}">
                        <br>
                        <p><small>{{$attachment->sizeType}}</small></p>
                    @endforeach
                    </div>
                </div>


                <div class="form-group">
                    <strong>Title:</strong>
                    {{Form::input('text','title',old('title')?old('title'):$post->title,[
                        'class'=>'form-control',
                        'placeholder'=>'Title',
                    ])}}
                </div>

                <div class="form-group">
                    <strong>Description:</strong>
                    {{Form::textarea('description',old('description')?old('description'):$post->description,[
                    'id'=>'description',
                    'style'=>'height:150px;',
                    'class'=>'form-control',
                    'placeholder'=>"Description"
                    ])}}
                </div>

                <div class="form-group">
                    <strong>Content:</strong>
                    {{Form::textarea('content',old('content')?old('content'):$post->content,[
                    'id'=>'content',
                    'style'=>'height:150px;',
                    'class'=>'form-control',
                    'placeholder'=>"Content"
                    ])}}
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
