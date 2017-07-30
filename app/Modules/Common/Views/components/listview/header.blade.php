<div class="card-title">{{ $title }}
<div class="icon-functions">
    @foreach ($controls as $control)
        <a href="{{ route($routeName . '_create') }}" title="{{ $control['title'] }}">
            <span class="icon-{{ $control['title'] }}"></span>
        </a>
    @endforeach
</div>
</div>
{{--
<div class="m-input-form form-search">
    <div class="form-group">
        <div class="with-label">
            <label class="">Search</label> <input type="text" placeholder="Typing something ..." class="search">
        </div>
    </div>
</div>
--}}
