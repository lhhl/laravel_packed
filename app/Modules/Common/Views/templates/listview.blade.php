@extends('Common::master')

@section('component')
    @component('Common::components.listview.main',
        [
            'headerCols'    =>  $headerCols,
            'records'       =>  $records,
            'actions'       =>  $data['actions'],
            'controls'      =>  $data['controls'],
            'title'         =>  $data['title'],
            'routeName'     =>  $routeName,
        ]
    )
    @endcomponent
@endsection
