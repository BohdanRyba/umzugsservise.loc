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
                    <a href="{{route('admin.dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Posts</li>
            </ol>
            <a href="{{route('posts.create')}}" role="button" class="btn btn-info mb-3">Create</a>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif


            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Imaqe</th>
                    <th>User</th>
                    <th>Status</th>
                    <th width="280px">Action</th>
                </tr>
                @if(count($posts) > 0)
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $post->title }}</td>
                            <td><img width="180px" src="http://umzugsservise.loc/{{ $post->attachments->filePath }}"
                                     alt="{{$post->attachments->fileName}}"></td>
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
                @endif
            </table>


            {!! $posts->links() !!}
        </div>
    </div>
@endsection
