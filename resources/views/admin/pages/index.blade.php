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
                <li class="breadcrumb-item active">Pages</li>
            </ol>
            <a href="{{adminLocaleLink('/pages/create')}}" role="button" class="btn btn-info mb-3">Create Page</a>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            Pages Controller
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Page Name</th>
                    <th width="280px">Action</th>
                </tr>
                @if(isset($pages) && count($pages) > 0)
                    @foreach($pages as $page)
                        <tr>
                            <td>{{$page->id}}</td>
                            <td>{{$page->pagename}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{adminLocaleLink('/pages/'.$page->id)}}">Show</a>
                                <a class="btn btn-warning"
                                   href="{{adminLocaleLink('/pages/'.$page->id.'/edit')}}">Edit</a>
                                {{Form::open(['url'=>adminLocaleLink('/pages/'.$page->id),'method'=>'delete'])}}
                                {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                {{Form::close()}}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>
    </div>
@endsection
