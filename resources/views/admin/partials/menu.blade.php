<li class="nav-item"><a href="{{adminLocaleLink($category['route'])}}" class="nav-link">

        <i class="fa fa-fw {{$category['icon']}}"></i>
        <span class="nav-link-text">{{ $category['name'] }}</span>

    </a></li>
@if (count($category['children']) > 0)
    <ul class="sidenav-second-level ml-4" style="list-style: none;">
        @foreach($category['children'] as $category)
            @include('admin.partials.menu', $category)
        @endforeach
    </ul>
@endif
