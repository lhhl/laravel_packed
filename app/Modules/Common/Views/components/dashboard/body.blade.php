<div class="statistic-row">
    <ul>
        @foreach ($metrics as $title => $value)
        <li>
        <span class="state-number newUsers">{{ $value }}</span> {{ $title }} 
        <span class="icon-newuser"></span>
        </li>
        @endforeach
    </ul>
    <div class="clearfix"></div>
</div>
