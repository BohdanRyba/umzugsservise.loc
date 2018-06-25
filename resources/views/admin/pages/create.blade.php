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
                <li class="breadcrumb-item active">Create Page</li>
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


            <form action="{{ adminLocaleLink('/pages') }}" method="post" >
                {{csrf_field()}}
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">
                        <strong>Page:</strong>
                        {{Form::text('pagename','',['class'=>'form-control'])}}
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
{{--    <script src="{{ asset('admin-assets/vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>--}}
    {{--<script>--}}
        {{--CKEDITOR.replace('description');--}}
        {{--CKEDITOR.replace('content');--}}
    {{--// </script>--}}
@endsection
