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
                <li class="breadcrumb-item active"><a href="{{adminLocaleLink('/users')}}">Users</a></li>
                <li class="breadcrumb-item active">Edit User {{$user->name}}</li>
            </ol>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            {!! Form::model($user, ['method' => 'PATCH','url' => adminLocaleLink('/users/'.$user->id)]) !!}

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Password:</strong>
                        {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Confirm Password:</strong>
                        {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Role:</strong>
                        {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('footer')

    @include('admin.partials.footer')
@endsection

@section('scripts')
    @parent
    <script src="{{asset('admin-assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendor/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin-assets/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('admin-assets/js/sb-admin.js')}}"></script>
    <script src="{{asset('admin-assets/js/sb-admin-datatables.min.js')}}"></script>
    <script src="{{asset('admin-assets/js/sb-admin-charts.min.js')}}"></script>
@endsection
