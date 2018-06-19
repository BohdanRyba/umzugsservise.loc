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
                <li class="breadcrumb-item active">Categories</li>
            </ol>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($postCategories as $category)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
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
                        </td>
                    </tr>
                @endforeach
            </table>
            {!! $postCategories->links() !!}
        </div>
    </div>
@endsection
