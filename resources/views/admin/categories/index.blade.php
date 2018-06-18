@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Category Management</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Category</a>
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
            @foreach ($categories as $category)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('categories.show',$category->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy', $category->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
