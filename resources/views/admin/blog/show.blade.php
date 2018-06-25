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
            <div class="col-xs-12 col-sm-12 col-md-12 ">
                <div class="form-group">
                    <strong>Title:</strong>
                    {{ $post->title }}
                </div>
            </div>
            <strong class="mt-3">Images:</strong>
            @foreach($post->attachments as $img)
                <div>
                    <img width="{{$img->fileWidth}}"
                         src="{{getImgUrl($img->filePath)}}" alt="{{$img->fileName}}">
                    <strong><p>{{$img->fileName}}</p></strong>
                    <small><p>Width:{{$img->fileWidth}} | Height:{{$img->fileHeight}}</p></small>
                </div>
            @endforeach
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Description:</strong><br>
                    {!!   $post->description !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <strong>Content:</strong><br>
                    {!! $post->content  !!}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
                <div class="form-group">
                    <small><strong>Timestamps:</strong><br>
                        <strong>Created:</strong>{{ $post->created_at }} |
                        <strong>Updated:</strong> {{$post->updated_at}}
                        <br><strong>User:{{ $post->user->name }}</strong></small>
                </div>
            </div>
        </div>
    </div>
@endsection
