@extends('layouts.app ')
@section('header')
    @include('partials.header')
@endsection
@section('content')
    <div class="section-blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="title">
                        <h2>
                            Наш блог
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-records">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="tab-wrapper">
                        <ul class="tab-menu-blog">
                            @foreach($categories as $category)
                                @if ($loop->first)
                                    <li @if(url()->current() == url(localeLink('/blog'))) class="active" @else @endif><a
                                            href="{{localeLink('/blog')}}">Все записи</a></li>
                                @endif
                                <li @if(url()->current() == url(localeLink('/blog/category/'.$category->id))) class="active" @else @endif >
                                    <a href="{{localeLink('/blog/category/'.$category->id)}}">{{$category->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tab-content">
                            <div class="blog-content">
                                <div class="item">
                                    @foreach($posts as $post)
                                        <div class="col" data-aos="zoom-out" data-aos-delay="100" data-aos-once="true">
                                            <div class="block-article">
                                                <div class="info">
                                                    <div class="left-col">
                                                        <p>{{$post->created_at->format('d/m/Y') }}</p>
                                                    </div>
                                                    <div class="right-col">
                                                        <p> {{$post->title}}</p>
                                                    </div>
                                                </div>
                                                <div class="foto">
                                                    <a href="{{localeLink('/blog/'.$post->id)}}">
                                                        <img
                                                            src="{{getImgUrl($post->attachments[2]->filePath)}}"
                                                            alt="{{$post->attachments[2]->fileName}}">
                                                    </a>
                                                </div>

                                                <div class="title-article">
                                                    <a href="{{localeLink('/blog/'.$post->id)}}">{!!  $post->description!!}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-pagination">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    {{$posts->links('partials.paginator')}}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script type="text/javascript" src="{{asset('front/js/blog.js')}}"></script>
@endsection
