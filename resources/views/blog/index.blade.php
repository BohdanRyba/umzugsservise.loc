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
                                    <li class="active"><a href="{{route('blog.index')}}">Все записи</a></li>
                                @endif
                                <li><a href="{{route('blog.category',$category->alias)}}">{{$category->name}}</a></li>
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
                                                        <p>{{$post->updated_at}}</p>
                                                    </div>
                                                    <div class="right-col">
                                                        <p> {{$post->title}}</p>
                                                    </div>
                                                </div>
                                                <div class="foto">
                                                    <a href="{{route('blog.post',$post->id)}}">
                                                        <img
                                                            src="http://umzugsservise.loc/{{ $post->attachments->filePath}}"
                                                            alt="">
                                                    </a>
                                                </div>

                                                <div class="title-article">
                                                    <a href="/BlogItem.php">{{$post->description}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {{--<div class="col" data-aos="zoom-out" data-aos-delay="100" data-aos-once="true">--}}
                                    {{--<div class="block-article relocation">--}}
                                    {{--<div class="info">--}}
                                    {{--<div class="right-col">--}}
                                    {{--<p>Раздел 1 Очень длинное название первого или второго или еще--}}
                                    {{--другого--}}
                                    {{--раздела</p>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="foto">--}}
                                    {{--<a href="/BlogCity.php">--}}
                                    {{--<img src="{{asset('front')}}/img/blog/block2/foto2.png" alt="">--}}
                                    {{--</a>--}}
                                    {{--</div>--}}

                                    {{--<div class="title-article">--}}
                                    {{--<a href="/BlogCity.php">Длинное название статьи о том, что надо знать--}}
                                    {{--любому--}}
                                    {{--человеку--}}
                                    {{--для успешного переезда</a>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col" data-aos="zoom-out" data-aos-delay="200" data-aos-once="true">--}}
                                    {{--<div class="block-article relocation">--}}
                                    {{--<div class="info">--}}
                                    {{--<div class="right-col">--}}
                                    {{--<p>Раздел 1 Очень длинное название первого или второго или еще--}}
                                    {{--другого--}}
                                    {{--раздела</p>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="foto">--}}
                                    {{--<a href="/BlogCity.php">--}}
                                    {{--<img src="{{asset('front')}}/img/blog/block2/foto3.png" alt="">--}}
                                    {{--</a>--}}
                                    {{--</div>--}}

                                    {{--<div class="title-article">--}}
                                    {{--<a href="/BlogCity.php">Длинное название статьи о том, что надо знать--}}
                                    {{--любому--}}
                                    {{--человеку--}}
                                    {{--для успешного переезда</a>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col" data-aos="zoom-out" data-aos-delay="200" data-aos-once="true">--}}
                                    {{--<div class="block-article">--}}
                                    {{--<div class="info">--}}
                                    {{--<div class="left-col">--}}
                                    {{--<p>дд.мм.гггг</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="right-col">--}}
                                    {{--<p>Раздел 1 Очень длинное название первого или второго или еще--}}
                                    {{--другого--}}
                                    {{--раздела</p>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="foto">--}}
                                    {{--<a href="/BlogItem.php">--}}
                                    {{--<img src="{{asset('front')}}/img/blog/block2/foto4.png" alt="">--}}
                                    {{--</a>--}}
                                    {{--</div>--}}

                                    {{--<div class="title-article">--}}
                                    {{--<a href="/BlogItem.php">Длинное название статьи о том, что надо знать--}}
                                    {{--любому--}}
                                    {{--человеку--}}
                                    {{--для успешного переезда</a>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col" data-aos="zoom-out" data-aos-delay="300" data-aos-once="true">--}}
                                    {{--<div class="block-article relocation">--}}
                                    {{--<div class="info">--}}
                                    {{--<div class="right-col">--}}
                                    {{--<p>Раздел 1 Очень длинное название первого или второго или еще--}}
                                    {{--другого--}}
                                    {{--раздела</p>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="foto">--}}
                                    {{--<a href="/BlogCity.php">--}}
                                    {{--<img src="{{asset('front')}}/img/blog/block2/foto5.png" alt="">--}}
                                    {{--</a>--}}
                                    {{--</div>--}}

                                    {{--<div class="title-article">--}}
                                    {{--<a href="/BlogCity.php">Длинное название статьи о том, что надо знать--}}
                                    {{--любому--}}
                                    {{--человеку--}}
                                    {{--для успешного переезда</a>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col" data-aos="zoom-out" data-aos-delay="300" data-aos-once="true">--}}
                                    {{--<div class="block-article relocation">--}}
                                    {{--<div class="info">--}}
                                    {{--<div class="right-col">--}}
                                    {{--<p>Раздел 1 Очень длинное название первого или второго или еще--}}
                                    {{--другого--}}
                                    {{--раздела</p>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="foto">--}}
                                    {{--<a href="/BlogCity.php">--}}
                                    {{--<img src="{{asset('front')}}/img/blog/block2/foto6.png" alt="">--}}
                                    {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="title-article">--}}
                                    {{--<a href="/BlogCity.php">Длинное название статьи о том, что надо знать--}}
                                    {{--любому--}}
                                    {{--человеку--}}
                                    {{--для успешного переезда</a>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col" data-aos="zoom-out" data-aos-delay="400" data-aos-once="true">--}}
                                    {{--<div class="block-article relocation">--}}
                                    {{--<div class="info">--}}
                                    {{--<div class="right-col">--}}
                                    {{--<p>Раздел 1 Очень длинное название первого или второго или еще--}}
                                    {{--другого--}}
                                    {{--раздела</p>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="foto">--}}
                                    {{--<a href="/BlogCity.php">--}}
                                    {{--<img src="{{asset('front')}}/img/blog/block2/foto7.png" alt="">--}}
                                    {{--</a>--}}
                                    {{--</div>--}}
                                    {{--<div class="title-article">--}}
                                    {{--<a href="/BlogCity.php">Длинное название статьи о том, что надо знать--}}
                                    {{--любому--}}
                                    {{--человеку--}}
                                    {{--для успешного переезда</a>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="col" data-aos="zoom-out" data-aos-delay="400" data-aos-once="true">--}}
                                    {{--<div class="block-article relocation">--}}
                                    {{--<div class="info">--}}
                                    {{--<div class="right-col">--}}
                                    {{--<p>Раздел 1 Очень длинное название первого или второго или еще--}}
                                    {{--другого--}}
                                    {{--раздела</p>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="foto">--}}
                                    {{--<a href="/BlogCity.php">--}}
                                    {{--<img src="{{asset('front')}}/img/blog/block2/foto8.png" alt="">--}}
                                    {{--</a>--}}
                                    {{--</div>--}}

                                    {{--<div class="title-article">--}}
                                    {{--<a href="/BlogCity.php">Длинное название статьи о том, что надо знать--}}
                                    {{--любому--}}
                                    {{--человеку--}}
                                    {{--для успешного переезда</a>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                            <div class="blog-content">Lorem ipsum</div>
                            <div class="blog-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Laudantium,
                                inventore quo ducimus
                                voluptate sequi, reprehenderit, ipsa qu
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
                    <div class="pagination">
                        {{--{{$posts->links()}}--}}
                        {{--<a class="arrow-left" href="#"></a>--}}
                        {{--<a class="active number" href="#">1</a>--}}
                        {{--<a class="number" href="#">2</a>--}}
                        {{--<a class="number" href="#">3</a>--}}
                        {{--<a class="more" href="#">...</a>--}}
                        {{--<a class="number" href="#">7</a>--}}
                        {{--<a class="number" href="#">8</a>--}}
                        {{--<a class="arrow-right" href="#"></a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    <script type="text/javascript" src="{{asset('front/js/blog.js')}}"></script>
@endsection
