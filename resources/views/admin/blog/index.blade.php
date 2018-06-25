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
                <li class="breadcrumb-item active">Posts</li>
            </ol>
            <a href="{{adminLocaleLink('/posts/create')}}" role="button" class="btn btn-info mb-3">Create</a>

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
                            <td>
                                @if(isset($post->attachments[0]->filePath))
                                    <img width="180px"
                                         src="http://umzugsservise.loc/public/{{ $post->attachments[0]->filePath }}"
                                         alt="{{$post->attachments[0]->fileName}}">
                                @else No img @endif</td>
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
                                <form action="{{ adminLocaleLink('/posts/'.$post->id) }}" method="POST">
                                    <a class="btn btn-info" href="{{ adminLocaleLink('/posts/'.$post->id) }}">Show</a>
                                    @can('posts-edit')
                                        <a class="btn btn-primary"
                                           href="{{ adminLocaleLink('/posts/'.$post->id.'/edit') }}">Edit</a>
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
