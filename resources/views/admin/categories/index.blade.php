@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
<<<<<<< HEAD
                    <h2>Category Management</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Category</a>
=======
                    <h2>Products</h2>
                </div>
                <div class="pull-right">
                    @can('posts-create')
                        <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Product</a>
                    @endcan
>>>>>>> 4d17b3e870af28adaa2c48cc0897cf6dbda1c51d
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
<<<<<<< HEAD
                <th>Name</th>
=======
                <th>Title</th>
                <th>Status</th>
>>>>>>> 4d17b3e870af28adaa2c48cc0897cf6dbda1c51d
                <th width="280px">Action</th>
            </tr>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $category->name }}</td>
                    <td>
<<<<<<< HEAD
                        <a class="btn btn-info" href="{{ route('categories.show',$category->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>
                        {!! Form::open(['method' => 'DELETE','route' => ['categories.destroy', $category->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
=======
                        <label class="badge
                                @if($category->status == 'processing')
                            badge-warning
                                @elseif($category->status == 'published')
                            badge-success
                                @endif">{{ $category->status }}
                        </label>
                    </td>
                    <td>
                        <form action="{{ route('categories.destroy',$category->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('categories.show',$category->id) }}">Show</a>
                            {{--@can('posts-edit')--}}
                                <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>
                            {{--@endcan--}}


                            @csrf
                            @method('DELETE')
                            {{--                            @can('categories-delete')--}}
                            <button type="submit" class="btn btn-danger">Delete</button>
                            {{--@endcan--}}
                        </form>
>>>>>>> 4d17b3e870af28adaa2c48cc0897cf6dbda1c51d
                    </td>
                </tr>
            @endforeach
        </table>
<<<<<<< HEAD
=======


        {!! $categories->links() !!}
>>>>>>> 4d17b3e870af28adaa2c48cc0897cf6dbda1c51d
    </div>
@endsection
