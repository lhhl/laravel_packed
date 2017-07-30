<table class="m-table col-checkbox show-col-1 show-col-2 show-col-last">
<thead>
    <tr>
        @foreach ($headerCols as $col)
            <td>{{ str_replace('_', ' ', $col) }}</td>
        @endforeach
        @if (empty($headerCols))
            <td>No Data</td>
        @else
            <td>Action</td>
        @endif
    </tr>
</thead>
<tbody class="data-viewer">
    @foreach ($records->toArray() as $record)
        <tr>
            @foreach ($record as $attr)
                <td>{!! castType($attr) !!}</td>
            @endforeach
            <td>
                @foreach ($actions as $action)
                @php($link = route(sprintf('%s_%s', $routeName, $action['link']), ['id' => $record['id']]))
                    <a href="{{ $link }}" title="{{ $action['title'] }}" target="{{ (isset($action['target'])) ? $action['target'] : '_self' }}">{{ $action['title'] }}</a>
                @endforeach
            </td>
        </tr>
    @endforeach
</tbody>
</table>
