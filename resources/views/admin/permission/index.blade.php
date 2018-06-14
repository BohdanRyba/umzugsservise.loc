@extends('admin.layouts.app')

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Role Management</h2>
            </div>
            <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('perms.create') }}"> Create New Role</a>
            </div>
        </div>
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($permissions as $key => $perm)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $perm->name }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('roles.show',$perm->id) }}">Show</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['perms.destroy', $perm->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    </div>
@endsection
