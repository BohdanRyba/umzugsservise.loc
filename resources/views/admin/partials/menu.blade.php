<li class="nav-item"><a href="#" class="nav-link">{{ $project['name'] }}</a></li>
@if (count($project['children']) > 0)
    <ul class="sidenav-second-level ml-4" style="list-style: none;">
        @foreach($project['children'] as $project)
            @include('admin.partials.menu', $project)
        @endforeach
    </ul>
@endif
