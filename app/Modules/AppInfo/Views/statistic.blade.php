@extends('Common::master')

@section('component')
    @component('Common::components.dashboard.main',
        [
            'title'         =>  $appName . ' Dashboard',
            'subtitle'      =>  'Last Activities Statistic',
            'metrics'       =>  $metrics,
            'backLink'      =>  route($routeName . '_index')
        ]
    )
    @endcomponent
@endsection

@push('page-js')

@endpush

