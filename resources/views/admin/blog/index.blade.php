@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Products</h2>
                </div>
                <div class="pull-right">
                    @can('posts-create')
                        <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Product</a>
                    @endcan
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
                <th>Title</th>
                <th>User</th>
                <th>Status</th>
                <th width="280px">Action</th>
            </tr>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td><label class="badge
                                @if($post->status == 'processing')
                                badge-warning
                                @elseif($post->status == 'published')
                                badge-success
                                @endif">{{ $post->status }}
                        </label>
                    </td>
                    <td>
                        <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                            <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>
                            @can('posts-edit')
                                <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                            @endcan


                            @csrf
                            @method('DELETE')
                            @can('posts-delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            @endcan
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>


        {!! $posts->links() !!}
    </div>
@endsection
