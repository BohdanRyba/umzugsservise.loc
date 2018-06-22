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
                <li class="breadcrumb-item active">Show User {{$user->name}}</li>
            </ol>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $user->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {{ $user->email }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Roles:</strong>
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                                <label class="badge badge-success">{{ $v }}</label>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
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
