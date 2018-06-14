@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Product</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
                </div>
            </div>
        </div>


        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')


            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#image" role="tab">Image</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#germany" role="tab">Germany</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#england" role="tab">England</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#russian" role="tab">Russia</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="image" role="tabpanel">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="file" name="post_img" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="germany" role="tabpanel">


                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="de-title" value="{{ $post->title }}" class="form-control"
                                       placeholder="Title">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Description:</strong>
                                <textarea class="form-control" style="height:150px" name="de-description"
                                          placeholder="Detail">{{ $post->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Content:</strong>
                                <textarea class="form-control" style="height:150px" name="de-content"
                                          placeholder="Detail">{{ $post->content }}</textarea>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="tab-pane" id="england" role="tabpanel">


                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="en-title" value="{{ $post->title }}" class="form-control"
                                       placeholder="Title">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Description:</strong>
                                <textarea class="form-control" style="height:150px" name="en-description"
                                          placeholder="Description">{{ $post->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Content:</strong>
                                <textarea class="form-control" style="height:150px" name="en-content"
                                          placeholder="Content">{{ $post->content }}</textarea>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="tab-pane" id="russian" role="tabpanel">

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="ru-title" value="{{ $post->title }}" class="form-control"
                                       placeholder="Title">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Description:</strong>
                                <textarea class="form-control" style="height:150px" name="ru-description"
                                          placeholder="Description">{{ $post->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Content:</strong>
                                <textarea class="form-control" style="height:150px" name="ru-content"
                                          placeholder="Content">{{ $post->content }}</textarea>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
