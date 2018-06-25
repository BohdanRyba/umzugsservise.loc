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
                <li class="breadcrumb-item active"><a href="{{adminLocaleLink('/pages')}}">Pages</a></li>
                <li class="breadcrumb-item active">Edit Page {{$page->pagename}}</li>
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

            {{Form::open(['url'=>adminLocaleLink('/pages/'.$page->id),'method'=>'put'])}}
            <form action="{{ adminLocaleLink('/pages/'.$page->pagename) }}" method="post">
                {{csrf_field()}}
                @method('put')
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">
                        <strong>Page:</strong>
                        {{Form::text('pagename',old('pagename')?old('pagename'):$page->pagename,['class'=>'form-control'])}}
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                        {{Form::submit('Submit',['class'=>'btn btn-success'])}}
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
