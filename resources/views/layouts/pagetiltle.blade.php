<div class="page-nav no-margin row">
    <div class="container">
        <div class="row">
            <h2>{{ ucfirst($page) }}</h2>
            <ul>
                <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                <li> <a href="/{{$page}}"><i class="fas fa-angle-double-right"></i>{{ ucfirst($page) }}</a></li>
                <li> <a href="/{{$page}}/@if(!empty($secondpage)){{ $secondpage }}@endif"><i class="fas fa-angle-double-right"></i>@if(!empty($secondpage))
                    {{ ucfirst($secondpage) }}
                @endif</a></li>
            </ul>
        </div>
    </div>
</div>
