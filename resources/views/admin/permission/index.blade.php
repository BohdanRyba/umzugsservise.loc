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
                <li class="breadcrumb-item active">Permisions</li>
            </ol>
            <a href="{{adminLocaleLink('/perms/create')}}" role="button" class="btn btn-info mb-3">Create</a>

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
                            <a class="btn btn-info" href="{{ adminLocaleLink('/perms/'.$perm->id) }}">Show</a>
                            {!! Form::open(['method' => 'DELETE','url' =>adminLocaleLink('/perms/'.$perm->id),'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
