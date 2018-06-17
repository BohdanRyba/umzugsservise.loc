@extends('layouts.app ')
@section('header')
    @include('partials.header')
@endsection
@section('content')
    <div class="section-break item-blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="break-menu">
                        <a class="back" href="{{route('home')}}">Главная </a><span>|</span>
                        <a class="back" href="{{route('blog.index')}}">Блог </a><span>|</span>
                        <p>{{$post->title}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-descript-article">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title">
                        <h2>{{$post->title}}</h2>
                        <div class="icon">
                            <div class="calendar">
                                <p>{{$post->updated_at}}</p>
                            </div>
                            <div class="section">
                                @foreach($post->categories as $category)
                                    <a href="{{route('blog.index')}}">{{$category->name}}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="foto">
                            <img src="http://umzugsservise.loc/{{ $post->attachments->filePath}}"
                                 alt="{{$post->attachments->fileName}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-constructor">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="constructor">
                        {{$post->content}}
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="share">
                        <p>Поделиться:</p>
                        <div class="pluso" data-background="#ebebeb"
                             data-options="medium,round,line,horizontal,counter,theme=04"
                             data-services="twitter,facebook,google,linkedin,pinterest"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{--<div class="section-helpful-information articleBlog">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-sm-12">--}}
    {{--<div class="title">--}}
    {{--<h2>Похожие статьи</h2>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col-sm-4">--}}
    {{--<div class="relocation repeat-col useful-blog">--}}
    {{--<div class="foto-relocation">--}}
    {{--<a href="#">--}}
    {{--<img src="img/work/block5/foto1.png" alt="">--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="descript">--}}
    {{--<a href="#">Длинное название статьи о том, что надо знать любому человеку для успешного--}}
    {{--переезда</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-sm-4">--}}
    {{--<div class="relocation repeat-col useful-blog">--}}
    {{--<div class="foto-relocation">--}}
    {{--<a href="#">--}}
    {{--<img src="img/work/block5/foto2.png" alt="">--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="descript">--}}
    {{--<a href="#">Длинное название статьи о том, что надо знать любому человеку для успешного--}}
    {{--переезда</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="col-sm-4">--}}
    {{--<div class="relocation repeat-col useful-blog">--}}
    {{--<div class="foto-relocation">--}}
    {{--<a href="#">--}}
    {{--<img src="img/work/block5/foto3.png" alt="">--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="descript">--}}
    {{--<a href="#">Длинное название статьи о том, что надо знать любому человеку для успешного--}}
    {{--переезда</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

@endsection

@section('scripts')
    @parent
    <script type="text/javascript" src="{{asset('front/js/blog.js')}}"></script>
@endsection
