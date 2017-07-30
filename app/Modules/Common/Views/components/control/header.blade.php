<div class="card-title">{{ $title }}
    <a href="{{ $backLink }}" style="float: right"><<< back to list</a>
</div>
<div class="card-sub-title">
    {{ $subtitle }}
</div>

@if (! empty($errors))
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
