@extends('Common::templates.listview')

@php($data = [
    'title'         =>      'App Info',
    'actions'       =>  [
        [
            'title' =>  'edit',
            'link'  =>  'edit'
        ],
        [
            'title' =>  'delete',
            'link'  =>  'destroy'
        ],
        [
            'title' =>  'statistic',
            'link'  =>  'statistic'
        ],
        [
            'title'     =>  'forward',
            'link'      =>  'forward',
            'target'    =>  '_blank'
        ],
        [
            'title'     =>  'Info',
            'link'      =>  'show',
            'target'    =>  '_blank'
        ],
    ],
    'controls'      =>  [
        [
            'title' =>  'create',
            'link'  =>  'create'
        ],
    ],
])

@push('page-js')

@endpush
